<?php
/**
 * File containing the ezcDocumentPdfDriver class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Paragraph renderer
 *
 * Renders a single paragraph including its inline markup.
 *
 * @package Document
 * @access private
 * @version //autogen//
 */
class ezcDocumentPdfParagraphRenderer extends ezcDocumentPdfRenderer
{
    /**
     * Render a single paragraph
     *
     * All markup inside of the given string is considered inline markup (in
     * CSS terms). Inline markup should be given as common docbook inline
     * markup, like <emphasis>.
     *
     * Returns a boolean indicator whether the rendering of the full paragraph
     * in the available space succeeded or not.
     *
     * @param ezcDocumentPdfPage $page 
     * @param ezcDocumentPdfHyphenator $hyphenator 
     * @param ezcDocumentPdfInferencableDomElement $paragraph 
     * @return bool
     */
    public function render( ezcDocumentPdfPage $page, ezcDocumentPdfHyphenator $hyphenator, ezcDocumentPdfInferencableDomElement $paragraph )
    {
        // Calculate paragraph width from page layout settings
        $width = $this->calculateParagraphWidth( $page, $paragraph );

        // Iterate over tokens and try to fit them in the current line, use
        // hyphenator to split words.
        $tokens = $this->tokenize( $paragraph );
        $lines  = $this->fitTokensInLines( $tokens, $hyphenator, $width );

        // Ensure a current rendering position on page
        if ( ( $page->x === null ) ||
             ( $page->y === null ) )
        {
            $space = $page->testFitRectangle( null, null, $width, $tokens[0]['style']['font-size']->value );
            $page->x = $space->x;
            $page->y = $space->y;
        }

        // Grap the maximum available vertical space
        // @TODO: Mind margin and padding
        $space  = $page->testFitRectangle( $page->x, $page->y, $width, null );
        var_dump( $space );

        // Render token, respecting assigned styles
        $spaceWidth     = $this->driver->calculateWordWidth( ' ' );
        $paragraphStyle = $this->styles->inferenceFormattingRules( $paragraph );
        $yPos           = $space->y + $paragraphStyle['margin']->value['top'];
        foreach ( $lines as $nr => $line )
        {
            $lineWidth = 0;
            foreach ( $line['tokens'] as $token )
            {
                $lineWidth += $token['width'];
            }

            switch ( $paragraphStyle['text-align']->value )
            {
                case 'center':
                    $offset     = ( $width - $lineWidth - ( count( $line['tokens'] ) * $spaceWidth ) ) / 2;
                    break;
                case 'right':
                    $offset     = $width - $lineWidth - ( count( $line['tokens'] ) * $spaceWidth );
                    break;
                case 'justify':
                    $offset     = 0;
                    switch ( true )
                    {
                        case $nr === ( count( $lines ) - 1 ):
                            // Just default space width in last line of a
                            // paragraph
                            $spaceWidth = $this->driver->calculateWordWidth( ' ' );
                            break;
                        case count( $line['tokens'] ) <= 1:
                            // Space width is irrelevant, if only one token is
                            // in the line
                            break;
                        default:
                            $spaceWidth = ( $width - $lineWidth ) / ( count( $line['tokens'] ) - 1 );
                    }
                default:
                    $offset     = 0;
            }

            // Default to left alignement
            $xPos = $space->x + $offset;
            foreach ( $line['tokens'] as $token )
            {
                // Apply current styles
                foreach ( $token['style'] as $style => $value )
                {
                    $this->driver->setTextFormatting( $style, $value->value );
                }

                // Render word 
                // @TODO: Align text baseline, if different font sizes are given
                $this->driver->drawWord( $xPos, $yPos, $token['word'] );
                $xPos += $token['width'] + $spaceWidth;
            }

            $yPos += $line['height'];

            // Check if we run out of vertical space
            if ( $yPos > ( $space->y + $space->height ) )
            {
                // @TODO: Handle paragraph splitting, minding orphans and widows.
                return false;
            }
        }

        // Mark used space covored and exit with success return code
        $page->setCovered(
            new ezcDocumentPdfBoundingBox( $space->x, $space->y, $space->width, $yPos - $space->y )
        );
        $page->y = $yPos + $paragraphStyle['margin']->value['bottom'];
        return true;
    }

