<?php
require_once '../../../Workflow/docs/examples/common.php';

// Set up database connection.
$db = ezcDbFactory::create( 'mysql://test@localhost/test' );

// Set up database-based workflow executer.
$execution = new ezcWorkflowDatabaseExecution( $db );

// Resume workflow execution.
$execution->resume(
  1,                        // Execution ID.
  array( 'choice' => true ) // Input data.
);
?>
