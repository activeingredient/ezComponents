<?php
/**
 * File containing the ezcMailException class
 *
 * @package Mail
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * ezcMailExceptions are thrown when an exceptional state
 * occures in the Mail package.
 *
 * @package Mail
 * @version //autogen//
 */
class ezcMailException extends ezcBaseException
{
    /**
     * Constructs a new ezcMailException with error message $message and
     * error code $code.
     *
     * @param string $message
     * @param int $code
     */
    public function __construct( $message )
    {
        parent::__construct( $message, 0 );
    }
}
?>
