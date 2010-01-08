<?php
/**
 * ezcDocTestConvertXhtmlDocbook
 * 
 * @package Document
 * @version //autogen//
 * @subpackage Tests
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once dirname( __FILE__ ) . '/options_test_case.php';

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentEzXmlOptionsTests extends ezcDocumentOptionsTestCase
{
    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    protected function getOptionsClassName()
    {
        return 'ezcDocumentEzXmlOptions';
    }

    public static function provideValidData()
    {
        return array(
            array(
                'relaxNgSchema',
                array( __FILE__ ),
            ),
        );
    }

    public static function provideInvalidData()
    {
        return array(
            array(
                'relaxNgSchema',
                array( 'foo', 23 ),
            ),
        );
    }
}

?>
