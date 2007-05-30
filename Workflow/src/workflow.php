<?php
/**
 * File containing the ezcWorkflow class.
 *
 * @package Workflow
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Class representing a workflow.
 *
 * @TODO explain what the definition handler does
 *
 * @package Workflow
 * @version //autogen//
 */
class ezcWorkflow implements ezcWorkflowVisitable
{
    /**
     * Container to hold the properties
     *
     * @var array(string=>mixed)
     */
    protected $properties = array(
      'definitionHandler' => null,
      'id'                => false,
      'name'              => '',
      'startNode'         => null,
      'endNode'           => null,
      'version'           => false
    );

    /**
     * The variable handlers of this workflow.
     *
     * @var array
     */
    protected $variableHandlers = array();

    /**
     * Constructs a new workflow object with the name $name.
     *
     * Use $startNode and $endNode parameters if you don't want to use the
     * default start and end nodes.
     *
     * @param string               $name      The name of the workflow.
     * @param ezcWorkflowNodeStart $startNode The start node of the workflow.
     * @param ezcWorkflowNodeEnd   $endNode   The default end node of the workflow.
     */
    public function __construct( $name, ezcWorkflowNodeStart $startNode = null, ezcWorkflowNodeEnd $endNode = null )
    {
        $this->name = $name;

        // Create a new ezcWorkflowNodeStart object, if necessary.
        if ( $startNode === null )
        {
            $this->properties['startNode'] = new ezcWorkflowNodeStart;
        }
        else
        {
            $this->properties['startNode'] = $startNode;
        }

        // Create a new ezcWorkflowNodeEnd object, if necessary.
        if ( $endNode === null )
        {
            $this->properties['endNode'] = new ezcWorkflowNodeEnd;
        }
        else
        {
            $this->properties['endNode'] = $endNode;
        }
    }

    /**
     * Property read access.
     *
     * @throws ezcBasePropertyNotFoundException 
     *         If the the desired property is not found.
     * 
     * @param string $propertyName Name of the property.
     * @return mixed Value of the property or null.
     * @ignore
     */
    public function __get( $propertyName )
    {
        switch ( $propertyName ) 
        {
            case 'definitionHandler':
            case 'id':
            case 'name':
            case 'startNode':
            case 'endNode':
            case 'version':
                return $this->properties[$propertyName];

            case 'nodes':
                $visitor = new ezcWorkflowVisitorNodeCollector( $this );

                return $visitor->getNodes();
        }

        throw new ezcBasePropertyNotFoundException( $propertyName );
    }

    /**
     * Property write access.
     * 
     * @param string $propertyName Name of the property.
     * @param mixed $val  The value for the property.
     *
     * @throws ezcBaseValueException 
     *         If the value for the property definitionHandler is not an
     *         instance of ezcWorkflowDefinitionStorage.
     * @throws ezcBaseValueException 
     *         If the value for the property id is not an integer.
     * @throws ezcBaseValueException 
     *         If the value for the property name is not a string.
     * @throws ezcBasePropertyPermissionException 
     *         If there is a write access to startNode.
     * @throws ezcBasePropertyPermissionException 
     *         If there is a write access to endNode.
     * @throws ezcBasePropertyPermissionException 
     *         If there is a write access to nodes.
     * @throws ezcBaseValueException 
     *         If the value for the property version is not an integer.
     * @ignore
     */
    public function __set( $propertyName, $val )
    {
        switch ( $propertyName ) 
        {
            case 'definitionHandler':
                if ( !( $val instanceof ezcWorkflowDefinitionStorage ) )
                {
                    throw new ezcBaseValueException( $propertyName, $val, 'ezcWorkflowDefinitionStorage' );
                }

                $this->properties['definitionHandler'] = $val;

                return;

            case 'id':
                if ( !( is_int( $val ) ) )
                {
                    throw new ezcBaseValueException( $propertyName, $val, 'integer' );
                }

                $this->properties['id'] = $val;

                return;

            case 'name':
                if ( !( is_string( $val ) ) )
                {
                    throw new ezcBaseValueException( $propertyName, $val, 'string' );
                }

                $this->properties['name'] = $val;

                return;

            case 'startNode':
            case 'endNode':
            case 'nodes':
                throw new ezcBasePropertyPermissionException(
                  $propertyName, ezcBasePropertyPermissionException::READ
                );

            case 'version':
                if ( !( is_int( $val ) ) )
                {
                    throw new ezcBaseValueException( $propertyName, $val, 'integer' );
                }

                $this->properties['version'] = $val;

                return;
        }

        throw new ezcBasePropertyNotFoundException( $propertyName );
    }
 
