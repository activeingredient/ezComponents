<?php
/**
 * ezcCacheSuite
 * 
 * @package Cache
 * @subpackage Tests
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Require manager test suite. 
 */
require_once 'manager_test.php';

/**
 * Require file storage test suite. 
 */
require_once 'storage_file_test.php';
/**
 * Require file storage test suite. 
 */
require_once 'storage_options_test.php';
/**
 * Require array storage test suite. 
 */
require_once 'storage_array_test.php';
/**
 * Require array eval storage test suite. 
 */
require_once 'storage_evalarray_test.php';
/**
 * Require plain storage test suite. 
 */
require_once 'storage_plain_test.php';
    
/**
 * Test suite for Cache package. 
 * 
 * @package Cache
 * @subpackage Tests
 */
class ezcCacheSuite extends PHPUnit_Framework_TestSuite
{
    public function __construct()
    {
        parent::__construct();
        $this->setName( "Cache" );

        $this->addTest( ezcCacheStorageFileArrayTest::suite() );
        $this->addTest( ezcCacheStorageFileEvalArrayTest::suite() );
        $this->addTest( ezcCacheStorageFilePlainTest::suite() );
        $this->addTest( ezcCacheStorageFileTest::suite() );
        $this->addTest( ezcCacheStorageOptionsTest::suite() );
        $this->addTest( ezcCacheManagerTest::suite() );
    }

    public static function suite()
    {
        return new ezcCacheSuite( "ezcCacheSuite" );
    }
}
?>
