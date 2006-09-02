<?php
/**
 * @copyright Copyright (C) 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package SignalObserver
 */

/**
 * ezcSignalCollection implements a mechanism for inter and intra object communication.
 * TODO: order in which signals are called
 * TODO: examples
 *
 * @property bool $signalsBlocked     If set to true emits will not cause any slots to be called.
 *
 * @property-read string $identifier  The identifier of this signal collection.
 *                                    Usually the class name of the object containing the collection.
 *
 * @version //autogen//
 * @mainclass
 * @package SignalObserver
 */
class ezcSignalCollection
{
    /**
     * Holds the properties of this class.
     *
     * @var array(string=>mixed)
     */
    private $properties = array();

    /**
     * Holds the connections for this object with the default priority.
     *
     * @var array(string=>array(callback))
     */
    private $defaultConnections = array();

    /**
     * Holds the connections for this object with the default priority.
     *
     * @var array(string=>array(int=>array(callback)))
     */
    private $priorityConnections = array();

    /**
     * Constructs a new signal collection with the identifier $identifier.
     *
     * The identifier can be used to connect to signals statically using
     * ezcSignalStaticConnections.
     *
     * @param string $identifier
     */
    public function __construct( $identifier )
    {
        $this->properties['identifier'] = $identifier;
        $this->signalsBlocked = false;
    }

   /**
     * Sets the property $name to $value.
     *
     * @throws ezcBasePropertyNotFoundException if the property does not exist.
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function __set( $name, $value )
    {
        switch ( $name )
        {
            case 'signalsBlocked':
                $this->properties[$name] = $value;
                break;
            case 'identifier':
                throw new ezcBasePropertyPermissionException( $name, ezcBasePropertyPermissionException::READ );
                break;
            default:
                throw new ezcBasePropertyNotFoundException( $name );
                break;
        }

    }

    /**
     * Returns the property $name.
     *
     * @throws ezcBasePropertyNotFoundException if the property does not exist.
     * @param string $name
     * @return mixed
     */
    public function __get( $name )
    {
        switch ( $name )
        {
            case 'signalsBlocked':
            case 'identifier':
                return $this->properties[$name];
                break;

            default:
                throw new ezcBasePropertyNotFoundException( $name );
                break;
        }
    }


    /**
     * Emits the signal with the name $signal
     *
     * Any additional parameters are sent as parameters to the slot.
     *
     * @param string $signal
     * @param ... signal parameters
     * @return void
     */
    public function emit( $signal )
    {
        if( $this->signalsBlocked )
        {
            return;
        }

        // prepare the parameters
        $parameters = array_slice( func_get_args(), 1 );

        // check if there are any static connections
        $priStaticConnections = ezcSignalStaticConnections::getInstance()->getConnections( $this->identifier, $signal );
        $hasPriStaticConnections = false;
        if( count( $priStaticConnections ) > (isset( $priStaticConnections[1000] ) ? 1 : 0) )
        {
            $hasPriStaticConnections = true;
        }

        // fast algorithm if there are no prioritized slots
        if( isset( $this->priorityConnections[$signal] ) == 0 && !$hasPriStaticConnections )
        {
            if( isset( $this->defaultConnections[$signal] ) )
            {
                foreach( $this->defaultConnections[$signal] as $callback )
                {
                    call_user_func_array( $callback, $parameters );
                }
            }
            if( isset( $priStaticConnections[1000] ) )
            {
                foreach( $priStaticConnections[1000] as $callback )
                {
                    call_user_func_array( $callback, $parameters);
                }
            }
        }
        else // default algorithm
        {
            // order slots
            $defaultKeys = array();
            if( isset( $this->priorityConnections[$signal] ) )
            {
                $defaultKeys = array_keys( $this->priorityConnections[$signal] );
            }
            $staticKeys = array_keys( $priStaticConnections );

            $allKeys = array_unique( array_merge( $defaultKeys, $staticKeys, array( 1000 ) /*default*/ ) );
            sort( $allKeys, SORT_NUMERIC );

            foreach( $allKeys as $key ) // call all slots in the correct order
            {
                if( $key == 1000 && isset( $this->defaultConnections[$signal] ) )
                {
                    foreach( $this->defaultConnections[$signal] as $callback )
                    {
                        call_user_func_array( $callback, $parameters );
                    }
                }
                if( isset( $this->priorityConnections[$signal][$key] ) )
                {
                    foreach( $this->priorityConnections[$signal][$key] as $callback )
                    {
                        call_user_func_array( $callback, $parameters );
                    }
                }
                if( isset( $priStaticConnections[$key] ) )
                {
                    foreach( $priStaticConnections[$key] as $callback )
                    {
                        call_user_func_array( $callback, $parameters );
                    }
                }
            }
        }

}

