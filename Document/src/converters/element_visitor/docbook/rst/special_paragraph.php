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
 * Visit special paragraphs
 *
 * Transform the paragraphs with special annotations like <note> and
 * <caution> to paragraphs inside the HTML document with a class
 * representing the meaning of the docbook elements. The mapping which is
 * used inside this method is used throughout the document comoponent and
 * compatible with the RTS mapping.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentDocbookToRstSpecialParagraphHandler extends ezcDocumentDocbookToRstBaseHandler
{
    /**
     * Handled paragraph names / types
     * 
     * @var array
     */
    protected $types = array(
        'note'      => 'note',
        'tip'       => 'notice',
        'warning'   => 'warning',
        'important' => 'attention',
        'caution'   => 'danger',
    );

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
        $type = $this->types[$node->tagName];
        $content = $converter->visitChildren( $node, '' );
        $root .= $this->renderDirective( $type, '', array(), $content );
        return $root;
    }
}

?>
