<?php
/**
 * File containing the ezcDocumentDocbookToOdtSectionHandler class.
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Visit docbook sections
 *
 * Visitor for DocBoo
 *
 * @package Document
 * @version //autogen//
 * @access private
 */
class ezcDocumentDocbookToOdtSectionHandler extends ezcDocumentDocbookToOdtBaseHandler
{
    /**
     * Current section nesting level in the docbook document.
     *
     * @var int
     */
    protected $level = 0;

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
        if ( $node->localName === 'title' )
        {
            $h = $root->appendChild(
                $root->ownerDocument->createElementNS(
                    ezcDocumentOdt::NS_ODT_TEXT,
                    'text:h'
                )
            );
            $h->setAttributeNS(
                ezcDocumentOdt::NS_ODT_TEXT,
                'text:outline-level',
                $this->level
            );

            $this->styler->applyStyles( $node, $h );

            $converter->visitChildren( $node, $h );
        }
        else
        {
            ++$this->level;
            
            // @TODO: Handling of ID and internal ref?
            $converter->visitChildren( $node, $root );

            --$this->level;
        }

        return $root;
    }
}

?>
