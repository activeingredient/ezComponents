<?php
/**
 * File containing the ezcTreeTransactionAlreadyStartedException class.
 *
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogen//
 * @filesource
 * @package Tree
 */

/**
 * Exception that is thrown when a transaction is active and
 * "beginTransaction()" is called again.
 *
 * @package Tree
 * @version //autogen//
 */
class ezcTreeTransactionAlreadyStartedException extends ezcTreeException
{
    /**
     * Constructs a new ezcTreeTransactionAlreadyStartedException.
     */
    public function __construct()
    {
        parent::__construct( "A transaction has already been started." );
    }
}
?>
