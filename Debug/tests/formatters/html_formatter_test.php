<?php
/**
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Debug
 * @subpackage Tests
 */

require_once 'Debug/tests/test_classes.php';

/**
 * @package Debug
 * @subpackage Tests
 */
class ezcDebugHtmlFormatterTest extends ezcTestCase
{
    public function testHtml()
    {
        $html = new ezcDebugHtmlFormatter();

        $struct = new HtmlReporterDataStructures();

        $out = $html->generateOutput($struct->getLogStructure(), $struct->getTimeStructure());


        /*
        $fh = fopen("output.html", "w");
        fwrite( $fh, $out);
        fclose($fh);
        */
    }

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite(__CLASS__);
    }
}
?>
