<?php
/**
 * Client test for Konqueror 3.
 *
 * @package Webdav
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'client_test_suite.php';
require_once 'client_test_continuous_setup.php';

/**
 * Client test for Konqueror 3.
 * 
 * @package Webdav
 * @subpackage Tests
 */
class ezcWebdavKonqueror3ClientTest extends ezcTestCase
{
    public static function suite()
    {
        return new ezcWebdavClientTestSuite(
            'Konqueror 3',
            'clients/konqueror_3.php',
            new ezcWebdavClientTestContinuousSetup()
        );
    }
}

?>
