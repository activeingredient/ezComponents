<?php
/**
 * @package Workflow
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'case.php';
require_once 'execution.php';

/**
 * @package Workflow
 * @subpackage Tests
 */
class ezcWorkflowExecutionPluginVisualizerTest extends ezcWorkflowTestCase
{
    protected $execution;
    protected $tempDir;
    protected $visualizer;

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( 'ezcWorkflowExecutionPluginVisualizerTest' );
    }

    protected function setUp()
    {
        parent::setUp();

        $this->tempDir    = $this->createTempDir( 'ezcWorkflow_' );
        $this->visualizer = new ezcWorkflowExecutionVisualizerPlugin( $this->tempDir );

        $this->execution = new ezcWorkflowTestExecution;
        $this->execution->addPlugin( $this->visualizer );
    }

    protected function tearDown()
    {
        $this->removeTempDir();
    }

    public function testVisualizeStartEnd()
    {
        $this->setUpStartEnd();
        $this->execution->workflow = $this->workflow;

        $this->visualizer->options['includeVariables'] = false;

        $this->execution->start();

        $common   = DIRECTORY_SEPARATOR . 'StartEnd_000_%03d.dot';
        $expected = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $common;
        $actual   = $this->tempDir      . $common;

        for ( $i = 1; $i <= 4; $i++ )
        {
            $this->assertFileEquals(
              sprintf( $expected, $i ), sprintf( $actual, $i )
            );
        }
    }

    public function testVisualizeIncrementingLoop()
    {
        $this->setUpLoop( 'increment' );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $common   = DIRECTORY_SEPARATOR . 'IncrementingLoop_000_%03d.dot';
        $expected = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . $common;
        $actual   = $this->tempDir      . $common;

        for ( $i = 1; $i <= 44; $i++ )
        {
            $this->assertFileEquals(
              sprintf( $expected, $i ), sprintf( $actual, $i )
            );
        }
    }

    public function testProperties()
    {
        try
        {
            $foo = $this->visualizer->foo;
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testProperties2()
    {
        try
        {
            $this->visualizer->foo = 'foo';
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testOptions()
    {
        try
        {
            $this->visualizer->options = null;
        }
        catch ( ezcBaseValueException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testOptions2()
    {
        try
        {
            $this->visualizer->options['directory'] = null;
        }
        catch ( ezcBaseValueException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testOptions3()
    {
        try
        {
            $this->visualizer->options['directory'] = 'foo';
        }
        catch ( ezcBaseFileNotFoundException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testOptions4()
    {
        try
        {
            $this->visualizer->options['includeVariables'] = null;
        }
        catch ( ezcBaseValueException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testOptions5()
    {
        try
        {
            $this->visualizer->options['foo'] = null;
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }

        $this->fail();
    }
}
?>
