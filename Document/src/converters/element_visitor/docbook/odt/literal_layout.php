<?php
/**
 * File containing the ezcDocumentDocbookToOdtLiteralLayoutHandler class.
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Visit paragraphs.
 *
 * Visit docbook paragraphs and transform them into ODT paragraphs.
 *
 * @package Document
 * @version //autogen//
 */
class ezcDocumentDocbookToOdtLiteralLayoutHandler extends ezcDocumentDocbookToOdtBaseHandler
{
    /**
     * Handle a node
     *
     * Handle / transform a given node, and return the result of the
     * conversion.
     *
     * @param ezcDocumentElementVisitorConverter $converter
     * @param DOMElement $node
     * @param mixed $root
     * @return mixed
     */
    public function handle( ezcDocumentElementVisitorConverter $converter, DOMElement $node, $root )
    {
        // @TODO: Determine style.
        // @TODO: From here on, whitespaces need to be handled explicitly!
        $p = $root->ownerDocument->createElementNS(
            ezcDocumentOdt::NS_ODT_TEXT,
            'p'
        );

        $converter->visitChildren( $node, $p );
        return $root;
    }
}

?>
