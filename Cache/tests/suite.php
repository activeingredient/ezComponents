<?php
/**
 * ezcCacheSuite
 * 
 * @package Cache
 * @subpackage Tests
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
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
 * Require storage options test suite. 
 */
require_once 'storage_options_test.php';
/**
 * Require stack options test suite. 
 */
require_once 'stack_options_test.php';
/**
 * Require file storage options test suite. 
 */
require_once 'storage_file_options_test.php';
/**
 * Require array storage test suite. 
 */
require_once 'storage_array_test.php';
/**
 * Require Apc array storage test suite. 
 */
require_once 'storage_apc_array_test.php';
/**
 * Require array eval storage test suite. 
 */
require_once 'storage_evalarray_test.php';
/**
 * Require plain storage test suite. 
 */
require_once 'storage_plain_test.php';
/**
 * Require APC storage test suite. 
 */
require_once 'storage_apc_plain_test.php';
/**
 * Require Memcache storage test suite. 
 */
require_once 'storage_memcache_plain_test.php';

/**
 * Require stack test suite. 
 */
require_once 'stack_test.php';
/**
 * Require stack configuration test suite. 
 */
require_once 'stack_storage_configuration_test.php';

/**
 * Require LRU replacement strategy test suite.
 */
require_once 'replacement_strategy_lru_test.php';
/**
 * Require LFU replacement strategy test suite.
 */
require_once 'replacement_strategy_lfu_test.php';

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
        $this->addTest( ezcCacheStorageApcPlainTest::suite() );
        $this->addTest( ezcCacheStorageFileApcArrayTest::suite() );
        $this->addTest( ezcCacheStorageMemcachePlainTest::suite() );
        $this->addTest( ezcCacheStorageOptionsTest::suite() );
        $this->addTest( ezcCacheStorageFileOptionsTest::suite() );
        $this->addTest( ezcCacheManagerTest::suite() );
        $this->addTest( ezcCacheStackOptionsTest::suite() );
        $this->addTest( ezcCacheStackTest::suite() );
        $this->addTest( ezcCacheStackStorageConfigurationTest::suite() );
        $this->addTest( ezcCacheStackLruReplacementStrategyTest::suite() );
        $this->addTest( ezcCacheStackLfuReplacementStrategyTest::suite() );
    }

    public static function suite()
    {
        return new ezcCacheSuite( "ezcCacheSuite" );
    }
}
?>
