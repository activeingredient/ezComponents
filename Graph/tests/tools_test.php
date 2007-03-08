<?php
/**
 * ezcGraphToolsTest 
 * 
 * @package Graph
 * @version //autogen//
 * @subpackage Tests
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once dirname( __FILE__ ) . '/test_case.php';

/**
 * Tests for ezcGraph class.
 * 
 * @package ImageAnalysis
 * @subpackage Tests
 */
class ezcGraphToolsTest extends ezcGraphTestCase
{
	public static function suite()
	{
		return new PHPUnit_Framework_TestSuite( "ezcGraphToolsTest" );
	}

    protected function setUp()
    {
        static $i = 0;
        $this->tempDir = $this->createTempDir( __CLASS__ . sprintf( '_%03d_', ++$i ) ) . '/';
        $this->basePath = dirname( __FILE__ ) . '/data/';
    }

    protected function tearDown()
    {
        if ( !$this->hasFailed() )
        {
            $this->removeTempDir();
        }
    }

    public function testPieChartImageMap()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.png';
        $htmlFilename = $this->tempDir . __FUNCTION__ . '.html';

        $chart = new ezcGraphPieChart();
        $chart->data['sample'] = new ezcGraphArrayDataSet( array(
            'Mozilla' => 4375,
            'IE' => 345,
            'Opera' => 1204,
            'wget' => 231,
            'Safari' => 987,
        ) );

        $chart->data['sample']->url = 'http://example.org/browsers';
        $chart->data['sample']->url['Mozilla'] = 'http://example.org/browsers/mozilla';
        $chart->data['sample']->highlight['Opera'] = true;

        $chart->driver = new ezcGraphGdDriver();
        $chart->options->font->path = $this->basePath . 'font.ttf';

        $chart->render( 500, 200, $filename );

        file_put_contents( $htmlFilename, ezcGraphTools::createImageMap( $chart ) );

