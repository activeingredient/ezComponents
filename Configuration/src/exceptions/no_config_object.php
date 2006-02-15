<?php
/**
 * File containing the ezcConfigurationException class
 *
 * @package Configuration
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception that is thrown if no configuration object has been set to operate
 * on. The operation cannot continue with this object.
 *
 * @package Configuration
 * @version //autogen//
 */
class ezcConfigurationNoConfigObjectException extends ezcConfigurationException
{
    function __construct()
    {
        parent::__construct( 'There is no config object to save.' );
    }
}
?>
