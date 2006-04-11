<?php
/**
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Database
 * @subpackage Tests
 */

/**
 * Testing the SQL expression abstraction layer for INSERT queries.
 *
 * @package Database
 * @subpackage Tests
 */
class ezcQueryInsertTest extends ezcTestCase
{
    private $q;

    public function setUp()
    {
        $db = ezcDbInstance::get();
        $this->assertNotNull( $db, 'Database instance is not initialized.' );

        $this->q = new ezcQueryInsert( $db );
        try
        {
            $db->exec( 'DROP TABLE query_test' );
        }
        catch ( Exception $e ) {} // eat

        // insert some data
        $db->exec( 'CREATE TABLE query_test ( id int, company VARCHAR(255), section VARCHAR(255), employees int )' );

    }

    public function tearDown()
    {
        $db = ezcDbInstance::get();
        $db->exec( 'DROP TABLE query_test' );
    }

    public function testSingle()
    {
        $reference = "INSERT INTO legends ( Gretzky ) VALUES ( 99 )";
        $this->q->insertInto( 'legends' )
            ->set( 'Gretzky', '99' );
        $this->assertEquals( $reference, $this->q->getQuery() );
    }

    public function testMulti()
    {
        $reference = "INSERT INTO legends ( Gretzky, Lindros ) VALUES ( 99, 88 )";
        $this->q->insertInto( 'legends' )
            ->set( 'Gretzky', '99' )
            ->set( 'Lindros', '88' );
        $this->assertEquals( $reference, $this->q->getQuery() );
    }

    public function testNoTable()
    {
        try
        {
            $this->q->set( 'Gretzky', '99' )->set( 'Lindros', '88' );
            $this->q->getQuery();
        }
        catch ( Exception $e )
        {
            return;
        }
        $this->fail( "Insert query with no table did not fail!" );
    }

    public function testNoValues()
    {
        try
        {
            $this->q->insertInto( 'MyTable' );
            $this->q->getQuery();
        }
        catch ( Exception $e )
        {
            return;
        }
        $this->fail( "Insert query with no values did not fail!" );
    }

    // test on a real database.
    public function testOnDatabase()
    {
        $q = $this->q;
        $q->insertInto( 'query_test' )
            ->set( 'id', 1 )
            ->set( 'company', $q->bindValue( 'eZ systems' ) )
            ->set( 'section', $q->bindValue( 'Norway' ) )
            ->set( 'employees', 20 );
        $stmt = $q->prepare();
        $stmt->execute();

        // check that it was actually correctly set
        $db = ezcDbInstance::get();
        $q = $db->createSelectQuery(); // get select query
        $q->select( '*' )->from( 'query_test' )
            ->where( $q->expr->eq( 'id', 1 ) );
        $stmt = $q->prepare();
        $stmt->execute();
        $result = $stmt->fetchAll();
        $this->assertEquals( 1, (int)$result[0][0] );
        $this->assertEquals( 'eZ systems', $result[0][1] );
    }

    // test several inserts on a real database.
    public function testSeveralInsertsOnDatabase()
    {
        $db = ezcDbInstance::get();
        if ( $db->getName() == 'sqlite' ) //complex right joins not supported by sqlite yet
        {
            self::markTestSkipped( "Complex right joins not supported by sqlite yet" );
        }

        $q = $this->q;
        $q->insertInto( 'query_test' )
            ->set( 'id', 1 )
            ->set( 'company', $q->bindValue( 'eZ systems' ) )
            ->set( 'section', $q->bindValue( 'Norway' ) )
            ->set( 'employees', 20 );
        $stmt = $q->prepare();
        $stmt->execute();
    
        $q->insertInto( 'query_test' );
        $q->set( 'id', 2 );
        $q->set( 'company', $q->bindValue( 'trolltech' ) );
        $q->set( 'section', $q->bindValue( 'Norway' ) );
        $q->set( 'employees', 70 );
        $stmt = $q->prepare();
        $stmt->execute();

        // check that it was actually correctly set
        $db = ezcDbInstance::get();
        $q = $db->createSelectQuery(); // get select query
        $q->select( '*' )->from( 'query_test' )
            ->where( $q->expr->eq( 'id', 1 ) );
        $stmt = $q->prepare();
        $stmt->execute();
        $result = $stmt->fetchAll();
        $this->assertEquals( 1, (int)$result[0][0] );
        $this->assertEquals( 'eZ systems', $result[0][1] );

        // check that it was actually correctly set
        $db = ezcDbInstance::get();
        $q = $db->createSelectQuery(); // get select query
        $q->select( '*' )->from( 'query_test' )
            ->where( $q->expr->eq( 'id', 2 ) );
        $stmt = $q->prepare();
        $stmt->execute();
        $result = $stmt->fetchAll();
        $this->assertEquals( 2, (int)$result[0][0] );
        $this->assertEquals( 'trolltech', $result[0][1] );

    }


    public static function suite()
    {
        return new ezcTestSuite( 'ezcQueryInsertTest' );
    }
}
?>
