<?php
/**
 * File containing the ezcCacheStackOptions class.
 *
 * @package Cache
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

/**
 * Options class for ezcCacheStack instances.
 * 
 * This options class is used with {@link ezcCacheStack} instances.
 *
 * @property string $configurator
 *           Name of a class implementing ezcCacheStackConfigurator. This class
 *           will be used right after construction of the stack, to perform
 *           initial configuration. After the construction process, this option
 *           does not have any effect. Null (default) means no configuration.
 * @property ezcCacheMetaDataStorage $metaStorage
 *           This storage will be used to store the meta data of the
 *           replacement strategy used by the stack. If null (default) is
 *           given, the top most storage will be used.
 * @property string $replacementStrategy
 *           The  name of the class given in this property must extend {@link
 *           ezcCacheReplacementStrategy}. The class will be used as the
 *           replacement strategy in the stack. ezcCacheLruReplacementStrategy
 *           is the default.
 * @property bool $bubbleUpOnReplace
 *           This option determines if data that is restored from a storage in
 *           the stack will be bubbled up to higher caches. The default here is
 *           false, since it might significantly reduce the {@link
 *           ezcCacheStack::restore()} performance.
 *
 * @package Cache
 * @version //autogen//
 */
class ezcCacheStackOptions extends ezcBaseOptions
{
    /**
     * Construct a new options object.
     * Options are constructed from an option array by default. The constructor
     * automatically passes the given options to the __set() method to set them 
     * in the class.
     * 
     * @throws ezcBasePropertyNotFoundException
     *         If trying to access a non existent property.
     * @throws ezcBaseValueException
     *         If the value for a property is out of range.
     * @param array(string=>mixed) $options The initial options to set.
     */
    public function __construct( array $options = array() )
    {
        $this->properties['configurator']        = null;
        $this->properties['metaStorage']         = null;
        $this->properties['replacementStrategy'] = 'ezcCacheLruReplacementStrategy';
        $this->properties['bubbleUpOnReplace']   = false;
        parent::__construct( $options );
    }

    /**
     * Sets an option.
     * This method is called when an option is set.
     * 
     * @param string $propertyName  The name of the option to set.
     * @param mixed $propertyValue The option value.
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBaseValueException
     *         if the value to be assigned to a property is invalid.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a read-only property.
     */
    public function __set( $propertyName, $propertyValue )
    {
        switch ( $propertyName )
        {
            case 'configurator':
                if ( $propertyValue !== null && ( !class_exists( $propertyValue )
                     || !in_array( 'ezcCacheStackConfigurator', class_implements( $propertyValue ) ) ) )
                {
                    throw new ezcBaseValueException(
                        'configurator',
                        $propertyValue,
                        'class implementing ezcCacheStackConfigurator or null'
                    );
                }
                break;
            case 'metaStorage':
                if ( !$propertyValue !== null && !( $propertyValue instanceof ezcCacheMetaDataStorage ) )
                {
                    throw new ezcBaseValueException(
                        'configurator',
                        $propertyValue,
                        'ezcCacheMetaDataStorage or null'
                    );
                }
                break;
            case 'replacementStrategy':
                if ( !class_exists( $propertyValue ) || !in_array( 'ezcCacheStackReplacementStrategy', class_implements( $propertyValue ) ) )
                {
                    throw new ezcBaseValueException(
                        'configurator',
                        $propertyValue,
                        'class implementing ezcCacheStackReplacementStrategy'
                    );
                }
                break;
            case 'bubbleUpOnReplace':
                if ( !is_bool( $propertyValue ) )
                {
                    throw new ezcBaseValueException(
                        'bubbleUpOnReplace',
                        $propertyValue,
                        'bool'
                    );
                }
                break;
            default:
                throw new ezcBasePropertyNotFoundException( $propertyName );
        }
        $this->properties[$propertyName] = $propertyValue;
    }
}

?>
