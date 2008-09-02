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
 * Visit emphasis
 *
 * Emphasis markup is used to emphasize text inside a paragraph and is
 * rendered, depending on the assigned role, as strong or em tags in HTML.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentDocbookToHtmlEmphasisHandler extends ezcDocumentDocbookToHtmlBaseHandler
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
        if ( $node->hasAttribute( 'role' ) &&
             ( $node->getAttribute( 'role' ) === 'strong' ) )
        {
            $emphasis = $root->ownerDocument->createElement( 'strong' );
        }
        else
        {
            $emphasis = $root->ownerDocument->createElement( 'em' );
        }

        $root->appendChild( $emphasis );
        $converter->visitChildren( $node, $emphasis );
        return $root;
    }
}

?>
