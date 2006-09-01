<?php
/**
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package SignalObserver
 * @subpackage Tests
 */

/**
 * Including the tests
 */
require_once( "signal_collection_test.php" );
require_once( "static_connections_test.php" );

/**
 * @package PhpGenerator
 * @subpackage Tests
 */
class ezcSignalObserverSuite extends ezcTestSuite
{
    public function __construct()
    {
        parent::__construct();
        $this->setName("SignalObserver");

        $this->addTest( ezcSignalCollectionTest::suite() );
        $this->addTest( ezcSignalStaticConnectionsTest::suite() );
    }

    public static function suite()
    {
        return new ezcSignalObserverSuite();
    }
}
?>
