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
class ezcDocumentPdfStyleInferenceTests extends ezcTestCase
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

        $this->document->load( dirname( __FILE__ ) . '/../files/docbook/pdf/location_ids.xml' );

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
                'text-columns' => new ezcDocumentPdfStyleIntValue( 1 ),
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
                'font-size' => new ezcDocumentPdfStyleMeasureValue( 10 ),
            ),
            $inferencer->inferenceFormattingRules( $element )
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

    protected function assertCorrectMerge( $property, $styles, $expected )
    {
        $inferencer = new ezcDocumentPdfStyleInferencer( false );
        $element    = $this->xpath->query( '//doc:article' )->item( 0 );

        $inferencer->appendStyleDirectives( array(
            new ezcDocumentPdfCssDirective( array( 'article' ), $styles ),
        ) );

        $rules = $inferencer->inferenceFormattingRules( $element );
        $this->assertTrue( isset( $rules[$property] ), "Missing property $property in inferenced rules." );
        $this->assertEquals( 1, count( $rules ), "Wrong number of inferenced rules" );
        $this->assertEquals( $expected, (string) $rules[$property] );
    }

    public static function getMarginDefinitions()
    {
        return array(
            array(
                array(
                    'margin' => '10mm',
                ),
                '10.00mm 10.00mm 10.00mm 10.00mm',
            ),
            array(
                array(
                    'margin-top' => '10mm',
                ),
                '10.00mm 0.00mm 0.00mm 0.00mm',
            ),
            array(
                array(
                    'margin'     => '10mm',
                    'margin-top' => '20',
                ),
                '20.00mm 10.00mm 10.00mm 10.00mm',
            ),
            array(
                array(
                    'margin'     => '10mm',
                    'margin-top' => '20',
                    'margin-right' => '30',
                    'margin-left' => '40',
                    'margin-bottom' => '50',
                ),
                '20.00mm 30.00mm 50.00mm 40.00mm',
            ),
            array(
                array(
                    'margin-top' => '20',
                    'margin-right' => '30',
                    'margin-left' => '40',
                    'margin-bottom' => '50',
                    'margin'     => '0in',
                ),
                '0.00mm 0.00mm 0.00mm 0.00mm',
            ),
        );
    }

    /**
     * @dataProvider getMarginDefinitions
     */
    public function testMergeMarginValues( $styles, $expected )
    {
        $this->assertCorrectMerge( 'margin', $styles, $expected );
    }

    public static function getPaddingDefinitions()
    {
        return array(
            array(
                array(
                    'padding'     => '10mm',
                    'padding-top' => '20',
                ),
                '20.00mm 10.00mm 10.00mm 10.00mm',
            ),
        );
    }

    /**
     * @dataProvider getPaddingDefinitions
     */
    public function testMergePaddingValues( $styles, $expected )
    {
        $this->assertCorrectMerge( 'padding', $styles, $expected );
    }

    public static function getBorderColorDefinitions()
    {
        return array(
            array(
                array(
                    'border-color'     => '#f00',
                    'border-color-top' => '#00f',
                ),
                '0.00mm solid #0000ff 0.00mm solid #ff0000 0.00mm solid #ff0000 0.00mm solid #ff0000',
            ),
        );
    }

    /**
     * @dataProvider getBorderColorDefinitions
     */
    public function testMergeBorderColorValues( $styles, $expected )
    {
        $this->assertCorrectMerge( 'border', $styles, $expected );
    }

    public static function getBorderStyleDefinitions()
    {
        return array(
            array(
                array(
                    'border-style'     => 'solid double',
                    'border-style-top' => 'inset',
                ),
                '0.00mm inset #ffffff 0.00mm double #ffffff 0.00mm solid #ffffff 0.00mm double #ffffff',
            ),
        );
    }

    /**
     * @dataProvider getBorderStyleDefinitions
     */
    public function testMergeBorderStyleValues( $styles, $expected )
    {
        $this->assertCorrectMerge( 'border', $styles, $expected );
    }

    public static function getBorderWidthDefinitions()
    {
        return array(
            array(
                array(
                    'border-width'      => '1mm 2mm 3mm 4mm',
                    'border-width-left' => '5mm',
                ),
                '1.00mm solid #ffffff 2.00mm solid #ffffff 3.00mm solid #ffffff 5.00mm solid #ffffff',
            ),
        );
    }

    /**
     * @dataProvider getBorderWidthDefinitions
     */
    public function testMergeBorderWidthValues( $styles, $expected )
    {
        $this->assertCorrectMerge( 'border', $styles, $expected );
    }

    public static function getBorderDefinitions()
    {
        return array(
            array(
                array(
                    'border'      => '1mm 2mm #0f0 3mm inset 4mm ',
                    'border-left' => '5mm',
                ),
                '1.00mm solid #ffffff 2.00mm solid #00ff00 3.00mm inset #ffffff 5.00mm solid #ffffff',
            ),
            array(
                array(
                    'border'             => '1mm 2mm #0f0 3mm inset 4mm double',
                    'border-width-left'  => '5mm',
                    'border-color-right' => '#0f0f0f',
                ),
                '1.00mm solid #ffffff 2.00mm solid #0f0f0f 3.00mm inset #ffffff 5.00mm double #ffffff',
            ),
            array(
                array(
                    'border'             => '1mm 2mm #0f0 3mm inset 4mm double',
                    'border-width-left'  => '5mm',
                    'border-color-right' => '#0f0f0f',
                    'border-style-top'   => 'outset',
                ),
                '1.00mm outset #ffffff 2.00mm solid #0f0f0f 3.00mm inset #ffffff 5.00mm double #ffffff',
            ),
            array(
                array(
                    'border'       => '1mm 2mm #0f0 3mm inset 4mm double',
                    'border-color' => '#0f0f0f',
                ),
                '1.00mm solid #0f0f0f 2.00mm solid #0f0f0f 3.00mm inset #0f0f0f 4.00mm double #0f0f0f',
            ),
            array(
                array(
                    'border-color' => '#0f0f0f',
                    'border'       => '1mm 2mm #0f0 3mm inset 4mm double',
                ),
                '1.00mm solid #ffffff 2.00mm solid #00ff00 3.00mm inset #ffffff 4.00mm double #ffffff',
            ),
        );
    }

    /**
     * @dataProvider getBorderDefinitions
     */
    public function testMergeBorder( $styles, $expected )
    {
        $this->assertCorrectMerge( 'border', $styles, $expected );
    }
}

?>
