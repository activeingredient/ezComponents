<?php

/**
 * File containing the ezcDocumentXsltConverter class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Converter for docbook to Rst with a PHP callback based mechanism, for fast
 * and easy PHP based extensible transformations.
 *
 * This converter does not support the full docbook standard, but only a subset
 * commonly used in the document component. If you need to transform documents
 * using the full docbook you might prefer to use the
 * ezcDocumentDocbookToRstXsltConverter with the default stylesheet from
 * Welsh.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentDocbookToRstConverter extends ezcDocumentDocbookElementVisitorConverter
{
    /**
     * Construct converter
     *
     * Construct converter from XSLT file, which is used for the actual
     * 
     * @param ezcDocumentDocbookToRstConverterOptions $options
     * @return void
     */
    public function __construct( ezcDocumentDocbookToRstConverterOptions $options = null )
    {
        parent::__construct( 
            $options === null ?
                new ezcDocumentDocbookToRstConverterOptions() :
                $options
        );

        // Initlize common element handlers
        $this->visitorElementHandler = array(
            'docbook' => array(
                'article'           => $recurse = new ezcDocumentDocbookToRstRecurseHandler(),
                'book'              => $recurse,
                'sect1info'         => $header = new ezcDocumentDocbookToRstHeadHandler(),
                'sect2info'         => $header,
                'sect3info'         => $header,
                'sect4info'         => $header,
                'sect5info'         => $header,
                'sectioninfo'       => $header,
                'sect1'             => $section = new ezcDocumentDocbookToRstSectionHandler(),
                'sect2'             => $section,
                'sect3'             => $section,
                'sect4'             => $section,
                'sect5'             => $section,
                'section'           => $section,
                'title'             => $section,
            /*
                'para'              => new ezcDocumentDocbookToRstParagraphHandler(),
                'emphasis'          => new ezcDocumentDocbookToRstEmphasisHandler(),
                'literal'           => $mapper,
                'ulink'             => new ezcDocumentDocbookToRstExternalLinkHandler(),
                'link'              => new ezcDocumentDocbookToRstInternalLinkHandler(),
                'anchor'            => new ezcDocumentDocbookToRstAnchorHandler(),
                'inlinemediaobject' => $media = new ezcDocumentDocbookToRstMediaObjectHandler(),
                'mediaobject'       => $media,
                'blockquote'        => new ezcDocumentDocbookToRstBlockquoteHandler(),
                'itemizedlist'      => $mapper,
                'orderedlist'       => $mapper,
                'listitem'          => $mapper,
                'note'              => $special = new ezcDocumentDocbookToRstSpecialParagraphHandler(),
                'tip'               => $special,
                'warning'           => $special,
                'important'         => $special,
                'caution'           => $special,
                'literallayout'     => new ezcDocumentDocbookToRstLiteralLayoutHandler(),
                'footnote'          => new ezcDocumentDocbookToRstFootnoteHandler(),
                'comment'           => new ezcDocumentDocbookToRstCommentHandler(),
                'beginpage'         => $mapper,
                'variablelist'      => $mapper,
                'varlistentry'      => new ezcDocumentDocbookToRstDefinitionListEntryHandler(),
                'entry'             => new ezcDocumentDocbookToRstTableCellHandler(),
                'table'             => $mapper,
                'tbody'             => $mapper,
                'thead'             => $mapper,
                'row'               => $mapper,
                'tgroup'            => $ignore = new ezcDocumentDocbookToRstIgnoreHandler(),
            // */
            )
        );
    }

    /**
     * Initialize destination document
     * 
     * Initialize the structure which the destination document could be build
     * with. This may be an initial DOMDocument with some default elements, or
     * a string, or something else.
     *
     * @return mixed
     */
    protected function initializeDocument()
    {
        return '';
    }

    /**
     * Create document from structure
     *
     * Build a ezcDocumentDocument object from the structure created during the
     * visiting process.
     *
     * @param mixed $content 
     * @return ezcDocumentDocument
     */
    protected function createDocument( $content )
    {
        $rst = new ezcDocumentRst();
        $rst->loadString( $content );
        return $rst;
    }

    /**
     * Visit text node.
     *
     * Visit a text node in the source document and transform it to the
     * destination result
     * 
     * @param DOMText $node 
     * @param mixed $root 
     * @return mixed
     */
    protected function visitText( DOMText $node, $root )
    {
        if ( trim( $wholeText = $node->wholeText ) !== '' )
        {
            $root .= $wholeText;
        }

        return $root;
    }

    /**
     * Append footnotes
     *
     * Append the footnotes to the end of the document. The footnotes are
     * embedded directly in the text in docbook, aggregated during the
     * processing of the document, and displayed at the bottom of the HTML
     * document.
     * 
     * @param DOMElement $root 
     * @return void
     */
    protected function appendFootnotes( DOMElement $root )
    {
        /*
        if ( !count( $this->footnotes ) )
        {
            // Do not do anything, if there aren't any footnotes.
            return;
        }

        $body = $root->getElementsByTagName( 'body' )->item( 0 );

        $footnoteContainer = $root->ownerDocument->createElement( 'ul' );
        $footnoteContainer->setAttribute( 'class', 'footnotes' );
        $body->appendChild( $footnoteContainer );

        foreach ( $this->footnotes as $nr => $element )
        {
            $li = $root->ownerDocument->createElement( 'li' );
            $footnoteContainer->appendChild( $li );

            $reference = $root->ownerDocument->createElement( 'a', $nr );
            $reference->setAttribute( 'name', 'footnote_' . $nr );
            $li->appendChild( $reference );

            // Visit actual footnote contents and append to the footnote.
            $li = $this->visitChildren( $element, $li );
        }
        */
    }

    /**
     * Append footnote
     *
     * Append a footnote to the document, which then will be visited at the end
     * of the document processing. Returns a numeric identifier for the
     * footnote.
     * 
     * @param DOMElement $node 
     * @return int
     */
    public function appendFootnote( DOMElement $node )
    {
        $this->footnotes[++$this->footnoteNumber] = $node;
        return $this->footnoteNumber;
    }
}

?>
