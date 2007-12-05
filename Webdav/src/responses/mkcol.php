<?php
/**
 * File containing the ezcWebdavMakeCollectionResponse class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Class generated by the backend to respond to MKCOL requests.
 *
 * If a {@link ezcWebdavBackend} receives an instance of {@link
 * ezcWebdavMakeCollectionRequest} it might react with an instance of {@link
 * ezcWebdavMakeCollectionResponse} or with producing an error.
 *
 * @version //autogentag//
 * @package Webdav
 */
class ezcWebdavMakeCollectionResponse extends ezcWebdavResponse
{
    /**
     * Creates a new response object.
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct( ezcWebdavResponse::STATUS_201 );
    }
}

?>
