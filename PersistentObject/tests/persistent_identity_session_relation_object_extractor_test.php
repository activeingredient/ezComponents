<?php
/**
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package PersistentObject
 * @subpackage Tests
 */

require_once dirname( __FILE__ ) . '/persistent_identity_session_relation_prefetch_test.php';

/**
 * Tests ezcPersistentManyToOneRelation class.
 *
 * @package PersistentObject
 * @subpackage Tests
 */
class ezcPersistentIdentitySessionRelationObjectExtractorTest extends ezcPersistentIdentitySessionRelationPrefetchTest
{
    protected $sesstion;

    protected $idMap;

    protected $extractor;

    protected $options;

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    public function setup()
    {
        parent::setup();

        RelationTestPerson::setupTables( $this->db );
        RelationTestPerson::insertData( $this->db );

        $this->session = new ezcPersistentSession(
            $this->db,
            $this->defManager
        );

        $this->idMap = new ezcPersistentBasicIdentityMap(
            $this->defManager
        );

        $this->options   =  new ezcPersistentIdentitySessionOptions();
        $this->extractor = new ezcPersistentIdentityRelationObjectExtractor(
            $this->idMap,
            $this->defManager,
            $this->options
        );
    }

    public function teardown()
    {
        RelationTestEmployer::cleanup( $this->db );
    }

