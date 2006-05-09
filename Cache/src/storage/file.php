<?php
/**
 * File containing the ezcCacheStorageFile class.
 *
 * @package Cache
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

/**
 * This class implements most of the methods which have been declared abstract 
 * in {@link ezcCacheStorage}, but also declares 2 new methods abstract, which
 * have to be implemented by storage driver itself. 
 *
 * This class is a common base class for all file system based storage classes.
 * To implement a file system based cache storage, you simply have to derive
 * from this class and implement the {@link ezcCacheStorageFile::fetchData()}
 * and {@link ezcCacheStorageFile::prepareData()} methods. Everything else is
 * done for you by the ezcCacheStorageFile base class.
 *
 * For example code of using a cache storage, see {@link ezcCacheManager}.
 *
 * The Cache package already contains several implementations of 
 * {@link ezcCacheStorageFile}. As there are:
 *
 * - ezcCacheStorageFileArray
 * - ezcCacheStorageFileEvalArray
 * - ezcCacheStorageFilePlain
 * 
 * @package Cache
 */
abstract class ezcCacheStorageFile extends ezcCacheStorage
{
    /**
     * Fetch data from the cache.
     * This method does the fetching of the data itself. In this case, the
     * method simply includes the file and returns the value returned by the
     * include ( or false on failure ).
     * 
     * @param string $filename The file to fetch data from.
     * @return mixed The fetched data or false on failure.
     */
    abstract protected function fetchData( $filename );

    /**
     * Serialize the data for storing.
     * Serializes a PHP variable ( except type resource and object ) to a
     * executable PHP code representation string.
     * 
     * @param mixed $data Simple type or array
     * @return string The serialized data
     *
     * @throws ezcCacheInvalidDataException
     *         If the data submitted can not be handled by the implementation 
     *         of {@link ezcCacheStorageFile}. Most implementations can not
     *         handle objects and resources.
     */
    abstract protected function prepareData( $data );

    /**
     * Store data to the cache storage.
     * This method stores the given cache data into the cache, assigning the
     * ID given to it.
     *
     * The type of cache data which is expected by a ezcCacheStorage depends on
     * it's implementation. In most cases strings and arrays will be accepted, 
     * in some rare cases only strings might be accepted.
     *
     * Using attributes you can describe your cache data further. This allows 
     * you to deal with multiple cache data at once later. Some ezcCacheStorage
     * implementations also use the attributes for storage purposes. Attributes
     * form some kind of "extended ID".
     * 
     * @param string $id                        Unique identifier for the data.
     * @param mixed $data                       The data to store.
     * @param array(string=>string) $attributes Attributes describing the 
     *                                          cached data.
     * 
     * @return string The ID string of the newly cached data.
     *
     * @throws ezcBaseFilePermissionException
     *         If an already existsing cache file could not be unlinked to 
     *         store the new data (may occur, when a cache item's TTL
     *         has expired and the file should be stored with more actual
     *         data). This exception means most likely that your cache diretory
     *         has been corrupted by external influences (file permission 
     *         change).
     * @throws ezcBaseFilePermissionException
     *         If the directory to store the cache file could not be created.
     *         This exception means most likely that your cache diretory
     *         has been corrupted by external influences (file permission 
     *         change).     
     * @throws ezcBaseFileIoException
     *         If an error occured while writing the data to the cache. If this
     *         exception occurs, a serious error occured and your storage might
     *         be corruped (e.g. broken network connection, file system broken,
     *         ...).
     * @throws ezcCacheInvalidDataException
     *         If the data submitted can not be handled by the implementation 
     *         of {@link ezcCacheStorageFile}. Most implementations can not
     *         handle objects and resources.
     */
    public function store( $id, $data, $attributes = array() ) 
    {
        $filename = $this->location . $this->generateIdentifier( $id, $attributes );
        if ( file_exists( $filename ) ) 
        {
            if ( unlink( $filename ) === false ) 
            {
                throw new ezcBaseFilePermissionException( $filename, ezcBaseFileException::WRITE, 'Could not delete existsing cache file.' );
            }
        }
        $dataStr = $this->prepareData( $data );
        $dirname = dirname( $filename );
        if ( !is_dir( $dirname ) && !mkdir( $dirname, 0777, true ) )
        {
            throw new ezcBaseFilePermissionException( $dirname, ezcBaseFileException::WRITE, 'Could not create directory to stor cache file.' );
        }
        
        if ( file_put_contents( $filename, $dataStr ) !== strlen( $dataStr ) ) 
        {
            throw new ezcBaseFileIoException( $filename, ezcBaseFileException::WRITE, 'Could not write data to cache file.' );
        }
        return $id;
    }

