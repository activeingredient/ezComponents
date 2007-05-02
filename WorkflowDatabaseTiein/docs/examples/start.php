<?php
require_once '../../../Workflow/docs/examples/common.php';

// Set up database connection.
$db = ezcDbFactory::create( 'mysql://test@localhost/test' );

// Set up workflow definition storage (database).
$definition = new ezcWorkflowDatabaseDefinition( $db );

// Load latest version of workflow named "Test".
$workflow = $definition->loadByName( 'Test' );

// Set up database-based workflow executer.
$execution = new ezcWorkflowDatabaseExecution( $db );

// Pass workflow object to workflow executer.
$execution->setWorkflow( $workflow );

// Start workflow execution.
$execution->start();
?>
