<?php
require_once '../../../Workflow/docs/examples/common.php';

// Set up database connection.
$db = ezcDbFactory::create( 'mysql://test@localhost/test' );

// Set up workflow definition storage (database).
$definition = new ezcWorkflowDatabaseDefinition( $db );

// Load latest version of workflow named "Test".
$workflow = $definition->loadByName( 'Test' );

// Generate GraphViz/dot markup for workflow "Test".
$visitor = new ezcWorkflowVisitorVisualization;
$workflow->accept( $visitor );
print $visitor;
?>
