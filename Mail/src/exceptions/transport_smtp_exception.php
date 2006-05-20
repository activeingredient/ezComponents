<?php
/**
 * File containing the ezcMailException class
 *
 * @package Mail
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * ezcMailTransportSmtpExceptions are thrown when an exceptional state
 * occures internally in the ezcMailSmtpTransport class. As it never enters
 * "userspace" the class is marked as private.
 *
 * @package Mail
 * @version //autogen//
 * @access private
 */
class ezcMailTransportSmtpException extends ezcMailException
{
    /**
     * Constructs an ezcMailTransportSmtpException with the highlevel error
     * message $message and the lowlevel errormessage $additionalInfo.
     *
     * @param int $code
     */
    public function __construct( $message )
    {
        parent::__construct( $message );
    }
}
?>
