<?php
/**
 * File containing the ezcDocumentPdfParagraphRenderer class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Renders an optionally wrapped text box
 *
 * Renders a single text box, like a paragraph, and applies wrapping, if the
 * text box does not fit the current page or column. Orphans and widows are
 * respected during this process.
 *
 * @package Document
 * @access private
 * @version //autogen//
 */
class ezcDocumentPdfWrappingTextBoxRenderer extends ezcDocumentPdfTextBoxRenderer
{
    /**
     * Render a single text box
     *
     * All markup inside of the given string is considered inline markup (in
     * CSS terms). Inline markup should be given as common docbook inline
     * markup, like <emphasis>.
     *
     * Returns a boolean indicator whether the rendering of the full text
     * in the available space succeeded or not.
     *
     * @param ezcDocumentPdfPage $page 
     * @param ezcDocumentPdfHyphenator $hyphenator 
     * @param ezcDocumentPdfTokenizer $tokenizer 
     * @param ezcDocumentPdfInferencableDomElement $text 
     * @param ezcDocumentPdfMainRenderer $mainRenderer 
     * @return bool
     */
    public function render( ezcDocumentPdfPage $page, ezcDocumentPdfHyphenator $hyphenator, ezcDocumentPdfTokenizer $tokenizer, ezcDocumentPdfInferencableDomElement $text, ezcDocumentPdfMainRenderer $mainRenderer )
    {
        // Inference page styles
        $styles = $this->styles->inferenceFormattingRules( $text );
        $width  = $page->innerWidth / $styles['text-columns']->value -
            ( $styles['text-column-spacing']->value * ( $styles['text-columns']->value - 1 ) );

        // Evaluate available space
        if ( ( $space = $this->evaluateAvailableBoundingBox( $page, $styles, $width ) ) === false )
        {
            return false;
        }

        // Iterate over tokens and try to fit them in the current line, use
        // hyphenator to split words.
        $tokens = $this->tokenize( $text, $tokenizer );
        $lines  = $this->fitTokensInLines( $tokens, $hyphenator, $space->width );

        // Transaction wrapping around temporary page creations
        $transaction = $this->driver->startTransaction();

        $lineCount = count( $lines );
        $current   = 0;
        $position  = $space->y;
        $pageNr    = 0;
        $wrap      = false;
        $pages     = array( $pageNr => array(
            'page'  => $page,
            'lines' => array(),
            'space' => $space,
        ) );
        for ( $line = 0; $line < $lineCount; ++$line )
        {
            // Render on current page, of there is still enough space
            if ( ( !$wrap ) &&
                 ( ( $position + $lines[$line]['height'] ) < ( $pages[$pageNr]['space']->y + $pages[$pageNr]['space']->height ) ) )
            {
                ++$current;

                // Check widows, if we are at the last line
                if ( ( $line === ( $lineCount - 1 ) ) &&
                     ( $current < $styles['widows']->value ) &&
                     ( $lineCount >= $styles['widows']->value ) )
                {
                    $difference = $styles['widows']->value - $current;
                    $pages[$pageNr - 1]['lines'] = array_slice( $pages[$pageNr - 1]['lines'], 0, -$difference, true );
                    $pages[$pageNr]['lines'] = array();
                    $line                   -= $difference + 1;
                    $current                 = 0;
                    continue;
                }

                $pages[$pageNr]['lines'][] = array(
                    'position' => $position,
                    'tokens'   => $lines[$line],
                );
                $position += $lines[$line]['height'] * $styles['line-height']->value;
                continue;
            }

            // Shift to next page
            $pages[++$pageNr] = array(
                'page' => $tmpPage = $mainRenderer->getNextRenderingPosition(
                    ( $pWidth = $this->calculateTextWidth( $page, $text ) ) +
                    $styles['text-column-spacing']->value,
                    $pWidth
                ),
                'lines' => array(),
                'space' => $this->evaluateAvailableBoundingBox( $tmpPage, $styles, $width ),
            );
            $position = $pages[$pageNr]['space']->y;
            $current  = 0;
            $wrap     = false;

            // Handle orphans
            if ( ( $line < $styles['orphans']->value ) &&
                 ( $line < $lineCount ) )
            {
                $pages[0]['lines'] = array();
                $line = -1;
                continue;
            }

            --$line;
        }

        $this->driver->revert( $transaction );

        // Render lines
        // @TODO: also render background etc.
        $lineNr = 0;
        foreach ( $pages as $nr => $content )
        {
            if ( $nr > 0 )
            {
                // Get next rendering position
                $page = $mainRenderer->getNextRenderingPosition(
                    ( $pWidth = $this->calculateTextWidth( $page, $text ) ) +
                    $styles['text-column-spacing']->value,
                    $pWidth
                );
            }

            $space = $content['space'];
            foreach ( $content['lines'] as $line )
            {
                $this->renderLine( $line['position'], $lineNr++, $line['tokens'], $space, $styles );
            }
        }

        // Mark used space covered and exit with success return code
        $page->setCovered(
            new ezcDocumentPdfBoundingBox( $space->x, $space->y, $space->width, $position - $space->y )
        );
        $page->y = $position;
        return true;
    }
}
?>
