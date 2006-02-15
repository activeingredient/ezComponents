<?php
/**
 * File containing the ezcCacheInvalidIdException
 * 
 * @package Cache
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception that is thrown if the given cache ID does not exist.
 * Caches must be created using {@link ezcCacheManager::createCache()} before 
 * they can be access using {@link ezcCacheManager::getCache()}. If you try to
 * access a non-existent cache ID, this exception will be thrown.
 *
 * @package Cache
 * @version //autogen//
 */
class ezcCacheInvalidIdException extends ezcCacheException
{
    function __construct( $id )
    {
        parent::__construct( "No cache or cache configuration known with ID <{$id}>." );
    }
}
?>