    /**
     * Connects the signal $signal to the slot $slot.
     *
     * To control the order in which slots are called you can set a priority
     * from 1 - 65 536. The lower the number the higher the priority. The default
     * priority is 1000.
     * Slots with the same priority may be called with in any order.
     *
     * A slot will be called once for every time it is connected. It is possible
     * to connect a slot more than once.
     *
     * See the PHP documentation for examples on the callback type.
     * http://php.net/callback.
     *
     * We reccommend avoiding excessive usage of the $priority parameter
     * since it makes it much harder to track how your program works.
     *
     * @param string $signal
     * @param callback $slot
     * @param int priority
     * @return void
     */
    public function connect( $signal, $slot, $priority = 1000 )
    {
        if( $priority === 1000 ) // default
        {
            $this->defaultConnections[$signal][] = $slot;
        }
        else
        {
            $this->priorityConnections[$signal][$priority][] = $slot;
            sort( $this->priorityConnections[$signal][$priority], SORT_NUMERIC );
        }
    }

    /**
     * Disconnects the $slot from the $signal.
     *
     * If the priority is given it will try to disconnect a slot with that priority.
     * If no such slot is found no slot will be disconnected.
     *
     * If no priority is given it will disconnect the matching slot with the lowest priority.
     *
     * @param string $signal
     * @param callback $slot
     * @param int priority
     * @return void
     */
    public function disconnect( $signal, $slot, $priority = null )
    {
        if( $priority === null ) // delete first found, searched from back
        {
            $priorityKeys = array();
            if( isset( $this->priorityConnections[$signal] ) )
            {
                $priorityKeys = array_keys( $this->priorityConnections[$signal] );
            }

            $allPriorities = array_unique( array_merge( $priorityKeys, array( 1000 ) /*default*/ ) );
            rsort( $allPriorities, SORT_NUMERIC );
            foreach( $allPriorities as $priority )
            {
                if( $priority === 1000 )
                {
                    if( isset( $this->defaultConnections[$signal] ) )
                    {
                        foreach( $this->defaultConnections[$signal] as $key => $callback )
                        {
                            if( ezcSignalCallbackComparer::compareCallbacks( $slot, $callback ) )
                            {
                                unset( $this->defaultConnections[$signal][$key] );
                                return;
                            }
                        }
                    }
                }
                else
                {
                    if( isset( $this->priorityConnections[$signal] ) &&
                        isset( $this->priorityConnections[$signal][$priority] ) )
                    {
                        foreach( $this->priorityConnections[$signal][$priority] as $key => $callback)
                        {
                            if( ezcSignalCallbackComparer::compareCallbacks( $slot, $callback ) )
                            {
                                unset( $this->priorityConnections[$signal][$priority][$key] );
                                return;
                            }
                        }
                    }
                }
            }

        }
        else if( $priority === 1000 ) // only delete from default
        {
            if( isset( $this->defaultConnections[$signal] ) )
            {
                foreach( $this->defaultConnections[$signal] as $key => $callback )
                {
                    if( ezcSignalCallbackComparer::compareCallbacks( $slot, $callback ) )
                    {
                        unset( $this->defaultConnections[$signal][$key] );
                        return;
                    }
                }
            }
        }
        else // delete from priority connectinos
        {
            if( isset( $this->priorityConnections[$signal] ) &&
                isset( $this->priorityConnections[$signal][$priority] ) )
            {
                foreach( $this->priorityConnections[$signal][$priority] as $key => $callback )
                {
                    if( ezcSignalCallbackComparer::compareCallbacks( $slot, $callback ) )
                    {
                        unset( $this->priorityConnections[$signal][$priority][$key] );
                        return;
                    }
                }
            }
        }
    }

    // move to private class
    public function comp_func( $a, $b )
    {
        if( $a === $b ) return 0;
        return 1;
    }
}
?>
