<?php
require_once 'PHPUnit/TextUI/ResultPrinter.php';

class ezcTestPrinter extends PHPUnit_TextUI_ResultPrinter
{
    public function __construct( $verbose = false )
    {
        parent::__construct( null, $verbose );
    }

    protected function writeProgress($progress)
    {
        $this->write($progress);
    }

    public function startTestSuite(PHPUnit_Framework_TestSuite $suite)
    {
        parent::write( "\n" );

        $name    = $suite->getName() == '' ? '[No name given]' : $suite->getName(); 
        $padding = str_repeat( '  ', $this->depth++ );

        parent::write( $padding . str_pad(  $name . ': ' , 40, ' ', STR_PAD_RIGHT ) );
    }

    public function endTestSuite(PHPUnit_Framework_TestSuite $suite)
    {
        $this->depth--;
    }

    /** 
     * Write everything except the:  .. by Sebastian Bergmann.\n\n strings.
     */
    public function write( $string )
    {
        if ( strlen( $string ) < 23 || strcmp( "by Sebastian Bergmann.\n\n", substr( $string, -24 ) ) != 0 )
        {
            parent::write( $string );
        }
    }
}
?>