    /**
     * Restore data from the cache.
     * Restores the data associated with the given cache and
     * returns it. Please see {@link ezcCacheStorage::store()}
     * for more detailed information of cachable datatypes.
     *
     * During access to cached data the caches are automatically
     * expired. This means, that the ezcCacheStorage object checks
     * before returning the data if it's still actual. If the cache 
     * has expired, data will be deleted and false is returned.
     *
     * You should always provide the attributes you assigned, although
     * the cache storages must be able to find a cache ID even without
     * them. BEWARE: Finding cache data only by ID can be much
     * slower than finding it by ID and attributes.
     *
     * @param string $id                         The item ID to restore.
     * @param array(string=>string) $attributes  Attributes describing the 
     *                                           data to restore.
     * 
     * @return mixed|bool The cached data on success, otherwise false.
     *
     * @throws ezcBaseFilePermissionException
     *         If an already existsing cache file could not be unlinked. 
     *         This exception means most likely that your cache diretory
     *         has been corrupted by external influences (file permission 
     *         change).
     */
    public function restore( $id, $attributes = array() )
    {
        $filename = $this->location . $this->generateIdentifier( $id, $attributes );
        if ( file_exists( $filename ) === false ) 
        {
            if ( count( $files = $this->search( $id, $attributes ) ) === 1 ) 
            {
                $filename = $files[0];
            } 
            else 
            {
                return false;
            }
        }
        // No cached data
        if ( file_exists( $filename ) === false ) 
        {
            return false;
        }
        // Cached data outdated, purge it.
        if ( $this->calcLifetime( $filename ) > $this->options['ttl'] && $this->options['ttl'] !== 0 ) 
        {
            $this->delete( $id, $attributes );
            return false;
        }
        return ( $this->fetchData( $filename ) );
    }

    /**
     * Delete data from the cache.
     * Purges the cached data for a given ID and or attributes. Using an ID
     * purges only the cache data for just this ID. 
     *
     * Additional attributes provided will matched additionally. This can give
     * you an immense speed improvement against just searching for ID ( see 
     * {@link ezcCacheStorage::restore()} ).
     *
     * If you only provide attributes for deletion of cache data, all cache
     * data matching these attributes will be purged.
     *
     * @param string $id                         The item ID to purge.
     * @param array(string=>string) $attributes  Attributes describing the 
     *                                           data to restore.
     * @return void
     *
     * @throws ezcBaseFilePermissionException
     *         If an already existsing cache file could not be unlinked. 
     *         This exception means most likely that your cache diretory
     *         has been corrupted by external influences (file permission 
     *         change).
     */
    public function delete( $id = null, $attributes = array() )
    {
        $filename = $this->location . $this->generateIdentifier( $id, $attributes );
        $delFiles = array();
        if ( file_exists( $filename ) ) 
        {
            $delFiles[] = $filename;
        } 
        else 
        {
            $delFiles = $this->search( $id, $attributes );
        }
        foreach ( $delFiles as $filename ) 
        {
            if ( unlink( $filename ) === false ) 
            {
                throw new ezcBaseFilePermissionException( $filename, ezcBaseFileException::WRITE, 'Could not unlink cache file.' );
            }
        }
    }

    /**
     * Return the number of items in the cache matching a certain criteria.
     * This method determines if cache data described by the given ID and/or
     * attributes exists. It returns the number of cache data items found.
     *
     * @param string $id                         The item ID.
     * @param array(string=>string) $attributes  Attributes describing the 
     *                                           data to restore.
     * @return int Number of data items matching the criteria. 
     */
    public function countDataItems( $id = null, $attributes = array() )
    {
        return count( $this->search( $id, $attributes ) );
    }

    /**
     * Returns the time ( in seconds ) which remains for a cache object,
     * before it gets outdated. In case the cache object is already 
     * outdated or does not exists, this method returns 0.
     * 
     * @param string $id                         The item ID.
     * @param array(string=>string) $attributes  Attributes describing the 
     *                                           data to restore.
     * @access public
     * @return int The remaining lifetime (0 if nonexists or oudated).
     */
    public function getRemainingLifetime( $id, $attributes = array() )
    {
        if ( count( $objects = $this->search( $id, $attributes ) ) > 0 ) 
        {
            $lifetime = $this->calcLifetime( $objects[0] );
            return ( ( $remaining = ( $this->options['ttl'] - $lifetime ) ) > 0 ) ? $remaining : 0;
        }
        return 0;
    }

