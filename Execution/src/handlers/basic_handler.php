<?php
/**
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Execution
 */

/**
 * Simple implementation of a callback handler to use with ezcExecution.
 *
 * This is a very simple callback handler which only issues a simple message.
 * Of course in applications you will need to either extend this class, or just
 * implement the ezcExecutionErrorHandler interface.
 *
 * @package Execution
 */
class ezcExecutionBasicErrorHandler implements ezcExecutionErrorHandler
{
    /**
     * Processes an error situation
     *
     * This method is called by the ezcExecution environment whenever an error
     * situation (uncaught exception or fatal error) happens.  It accepts one
     * default parameter in case there was an uncaught exception.
     *
     * This class just serves as an example, for your own application you
     * should write your own class that implements the ezcExecutionErrorHandler
     * interface and use that as parameter to {@link ezcExecution::init()}
     *
     * @param Exception $e
     *
     * @return void
     */
    static public function onError( Exception $e = NULL )
    {
        echo <<<END
This application stopped in an unclean way.  Please contact the maintainer of
this system and explain him that the system doesn't work properly at the
moment.

Have a nice day!

END;
    }
}
?>
