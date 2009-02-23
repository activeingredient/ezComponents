<?php
/**
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package MvcMailTiein
 * @subpackage Tests
 */

/**
 * Including the tests
 */
require 'request_parsers/mail.php';
require 'request_filters/bugzilla.php';

/**
 * @package MvcMailTiein
 * @subpackage Tests
 */
class ezcMvcMailTieinSuite extends PHPUnit_Framework_TestSuite
{
    public function __construct()
    {
        parent::__construct();
        $this->setName( 'MvcMailTiein' );

        $this->addTest( ezcMvcMailTieinMailRequestParserTest::suite() );
        $this->addTest( ezcMvcToolsBugzillaRequestFilterTest::suite() );
    }

    public static function suite()
    {
        return new ezcMvcMailTieinSuite();
    }
}

?>