    /**
     * Property isset access.
     * 
     * @param string $propertyName Name of the property.
     * @return bool True is the property is set, otherwise false.
     * @ignore
     */
    public function __isset( $propertyName )
    {
        switch ( $propertyName )
        {
            case 'definitionHandler':
            case 'id':
            case 'name':
            case 'startNode':
            case 'endNode':
            case 'nodes':
            case 'version':
                return true;
        }

        return false;
    }

    /**
     * Returns true when the workflow requires user interaction
     * (ie. when it contains ezcWorkflowNodeInput nodes)
     * and false otherwise.
     *
     * @return boolean true when the workflow is interactive, false otherwise.
     */
    public function isInteractive()
    {
        foreach ( $this->nodes as $node )
        {
            if ( $node instanceof ezcWorkflowNodeInput )
            {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns true when the workflow has sub workflows
     * (ie. when it contains ezcWorkflowNodeSubWorkflow nodes)
     * and false otherwise.
     *
     * @return boolean true when the workflow has sub workflows, false otherwise.
     */
    public function hasSubWorkflows()
    {
        foreach ( $this->nodes as $node )
        {
            if ( $node instanceof ezcWorkflowNodeSubWorkflow )
            {
                return true;
            }
        }

        return false;
    }

    /**
     * Verifies the specification of this workflow.
     *
     * See the documentation of ezcWorkflowVisitorVerification for
     * details.
     *
     * @throws ezcWorkflowInvalidWorkflowException if the specification of this workflow is not correct.
     */
    public function verify()
    {
        $this->accept( new ezcWorkflowVisitorVerification );
    }

    /**
     * Overridden implementation of accept() calls
     * accept on the start node.
     *
     * @param ezcWorkflowVisitor $visitor
     */
    public function accept( ezcWorkflowVisitor $visitor )
    {
        $visitor->visit( $this );
        $this->properties['startNode']->accept( $visitor );
    }

    /**
     * Sets the class $className to handle the variable named $variableName.
     *
     * $className must be the name of a class implementing the
     * ezcWorkflowVariableHandler interface.
     *
     * @param string $variableName
     * @param string $className
     * @throws ezcWorkflowInvalidWorkflowException if $className does not contain the name of a valid class implementing ezcWorkflowVariableHandler
     */
    public function addVariableHandler( $variableName, $className )
    {
        if ( class_exists( $className ) )
        {
            $class = new ReflectionClass( $className );

            if ( $class->implementsInterface( 'ezcWorkflowVariableHandler' ) )
            {
                $this->variableHandlers[$variableName] = $className;
            }
            else
            {
                throw new ezcWorkflowInvalidWorkflowException(
                  'Class does not implement the ezcWorkflowVariableHandler interface.'
                );
            }
        }
        else
        {
            throw new ezcWorkflowInvalidWorkflowException(
                'Class not found.'
            );
        }
    }

    /**
     * Removes the handler for $variableName and returns true
     * on success.
     *
     * Returns false if no handler was set for $variableName.
     *
     * @param string $variableName
     * @return boolean
     */
    public function removeVariableHandler( $variableName )
    {
        if ( isset( $this->variableHandlers[$variableName] ) )
        {
            unset( $this->variableHandlers[$variableName] );
            return true;
        }

        return false;
    }

    /**
     * Sets handlers for multiple variables.
     *
     * The format of $variableHandlers is
     * array( 'variableName' => ezcWorkflowVariableHandler )
     *
     * @throws ezcWorkflowInvalidWorkflowException if $className does not contain the name of a valid class implementing ezcWorkflowVariableHandler
     * @param array $variableHandlers
     */
    public function setVariableHandlers( array $variableHandlers )
    {
        $this->variableHandlers = array();

        foreach ( $variableHandlers as $variableName => $className )
        {
            $this->addVariableHandler( $variableName, $className );
        }
    }

    /**
     * Returns the variable handlers.
     *
     * The format of the returned array is
     * array( 'variableName' => ezcWorkflowVariableHandler )
     *
     * @return array
     */
    public function getVariableHandlers()
    {
        return $this->variableHandlers;
    }
}
?>
