<?php
/**
 * File containing the getcontentlength property class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * An object of this class represents the Webdav property <getcontentlength>.
 *
 * @property string $length
 *           The content length.
 *
 * @version //autogentag//
 * @package Webdav
 */
class ezcWebdavGetContentLengthProperty extends ezcWebdavLiveProperty
{
    /**
     * The WebDav RFC defines that each DAV: compliant resource must have this
     * property set. It does not define what should be returned for
     * collections. We use the string in this constant for this.
     */
    const COLLECTION = '-1';

    /**
     * Creates a new ezcWebdavGetContentLengthProperty.
     * 
     * @param string $length The length.
     * @return void
     */
    public function __construct( $length = null )
    {
        parent::__construct( 'getcontentlength' );

        $this->length = $length;
    }

    /**
     * Sets a property.
     * This method is called when an property is to be set.
     * 
     * @param string $propertyName The name of the property to set.
     * @param mixed $propertyValue The property value.
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
            case 'length':
                if ( ( is_string( $propertyValue ) === false || is_numeric( $propertyValue ) === false ) && $propertyValue !== null )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'string of digits' );
                }

                $this->properties[$propertyName] = $propertyValue;
                break;

            default:
                parent::__set( $propertyName, $propertyValue );
        }
    }
}

?>
