<?php
/**
 * ezcImageConversionTransformationTest
 *
 * @package ImageConversion
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Test suite for ImageTransformation class.
 *
 * @package ImageConversion
 * @version //autogentag//
 */
class ezcImageConversionTransformationTest extends ezcImageConversionTestCase
{
    protected $testFiltersSuccess = array();

    protected $testFiltersFailure = array();

    protected $converter;

	public static function suite()
	{
		return new ezcTestSuite( "ezcImageConversionTransformationTest" );
	}

    protected function setUp()
    {
        try
        {
            $this->testFiltersSuccess = array(
                0 => array(
                    0 => new ezcImageFilter(
                        "scaleExact",
                        array(
                            "width"     => 50,
                            "height"    => 50,
                            "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                            )
                        ),
                    1 => new ezcImageFilter(
                        "crop",
                        array(
                            "x"     => 10,
                            "width" => 30,
                            "y"     => 10,
                            "height"=> 30,
                            )
                        ),
                    2 => new ezcImageFilter(
                        "colorspace",
                        array(
                            "space" => ezcImageColorspaceFilters::COLORSPACE_GREY,
                            )
                        ),
                    ),
                1 => array(
                    0 => new ezcImageFilter(
                        "scale",
                        array(
                            "width"     => 50,
                            "height"    => 1000,
                            "direction" => ezcImageGeometryFilters::SCALE_DOWN,
                            )
                        ),
                    2 => new ezcImageFilter(
                        "colorspace",
                        array(
                            "space" => ezcImageColorspaceFilters::COLORSPACE_MONOCHROME,
                            )
                        ),
                    ),
                2 => array(
                    0 => new ezcImageFilter(
                        "scaleHeight",
                        array(
                            "height"    => 70,
                            "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                            )
                        ),
                    2 => new ezcImageFilter(
                        "colorspace",
                        array(
                            "space" => ezcImageColorspaceFilters::COLORSPACE_SEPIA,
                            )
                        ),
                    ),
                );
            $this->testFiltersFailure = array(
                // Nonexistant filter
                0 => array(
                    0 => new ezcImageFilter(
                        "toby",
                        array(
                            "width"     => 50,
                            "height"    => 50,
                            "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                            )
                        ),
                    1 => new ezcImageFilter(
                        "crop",
                        array(
                            "x"     => 10,
                            "width" => 30,
                            "y"     => 10,
                            "height"=> 30,
                            )
                        ),
                    2 => new ezcImageFilter(
                        "colorspace",
                        array(
                            "space" => ezcImageColorspaceFilters::COLORSPACE_GREY,
                            )
                        ),
                    ),
                // Missing option
                1 => array(
                    0 => new ezcImageFilter(
                        "scale",
                        array(
                    )
                        ),
                    2 => new ezcImageFilter(
                        "colorspace",
                        array(
                            "space" => ezcImageColorspaceFilters::COLORSPACE_MONOCHROME,
                            )
                        ),
                    ),
                );

            $conversionsIn = array(
                "image/gif"  => "image/png",
                "image/xpm"  => "image/jpeg",
                "image/wbmp" => "image/jpeg",
            );
            $settings = new ezcImageConverterSettings(
                array( new ezcImageHandlerSettings( "GD", "ezcImageGdHandler" ) ),
                $conversionsIn
            );
            $this->converter = new ezcImageConverter( $settings );
        }
        catch ( Exception $e )
        {
            $this->markTestSkipped( $e->getMessage() );
        }
    }

    protected function tearDown()
    {
        unset( $this->converter );
    }

    public function testConstructSuccess()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
            1 => new ezcImageFilter(
                "scaleWidth",
                array(
                    "width"     => 40,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
            2 => new ezcImageFilter(
                "crop",
                array(
                        "xStart"     => 10,
                        "xEnd"       => 40,
                        "yStart"     => 10,
                        "yEnd"       => 40,
                )
            ),
        );

        $mimeIn = array( "image/jpeg" );

        $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );

        $this->assertAttributeEquals(
            $mimeIn,
            "mimeOut",
            $trans,
            "MIME types not registered correctly in transformation."
        );
        $this->assertAttributeEquals(
            $filtersIn,
            "filters",
            $trans,
            "Filters not registered correctly in transformation."
        );
    }

    public function testConstructFailureFilterNotAvailable()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "toby",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $mimeIn = array( "image/jpeg" );

        try
        {
            $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );
        }
        catch ( ezcImageFilterNotAvailableException $e )
        {
            return;
        }
        $this->fail( "Transformation did not throw exception on invalid filter." );
    }

    public function testConstructFailureInvalidMimeType()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $mimeIn = array( "application/toby" );

