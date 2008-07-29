<?php
/**
 * File containing the ezcDocumentXhtmlElementFilter class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Filter, which assigns semantic information just on the base of XHtml element
 * semantics to the tree.
 * 
 * @package Document
 * @version //autogen//
 * @access private
 */
class ezcDocumentXhtmlElementFilter extends ezcDocumentXhtmlBaseFilter
{
    /**
     * List of element filter objects.
     * 
     * @var array
     */
    protected $elementFilter = array();

    /**
     * Constructor
     *
     * Create initial filter array.
     * 
     * @return void
     */
    public function __construct()
    {
        // Special handling required
        //  - object
        //  - table (and childs)
        $this->elementFilter = array(
            // Basic mapping filter
            new ezcDocumentXhtmlElementMappingFilter(),

            // Special filters for more complex elements
            new ezcDocumentXhtmlHeaderElementFilter(),
            new ezcDocumentXhtmlLinkElementFilter(),
            new ezcDocumentXhtmlLiteralElementFilter(),
            new ezcDocumentXhtmlStrongElementFilter(),
            new ezcDocumentXhtmlBlockquoteElementFilter(),
            new ezcDocumentXhtmlEnumeratedElementFilter(),
            new ezcDocumentXhtmlImageElementFilter(),
            new ezcDocumentXhtmlFootnoteElementFilter(),
            new ezcDocumentXhtmlDefinitionListElementFilter(),
            new ezcDocumentXhtmlLineBlockElementFilter(),
            new ezcDocumentXhtmlTableElementFilter(),
            new ezcDocumentXhtmlTableCellElementFilter(),
        );
    }

    /**
     * Add additional element filter
     * 
     * @param ezcDocumentXhtmlElementBaseFilter $filter 
     * @return void
     */
    public function addFilter( ezcDocumentXhtmlElementBaseFilter $filter )
    {
        $this->elementFilter[] = $filter;
    }

    /**
     * Filter XHtml document
     *
     * Filter for the document, which may modify / restructure a document and
     * assign semantic information bits to the elements in the tree.
     * 
     * @param DOMDocument $document 
     * @return DOMDocument
     */
    public function filter( DOMDocument $document )
    {
        $oldXmlErrorHandling = libxml_use_internal_errors( true );
        libxml_clear_errors();

        $this->filterNode( $document->firstChild );

        libxml_clear_errors();
        libxml_use_internal_errors( $oldXmlErrorHandling );
    }

    /**
     * Filter node
     *
     * Depending on the element name, it parents and maybe element attributes
     * semantic information is assigned to nodes.
     * 
     * @param DOMElement $element
     * @return void
     */
    protected function filterNode( DOMElement $element )
    {
        // Check all available filters, if they want to handle the current
        // element and let them handle the element in this case.
        foreach ( $this->elementFilter as $filter )
        {
            if ( $filter->handles( $element ) )
            {
                $filter->filterElement( $element );
            }
        }

        // Recurse into child elements
        //
        // We do the recursion in the reverse order of the elements, so that
        // restructuring of the tree does not affect the nodes, which are yet
        // up for filtering - this might end in errors about missing nodes
        // otherwise.
        for ( $i = ( $element->childNodes->length - 1 ); $i >= 0; --$i )
        {
            $child = $element->childNodes->item( $i );
            if ( $child->nodeType === XML_ELEMENT_NODE )
            {
                $this->filterNode( $child );
            }
        }
    }
}

?>
