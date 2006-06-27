<?php
/**
 * File containing the ezcGraphUnknownPaletteException class
 *
 * @package Graph
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * ezcGraphUnknownPaletteException is the exception which is thrown when the
 * factory method tries to return an instance of an unknown chart type
 *
 * @package Graph
 * @version //autogen//
 */
class ezcGraphUnknownPaletteException extends ezcGraphException
{
    public function __construct( $name )
    {
        parent::__construct( "No palette with name <{$name}> could be found." );
    }
}

?>
