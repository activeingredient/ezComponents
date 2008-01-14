<?php
/**
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package PersistentObject
 * @subpackage Tests
 */

require_once 'persistent_session_test.php';

/**
 * Misc tests for ezcPersistentSession.
 *
 * @package PersistentObject
 * @subpackage Tests
 */
class ezcPersistentSessionMiscTest extends ezcPersistentSessionTest
{
    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    // Properties 

    public function testDatabaseProperty()
    {
        $db = ezcDbInstance::get();
        $session = new ezcPersistentSession( $db,
                                             new ezcPersistentCodeManager( dirname( __FILE__ ) . "/data/" ) );
        $this->assertSame( $db, $session->database );
        try
        {
            $session->database = $db;
            $this->fail( "Did not get exception when expected" );
        }
        catch ( ezcBasePropertyPermissionException $e )
        {
        }
    }

    public function testDefinitionManagerProperty()
    {
        $db = ezcDbInstance::get();
        $manager = new ezcPersistentCodeManager( dirname( __FILE__ ) . "/data/" );
        $session = new ezcPersistentSession( $db, $manager );
        $this->assertSame( $manager, $session->definitionManager );
        try
        {
            $session->definitionManager = $manager;
            $this->fail( "Did not get exception when expected" );
        }
        catch ( ezcBasePropertyPermissionException $e )
        {
        }
    }

    // Overloading

    public function testGetAccessFailure()
    {
        $db = ezcDbInstance::get();
        $manager = new ezcPersistentCodeManager( dirname( __FILE__ ) . "/data/" );
        $session = new ezcPersistentSession( $db, $manager );

        try
        {
            $foo = $session->non_existent;
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }
        $this->fail( "Exception not thrown on get access to non existent property." );
    }
    
    public function testSetAccessFailure()
    {
        $db = ezcDbInstance::get();
        $manager = new ezcPersistentCodeManager( dirname( __FILE__ ) . "/data/" );
        $session = new ezcPersistentSession( $db, $manager );

        try
        {
            $session->database = null;
            $this->fail( "Exception not thrown on set access to ezcPersistentSession->database." );
        }
        catch ( ezcBasePropertyPermissionException $e )
        {
            return;
        }

        try
        {
            $session->definitionManager = null;
            $this->fail( "Exception not thrown on set access to ezcPersistentSession->definitionManager." );
        }
        catch ( ezcBasePropertyPermissionException $e )
        {
            return;
        }

        try
        {
            $session->non_existent = null;
            $this->fail( "Exception not thrown on set access to non existent property." );
        }
        catch ( ezcBasePropertyPermissionException $e )
        {
            return;
        }
    }
    
    public function testExportImportDefinitions()
    {
        $classes = array(
            'PersistentTestObject',
            'RelationTestAddress',
            'RelationTestEmployer',
            'RelationTestBirthday',
            'RelationTestPerson',
        );
        $dir = $this->createTempDir( 'export' );

        foreach( $classes as $class )
        {
            $def = $this->session->definitionManager->fetchDefinition( $class );

            $file = $dir . "/$class.php";
            

            file_put_contents( $file, "<?php\nreturn " . var_export( $def, true ) . ";\n?>" );
            $deserialized = require $file;

            $this->assertEquals(
                $def,
                $deserialized,
                "Objects of class $class not exported/imported correctly."
            );

        }

        $this->removeTempDir();
    }
}

?>
