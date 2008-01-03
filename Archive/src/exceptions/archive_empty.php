<?php
/**
 * File containing the ezcArchiveEmptyException class.
 *
 * @package Archive
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception for when an archive is empty.
 *
 * @package Archive
 * @version //autogentag//
 */
class ezcArchiveEmptyException extends ezcArchiveException
{
    /**
     * Constructs a new exception for empty archive.
     */
    public function __construct()
    {
        parent::__construct( "The archive is empty." );
    }
}
?>
