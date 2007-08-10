<?php
/**
 * @package Workflow
 * @subpackage Tests
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

require_once 'case.php';

/**
 * @package Workflow
 * @subpackage Tests
 */
class ezcWorkflowDefinitionStorageXmlTest extends ezcWorkflowTestCase
{
    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( 'ezcWorkflowDefinitionStorageXmlTest' );
    }

    public function testSaveStartEnd()
    {
        $this->setUpStartEnd();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartEnd' ),
          $this->readActual( 'StartEnd' )
        );
    }

    public function testSaveStartEndVariableHandler()
    {
        $this->setUpStartEndVariableHandler();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartEndVariableHandler' ),
          $this->readActual( 'StartEndVariableHandler' )
        );
    }

    public function testSaveStartInputEnd()
    {
        $this->setUpStartInputEnd();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartInputEnd' ),
          $this->readActual( 'StartInputEnd' )
        );
    }

    public function testSaveStartSetEnd()
    {
        $this->setUpStartSetEnd();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartSetEnd' ),
          $this->readActual( 'StartSetEnd' )
        );
    }

    public function testSaveStartSetUnsetEnd()
    {
        $this->setUpStartSetUnsetEnd();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartSetUnsetEnd' ),
          $this->readActual( 'StartSetUnsetEnd' )
        );
    }

    public function testSaveIncrementingLoop()
    {
        $this->setUpLoop( 'increment' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'IncrementingLoop' ),
          $this->readActual( 'IncrementingLoop' )
        );
    }

    public function testSaveDecrementingLoop()
    {
        $this->setUpLoop( 'decrement' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'DecrementingLoop' ),
          $this->readActual( 'DecrementingLoop' )
        );
    }

    public function testSaveSetAddSubMulDiv()
    {
        $this->setUpSetAddSubMulDiv();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'SetAddSubMulDiv' ),
          $this->readActual( 'SetAddSubMulDiv' )
        );
    }

    public function testSaveAddVariables()
    {
        $this->setUpAddVariables();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'AddVariables' ),
          $this->readActual( 'AddVariables' )
        );
    }

    public function testSaveVariableEqualsVariable()
    {
        $this->setUpVariableEqualsVariable();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'VariableEqualsVariable' ),
          $this->readActual( 'VariableEqualsVariable' )
        );
    }

    public function testSaveParallelSplitSynchronization()
    {
        $this->setUpParallelSplitSynchronization();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ParallelSplitSynchronization' ),
          $this->readActual( 'ParallelSplitSynchronization' )
        );
    }

    public function testSaveMultiChoiceSynchronizingMerge()
    {
        $this->setUpMultiChoice( 'SynchronizingMerge' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'MultiChoiceSynchronizingMerge' ),
          $this->readActual( 'MultiChoiceSynchronizingMerge' )
        );
    }

    public function testSaveMultiChoiceDiscriminator()
    {
        $this->setUpMultiChoice( 'Discriminator' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'MultiChoiceDiscriminator' ),
          $this->readActual( 'MultiChoiceDiscriminator' )
        );
    }

    public function testSaveExclusiveChoiceSimpleMerge()
    {
        $this->setUpExclusiveChoiceSimpleMerge();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ExclusiveChoiceSimpleMerge' ),
          $this->readActual( 'ExclusiveChoiceSimpleMerge' )
        );
    }

    public function testSaveExclusiveChoiceWithUnconditionalOutNodeSimpleMerge()
    {
        $this->setUpExclusiveChoiceWithUnconditionalOutNodeSimpleMerge();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ExclusiveChoiceWithUnconditionalOutNodeSimpleMerge' ),
          $this->readActual( 'ExclusiveChoiceWithUnconditionalOutNodeSimpleMerge' )
        );
    }

    public function testSaveNestedExclusiveChoiceSimpleMerge()
    {
        $this->setUpNestedExclusiveChoiceSimpleMerge();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'NestedExclusiveChoiceSimpleMerge' ),
          $this->readActual( 'NestedExclusiveChoiceSimpleMerge' )
        );
    }

    public function testSaveWorkflowWithSubWorkflow()
    {
        $this->setUpWorkflowWithSubWorkflow( 'StartEnd' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'WorkflowWithSubWorkflow' ),
          $this->readActual( 'WorkflowWithSubWorkflow' )
        );
    }

    public function testSaveWorkflowWithSubWorkflowAndVariablePassing()
    {
        $this->setUpWorkflowWithSubWorkflowAndVariablePassing();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'WorkflowWithSubWorkflowAndVariablePassing' ),
          $this->readActual( 'WorkflowWithSubWorkflowAndVariablePassing' )
        );
    }

    public function testSaveServiceObjectWithArguments()
    {
        $this->setUpEmptyWorkflow( 'ServiceObjectWithArguments' );

        $action = new ezcWorkflowNodeAction(
          array(
            'class' => 'ServiceObjectWithConstructor',
            'arguments' => array(
              array( 'Sebastian' ), 22, 'April', 19.78, null, new StdClass
            )
          )
        );

        $this->startNode->addOutNode( $action );
        $this->endNode->addInNode( $action );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ServiceObjectWithArguments' ),
          $this->readActual( 'ServiceObjectWithArguments' )
        );
    }

    public function testSaveNestedLoops()
    {
        $this->setUpNestedLoops();
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'NestedLoops' ),
          $this->readActual( 'NestedLoops' )
        );
    }

    public function testLoadStartEnd()
    {
        $this->workflow = $this->definition->loadByName( 'StartEnd' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartEnd' ),
          $this->readActual( 'StartEnd' )
        );
    }

    public function testLoadStartEndVariableHandler()
    {
        $this->workflow = $this->definition->loadByName( 'StartEndVariableHandler' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartEndVariableHandler' ),
          $this->readActual( 'StartEndVariableHandler' )
        );
    }

    public function testLoadStartInputEnd()
    {
        $this->workflow = $this->definition->loadByName( 'StartInputEnd' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartInputEnd' ),
          $this->readActual( 'StartInputEnd' )
        );
    }

    public function testLoadStartSetEnd()
    {
        $this->workflow = $this->definition->loadByName( 'StartSetEnd' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartSetEnd' ),
          $this->readActual( 'StartSetEnd' )
        );
    }

    public function testLoadStartSetUnsetEnd()
    {
        $this->workflow = $this->definition->loadByName( 'StartSetUnsetEnd' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'StartSetUnsetEnd' ),
          $this->readActual( 'StartSetUnsetEnd' )
        );
    }

    public function testLoadIncrementingLoop()
    {
        $this->workflow = $this->definition->loadByName( 'IncrementingLoop' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'IncrementingLoop' ),
          $this->readActual( 'IncrementingLoop' )
        );
    }

    public function testLoadDecrementingLoop()
    {
        $this->workflow = $this->definition->loadByName( 'DecrementingLoop' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'DecrementingLoop' ),
          $this->readActual( 'DecrementingLoop' )
        );
    }

    public function testLoadSetAddSubMulDiv()
    {
        $this->workflow = $this->definition->loadByName( 'SetAddSubMulDiv' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'SetAddSubMulDiv' ),
          $this->readActual( 'SetAddSubMulDiv' )
        );
    }

    public function testLoadAddVariables()
    {
        $this->workflow = $this->definition->loadByName( 'AddVariables' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'AddVariables' ),
          $this->readActual( 'AddVariables' )
        );
    }

    public function testLoadVariableEqualsVariable()
    {
        $this->workflow = $this->definition->loadByName( 'VariableEqualsVariable' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'VariableEqualsVariable' ),
          $this->readActual( 'VariableEqualsVariable' )
        );
    }

    public function testLoadParallelSplitSynchronization()
    {
        $this->workflow = $this->definition->loadByName( 'ParallelSplitSynchronization' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ParallelSplitSynchronization' ),
          $this->readActual( 'ParallelSplitSynchronization' )
        );
    }

    public function testLoadExclusiveChoiceSimpleMerge()
    {
        $this->workflow = $this->definition->loadByName( 'ExclusiveChoiceSimpleMerge' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ExclusiveChoiceSimpleMerge' ),
          $this->readActual( 'ExclusiveChoiceSimpleMerge' )
        );
    }

    public function testLoadExclusiveChoiceWithUnconditionalOutNodeSimpleMerge()
    {
        $this->workflow = $this->definition->loadByName( 'ExclusiveChoiceWithUnconditionalOutNodeSimpleMerge' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ExclusiveChoiceWithUnconditionalOutNodeSimpleMerge' ),
          $this->readActual( 'ExclusiveChoiceWithUnconditionalOutNodeSimpleMerge' )
        );
    }

    public function testLoadNestedExclusiveChoiceSimpleMerge()
    {
        $this->workflow = $this->definition->loadByName( 'NestedExclusiveChoiceSimpleMerge' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'NestedExclusiveChoiceSimpleMerge' ),
          $this->readActual( 'NestedExclusiveChoiceSimpleMerge' )
        );
    }

    public function testLoadMultiChoiceSynchronizingMerge()
    {
        $this->workflow = $this->definition->loadByName( 'MultiChoiceSynchronizingMerge' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'MultiChoiceSynchronizingMerge' ),
          $this->readActual( 'MultiChoiceSynchronizingMerge' )
        );
    }

    public function testLoadMultiChoiceDiscriminator()
    {
        $this->workflow = $this->definition->loadByName( 'MultiChoiceDiscriminator' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'MultiChoiceDiscriminator' ),
          $this->readActual( 'MultiChoiceDiscriminator' )
        );
    }

    public function testLoadWorkflowWithSubWorkflow()
    {
        $this->workflow = $this->definition->loadByName( 'WorkflowWithSubWorkflow' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'WorkflowWithSubWorkflow' ),
          $this->readActual( 'WorkflowWithSubWorkflow' )
        );
    }

    public function testLoadWorkflowWithSubWorkflowAndVariablePassing()
    {
        $this->workflow = $this->definition->loadByName( 'WorkflowWithSubWorkflowAndVariablePassing' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'WorkflowWithSubWorkflowAndVariablePassing' ),
          $this->readActual( 'WorkflowWithSubWorkflowAndVariablePassing' )
        );
    }

    public function testLoadServiceObjectWithArguments()
    {
        $this->workflow = $this->definition->loadByName( 'ServiceObjectWithArguments' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'ServiceObjectWithArguments' ),
          $this->readActual( 'ServiceObjectWithArguments' )
        );
    }

    public function testLoadServiceObjectWithArguments2()
    {
        $this->workflow = $this->definition->loadByName( 'ServiceObjectWithArguments2' );
    }

    public function testLoadNestedLoops()
    {
        $this->workflow = $this->definition->loadByName( 'NestedLoops' );
        $this->definition->save( $this->workflow );

        $this->assertEquals(
          $this->readExpected( 'NestedLoops' ),
          $this->readActual( 'NestedLoops' )
        );
    }

    public function testExceptionWhenLoadingNotExistingWorkflow()
    {
        try
        {
            $this->definition->loadByName( 'NotExisting' );
        }
        catch ( ezcWorkflowDefinitionStorageException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testExceptionWhenLoadingNotExistingWorkflowVersion()
    {
        try
        {
            $workflow = $this->definition->loadByName( 'StartEnd', 2 );
        }
        catch ( ezcWorkflowDefinitionStorageException $e )
        {
            return;
        }

        $this->fail();
    }

    public function testExceptionWhenLoadingNotWellFormedWorkflow()
    {
        try
        {
            $this->definition->loadByName( 'NotWellFormed' );
        }
        catch ( ezcWorkflowDefinitionStorageException $e )
        {
            return;
        }

        $this->fail();
    }

    protected function readActual( $name )
    {
        $actual = str_replace(
          'version="2"',
          'version="1"',
          file_get_contents(
            dirname( __FILE__ ) . '/data/' . $name . '_2.xml'
          )
        );

        @unlink( dirname( __FILE__ ) . '/data/' . $name . '_2.xml' );

        return $actual;
    }

    protected function readExpected( $name )
    {
        return file_get_contents(
          dirname( __FILE__ ) . '/data/' . $name . '_1.xml'
        );
    }
}
?>
