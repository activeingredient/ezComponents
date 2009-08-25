<?php
/**
 * ezcDocumentPdfDriverTcpdfTests
 * 
 * @package Document
 * @version //autogen//
 * @subpackage Tests
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'base.php';

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentPdfMainRendererTests extends ezcDocumentPdfTestCase
{
    protected $document;
    protected $xpath;
    protected $styles;

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    public function testRenderUnknownElements()
    {
        $docbook = new ezcDocumentDocbook();
        $docbook->loadFile( dirname( __FILE__ ) . '/../files/pdf/unknown.xml' );

        try {
            $renderer  = new ezcDocumentPdfMainRenderer(
                new ezcDocumentPdfSvgDriver(),
                new ezcDocumentPdfStyleInferencer()
            );

            $pdf = $renderer->render(
                $docbook,
                new ezcDocumentPdfDefaultHyphenator()
            );
            $this->fail( 'Expected ezcDocumentVisitException.' );
        }
        catch ( ezcDocumentVisitException $e )
        { /* Expected */ }
    }

    public function testRenderUnknownElementsSilence()
    {
        $docbook = new ezcDocumentDocbook();
        $docbook->loadFile( dirname( __FILE__ ) . '/../files/pdf/unknown.xml' );

        $renderer  = new ezcDocumentPdfMainRenderer(
            new ezcDocumentPdfSvgDriver(),
            new ezcDocumentPdfStyleInferencer(),
            E_PARSE
        );

        $pdf = $renderer->render(
            $docbook,
            new ezcDocumentPdfDefaultHyphenator()
        );

        $errors = $renderer->getErrors();
        $this->assertEquals( 1, count( $errors ) );
        $this->assertEquals(
            'Visitor error: Notice: \'Unknown and unhandled element: http://example.org/unknown:article.\' in line 0 at position 0.',
            reset( $errors )->getMessage()
        );
    }

    public function testRenderMainSinglePage()
    {
        $this->renderFullDocument(
            dirname( __FILE__ ) . '/../files/pdf/long_text.xml',
            __CLASS__ . '_' . __FUNCTION__ . '.svg',
            array()
        );
    }

    public function testRenderMainSinglePageNotNamespaced()
    {
        $this->renderFullDocument(
            dirname( __FILE__ ) . '/../files/pdf/paragraph_nons.xml',
            __CLASS__ . '_' . __FUNCTION__ . '.svg',
            array()
        );
    }

    public function testRenderMainMulticolumnLayout()
    {
        $this->renderFullDocument(
            dirname( __FILE__ ) . '/../files/pdf/long_text.xml',
            __CLASS__ . '_' . __FUNCTION__ . '.svg',
            array(
                new ezcDocumentPdfCssDirective(
                    array( 'article' ),
                    array(
                        'text-columns' => '3',
                        'line-height'  => '1',
                    )
                ),
            )
        );
    }

    public function testRenderLongTextParagraphConflict()
    {
        $this->renderFullDocument(
            dirname( __FILE__ ) . '/../files/pdf/test_long_wrapping.xml',
            __CLASS__ . '_' . __FUNCTION__ . '.svg',
            array()
        );
    }

    public function testRenderLongTextWithInternalLinks()
    {
        if ( !ezcBaseFeatures::hasExtensionSupport( 'haru' ) )
        {
            $this->markTestSkipped( 'This test requires pecl/haru installed.' );
        }

        $docbook = new ezcDocumentDocbook();
        $docbook->loadFile( dirname( __FILE__ ) . '/../files/pdf/internal_links.xml' );

        $style = new ezcDocumentPdfStyleInferencer();
        $style->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective(
                array( 'page' ),
                array(
                    'page-size' => 'A6',
                )
            ),
        ) );

        $renderer  = new ezcDocumentPdfMainRenderer(
            new ezcDocumentPdfHaruDriver(),
            $style
        );
        $pdf = $renderer->render(
            $docbook,
            new ezcDocumentPdfDefaultHyphenator()
        );

        $this->assertPdfDocumentsSimilar( $pdf, __CLASS__ . '_' . __FUNCTION__ );
    }
}

?>
