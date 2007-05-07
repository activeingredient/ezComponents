<?php
/**
 * File containing the ezcConsoleargumentAlreadyRegisteredException.
 * 
 * @package ConsoleTools
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * There is already an argument registered with the given name or at the given place.
 *
 * @package ConsoleTools
 * @version //autogen//
 */
class ezcConsoleArgumentAlreadyRegisteredException extends ezcConsoleException
{
    /**
     * The name of the argument is already in use.
     */
    const NAMED = 1;
    
    /**
     * The position of the argument is already in use. Unset the position first and the re-register.
     */
    const ORDERED = 2;

    function __construct( $offset, $type )
    {
        switch ( $type )
        {
            case self::NAMED:
                $message = "Argument with name '$offset' already registered.";
                break;
            case self::ORDERED:
                $message = "Argument at position '$offset' already registered.";
                break;
        }
        parent::__construct( $message );
    }
}
?>
