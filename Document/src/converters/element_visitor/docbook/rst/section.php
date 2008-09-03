<?php

/**
 * File containing the ezcDocumentDocbookElementVisitorConverter class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Visit docbook sections
 *
 * Updates the docbook sections, which give us information about the depth
 * in the document, and may also be reference targets.
 *
 * Also visits title elements, which are commonly the first element in sections
 * and define section titles, which are converted to HTML header elements of
 * the respective level of indentation
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentDocbookToRstSectionHandler extends ezcDocumentDocbookToRstBaseHandler
{
    /**
     * Current level of indentation in the docbook document.
     * 
     * @var int
     */
    protected $level = -1;

    /**
     * Handle a node
     *
     * Handle / transform a given node, and return the result of the
     * conversion.
     * 
     * @param ezcDocumentDocbookElementVisitorConverter $converter 
     * @param DOMElement $node 
     * @param mixed $root 
     * @return mixed
     */
    public function handle( ezcDocumentDocbookElementVisitorConverter $converter, DOMElement $node, $root )
    {
        if ( $node->tagName === 'title' )
        {
            // Get actual title string by recursing into the title node
            $title = trim( $converter->visitChildren( $node, '' ) );

            // Get RST title decoration characters
            if ( !isset( $converter->options->headerTypes[$this->level] ) )
            {
                $converter->triggerError( E_ERROR,
                    "No characters for title of level {$this->level} defined."
                );
                return $root . $title;
            }

            if ( strlen( $marker = $converter->options->headerTypes[$this->level] ) > 1 )
            {
                return $root . sprintf( "\n%s\n%s\n%s\n\n",
                    $marker = str_repeat( $marker[0], strlen( $title ) ),
                    $title,
                    $marker
                );
            }
            else
            {
                return $root . sprintf( "\n%s\n%s\n\n",
                    $title,
                    str_repeat( $marker, strlen( $title ) )
                );
            }
        }
        else
        {
            ++$this->level;

            // Set internal cross reference target if section has an ID assigned
            if ( false && $node->hasAttribute( 'id' ) )
            {
                $target = $root->ownerDocument->createElement( 'a' );
                $target->setAttribute( 'name', $node->getAttribute( 'id' ) );
                $root->appendChild( $target );
            }

            // Recurse
            $root = $converter->visitChildren( $node, $root );

            // Reduce header level back to original state after recursion
            --$this->level;
        }

        return $root;
    }
}

?>
