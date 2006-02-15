<?php
/**
 * File containing the ezcTemplateIssetAstNode class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Represents an isset construct.
 *
 * @package Template
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogen//
 */
class ezcTemplateIssetAstNode extends ezcTemplateStatementAstNode
{
    /**
     * The expression to evaluate if exists.
     * @var array(ezcTemplateAstNode)
     */
    public $expressions;

    /**
     * Initialize with function name code and optional arguments
     */
    public function __construct( Array $expressions = null )
    {
        parent::__construct();
        $this->expressions = array();

        if ( $expressions !== null )
        {
            foreach ( $expressions as $expression )
            {
                if ( !$expression instanceof ezcTemplateAstNode )
                {
                    throw new ezcBaseValueException( "expressions[$id]", $expression, 'ezcTemplateAstNode' );
                }
                $this->expressions[] = $expression;
            }
        }
    }

    /**
     * Appends the expression to be checked for existance.
     *
     * @param ezcTemplateAstNode $expression Expression to check.
     */
    public function appendExpression( ezcTemplateAstNode $expression )
    {
        $this->expressions[] = $expression;
    }

    /**
     * Returns a list of expressions which will be checked for existance.
     * @return array(ezcTemplateAstNode)
     */
    public function getExpressions()
    {
        return $this->expressions;
    }

    /**
     * Returns the expressions of this element.
     *
     * @note The values returned from this method must never be modified.
     * @return array(ezcTemplateAstNode)
     */
    public function getSubElements()
    {
        return $this->expressions;
    }

    /**
     * Validates the expressions against their constraints.
     *
     * @throw Exception if the constraints are not met.
     * @todo Fix exception class
     */
    public function validate()
    {
        if ( count( $this->expressions ) == 0 )
        {
            throw new Exception( "Too few expressions for class <" . get_class( $this ) . ">, needs at least 1 but got 0." );
        }
    }

    /**
     * @inheritdocs
     */
    public function getRepresentation()
    {
        return "isset";
    }

    /**
     * @inheritdocs
     * Calls visitIssetControl() of the ezcTemplateBasicAstNodeVisitor interface.
     * @todo Fix exception class
     */
    public function accept( ezcTemplateAstNodeVisitor $visitor )
    {
        if ( count( $this->expressions ) === 0 )
        {
            throw new Exception( "Isset construct element needs at least one expression in the \$expression variable." );
        }
        $visitor->visitIssetControl( $this );
    }
}
?>