    /**
     * Search the storage for data.
     * 
     * @param string $id                         An item ID.
     * @param array(string=>string) $attributes  Attributes describing the 
     *                                           data to restore.
     * @return void
     */
    private function search( $id = null, $attributes = array() )
    {
        $glob = strtr( $this->generateIdentifier( $id, $attributes ), array( '-' => '*', '.' => '*' ) );
        $glob = ( isset( $id ) ? '*' : '' ) . $glob;
        $glob = $this->location . $glob;
        return glob( $glob );
    }

    /**
     * Checks if a given location is valid.
     * Checks if the location exists and tries to create it, if not. Also checks
     * if the location is read-/writable and throws an exception, if not.
     * 
     * @return void
     *
     * @throws ezcBaseFileNotFoundException
     *         If the storage location does not exist. This should usually not 
     *         happen, since {@link ezcCacheManager::createCache()} already
     *         performs sanity checks for the cache location. In case this 
     *         exception is thrown, your cache location has been corrupted 
     *         after the cache was configured.
     * @throws ezcBaseFileNotFoundException
     *         If the storage location is not a directory. This should usually 
     *         not happen, since {@link ezcCacheManager::createCache()} already
     *         performs sanity checks for the cache location. In case this 
     *         exception is thrown, your cache location has been corrupted 
     *         after the cache was configured.
     * @throws ezcBaseFilePermissionException
     *         If the storage location is not writeable. This should usually not 
     *         happen, since {@link ezcCacheManager::createCache()} already
     *         performs sanity checks for the cache location. In case this 
     *         exception is thrown, your cache location has been corrupted 
     *         after the cache was configured.
     */
    protected function validateLocation()
    {
        if ( file_exists( $this->location ) === false ) 
        {
            throw new ezcBaseFileNotFoundException( $this->location, 'cache location' );
        }
            
        if ( is_dir( $this->location ) === false ) 
        {
            throw new ezcBaseFileNotFoundException( $this->location, 'cache location', 'Cache location not a directory.' );
        }

        if ( is_writeable( $this->location ) === false ) 
        {
            throw new ezcBaseFilePermissionException( $this->location, ezcBaseFileException::WRITE, 'Cache location is not a directory.' );
        }
    }

    /**
     * Generate the storage internal identifier from ID and attributes.
     *
     * Generates the storage internal identifier out of the provided ID and the
     * attributes. This is the default implementation and can be overloaded if
     * necessary.
     *
     * @param string $id                         The ID.
     * @param array(string=>string) $attributes  Attributes describing the 
     *                                           data to restore.
     * @return string              The generated identifier
     */
    public function generateIdentifier( $id, $attributes = null )
    {
        $filename = (string) $id;
        $illegalFileNameChars = array(
            ' '  => '_',
            '/'  => DIRECTORY_SEPARATOR,
            '\\' => DIRECTORY_SEPARATOR,
        );
        $filename = strtr( $filename, $illegalFileNameChars );
      
        // Chars used for filename concatination
        $illegalChars = array(
            '-' => '#',
            ' ' => '%',
            '=' => '+',
            '.' => '+',
        );
        if ( is_array( $attributes ) && count( $attributes ) > 0 ) 
        {
            ksort( $attributes );
            foreach ( $attributes as $key => $val ) 
            {
                $attrStr = '-' . strtr( $key, $illegalChars ) . '=' . strtr( $val, $illegalChars );
                if ( strlen( $filename . $attrStr ) > 250 ) 
                {
                    // Max filename length
                    break;
                }
                $filename .= $attrStr;
            }   
        }
        return $filename . $this->options['extension'];
    }

    /**
     * Calculates the lifetime remaining for a cache object. 
     * This calculates the time a cached object stays valid and returns it.
     * 
     * @param string $file The file to calculate the remaining lifetime for.
     * @access protected
     * @return int The remaining lifetime in seconds ( 0 if no time remaining ).
     */
    protected function calcLifetime( $file )
    {
        if ( ( file_exists( $file ) !== false ) && ( ( $modTime = filemtime( $file ) ) !== false ) ) 
        {
            return ( ( $lifeTime = ( time() - $modTime ) ) > 0 ) ? $lifeTime : 0;
        }
    }
}
?>
