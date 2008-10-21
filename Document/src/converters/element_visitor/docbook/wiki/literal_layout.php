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
 * Visit literallayout elements
 *
 * Literallayout elements are used for code blocks in docbook, where
 * normally some fixed width font is used, but also for poems or simliarly
 * formatted texts. In HTML those are represented by entirely different
 * structures. Code blocks will be transformed into <pre> elements, while
 * poem like texts will be handled by a <p> element, in which each line is
 * seperated by <br> elements.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentDocbookToWikiLiteralLayoutHandler extends ezcDocumentDocbookToWikiBaseHandler
{
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
        if ( !$node->hasAttribute( 'class' ) ||
             ( $node->getAttribute( 'class' ) !== 'Normal' ) )
        {
            $root .= "<code>\n" . $node->textContent . "</code>\n";
        }
        else
        {
            $root .= preg_replace( '(\r\n|\r|\n)', "\\\\\\\\", trim( $node->textContent ) ) . "\n\n";
        }

        return $root;
    }
}

?>
