<?php
/**
 * @package WorkflowDatabaseTiein
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'Workflow/tests/case.php';

/**
 * @package WorkflowDatabaseTiein
 * @subpackage Tests
 */
abstract class ezcWorkflowDatabaseTieinTestCase extends ezcWorkflowTestCase
{
    protected $db;
    protected $definition;

    protected function setUp()
    {
        parent::setUp();

        try
        {
            $this->db = ezcDbInstance::get();

            $this->cleanupTables( $this->db );

            $schema = ezcDbSchema::createFromFile(
              'array',
              dirname( __FILE__ ) . '/workflow.dba'
            );

            $schema->writeToDb( $this->db );

            $this->definition = new ezcWorkflowDatabaseDefinitionStorage( $this->db );
        }
        catch ( Exception $e )
        {
            $this->markTestSkipped( 'No test database has been configured.' );
        }
    }

    protected function tearDown()
    {
        if ( $this->db !== null )
        {
            $this->cleanupTables();
        }

        $this->db = null;
        $this->definition = null;
    }

    protected function cleanupTables()
    {
        switch ( $this->db->getName() )
        {
            case 'pgsql':
            {
                $tables = $this->db->query( "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'" )->fetchAll();
                array_walk( $tables, create_function( '&$item,$key', '$item = $item[0];' ) );

                foreach ( $tables as $tableName )
                {
                    $this->db->query( "DROP TABLE \"$tableName\"" );
                }
            }
            break;

            default:
            {
                $this->db->exec( 'DROP TABLE IF EXISTS workflow;' );
                $this->db->exec( 'DROP TABLE IF EXISTS node;' );
                $this->db->exec( 'DROP TABLE IF EXISTS node_connection;' );
                $this->db->exec( 'DROP TABLE IF EXISTS variable_handler;' );
                $this->db->exec( 'DROP TABLE IF EXISTS execution;' );
                $this->db->exec( 'DROP TABLE IF EXISTS execution_state;' );
            }
        }
    }
}
?>
