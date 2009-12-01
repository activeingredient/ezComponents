<?php
/**
 * File containing the ezcDocumentDocbookToOdtCommentHandler class.
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Visit comments.
 *
 * Visit docbook comments and transform them into ODT comments.
 *
 * @package Document
 * @version //autogen//
 * @access private
 */
class ezcDocumentDocbookToOdtCommentHandler extends ezcDocumentDocbookToOdtBaseHandler
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
        // @TODO: Currently an XML comment is generated. Are there other ways 
        // of adding a comment to an ODT?
        $comment = $root->appendChild(
            $root->ownerDocument->createComment(
                $node->textContent
            )
        );

        return $root;
    }
}

?>