    public function testOneLevelOneRelationExtract()
    {
        $relations = $this->getOneLevelOneRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        // Actual test
        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $person = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $person );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $person
        );

        $employers = $this->idMap->getRelatedObjects(
            $person, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $employers );

        $this->assertEquals( 1, count( $employers ) );

        $this->assertEquals(
            current( $employers ),
            current( $this->session->getRelatedObjects( $person, 'RelationTestEmployer' ) )
        );
    }

    public function testNamedSetNotOverwritten()
    {
        // Create fake named related set
        $person = $this->session->load( 'RelationTestPerson', 2 );
        $this->idMap->setIdentity( $person );

        $birthday = new RelationTestBirthday();
        $birthday->person = 2;
        $relatedObjectSet = array(
            '2' => $birthday
        );

        $this->idMap->setRelatedObjectSet(
            $person, $relatedObjectSet, 'foo'
        );

        // Perform query and extraction
        $relations = $this->getOneLevelOneRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $this->assertSame(
            $person,
            $this->idMap->getIdentity( 'RelationTestPerson', 2 )
        );

        $employers = $this->idMap->getRelatedObjects(
            $person, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $employers );

        $this->assertEquals( 1, count( $employers ) );

        $this->assertEquals(
            current( $employers ),
            current( $this->session->getRelatedObjects( $person, 'RelationTestEmployer' ) )
        );

        
        $this->assertEquals(
            $relatedObjectSet,
            $this->idMap->getRelatedObjectSet( $person, 'foo' )    
        );
    }

    public function testNoRefetch()
    {
        $relations = $this->getOneLevelOneRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $person = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $person );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $person
        );

        $employers = $this->idMap->getRelatedObjects(
            $person, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $employers );

        $this->assertEquals( 1, count( $employers ) );

        $this->assertEquals(
            current( $employers ),
            current( $this->session->getRelatedObjects( $person, 'RelationTestEmployer' ) )
        );

        // $this->options->refetch = true;

        $relations = $this->getOneLevelOneRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $secPerson = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $secPerson );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $secPerson
        );

        $this->assertSame( $person, $secPerson );

        $secEmployers = $this->idMap->getRelatedObjects(
            $secPerson, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $secEmployers );

        $this->assertEquals( 1, count( $secEmployers ) );

        $this->assertEquals(
            current( $secEmployers ),
            current( $this->session->getRelatedObjects( $secPerson, 'RelationTestEmployer' ) )
        );

        foreach ( $employers as $id => $employer )
        {
            $this->assertSame(
                $employer,
                $secEmployers[$id]
            );
        }
    }

    public function testRefetch()
    {
        $relations = $this->getOneLevelOneRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $person = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $person );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $person
        );

        $employers = $this->idMap->getRelatedObjects(
            $person, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $employers );

        $this->assertEquals( 1, count( $employers ) );

        $this->assertEquals(
            current( $employers ),
            current( $this->session->getRelatedObjects( $person, 'RelationTestEmployer' ) )
        );

        $this->options->refetch = true;

        $relations = $this->getOneLevelOneRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $secPerson = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $secPerson );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $secPerson
        );

        $this->assertNotSame( $person, $secPerson );

        $secEmployers = $this->idMap->getRelatedObjects(
            $secPerson, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $secEmployers );

        $this->assertEquals( 1, count( $secEmployers ) );

        $this->assertEquals(
            current( $secEmployers ),
            current( $this->session->getRelatedObjects( $secPerson, 'RelationTestEmployer' ) )
        );

        foreach ( $employers as $id => $employer )
        {
            $this->assertNotSame(
                $employer,
                $secEmployers[$id]
            );
        }
    }

    public function testOneLevelMultiRelationExtract()
    {
        $relations = $this->getOneLevelMultiRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        // Actual test
        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $person = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $person );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $person
        );

        $employers = $this->idMap->getRelatedObjects(
            $person, 'RelationTestEmployer'
        );
        
        $this->assertNotNull( $employers );

        $this->assertEquals( 1, count( $employers ) );

        $this->assertEquals(
            current( $employers ),
            current( $this->session->getRelatedObjects( $person, 'RelationTestEmployer' ) )
        );

        $addresses = $this->idMap->getRelatedObjects(
            $person, 'RelationTestAddress'
        );
        
        $this->assertNotNull( $addresses );

        $this->assertEquals( 3, count( $addresses ) );

        $this->assertEquals(
            current( $addresses ),
            current( $this->session->getRelatedObjects( $person, 'RelationTestAddress' ) )
        );
    }

    public function testMultiLevelSingleRelation()
    {
        $relations = $this->getMultiLevelSingleRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        // Actual test
        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $person = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $person );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $person
        );

        $addresses = $this->idMap->getRelatedObjects(
            $person, 'RelationTestAddress'
        );
        
        $this->assertNotNull( $addresses );

        $this->assertEquals( 3, count( $addresses ) );
        
        $realAddresses = $this->session->getRelatedObjects( $person, 'RelationTestAddress' );

        $this->assertEquals( $realAddresses, $addresses );

        foreach ( $addresses as $address )
        {
            $persons = $this->idMap->getRelatedObjects(
                $address, 'RelationTestPerson'
            );

            $this->assertNotNull( $persons );

            $realPersons = $this->session->getRelatedObjects(
                $address, 'RelationTestPerson'
            );

            $this->assertEquals( $realPersons, $persons );
        }
    }

    public function testMultiLevelMultiRelation()
    {
        $relations = $this->getMultiLevelMultiRelationRelations();
        $q         = $this->getLoadQuery( $relations );
        
        $stmt = $q->prepare();
        $stmt->execute();

        // Actual test
        $this->extractor->extractObjects(
            $stmt, 'RelationTestPerson', 2, $relations
        );

        $person = $this->idMap->getIdentity( 'RelationTestPerson', 2 );
        $this->assertNotNull( $person );
        $this->assertEquals(
            $this->session->load( 'RelationTestPerson', 2 ),
            $person
        );

        $addresses = $this->idMap->getRelatedObjects(
            $person, 'RelationTestAddress'
        );
        
        $this->assertNotNull( $addresses );

        $this->assertEquals( 3, count( $addresses ) );
        
        $realAddresses = $this->session->getRelatedObjects( $person, 'RelationTestAddress' );

        $this->assertEquals( $realAddresses, $addresses );

        foreach ( $addresses as $address )
        {
            $persons = $this->idMap->getRelatedObjects(
                $address, 'RelationTestPerson'
            );

            $this->assertNotNull( $persons );

            $realPersons = $this->session->getRelatedObjects(
                $address, 'RelationTestPerson'
            );

            $this->assertEquals( $realPersons, $persons );

            foreach ( $persons as $relPerson )
            {
                $employers = $this->idMap->getRelatedObjects( $relPerson, 'RelationTestEmployer' );
                $this->assertNotNull( $employers );
                $realEmployers = $this->session->getRelatedObjects( $relPerson, 'RelationTestEmployer' );
                $this->assertEquals( $realEmployers, $employers );

                $birthdays = $this->idMap->getRelatedObjects( $relPerson, 'RelationTestBirthday' );

                if ( $relPerson->id == 3 )
                {
                    // Person with ID 3 has no birthday assigned
                    $this->assertNull( $birthdays );
                }
                else
                {
                    $this->assertNotNull( $birthdays );
                    $realBirthdays = $this->session->getRelatedObjects( $relPerson, 'RelationTestBirthday' );
                    $this->assertEquals( $realBirthdays, $birthdays );
                }
            }
        }

        $employers = $this->idMap->getRelatedObjects( $person, 'RelationTestEmployer' );
        $this->assertNotNull( $employers );
        $realEmployers = $this->session->getRelatedObjects( $person, 'RelationTestEmployer' );
        $this->assertEquals( $realEmployers, $employers );

        $birthdays = $this->idMap->getRelatedObjects( $person, 'RelationTestBirthday' );
        $this->assertNotNull( $birthdays );
        $realBirthdays = $this->session->getRelatedObjects( $person, 'RelationTestBirthday' );
        $this->assertEquals( $realBirthdays, $birthdays );
    }

}

?>
