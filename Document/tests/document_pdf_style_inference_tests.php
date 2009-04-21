<?php
/**
 * ezcDocumentPdfStyleInferenceTests
 * 
 * @package Document
 * @version //autogen//
 * @subpackage Tests
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentPdfLocationIdTests extends ezcTestCase
{
    protected $document;
    protected $xpath;

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    public function setUp()
    {
        $this->document = new DOMDocument();
        $this->document->registerNodeClass( 'DOMElement', 'ezcDocumentPdfInferencableDomElement' );

        $this->document->load( dirname( __FILE__ ) . '/files/docbook/pdf/location_ids.xml' );

        $this->xpath = new DOMXPath( $this->document );
        $this->xpath->registerNamespace( 'doc', 'http://docbook.org/ns/docbook' );
    }

    public function testRootNodeWithoutFormats()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        $this->assertEquals(
            array(),
            $inferencer->inferenceFormattingRules( $element )
        );
    }

    public function testRootNodeFormatting()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        $inferencer->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective(
                array( 'article' ),
                array(
                    'foo' => 'bar',
                )
            ),
        ) );

        $this->assertEquals(
            array(
                'foo' => new ezcDocumentPdfStyleStringValue( 'bar' ),
            ),
            $inferencer->inferenceFormattingRules( $element )
        );
    }

    public function testRootNodeFormattingPartialOverwrite()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        $inferencer->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective(
                array( 'article' ),
                array(
                    'foo' => 'bar',
                    'baz' => 'bar',
                )
            ),
            new ezcDocumentPdfCssDirective(
                array( 'article' ),
                array(
                    'foo' => 'blubb',
                )
            ),
        ) );

        $this->assertEquals(
            array(
                'foo' => new ezcDocumentPdfStyleStringValue( 'blubb' ),
                'baz' => new ezcDocumentPdfStyleStringValue( 'bar' ),
            ),
            $inferencer->inferenceFormattingRules( $element )
        );
    }

    public function testRootNodeFormattingRuleInheritance()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:section' )->item( 0 );

        $inferencer->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective(
                array( 'article' ),
                array(
                    'foo' => 'bar',
                    'baz' => 'bar',
                )
            ),
            new ezcDocumentPdfCssDirective(
                array( 'article', '> section' ),
                array(
                    'foo' => 'blubb',
                )
            ),
        ) );

        $this->assertEquals(
            array(
                'foo' => new ezcDocumentPdfStyleStringValue( 'blubb' ),
                'baz' => new ezcDocumentPdfStyleStringValue( 'bar' ),
            ),
            $inferencer->inferenceFormattingRules( $element )
        );
    }

    public function testIntValueHandler()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        $inferencer->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective(
                array( 'article' ),
                array(
                    'text-columns' => '1',
                )
            ),
        ) );

        $this->assertEquals(
            array(
                'text-columns' => new ezcDocumentPdfStyleIntValue( '1' ),
            ),
            $inferencer->inferenceFormattingRules( $element )
        );
    }

    public function testMeasureValueHandler()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        $inferencer->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective(
                array( 'article' ),
                array(
                    'font-size' => '10',
                )
            ),
        ) );

        $this->assertEquals(
            array(
                'font-size' => new ezcDocumentPdfStyleMeasureValue( '10mm' ),
            ),
            $inferencer->inferenceFormattingRules( $element )
        );
    }

    public static function getMeasureBoxValues()
    {
        return array(
            array(
                "11",
                array(
                    'top'    => 11.,
                    'right'  => 11.,
                    'bottom' => 11.,
                    'left'   => 11.,
                ),
            ),
            array(
                "11pt",
                array(
                    'top'    => 3.9,
                    'right'  => 3.9,
                    'bottom' => 3.9,
                    'left'   => 3.9,
                ),
            ),
            array(
                "11 12",
                array(
                    'top'    => 11.,
                    'right'  => 12.,
                    'bottom' => 11.,
                    'left'   => 12.,
                ),
            ),
            array(
                "11\t \r \n \t12",
                array(
                    'top'    => 11.,
                    'right'  => 12.,
                    'bottom' => 11.,
                    'left'   => 12.,
                ),
            ),
            array(
                "11 12 13",
                array(
                    'top'    => 11.,
                    'right'  => 12.,
                    'bottom' => 13.,
                    'left'   => 12.,
                ),
            ),
            array(
                "11 12 13 14",
                array(
                    'top'    => 11.,
                    'right'  => 12.,
                    'bottom' => 13.,
                    'left'   => 14.,
                ),
            ),
            array(
                "11mm 12in 13px 14pt",
                array(
                    'top'    => 11.,
                    'right'  => 304.8,
                    'bottom' => 4.6,
                    'left'   => 4.94,
                ),
            ),
        );
    }

    /**
     * @dataProvider getMeasureBoxValues
     */
    public function testMeasureBoxValueHandler( $input, $expectation )
    {
        $value = new ezcDocumentPdfStyleMeasureBoxValue( $input );

        $this->assertEquals(
            $expectation,
            $value->value,
            'Invalid box measures read.', .1
        );
    }

    public function testExceptionPostDecoration()
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        try
        {
            $inferencer->appendStyleDirectives( array(
                new ezcDocumentPdfCssDirective(
                    array( 'article' ),
                    array(
                        'font-size' => 'unparseable',
                    ),
                    'my.css', 23, 42
                ),
            ) );
            $this->fail( 'Expected ezcDocumentParserException.' );
        }
        catch ( ezcDocumentParserException $e )
        {
            $this->assertEquals(
                'Parse error: Fatal error: \'Could not parse \'unparseable\' as size value.\' in file \'my.css\' in line 23 at position 42.',
                $e->getMessage()
            );
        }
    }
}

?>
