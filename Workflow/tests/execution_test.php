<?php
/**
 * @package Workflow
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'case.php';
require_once 'execution.php';

/**
 * @package Workflow
 * @subpackage Tests
 */
class ezcWorkflowExecutionTest extends ezcWorkflowTestCase
{
    protected $execution;

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( 'ezcWorkflowExecutionTest' );
    }

    protected function setUp()
    {
        parent::setUp();
        $this->execution = new ezcWorkflowTestExecution;
    }

    public function testNoWorkflowRaisesException()
    {
        try
        {
            $execution = new ezcWorkflowExecutionNonInteractive;
            $execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testInteractiveWorkflowRaisesException()
    {
        $this->setupEmptyWorkflow();

        $input = new ezcWorkflowNodeInput( array( 'choice' => new ezcWorkflowConditionIsBool ) );

        $this->startNode->addOutNode( $input );
        $this->endNode->addInNode( $input );

        try
        {
            $execution = new ezcWorkflowExecutionNonInteractive;
            $execution->workflow = $this->workflow;
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testExecuteStartEnd()
    {
        $this->setUpStartEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteStartEndVariableHandler()
    {
        $this->setUpStartEndVariableHandler();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
        $this->assertEquals( 'bar', $this->execution->getVariable( 'foo' ) );
    }

    public function testExecuteStartInputEnd()
    {
        $this->setUpStartInputEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->setInputVariable( 'variable', 'value' );
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteStartInputEnd2()
    {
        $this->setUpStartInputEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->setInputVariable( 'variable', false );

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowInvalidInputException $e )
        {
            $this->assertTrue( isset( $e->errors ) );
            $this->assertFalse( isset( $e->foo ) );
            $this->assertArrayHasKey( 'variable', $e->errors );
            $this->assertContains( 'is string', $e->errors );

            $this->assertFalse( $this->execution->hasEnded() );
            $this->assertTrue( $this->execution->isResumed() );
            $this->assertFalse( $this->execution->isSuspended() );

            return;
        }

        $this->fail();
    }

    public function testExecuteStartInputEnd3()
    {
        $this->setUpStartInputEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->setInputVariable( 'variable', false );

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowInvalidInputException $e )
        {
            try
            {
                $e->errors = array();
            }
            catch ( ezcBasePropertyPermissionException $e )
            {
                return;
            }

            $this->fail();
        }

        $this->fail();
    }

    public function testExecuteStartInputEnd4()
    {
        $this->setUpStartInputEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->setInputVariable( 'variable', false );

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowInvalidInputException $e )
        {
            try
            {
                $foo = $e->foo;
            }
            catch ( ezcBasePropertyNotFoundException $e )
            {
                return;
            }

            $this->fail();
        }

        $this->fail();
    }

    public function testExecuteStartInputEnd5()
    {
        $this->setUpStartInputEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->setInputVariable( 'variable', false );

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowInvalidInputException $e )
        {
            try
            {
                $e->foo = 'bar';
            }
            catch ( ezcBasePropertyNotFoundException $e )
            {
                return;
            }

            $this->fail();
        }

        $this->fail();
    }

    public function testExecuteStartSetUnsetEnd()
    {
        $this->setUpStartSetUnsetEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteIncrementingLoop()
    {
        $this->setUpLoop( 'increment' );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteDecrementingLoop()
    {
        $this->setUpLoop( 'decrement' );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteSetAddSubMulDiv()
    {
        $this->setUpSetAddSubMulDiv();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
        $this->assertEquals( 1, $this->execution->getVariable( 'x' ) );
    }

    public function testExecuteAddVariables()
    {
        $this->setUpAddVariables();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
        $this->assertEquals( 2, $this->execution->getVariable( 'b' ) );
    }

    public function testExecuteAddVariables2()
    {
        $this->setUpAddVariables2();
        $this->execution->workflow = $this->workflow;

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testExecuteAddVariables3()
    {
        $this->setUpAddVariables3();
        $this->execution->workflow = $this->workflow;

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testExecuteParallelSplitSynchronization()
    {
        $this->setUpParallelSplitSynchronization();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteParallelSplitInvalidSynchronization()
    {
        $this->setUpParallelSplitInvalidSynchronization();
        $this->execution->workflow = $this->workflow;

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            $this->assertEquals(
              'Cannot synchronize threads that were started by different branches.',
              $e->getMessage()
            );

            return;
        }

        $this->fail();
    }

    public function testExecuteExclusiveChoiceSimpleMerge()
    {
        $this->setUpExclusiveChoiceSimpleMerge();
        $this->execution->workflow = $this->workflow;
        $this->execution->setVariables( array( 'condition' => true ) );
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteExclusiveChoiceSimpleMerge2()
    {
        $this->setUpExclusiveChoiceSimpleMerge();
        $this->execution->workflow = $this->workflow;
        $this->execution->setVariables( array( 'condition' => false ) );
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteExclusiveChoiceSimpleMerge3()
    {
        $this->setUpExclusiveChoiceSimpleMerge( 'ezcWorkflowConditionIsTrue', 'ezcWorkflowConditionIsTrue' );
        $this->execution->workflow = $this->workflow;
        $this->execution->setVariables( array( 'condition' => false ) );

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            $this->assertEquals(
              'Node activates less conditional outgoing nodes than required.',
              $e->getMessage()
            );

            return;
        }

        $this->fail();
    }

    public function testExecuteExclusiveChoiceSimpleMerge4()
    {
        $this->setUpExclusiveChoiceSimpleMerge( 'ezcWorkflowConditionIsTrue', 'ezcWorkflowConditionIsTrue' );
        $this->execution->workflow = $this->workflow;
        $this->execution->setVariables( array( 'condition' => true ) );

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            $this->assertEquals(
              'Node activates more conditional outgoing nodes than allowed.',
              $e->getMessage()
            );

            return;
        }

        $this->fail();
    }

    public function testExclusiveChoiceWithUnconditionalOutNodeSimpleMerge()
    {
        $this->setUpExclusiveChoiceWithUnconditionalOutNodeSimpleMerge();
        $this->execution->workflow = $this->workflow;
        $this->execution->setVariables( array( 'condition' => false ) );
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertTrue( $this->execution->getVariable( 'y' ) );
        $this->assertTrue( $this->execution->getVariable( 'z' ) );
    }

    public function testExclusiveChoiceWithUnconditionalOutNodeSimpleMerge2()
    {
        $this->setUpExclusiveChoiceWithUnconditionalOutNodeSimpleMerge();
        $this->execution->workflow = $this->workflow;
        $this->execution->setVariables( array( 'condition' => true ) );
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertTrue( $this->execution->getVariable( 'x' ) );
        $this->assertTrue( $this->execution->getVariable( 'z' ) );
    }

    public function testExecuteNestedExclusiveChoiceSimpleMerge()
    {
        $this->setUpNestedExclusiveChoiceSimpleMerge();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertTrue( $this->execution->getVariable( 'x' ) );
        $this->assertTrue( $this->execution->getVariable( 'y' ) );
        $this->assertTrue( $this->execution->getVariable( 'z' ) );
    }

    public function testExecuteNestedExclusiveChoiceSimpleMerge2()
    {
        $this->setUpNestedExclusiveChoiceSimpleMerge( true, false );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertTrue( $this->execution->getVariable( 'x' ) );
        $this->assertFalse( $this->execution->getVariable( 'y' ) );
        $this->assertFalse( $this->execution->getVariable( 'z' ) );
    }

    public function testExecuteNestedExclusiveChoiceSimpleMerge3()
    {
        $this->setUpNestedExclusiveChoiceSimpleMerge( false );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertFalse( $this->execution->getVariable( 'x' ) );
        $this->assertFalse( $this->execution->getVariable( 'z' ) );
    }

    public function testExecuteMultiChoiceSynchronizingMerge()
    {
        $this->setUpMultiChoice( 'SynchronizingMerge' );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testExecuteMultiChoiceDiscriminator()
    {
        $this->setUpMultiChoice( 'Discriminator' );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testNonInteractiveSubWorkflow()
    {
        $this->setUpWorkflowWithSubWorkflow( 'StartEnd' );
        $this->execution->definitionStorage = $this->definition;
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testNonInteractiveSubWorkflow2()
    {
        $this->setUpWorkflowWithSubWorkflow( 'StartEnd' );
        $this->execution->workflow = $this->workflow;

        try
        {
            $this->execution->start();
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            $this->assertEquals(
              'No ezcWorkflowDefinitionStorage implementation available.',
              $e->getMessage()
            ); 

            return;
        }

        $this->fail();
    }

    public function testInteractiveSubWorkflow()
    {
        $this->setUpWorkflowWithSubWorkflow( 'StartInputEnd' );
        $this->execution->definitionStorage = $this->definition;
        $this->execution->workflow = $this->workflow;
        $this->execution->setInputVariableForSubWorkflow( 'variable', 'value' );
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testServiceObjectWithConstructor()
    {
        $this->workflow = $this->definition->loadByName( 'ServiceObjectWithArguments' );
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );
    }

    public function testServiceObjectThatDoesNotFinish()
    {
        $this->workflow = $this->definition->loadByName( 'ServiceObjectThatDoesNotFinish' );
        $this->execution->workflow = $this->workflow;

        try
        {
            $this->execution->start();
        }
        catch( ezcWorkflowExecutionException $e )
        {
            $this->assertEquals(
              'Workflow is waiting for input data that has not been mocked.',
              $e->getMessage()
            ); 

            return;
        }

        $this->fail();
    }

    public function testExecuteNestedLoops()
    {
        $this->setUpNestedLoops();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertEquals( 2, $this->execution->getVariable( 'i' ) );
        $this->assertEquals( 2, $this->execution->getVariable( 'j' ) );
    }

    public function testExecuteWorkflowWithSubWorkflowAndVariablePassing()
    {
        $this->setUpWorkflowWithSubWorkflowAndVariablePassing();
        $this->execution->definitionStorage = $this->definition;
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertTrue( $this->execution->hasEnded() );
        $this->assertFalse( $this->execution->isResumed() );
        $this->assertFalse( $this->execution->isSuspended() );

        $this->assertEquals( 1, $this->execution->getVariable( 'x' ) );
        $this->assertEquals( 2, $this->execution->getVariable( 'z' ) );
    }

    public function testGetVariable()
    {
        $this->setUpStartEnd();
        $this->execution->workflow = $this->workflow;
        $this->execution->start();

        $this->assertFalse( $this->execution->hasVariable( 'foo' ) );

        try
        {
            $this->execution->getVariable( 'foo' );
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testEndNonExistingThread()
    {
        try
        {
            $this->execution->endThread( 0 );
        }
        catch ( ezcWorkflowExecutionException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testGetSiblingsForNonExistingThread()
    {
        $this->assertFalse( $this->execution->getNumSiblingThreads( 0 ) );
    }

    public function testListener()
    {
        $listener = $this->getMock( 'ezcWorkflowExecutionListener' );

        $this->assertTrue( $this->execution->addListener( $listener ) );
        $this->assertFalse( $this->execution->addListener( $listener ) );

        $this->assertTrue( $this->execution->removeListener( $listener ) );
        $this->assertFalse( $this->execution->removeListener( $listener ) );
    }

    public function testProperties()
    {
        $execution = new ezcWorkflowExecutionNonInteractive;

        $this->assertTrue( isset( $execution->definitionStorage ) );
        $this->assertTrue( isset( $execution->workflow ) );
        $this->assertFalse( isset( $execution->foo ) );
    }

    public function testProperties2()
    {
        try
        {
            $execution = new ezcWorkflowExecutionNonInteractive;
            $execution->workflow = new StdClass;
        }
        catch ( ezcBaseValueException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testProperties3()
    {
        try
        {
            $execution = new ezcWorkflowExecutionNonInteractive;
            $foo = $execution->foo;
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testProperties4()
    {
        $this->setUpStartEnd();

        try
        {
            $execution = new ezcWorkflowExecutionNonInteractive;
            $execution->foo = null;
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testProperties5()
    {
        try
        {
            $execution = new ezcWorkflowExecutionNonInteractive;
            $execution->definitionStorage = new StdClass;
        }
        catch ( ezcBaseValueException $e )
        {
            return;
        }

        $this->fail();
    }
}
?>
