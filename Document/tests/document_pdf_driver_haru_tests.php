<?php
/**
 * ezcDocumentPdfDriverHaruTests
 * 
 * @package Document
 * @version //autogen//
 * @subpackage Tests
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'pdf_test.php';

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentPdfDriverHaruTests extends ezcDocumentPdfTestCase
{
    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    public function setUp()
    {
        if ( !ezcBaseFeatures::hasExtensionSupport( 'haru' ) )
        {
            $this->markTestSkipped( 'This test requires pecl/haru installed.' );
        }

        parent::setUp();
    }

    public function testEstimateDefaultWordWidth()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );

        $this->assertEquals(
            22.9,
            $driver->calculateWordWidth( 'Hello' ),
            'Wrong word width estimation', .1
        );
    }

    public function testEstimateWordWidthDifferentSize()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );
        $driver->setTextFormatting( 'font-size', '14' );

        $this->assertEquals(
            31.9,
            $driver->calculateWordWidth( 'Hello' ),
            'Wrong word width estimation', .1
        );
    }

    public function testEstimateBoldWordWidth()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );
        $driver->setTextFormatting( 'font-weight', 'bold' );

        $this->assertEquals(
            22.9,
            $driver->calculateWordWidth( 'Hello' ),
            'Wrong word width estimation', .1
        );
    }

    public function testEstimateMonospaceWordWidth()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );
        $driver->setTextFormatting( 'font-family', 'monospace' );
        $driver->setTextFormatting( 'font-size', '12' );

        $this->assertEquals(
            36,
            $driver->calculateWordWidth( 'Hello' ),
            'Wrong word width estimation', .1
        );
    }

    public function testFontStyleFallback()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );
        $driver->setTextFormatting( 'font-family', 'ZapfDingbats' );
        $driver->setTextFormatting( 'font-weight', 'bold' );
        $driver->setTextFormatting( 'font-style', 'italic' );

        $this->assertEquals(
            38.8,
            $driver->calculateWordWidth( 'Hello' ),
            'Wrong word width estimation', .1
        );
    }

    public function testRenderHelloWorld()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );
        $driver->setTextFormatting( 'font-family', 'sans-serif' );
        $driver->setTextFormatting( 'font-size', '10' );

        $driver->drawWord( 0, 0, 'The quick brown fox jumps over the lazy dog' );
        $driver->drawWord( 0, 297 - 10, 'The quick brown fox jumps over the lazy dog' );

        $filename = $this->tempDir . __METHOD__ . '.pdf';
        file_put_contents( $filename, $pdf = $driver->save() );

        $this->assertPdfDocumentsSimilar( $pdf, __METHOD__ );
    }

    public function testRenderHelloWorldSmallFont()
    {
        $driver = new ezcDocumentPdfHaruDriver();
        $driver->createPage( 210, 297 );
        $driver->setTextFormatting( 'font-family', 'sans-serif' );
        $driver->setTextFormatting( 'font-size', '4' );

        $driver->drawWord( 0, 0, 'The quick brown fox jumps over the lazy dog' );
        $driver->drawWord( 0, 297 - 4, 'The quick brown fox jumps over the lazy dog' );

        $filename = $this->tempDir . __METHOD__ . '.pdf';
        file_put_contents( $filename, $pdf = $driver->save() );

        $this->assertPdfDocumentsSimilar( $pdf, __METHOD__ );
    }
}

?>
