<?php
/**
 * File containing the ezcMvcControllerException class.
 *
 * @package MvcTools
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * This exception is thrown when an error in a controller occurs.
 *
 * @package MvcTools
 * @version //autogentag//
 */
class ezcMvcControllerException extends ezcMvcToolsException
{
    /**
     * Constructs an ezcMvcControllerException
     */
    public function __construct( $message )
    {
        parent::__construct( $message );
    }
}
?>