        try
        {
            $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );
        }
        catch ( ezcImageMimeTypeUnsupportedException $e )
        {
            return;
        }
        $this->fail( "Transformation did not throw exception on invalid MIME type." );
    }

    public function testAddFilterSuccess()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $newFilter = new ezcImageFilter(
            "scaleWidth",
            array(
                "width"     => 40,
                "direction" => ezcImageGeometryFilters::SCALE_BOTH,
            )
        );

        $filtersOut = $filtersIn;
        $filtersOut[] = $newFilter;

        $mimeIn = array( "image/jpeg" );

        $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );

        $trans->addFilter( $newFilter );

        $this->assertAttributeEquals(
            $filtersOut,
            "filters",
            $trans,
            "Filters not added correctly to transformation."
        );
    }

    public function testAddFilterFailure()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $newFilter = new ezcImageFilter(
            "toby",
            array(
                "width"     => 40,
                "direction" => ezcImageGeometryFilters::SCALE_BOTH,
            )
        );

        $filtersOut = $filtersIn;
        $filtersOut[] = $newFilter;

        $mimeIn = array( "image/jpeg" );

        $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );

        try
        {
            $trans->addFilter( $newFilter );
        }
        catch ( ezcImageFilterNotAvailableException $e )
        {
            return;
        }
        $this->fail( "Transformation did not throw exception on invalid filter." );
    }

    public function testGetOutMimeSuccessNoTransform()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $mimeIn = array( "image/jpeg" );

        $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );

        $this->assertEquals(
            "image/jpeg",
            $trans->getOutMime( $this->testFiles["jpeg"] ),
            "Transformation returned incorrect output MIME type."
        );
    }

    public function testGetOutMimeSuccessExplicitTransform()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $mimeIn = array( "image/jpeg", "image/png" );

        $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );

        $this->assertEquals(
            "image/png",
            $trans->getOutMime( $this->testFiles["gif_nonanimated"] ),
            "Transformation returned incorrect output MIME type."
        );
    }

    public function testGetOutMimeSuccessImplicitTransform()
    {
        $filtersIn = array(
            0 => new ezcImageFilter(
                "scale",
                array(
                    "width"     => 50,
                    "height"    => 50,
                    "direction" => ezcImageGeometryFilters::SCALE_BOTH,
                )
            ),
        );

        $mimeIn = array( "image/jpeg" );

        $trans = new ezcImageTransformation( $this->converter, "test", $filtersIn, $mimeIn );

        $this->assertEquals(
            "image/jpeg",
            $trans->getOutMime( $this->testFiles["gif_nonanimated"] ),
            "Transformation returned incorrect output MIME type."
        );
    }

    public function testTransformSuccessPng_1()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[0],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["png"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessPng_2()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[1],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["png"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessPng_3()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[2],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["png"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessJpeg_1()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[0],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["jpeg"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessJpeg_2()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[1],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["jpeg"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessJpeg_3()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[2],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["jpeg"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessGif_1()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[0],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["gif_nonanimated"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessGif_2()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[1],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["gif_nonanimated"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessGif_3()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[2],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["gif_nonanimated"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            ezcImageConversionTestCase::DEFAULT_SIMILARITY_GAP
        );
    }

    public function testTransformSuccessGifAnimated()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersSuccess[2],
            array( "image/jpeg", "image/png" )
        );
        $trans->transform( $this->testFiles["gif_animated"], $this->getTempPath() );
        $this->assertImageSimilar(
            $this->getReferencePath(),
            $this->getTempPath(),
            "Image not generated successfully.",
            7000
        );
    }

    public function testTransformFailureFilterNotAvailable()
    {
        try
        {
            $trans = new ezcImageTransformation(
                $this->converter,
                "test",
                $this->testFiltersFailure[0],
                array( "image/jpeg", "image/png" )
            );
            $trans->transform( $this->testFiles["jpeg"], $this->getTempPath() );
        }
        catch ( ezcImageFilterNotAvailableException $e )
        {
            return;
        }
        $this->fail( "Expected exception not thrown." );

    }

    public function testTransformFailureMissingFilterOption()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersFailure[1],
            array( "image/jpeg", "image/png" )
        );
        try
        {
            $trans->transform( $this->testFiles["jpeg"], $this->getTempPath() );
        }
        catch ( ezcImageTransformationException $e )
        {
            return;
        }
        $this->fail( "Expected exception not thrown." );

    }

    public function testTransformFailureFileNotFound()
    {
        $trans = new ezcImageTransformation(
            $this->converter,
            "test",
            $this->testFiltersFailure[1],
            array( "image/jpeg", "image/png" )
        );
        try
        {
            $trans->transform( $this->testFiles["nonexistent"], $this->getTempPath() );
        }
        catch ( ezcBaseFileNotFoundException $e )
        {
            return;
        }
        $this->fail( "Expected exception not thrown." );

    }

    // Test for bug #8137: ImageConversion - ezcImageTransformation fails on
    public function testMultiTransform()
    {
        $mimeOut = array( "image/jpeg" );
        $trans = new ezcImageTransformation( $this->converter, "test", $this->testFiltersSuccess[0], $mimeOut );

        $trans->transform( $this->testFiles["jpeg"], $this->getTempPath( "jpeg" ) );
        $trans->transform( $this->testFiles["png"], $this->getTempPath( "png" ) );

        $this->assertImageSimilar(
            $this->getReferencePath( "jpeg" ),
            $this->getTempPath( "jpeg" ),
            "Transformation did not produce correct output.",
            2000
        );
        $this->assertImageSimilar(
            $this->getReferencePath( "png" ),
            $this->getTempPath( "png" ),
            "Transformation did not produce correct output.",
            2000
        );
    }
}
?>
