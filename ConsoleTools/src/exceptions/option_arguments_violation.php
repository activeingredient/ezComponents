<?php
/**
 * File containing the ezcConsoleOptionArgumentsViolationException.
 * 
 * @package ConsoleTools
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * An option excludes the usage of arguments, but there were arguments submitted.
 * This exception can be caught using {@link ezcConsoleOptionException}.
 *
 * @package ConsoleTools
 * @version //autogen//
 */
class ezcConsoleOptionArgumentsViolationException extends ezcConsoleOptionException
{
    function __construct( ezcConsoleOption $option )
    {
        parent::__construct( "The option with long name '{$option->long}' excludes the usage of arguments, but arguments have been submitted." );
    }
}

?>
