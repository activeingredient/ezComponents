<?php
/**
 * File containing the ezcBasePropertyNotFoundException class
 *
 * @package Base
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * ezcBasePropertyNotFoundException is thrown whenever a non existent property
 * is accessed in the Components library.
 *
 * @package Base
 * @version //autogen//
 */
class ezcBasePropertyNotFoundException extends ezcBaseException
{
    /**
     * Constructs a new ezcBasePropertyNotFoundException for the property
     * $name.
     */
    function __construct( $name )
    {
        parent::__construct( "No such property name '{$name}'." );
    }
}
?>