    /**
     * Calculate paragraph width
     *
     * Calculate the available horizontal space for paragraphs depending on the
     * page layout settings.
     */
    protected function calculateParagraphWidth( ezcDocumentPdfPage $page, ezcDocumentPdfInferencableDomElement $paragraph )
    {
        // Inference page styles
        $rules = $this->styles->inferenceFormattingRules( $paragraph );

        return $page->innerWidth / $rules['text-columns']->value -
            ( $rules['text-column-spacing']->value * ( $rules['text-columns']->value - 1 ) );
    }

    /**
     * Tokenize the input string
     *
     * For proper word wrapping in the paragraph the strng needs to be
     * tokenized, while each token has to maintain its stack of assigned
     * formats.
     *
     * This method should return an array of tokens, also maintaining the
     * included whitespace characters, each associated with its markup
     * elements.
     * 
     * @param ezcDocumentPdfInferencableDomElement $element 
     * @return array
     */
    protected function tokenize( ezcDocumentPdfInferencableDomElement $element )
    {
        $tokens = array();
        $rules  = $this->styles->inferenceFormattingRules( $element );
        foreach ( $element->childNodes as $child )
        {
            switch ( $child->nodeType )
            {
                // case XML_CDATA_SECTION_NODE:
                case XML_TEXT_NODE:
                    $words = preg_split( '(\\s+)', trim( $child->textContent ) );
                    foreach ( $words as $word )
                    {
                        $tokens[] = array(
                            'word'  => $word,
                            'style' => $rules,
                        );
                    }
                    break;

                case XML_ELEMENT_NODE:
                    $tokens = array_merge(
                        $tokens,
                        $this->tokenize( $child )
                    );
                    break;
            }
        }

        return $tokens;
    }

    /**
     * Try to match tokens into lines
     *
     * Try to match tokens into lines of the given width. Returns an array with
     * words for each line. The words might already be split up by the
     * hyphenator.
     * 
     * @param array $tokens 
     * @param ezcDocumentPdfHyphenator $hyphenator 
     * @param float $width 
     * @return array
     */
    protected function fitTokensInLines( array $tokens, ezcDocumentPdfHyphenator $hyphenator, $available )
    {
        $lines    = array( array(
            'tokens' => array(),
            'height' => 0,
        ) );
        $line     = 0;
        $consumed = 0;
        while ( $token = array_shift( $tokens ) )
        {
            // Apply current styles
            foreach ( $token['style'] as $style => $value )
            {
                $this->driver->setTextFormatting( $style, $value->value );
            }
            
            if ( ( $consumed + ( $width = $this->driver->calculateWordWidth( $token['word'] ) ) ) < $available )
            {
                // The word just fits into the current line
                $token['width']           = $width;
                $lines[$line]['tokens'][] = $token;
                $lines[$line]['height']   = max( $lines[$line]['height'], $this->driver->getCurrentLineHeight() );
                $consumed                += $width + $this->driver->calculateWordWidth( ' ' );
                continue;
            }

            // Try to hyphenate the current word
            $hyphens = array_reverse( $hyphenator->splitWord( $token['word'] ) );
            foreach ( $hyphens as $hyphen )
            {
                if ( ( $consumed + ( $width = $this->driver->calculateWordWidth( $hyphen[0] ) ) ) < $available )
                {
                    $second         = $token;
                    $second['word'] = $hyphen[1];
                    array_unshift( $tokens, $second );

                    $token['width']           = $width;
                    $token['word']            = $hyphen[0];
                    $lines[$line]['tokens'][] = $token;
                    $lines[$line]['height']   = max( $lines[$line]['height'], $this->driver->getCurrentLineHeight() );
                    $consumed                += $width + $this->driver->calculateWordWidth( ' ' );
                    continue 2;
                }
            }

            // Word did not even fit into the line hyphenated, switch to next line.
            $token['width'] = $width = $this->driver->calculateWordWidth( $token['word'] );
            $lines[++$line] = array(
                'tokens' => array( $token ),
                'height' => $this->driver->getCurrentLineHeight(),
            );
            $consumed       = $width + $this->driver->calculateWordWidth( ' ' );
        }

        return $lines;
    }
}
?>
