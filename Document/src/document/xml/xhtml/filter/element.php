<?php
/**
 * File containing the ezcDocumentXhtmlElementFilter class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Filter, which assigns semantic information just on the base of XHtml element
 * semantics to the tree.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentXhtmlElementFilter extends ezcDocumentXhtmlBaseFilter
{
    /**
     * Mapping of XHtml elements to their semantic meanings.
     * 
     * @var array
     */
    protected $nameMapping = array(
        'abbr'       => 'abbrev',
        'acronym'    => 'acronym',
        'big'        => 'emphasis',
        'blockquote' => 'blockquote',
        'dl'         => 'variablelist',
        'dt'         => 'term',
        'dd'         => 'varlistentry',
        'em'         => 'emphasis',
        'hr'         => 'beginpage',
        'html'       => 'section',
        'i'          => 'emphasis',
        'li'         => 'listitem',
        'ol'         => 'orderedlist',
        'p'          => 'para',
        'q'          => 'blockquote',
        'title'      => 'title',
        'tt'         => 'literal',
        'u'          => 'emphasis',
        'ul'         => 'itemizedlist',
    );

    /**
     * Callbacks for special handlers of XHtml elements.
     * 
     * @var array
     */
    protected $processingCallbacks = array(
        'code'   => 'filterLiteralBlock',
        'pre'    => 'filterLiteralBlock',
        'h1'     => 'filterHeader',
        'h2'     => 'filterHeader',
        'h3'     => 'filterHeader',
        'h4'     => 'filterHeader',
        'h5'     => 'filterHeader',
        'h6'     => 'filterHeader',
        'a'      => 'filterLink',
        'b'      => 'filterStrongEmphasis',
        'strong' => 'filterStrongEmphasis',
        'cite'   => 'filterBlockquoteAnnotation',
    );

    // Special handling required
    //  - img
    //  - object
    //  - strong
    //  - table (and childs)
    //  - meta

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
    protected function filterNode( DOMElement $element, $depth = 0 )
    {
        // Check for simple name mapping
        $name = strtolower( $element->tagName );
        if ( isset( $this->nameMapping[$name] ) )
        {
            $element->setProperty( 'type', $this->nameMapping[$name] );
        }

        // Check for special callback
        if ( isset( $this->processingCallbacks[$name] ) )
        {
            $method = $this->processingCallbacks[$name];
            $this->$method( $element );
        }

        // Recurse into child elements
        for ( $i = ( $element->childNodes->length - 1 ); $i >= 0; --$i )
        {
            $child = $element->childNodes->item( $i );
            if ( $child->nodeType === XML_ELEMENT_NODE )
            {
                $this->filterNode( $child, $depth + 1 );
            }
        }
    }

    /**
     * Is block level element
     *
     * Returns true, if the element is a block level element in XHtml, and
     * false otherwise.
     * 
     * @param DOMElement $element 
     * @return boolena
     */
    protected function isBlockLevelElement( DOMElement $element )
    {
        return in_array(
            strtolower( $element->tagName ),
            array(
                'address',
                'blockquote',
                'center',
                'del',
                'dir',
                'div',
                'dl',
                'fieldset',
                'form',
                'h1',
                'h2',
                'h3',
                'h4',
                'h5',
                'h6',
                'hr',
                'ins',
                'li',
                'menu',
                'noframes',
                'noscript',
                'ol',
                'p',
                'pre',
                'table',
                'th',
                'td',
                'ul',
            )
        );
    }

    /**
     * Filter literal blocks
     *
     * Literal blocks in HTML are not really differentiated between inline
     * literals and literal blocks, so we decide on the actual semantics based
     * on the parent node. If the parent node is a block level element, but not
     * a paragraph we assume a literal block, and an inliteral otherwise.
     * 
     * @param DOMElement $element 
     * @return void
     */
    protected function filterLiteralBlock( DOMElement $element )
    {
        if ( ( $element->parentNode->tagName !== 'p' ) &&
             ( $this->isBlockLevelElement( $element->parentNode ) ) )
        {
            $element->setProperty( 'type', 'literallayout' );
        }
        else
        {
            $element->setProperty( 'type', 'literal' );
        }
    }

    /**
     * Get header level
     *
     * Get the header level of a HTML heading. Additionally to the default
     * levels h1-6 we repect a level specified in the class attribute, which is
     * for example used by the RST to XHtml conversion to specify header levels
     * higher then 6.
     * 
     * @param DOMElement $element 
     * @return int
     */
    protected function getHeaderLevel( DOMElement $element )
    {
        $headerLevel = (int) $element->tagName[1];
        if ( $headerLevel === 6 )
        {
            if ( $element->hasAttribute( 'class' ) &&
                 preg_match( '((?:\s|^)h(?P<level>\d+)(?:\s|$))', $element->getAttribute( 'class' ), $match ) )
            {
                $headerLevel = (int) $match['level'];
            }
        }

        return $headerLevel;
    }

    /**
     * Filter headers
     * 
     * @param DOMElement $element 
     * @return void
     */
    protected function filterHeader( DOMElement $element )
    {
        // Create new parent node if we found a header and aggregate everything
        // below the actual header into this node.
        $section = new ezcDocumentXhtmlDomElement( 'div' );
        
        $parent = $element->parentNode;

        // Replace header with new section node
        $parent->replaceChild( $section, $element );
        $section->setProperty( 'type', 'section' );
        $section->setProperty( 'level', $level = $this->getHeaderLevel( $element ) );

        $section->appendChild( $element );
        $element->setProperty( 'type', 'title' );

        $children = $parent->childNodes;
        $childCount = $children->length;
        for ( $i = 0; $i < $childCount; ++$i )
        {
            if ( $section->isSameNode( $children->item( $i ) ) )
            {
                break;
            }
        }
        ++$i;

        while ( ( $node = $children->item( $i ) ) !== null )
        {
            if ( ( $node->nodeType === XML_ELEMENT_NODE ) &&
                 ( $node->tagName === 'div' ) &&
                 ( $node->getProperty( 'type' ) === 'section' ) &&
                 ( $node->getProperty( 'level' ) <= $level ) )
            {
                break;
            }
            else
            {
                $new = $node->cloneNode( true );
                $section->appendChild( $new );
                $parent->removeChild( $node );
            }
        }
    }

    /**
     * Filter link elements
     *
     * Link elements (<a>) may be anchors and references in XHtml. Also they
     * may be internal or external links. We annotate them on base of the
     * provided attributes.
     * 
     * @param DOMElement $element 
     * @return void
     */
    protected function filterLink( DOMElement $element )
    {
        if ( $element->hasAttribute( 'name' ) )
        {
            $span = new ezcDocumentXhtmlDomElement( 'span' );
            $element->parentNode->insertBefore( $span, $element );

            // The a element is an anchor
            $span->setProperty( 'type', 'anchor' );
            $span->setProperty( 'attributes', array( 
                'id' => $element->getAttribute( 'name' ),
            ) );
        }
        elseif ( $element->hasAttribute( 'href' ) )
        {
            // The element is a reference, but still may be internal or
            // external
            $target = $element->getAttribute( 'href' );
            if ( $target[0] === '#' )
            {
                // Internal target
                $element->setProperty( 'type', 'link' );
                $element->setProperty( 'attributes', array( 
                    'linked' => substr( $target, 1 ),
                ) );
            }
            else
            {
                // External target
                $element->setProperty( 'type', 'ulink' );
                $element->setProperty( 'attributes', array( 
                    'url' => $target,
                ) );
            }
        }
    }

    /**
     * Filter strong emphasis
     *
     * Even there is no real strong empasis in docbook this may be annotated by
     * the additional attribute role, which is set for XHtml elements
     * indicating strong emphasis.
     * 
     * @param DOMElement $element 
     * @return void
     */
    protected function filterStrongEmphasis( DOMElement $element )
    {
        $element->setProperty( 'type', 'emphasis' );
        $element->setProperty( 'attributes', array( 
            'role' => 'strong',
        ) );
    }

    /**
     * Filter blockquote annotation
     *
     * The sematic meaning of the cite XHtml element is sometimes referenced as
     * blockquote attribution, and sometimes as inline quotes. We decide its
     * meaning depending on the parent node type.
     * 
     * @param DOMElement $element 
     * @return void
     */
    protected function filterBlockquoteAnnotation( DOMElement $element )
    {
        if ( ( strtolower( $element->parentNode->tagName ) === 'blockquote' ) ||
             // This is a special filter for the amrkup generated by the RST to
             // HTML conversion
             ( ( strtolower( $element->parentNode->tagName ) === 'div' ) &&
               ( $element->parentNode->hasAttribute( 'class' ) ) &&
               ( substr( $element->parentNode->getAttribute( 'class' ), 'attribution' ) !== false ) ) )
        {
            // Assume this is an attribution.
            $element->setProperty( 'type', 'attribution' );
        }
        elseif ( $this->isBlockLevelElement( $element->parentNode ) )
        {
            $element->setProperty( 'type', 'blockquote' );
        }
        else
        {
            $element->setProperty( 'type', 'quote' );
        }
    }
}

?>
