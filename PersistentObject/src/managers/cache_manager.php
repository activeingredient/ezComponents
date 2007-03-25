<?php
/**
 * File containing the ezcPersistentDefinitionCache class
 *
 * @package PersistentObject
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Caches fetched definition so they don't have to be read from the original source
 * for each use.
 *
 * The cache is typically used to wrap around another ezcPersistentDefinitionManager
 * of your choice.
 *
 * @package PersistentObject
 */
class ezcPersistentCacheManager extends ezcPersistentDefinitionManager
{
    /**
     * Holds the manager that fetches definitions..
     *
     * @var ezcPersistentDefinitionManager
     */
    private $manager;

    /**
     * Holds the persistent object definitions that are currently cached.
     *
     * @var array( 'className' => ezcPerssitentDefinition )
     */
    private $cache = array();

    /**
     * Constructs a new definition cache.
     *
     * @param (ezcPersistentDefinitionManager $manager
     */
    public function __construct( ezcPersistentDefinitionManager $manager )
    {
        $this->manager = $manager;
    }

    /**
     * Returns the definition of the persistent object with the class $class.
     *
     * If a definition has been requested already the definition will be served from
     * the cache.
     *
     * @throws ezcPersistentDefinitionNotFoundException if no such definition can be found.
     * @param string $class
     * @return ezcPersistentDefinition
     */
    public function fetchDefinition( $class )
    {
        if( isset( $this->cache[$class] ) )
        {
            return $this->cache[$class];
        }

        $def = $this->manager->fetchDefinition( $class );

        // cache it
        $this->cache[$class] = $def;
        return $def;
    }
}
?>
