<?php
/**
 * ezcImageConversionHandlerShellTest
 *
 * @package ImageConversion
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Require base class for handler tests.
 */
require_once "handler_test.php";

/**
 * Test suite for ImageHandlerShell class.
 * This test class contains all tests that are specific to the GD handler.
 *
 * @package ImageConversion
 * @version //autogentag//
 */
class ezcImageConversionHandlerShellTest extends ezcImageConversionHandlerTest
{
	public static function suite()
	{
		return new ezcTestSuite( "ezcImageConversionHandlerShellTest" );
	}

    public function setUp()
    {
        try
        {
            $dummy = new ezcImageImagemagickHandler( ezcImageImagemagickBaseHandler::defaultSettings() );
        }
        catch ( Exception $e )
        {
            $this->markTestSkipped( $e->getMessage() );
        }
        $this->handlerClass = "ezcImageImagemagickHandler";
        parent::setUp();
    }


    public function testLoadSuccess()
    {
        $filePath = $this->testFiles["jpeg"];

        $ref = $this->handler->load( $filePath );

        $refProp = $this->getReferences();
        $imageRef = current( $refProp );

        $this->assertSame(
            $filePath,
            $imageRef["file"],
            "Image reference not registered correctly."
        );

        $this->assertSame(
            $imageRef["mime"],    
            "image/jpeg",
            "Image reference not registered correctly."
        );

        $this->handler->close( $ref );
    }

    public function testLoadFailureFilenotexists()
    {
        $filePath = $this->testFiles["nonexistent"];

        try
        {
            $ref = $this->handler->load( $filePath );
        }
        catch ( ezcBaseFileNotFoundException $e )
        {
            return;
        }
        $this->fail( "Required exception not thrown on not existing file." );
    }

    public function testLoadFailureUnknownmimetype()
    {
        $filePath = $this->testFiles["text"];

        try
        {
            $ref = $this->handler->load( $filePath );
        }
        catch ( ezcImageMimeTypeUnsupportedException $e )
        {
            return;
        }
        $this->fail( "Required exception not thrown on not existing file." );
    }

    public function testApplyFilterSingle()
    {

        $srcPath = $this->testFiles["jpeg"];
        $dstPath = $this->getTempPath();

        $ref = $this->handler->load( $srcPath );
        $this->handler->applyFilter( $ref, new ezcImageFilter( "scale", array( "width" => 200, "height" => 200, "direction" => ezcImageGeometryFilters::SCALE_BOTH ) ) );
        $this->handler->save( $ref, $dstPath );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $dstPath,
             "Applying single filter through handler failed.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
        $this->handler->close( $ref );
    }

    public function testApplyFilterMultiple()
    {
        $srcPath = $this->testFiles["jpeg"];
        $dstPath = $this->getTempPath();

        $ref = $this->handler->load( $srcPath );

        $this->handler->applyFilter( $ref, new ezcImageFilter( "scale", array( "width" => 200, "height" => 200, "direction" => ezcImageGeometryFilters::SCALE_BOTH ) ) );
        $this->handler->applyFilter( $ref, new ezcImageFilter( "crop", array( "x" => 50, "width" => 100, "y" => 50, "height" => 100 ) ) );
        $this->handler->applyFilter( $ref, new ezcImageFilter( "colorspace", array( "space" => ezcImageColorspaceFilters::COLORSPACE_SEPIA ) ) );
        
        $this->handler->save( $ref, $dstPath );

        $this->assertImageSimilar(
            $this->getReferencePath(),
            $dstPath,
            "Applying multiple filter through handler failed.",
            // ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
            12000
        );
        $this->handler->close( $ref );
        $this->removeTempDir();
    }
}
?>
