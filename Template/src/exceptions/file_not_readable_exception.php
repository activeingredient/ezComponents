<?php
/**
 * File containing the ezcTemplateFileNotReadableException class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception for problems when reading from template files.
 *
 * @package Template
 * @version //autogen//
 */
class ezcTemplateFileNotReadableException extends Exception
{

    /**
     * Initialises the exception with the template file path.
     *
     * @param string $stream The stream path to the template file which could not be
     * read.
     */
    public function __construct( $stream )
    {
        parent::__construct( "The requested template file '$stream' is not readable." );
    }

}
?>
