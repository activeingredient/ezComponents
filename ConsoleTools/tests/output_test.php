<?php
/**
 * ezcConsoleToolsOutputTest 
 * 
 * @package ConsoleTools
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Test suite for ezcConsoleOutput class.
 * 
 * @package ConsoleTools
 * @subpackage Tests
 */
class ezcConsoleToolsOutputTest extends ezcTestCase
{
    /**
     * testString 
     * 
     * @var string
     */
    private $testString = 'A passion for php';

    private $testFormats = array(
        'color_only_1' => array(
            'in'  => array( 
                'color' => 'blue',
            ),
            'out' => "\033[34m%s\033[0m"
        ),
        'color_only_2' => array( 
            'in'  => array( 
                'color' => 'red',
            ),
            'out' => "\033[31m%s\033[0m"
        ),
        'bgcolor_only_1' => array( 
            'in'  => array( 
                'bgcolor' => 'green',
            ),
            'out' => "\033[42m%s\033[0m"
        ),
        'bgcolor_only_2' => array( 
            'in'  => array( 
                'bgcolor' => 'yellow',
            ),
            'out' => "\033[43m%s\033[0m"
        ),
        'style_only_1' => array( 
            'in'  => array( 
                'style' => 'bold',
            ),
            'out' => "\033[1m%s\033[0m"
        ),
        'style_only_2' => array( 
            'in'  => array( 
                'style' => 'negative',
            ),
            'out' => "\033[7m%s\033[0m"
        ),
    );

    private $testOptions = array( 
        'set_1' => array( 
            'verboseLevel'      => 1,
        ),
        'set_2' => array( 
            'verboseLevel'      => 5,
            'autobreak'         => 20,
            'useFormats'        => false,
        ),
        'set_3' => array( 
            'autobreak'         => 5,
            'useFormats'        => true,
            'format'            => array( 
                'color' => 'blue',
                'bgcolor' => 'green',
                'style' => 'negative',
            ),
        ),
    );

    /**
     * consoleOutput 
     * 
     * @var mixed
     */
    private $consoleOutput;

	public static function suite()
	{
		return new ezcTestSuite( "ezcConsoleToolsOutputTest" );
	}

    /**
     * setUp 
     * 
     * @access public
     */
    public function setUp()
    {
        $this->consoleOutput = new ezcConsoleOutput();
        foreach ( $this->testFormats as $name => $inout ) 
        {
            foreach ( $inout['in'] as $formatName => $val )
            {
                $this->consoleOutput->formats->$name->$formatName = $val;
            }
        }
    }

    /**
     * tearDown 
     * 
     * @access public
     */
    public function tearDown()
    {
        unset( $this->consoleOutput );
    }

    /**
     * testFormatText
     * 
     * @access public
     */
    public function testFormatText()
    {
        foreach ( $this->testFormats as $name => $inout ) 
        {
            $realRes = $this->consoleOutput->formatText( $this->testString, $name );
            $fakeRes = sprintf( $inout['out'], $this->testString );
            $this->assertEquals( 
                $realRes,
                $fakeRes, 
                "Test <{$name}> failed. String <{$realRes}> (real) is not equal to <{$fakeRes}> (fake)."
            );
        }
    }

    /**
     * testOutputText
     * 
     * @access public
     */
    public function testOutputText()
    {
        foreach ( $this->testFormats as $name => $inout ) 
        {
            ob_start();
            $this->consoleOutput->outputText( $this->testString, $name );
            $realRes = ob_get_contents();
            ob_end_clean();
            $fakeRes = sprintf( $inout['out'], $this->testString );
            $this->assertEquals( 
                $fakeRes, 
                $realRes,
                "Test <{$name}> failed. String <{$realRes}> (real) is not equal to <{$fakeRes}> (fake)."
            );
        }
    }

    /**
     * testOutputTextAutobreak
     * 
     * @access public
     */
    public function testOutputTextAutobreak()
    {
        $this->consoleOutput->options->autobreak = 20;
        $testText = 'Some text which is obviously longer than 20 characters and should be broken.';
        $testResText = 'Some text which is
obviously longer
than 20 characters
and should be
broken.';
        
        foreach ( $this->testFormats as $name => $inout ) 
        {
            ob_start();
            $this->consoleOutput->outputText( $testText, $name );
            $realRes = ob_get_contents();
            ob_end_clean();
            
            $fakeRes = sprintf( $inout['out'], $testResText );
            $this->assertEquals( 
                $fakeRes, 
                $realRes, 
                'Test "' . $name . ' failed. String <' . $realRes . '> (real) is not equal to <' . $fakeRes . '> (fake).' 
            );
        }
    }

    /**
     * dumpString 
     * 
     * @param mixed $string 
     */
    private function dumpString( $string )
    {
        echo 'Dumping string of length ' . strlen( $string ) . ":\n\n";
        for ( $i = 0; $i < strlen( $string ); $i++ )
        {
            echo "<{$string[$i]}> = -" . ord( $string[$i] ) . "-\n";
        }
        echo "Finished dumping string.\n\n";
    }
}
?>
