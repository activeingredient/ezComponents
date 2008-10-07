<?php
/**
 * File containing the ezcWebdavLockIfHeaderTaggedList class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * List class for If header values, if they are tagged.
 * 
 * @package Webdav
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
class ezcWebdavLockIfHeaderTaggedList extends ezcWebdavLockIfHeaderList
{
    /**
     * List items. 
     * 
     * @var array(ezcWebdavLockIfHeaderListItem)
     */
    protected $items;

    /**
     * Creates a new tagged If header list.
     *
     * This list contains items of type {@link ezcWebdavLockIfHeaderListItem}
     * assigned to resource pathes.
     */
    public function __construct()
    {
        $this->items = array();
    }

    /**
     * Returns if the given $offset exists.
     * 
     * @param string $offset 
     * @return bool
     *
     * @throws ezcBaseValueException
     *         if $offset is not a string with length > 0.
     */
    public function offsetExists( $offset )
    {
        if ( !is_string( $offset ) || strlen( $offset ) < 1 )
        {
            throw new ezcBaseValueException(
                'offset',
                $offset,
                'string, length > 0',
                'Offset must be a valid path.'
            );
        }

        return isset( $this->items[$offset] );
    }

    /**
     * Returns the value of the given offset.
     *
     * Returns an instance of {@link ezcWebdavLockIfHeaderListItem}, if it
     * exists, null otherwise.
     * 
     * @param string $offset 
     * @return ezcWebdavLockIfHeaderListItem|null
     *
     * @throws ezcBaseValueException
     *         if $offset is not a string with length > 0.
     */
    public function offsetGet( $offset )
    {
        if ( !is_string( $offset ) || strlen( $offset ) < 1 )
        {
            throw new ezcBaseValueException(
                'offset',
                $offset,
                'string, length > 0',
                'Offset must be a valid path.'
            );
        }

        if ( $this->offsetExists( $offset ) )
        {
            return $this->items[$offset];
        }
        return null;
    }

    /**
     * Set a new $offset with $value.
     *
     * $offset must be a string with length > 0 (a resource path) and $value
     * must be an instance of {@link ezcWebdavLockIfHeaderListItem}.
     * 
     * @param string $offset 
     * @param ezcWebdavLockIfHeaderListItem $value 
     * @return void
     *
     * @throws ezcBaseValueException
     *         if $offset or $value are not of the correct type.
     */
    public function offsetSet( $offset, $value )
    {
        if ( !is_string( $offset ) || strlen( $offset ) < 1 )
        {
            throw new ezcBaseValueException(
                'offset',
                $offset,
                'string, length > 0',
                'Offset must be a valid path.'
            );
        }

        if ( !( $value instanceof ezcWebdavLockIfHeaderListItem ) )
        {
            throw new ezcBaseValueException(
                'value',
                $value,
                'ezcWebdavLockIfHeaderListItem'
            );
        }

        $this->items[$offset] = $value;
    }

    /**
     * Unset the given offset.
     * 
     * @param string $offset 
     * @return void
     *
     * @throws ezcBaseValueException
     *         if $offset is not a string with length > 0.
     */
    public function offsetUnset( $offset )
    {
        if ( !is_string( $offset ) || strlen( $offset ) < 1 )
        {
            throw new ezcBaseValueException(
                'offset',
                $offset,
                'string, length > 0',
                'Offset must be a valid path.'
            );
        }

        unset( $this->items[$offset] );
    }
}

?>
