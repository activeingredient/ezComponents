<?php
/**
 * Test case for the ezcWebdavInfrastructureBase class.
 *
 * @package Webdav
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Reqiuire base test
 */
require_once 'test_case.php';

/**
 * Require mocked version of ezcWebdavPluginConfiguration. 
 */
require_once 'classes/custom_plugin_configuration.php';

/**
 * Tests for ezcWebdavInfrastructureBase class.
 * 
 * @package Webdav
 * @subpackage Tests
 */
class ezcWebdavPluginConfigurationTest extends ezcWebdavTestCase
{
	public static function suite()
	{
		return new PHPUnit_Framework_TestSuite( __CLASS__ );
	}

    public function testGetHooks()
    {
        $cfg = new fooCustomWebdavPluginConfiguration();
        $this->assertEquals(
            array(
                'ezcWebdavTransport' => array(
                    'extractLiveProperty' => array(
                        array( 'fooBar', 'baz' ),
                        array( 'fooCustomWebdavPluginConfiguration', 'test' ),
                    ),
                ),
            ),
            $cfg->getHooks()
        );
    }

    public function testGetNamespace()
    {
        $cfg = new fooCustomWebdavPluginConfiguration();
        $this->assertEquals(
            'foobar',
            $cfg->getNamespace()
        );
    }

    public function testInit()
    {
        $cfg = new fooCustomWebdavPluginConfiguration();
        $cfg->init();
        $this->assertEquals(
            'bar',
            $cfg->foo
        );
    }
}

?>
