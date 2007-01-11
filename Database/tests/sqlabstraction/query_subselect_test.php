<?php
/**
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Database
 * @subpackage Tests
 */

class TestSubSelect extends ezcQuerySelect
{
    // @todo: Do we need the below? We use them for testing now, but
    // they could come in handy if we want to manipulate SELECT queries in
    // Persistent Object.
    public function buildSelect()
    {
        return $this->selectString;
    }

    public function buildFrom()
    {
        return $this->fromString;
    }

    public function buildWhere()
    {
        return $this->whereString;
    }

    public function buildOrder()
    {
        return $this->orderString;
    }

    public function buildGroup()
    {
        return $this->groupString;
    }

    public function buildLimit()
    {
        return $this->limitString;
    }
}

/**
 * Testing the SQL abstraction layer.
 * This file tests that the methods actually produce correct output for the base
 * implementation regardless of how they methods are called. The _impl file tests
 * the same again, but with full SQL calls, only using one call type and on the database.
 *
 * @package Database
 * @subpackage Tests
 * @todo, test with null input values
 */
class ezcQuerySubSelectTest extends ezcTestCase
{
    private $q; // query
    private $e; // queryExpression
    protected function setUp()
    {
        try
        {
            $db = ezcDbInstance::get();
        }
        catch ( Exception $e )
        {
            $this->markTestSkipped();
        }

        $this->q = new TestSubSelect( $db );
        $this->e = $this->q->expr;
    }

    public function testSubSelect()
    {
        $reference = '( SELECT column FROM table WHERE id = 1 )';
        $q2 = $this->q->subSelect();
        $q2->select( 'column' )->from( 'table' )->where($q2->expr->eq('id', 1 ) );

        $this->assertEquals( $reference, $q2->getQuery() );
    }

    public function testSubSubSelect()
    {
        $reference = '( SELECT column FROM table WHERE id = ( SELECT * FROM table2 ) )';
        $q2 = $this->q->subSelect();
        $q3 = $q2->subSelect();
        $q3->select( '*' )->from( 'table2' );
        $q2->select( 'column' )->from( 'table' )->where($q2->expr->eq('id', $q3->getQuery() ) );

        $this->assertEquals( $reference, $q2->getQuery() );

    }

    public function testBindAuto()
    {
        $val1 = '';
        $val2 = '';
        
        $reference = '( SELECT column FROM table WHERE id = :ezcValue1 AND id2 = :ezcValue2 )';
        $q2 = $this->q->subSelect();
        $q2->select( 'column' )
             ->from( 'table' )
               ->where( $q2->expr->eq( 'id', $q2->bindParam( $val1 ) ) )
               ->where( $q2->expr->eq( 'id2', $q2->bindParam( $val2 ) ) );

        $this->assertEquals( $reference, $q2->getQuery() );
    }

    public function testBindManual()
    {
        $reference = '( SELECT column FROM table WHERE id = :test1 AND id2 = :test2 )';
        $val1 = '';
        $val2 = '';
        $q2 = $this->q->subSelect();
        $q2->select( 'column' )
             ->from( 'table' )
               ->where( $q2->expr->eq( 'id', $q2->bindParam( $val1, ':test1' ) ) )
               ->where( $q2->expr->eq( 'id2', $q2->bindParam( $val2, ':test2' ) ) );

        $this->assertEquals( $reference, $q2->getQuery() );
    }


    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( 'ezcQuerySubSelectTest' );
    }
}
?>