        $this->compare(
            $htmlFilename,
            $this->basePath . 'compare/' . __CLASS__ . '_' . __FUNCTION__ . '.html'
        );
    }

    public function testPieChartImageMapCustomName()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.png';
        $htmlFilename = $this->tempDir . __FUNCTION__ . '.html';

        $chart = new ezcGraphPieChart();
        $chart->data['sample'] = new ezcGraphArrayDataSet( array(
            'Mozilla' => 4375,
            'IE' => 345,
            'Opera' => 1204,
            'wget' => 231,
            'Safari' => 987,
        ) );

        $chart->data['sample']->url = 'http://example.org/browsers';
        $chart->data['sample']->url['Mozilla'] = 'http://example.org/browsers/mozilla';
        $chart->data['sample']->highlight['Opera'] = true;

        $chart->driver = new ezcGraphGdDriver();
        $chart->options->font->path = $this->basePath . 'font.ttf';

        $chart->render( 500, 200, $filename );

        file_put_contents( $htmlFilename, ezcGraphTools::createImageMap( $chart, 'CustomImageMapName' ) );

        $this->compare(
            $htmlFilename,
            $this->basePath . 'compare/' . __CLASS__ . '_' . __FUNCTION__ . '.html'
        );
    }

    public function testLineChartImageMap()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.png';
        $htmlFilename = $this->tempDir . __FUNCTION__ . '.html';

        $chart = new ezcGraphLineChart();
        $chart->palette = new ezcGraphPaletteBlack();
        $chart->options->fillLines = 200;

        $chart->data['Line 1'] = new ezcGraphArrayDataSet( array( 'sample 1' => 234, 'sample 2' => 21, 'sample 3' => 324, 'sample 4' => 120, 'sample 5' => 1) );
        $chart->data['Line 2'] = new ezcGraphArrayDataSet( array( 'sample 1' => 543, 'sample 2' => 234, 'sample 3' => 298, 'sample 4' => 5, 'sample 5' => 613) );

        $chart->data['Line 1']->url = 'http://example.org/line_1';
        $chart->data['Line 2']->url['sample 3'] = 'http://example.org/line_2/sample_3';

        $chart->driver = new ezcGraphGdDriver();
        $chart->options->font->path = $this->basePath . 'font.ttf';

        $chart->render( 500, 200, $filename );

        file_put_contents( $htmlFilename, ezcGraphTools::createImageMap( $chart ) );

        $this->compare(
            $htmlFilename,
            $this->basePath . 'compare/' . __CLASS__ . '_' . __FUNCTION__ . '.html'
        );
    }

    public function testImageMapWithWrongDriver()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.png';

        $chart = new ezcGraphLineChart();
        $chart->data['Line 1'] = new ezcGraphArrayDataSet( array( 'sample 1' => 234, 'sample 2' => 21, 'sample 3' => 324, 'sample 4' => 120, 'sample 5' => 1) );
        $chart->render( 500, 200, $filename );

        try
        {
            ezcGraphTools::createImageMap( $chart );
        }
        catch ( ezcGraphToolsIncompatibleDriverException $e )
        {
            return true;
        }

        $this->fail( 'Expected ezcGraphToolsIncompatibleDriverException.' );
    }

    public function testImageMapWithoutRendering()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.png';

        $chart = new ezcGraphLineChart();
        $chart->data['Line 1'] = new ezcGraphArrayDataSet( array( 'sample 1' => 234, 'sample 2' => 21, 'sample 3' => 324, 'sample 4' => 120, 'sample 5' => 1) );
        $chart->driver = new ezcGraphGdDriver();

        try
        {
            ezcGraphTools::createImageMap( $chart );
        }
        catch ( ezcGraphToolsNotRenderedException $e )
        {
            return true;
        }

        $this->fail( 'Expected ezcGraphToolsNotRenderedException.' );
    }

    public function testPieChartSvgLinking()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.svg';

        $chart = new ezcGraphPieChart();
        $chart->data['sample'] = new ezcGraphArrayDataSet( array(
            'Mozilla' => 4375,
            'IE' => 345,
            'Opera' => 1204,
            'wget' => 231,
            'Safari' => 987,
        ) );

        $chart->data['sample']->url = 'http://example.org/browsers';
        $chart->data['sample']->url['Mozilla'] = 'http://example.org/browsers/mozilla';
        $chart->data['sample']->highlight['Opera'] = true;

        $chart->render( 500, 200, $filename );

        ezcGraphTools::linkSvgElements( $chart );

        $this->compare( 
            $filename,
            $this->basePath . 'compare/' . __CLASS__ . '_' . __FUNCTION__ . '.svg'
        );
    }

    public function testLineChartSvgLinking()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.svg';

        $chart = new ezcGraphLineChart();
        $chart->palette = new ezcGraphPaletteBlack();
        $chart->options->fillLines = 200;

        $chart->data['Line 1'] = new ezcGraphArrayDataSet( array( 'sample 1' => 234, 'sample 2' => 21, 'sample 3' => 324, 'sample 4' => 120, 'sample 5' => 1) );
        $chart->data['Line 2'] = new ezcGraphArrayDataSet( array( 'sample 1' => 543, 'sample 2' => 234, 'sample 3' => 298, 'sample 4' => 5, 'sample 5' => 613) );

        $chart->data['Line 1']->url = 'http://example.org/line_1';
        $chart->data['Line 2']->url['sample 3'] = 'http://example.org/line_2/sample_3';

        $chart->render( 500, 200, $filename );

        ezcGraphTools::linkSvgElements( $chart );

        $this->compare( 
            $filename,
            $this->basePath . 'compare/' . __CLASS__ . '_' . __FUNCTION__ . '.svg'
        );
    }

    public function testSvgLinkingWithWrongDriver()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.svg';

        $chart = new ezcGraphLineChart();
        $chart->data['Line 1'] = new ezcGraphArrayDataSet( array( 'sample 1' => 234, 'sample 2' => 21, 'sample 3' => 324, 'sample 4' => 120, 'sample 5' => 1) );
        $chart->render( 500, 200, $filename );

        $chart->driver = new ezcGraphGdDriver();
        $chart->options->font->path = $this->basePath . 'font.ttf';

        try
        {
            ezcGraphTools::linkSvgElements( $chart );
        }
        catch ( ezcGraphToolsIncompatibleDriverException $e )
        {
            return true;
        }

        $this->fail( 'Expected ezcGraphToolsIncompatibleDriverException.' );
    }

    public function testSvgLinkingWithoutRendering()
    {
        $filename = $this->tempDir . __FUNCTION__ . '.svg';

        $chart = new ezcGraphLineChart();
        $chart->data['Line 1'] = new ezcGraphArrayDataSet( array( 'sample 1' => 234, 'sample 2' => 21, 'sample 3' => 324, 'sample 4' => 120, 'sample 5' => 1) );

        try
        {
            ezcGraphTools::linkSvgElements( $chart );
        }
        catch ( ezcGraphToolsNotRenderedException $e )
        {
            return true;
        }

        $this->fail( 'Expected ezcGraphToolsNotRenderedException.' );
    }
}

?>
