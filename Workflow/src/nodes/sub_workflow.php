<?php
/**
 * File containing the ezcWorkflowNodeSubWorkflow class.
 *
 * @package Workflow
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * An object of the ezcWorkflowNodeSubWorkflow class represents a sub-workflow.
 *
 * When the node is reached during execution of the workflow, the specified sub-workflow
 * is started. The original workflow is suspended until the sub-workflow has finished executing.
 *
 * Incomming nodes: 1
 * Outgoing nodes: 1
 *
 * @todo Example, how do you set the sub workflow starting point?
 * @package Workflow
 * @version //autogen//
 */
class ezcWorkflowNodeSubWorkflow extends ezcWorkflowNode
{
    /**
     * Execution ID of the sub workflow,
     * 0 if it has not been started yet.
     *
     * @var integer
     */
    protected $state = 0;

    /**
     * Executes this node.
     *
     * @param ezcWorkflowExecution $execution
     */
    public function execute( ezcWorkflowExecution $execution )
    {
        if ( $execution->definitionHandler === null )
        {
            throw new ezcWorkflowExecutionException(
              'No ezcWorkflowDefinitionStorage implementation available.'
            );
        }

        $workflow = $execution->definitionHandler->loadByName( $this->configuration );

        if ( !$workflow->isInteractive() && !$workflow->hasSubWorkflows() )
        {
            $subExecution = $execution->getSubExecution( null, false );
            $subExecution->workflow = $workflow;
            $subExecution->start();
        }
        else
        {
            // Sub Workflow has not been started yet.
            if ( $this->state == 0 )
            {
                $subExecution = $execution->getSubExecution();
                $subExecution->workflow = $workflow;
                $subExecution->start( $this->id );

                $this->state = $subExecution->getId();
            }
            // Sub Workflow has been started before.
            else
            {
                $subExecution = $execution->getSubExecution( $this->state );
                $subExecution->workflow = $workflow;
                $subExecution->resume();
            }
        }

        if ( $subExecution->hasEnded() )
        {
            $this->activateNode( $execution, $this->outNodes[0] );

            $this->state = 0;

            return parent::execute( $execution );
        }

        return false;
    }

    /**
     * Returns a textual representation of this node.
     *
     * @return string
     */
    public function __toString()
    {
        return 'Sub Workflow: ' . $this->configuration;
    }
}
?>
