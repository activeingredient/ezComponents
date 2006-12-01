<?php
/**
 * File containing the ezcTemplateExpressionExpressionParser class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Parser for expressions.
 *
 * Parses as until it reaches the end of the expression. The expression is
 * parsed using type parsers and operator parsers. The end of the expression
 * is determined by calling atEnd() on the parent element parser.
 *
 * @todo The ! operator does not work the same way as in PHP, must be fixed.
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateExpressionSourceToTstParser extends ezcTemplateSourceToTstParser
{
    /**
     * The current operator element if any.
     *
     * If you are interested in the result of the expression see $rootOperator
     * instead.
     *
     * @var ezcTemplateOperatorTstNode
     */
    public $currentOperator;

    /**
     * The root of the operator/operand tree which is the result of the expression parsing.
     * This will only be set after the parsing is succesful.
     *
     * @var ezcTemplateOperatorTstNode
     */
    public $rootOperator;


    public $foundArrayAppend = false;


    /**
     * Passes control to parent.
     * @param int $minPrecedence The minimum precedence level which is allowed
     *                           for operators.
    */
    function __construct( ezcTemplateParser $parser, /*ezcTemplateSourceToTstParser*/ $parentParser, /*ezcTemplateCursor*/ $startCursor )
    {
        parent::__construct( $parser, $parentParser, $startCursor );
        $this->currentOperator = null;
        $this->rootOperator = null;
        $this->allowIdentifier = false;
        $this->minPrecedence = false;
    }

    /**
     * Parses the expression by using the various type and operator parsers.
     * The parsers has two states 'operand' and 'operator' which is switched
     * (often alternating) to correctly parse the next element. Each operation
     * also has a call to atEnd() on the parent element parser to figure out
     * if the end has been reached.
     *
     * When an operator is found it will call ezcTemplateParser::handleOperatorPrecedence()
     * to get proper order of operators in the tree.
     *
     * Look ahead: Operand 
     */
    protected function parseCurrent( ezcTemplateCursor $cursor )
    {
        $this->expressionStartCursor = clone $this->currentCursor;

        $this->findNextElement();

        $canDoAssignment = true;
        $this->foundArrayAppend = false;

        // If it has a preOperator, it must have an operand.
        $match = "";
        $type = "";
        if ( $this->parsePreModifyingOperator( $cursor, $match ) ) // Parse: --, ++
        {
            $canDoAssignment = false;
            if ( !$this->parseOperand( $cursor, array( "Variable" ), false ) )
            {
                throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, ezcTemplateSourceToTstErrorMessages::MSG_EXPECT_VARIABLE );
            }
            
            return true;
        }
        elseif( $this->parsePreOperator( $cursor, $match ) ) // Parse: -, +, !
        {
            $canDoAssignment = false;
            if ( !$this->parseOperand( $cursor, array(), false ) )
            {
                throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, ezcTemplateSourceToTstErrorMessages::MSG_EXPECT_OPERAND );
            }
        }
        elseif( $type = $this->parseOperand( $cursor, array(), true, true) ) // Only an operand?
        {
            if ( $type == "Variable" )
            {
                // The expression stops after a post operator.
                if ( $this->parsePostOperator( $cursor ) ) return true;
            }
        }
        else
        {
            // No, then it's not an expression.
            return false;
        }

        while ( true )
        {
            //  Operator check.
            $this->findNextElement();

            if( $this->foundArrayAppend ) 
            {
                // After an array append follows an assignment.
                if( !$this->parseAssignmentOperator( $cursor ) )
                {
                    throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, 
                       ezcTemplateSourceToTstErrorMessages::MSG_EXPECT_ARRAY_APPEND_ASSIGNMENT );
                }
            }
            else
            {
                $operator = $this->parseOperator( $cursor, true /*$canDoAssignment*/ );
                if ( !$operator )
                {
                    return true;
                }

                if( $type != "Variable" || $operator != "AssignmentOperator" ) 
                {
                    $canDoAssignment = false;
                }
            }

            // An operand is mandantory.
            $failedCursor = clone $cursor;
            $this->findNextElement();

            $this->foundArrayAppend = false;

            // Modifying operators are not allowed anymore.
            $this->parsePreOperator( $cursor, $match );

            $type = $this->parseOperand( $cursor, array(), false );
            if ( !$type ) 
            {
                throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, ezcTemplateSourceToTstErrorMessages::MSG_EXPECT_NON_MODIFYING_OPERAND );
            }
        }
    }

    /**
     * Makes sure the element list contains the root operator/operand from the
     * expression.
     */
    protected function handleSuccessfulResult( ezcTemplateCursor $lastCursor, ezcTemplateCursor $cursor )
    {
        $rootOperator = $this->currentOperator;
        if ( $rootOperator instanceof ezcTemplateOperatorTstNode )
        {
            $rootOperator = $rootOperator->getRoot();
        }
        $this->rootOperator = $rootOperator;

        // Make sure element list contains the root
        $this->elements = array( $this->rootOperator );
    }

    protected function canParseType( $name, $allowedTypes )
    {
        return $this->parseOptionalType( $name ) && ( sizeof( $allowedTypes ) == 0  || in_array( $name, $allowedTypes )  );
    }

    protected function parseOperand( $cursor, $allowedTypes = array(), $allowPostModification = true, $allowArrayAppend = false )
    {
        $parsedType = false;
        if ( $this->canParseType( 'Literal', $allowedTypes ) )
        {
            $this->operatorRhsCheck( $this->currentOperator, $this->lastParser->element, $cursor );
            $this->currentOperator = $this->parser->handleOperand( $this->currentOperator, $this->lastParser->element );
            $parsedType = "Literal";
        }
        elseif ( $this->canParseType( 'Variable', $allowedTypes ) )
        {
            $type = $this->parser->symbolTable->retrieve( $this->lastParser->element->name );
            if ( $type === false )
            {
                throw new ezcTemplateParserException( $this->parser->source, $this->startCursor, $this->startCursor, $this->parser->symbolTable->getErrorMessage() );
            }

            $this->operatorRhsCheck( $this->currentOperator, $this->lastParser->element, $cursor );
            $this->currentOperator = $this->parser->handleOperand( $this->currentOperator, $this->lastParser->element );

            $this->findNextElement();

            if ( $this->parseArrayFetch( $cursor, $allowArrayAppend ) )
            {
                $this->findNextElement();
            }

            $parsedType = "Variable";
        }
        elseif ( $this->canParseType( 'FunctionCall', $allowedTypes ) )
        {
            $this->operatorRhsCheck( $this->currentOperator, $this->lastParser->functionCall, $cursor );

            $this->currentOperator = $this->parser->handleOperand( $this->currentOperator, $this->lastParser->functionCall );
            $parsedType = "FunctionCall";
        }
        elseif ( $this->allowIdentifier && $this->parseOptionalType( 'Identifier' ) )
        {
            $this->operatorRhsCheck( $this->currentOperator, $this->lastParser->element, $cursor );
 
            // Try parsing an identifier since it is allowed
            $this->currentOperator = $this->parser->handleOperand( $this->currentOperator, $this->lastParser->element );

            $parsedType = "Identifier";
        }
        elseif( $cursor->match( '(' ) && sizeof( $allowedTypes ) == 0 )
        {
            $expressionCursor = clone $cursor;
            $expressionParser = new ezcTemplateExpressionBlockSourceToTstParser( $this->parser, $this, null );
            $expressionParser->setAllCursors( $expressionCursor );
            $expressionParser->startCursor = clone $cursor;
            $expressionParser->startBracket = '(';
            $expressionParser->endBracket = ')';

            if ( !$this->parseRequiredType( $expressionParser ) )
            {
                return false;
            }

            if ( !$cursor->match( ')' ) )
            {
                throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, ezcTemplateSourceToTstErrorMessages::MSG_EXPECT_ROUND_BRACKET_CLOSE );
            }

            $this->operatorRhsCheck( $this->currentOperator, $this->lastParser->block, $cursor );
            $this->currentOperator = $this->parser->handleOperand( $this->currentOperator, $this->lastParser->block );
            $parsedType = "Parenthesis";
        }

        return $parsedType;
    }

        protected function parsePreOperator( $cursor )
        {
                // Check if we have -, ! operators
                $operator = null;
                // This will contain the name of the operator if it is found.
                $operatorName = false;

                $operatorSymbols = array( array( 1,
                                                 array( '-', '!', '+' ) ) );
                foreach ( $operatorSymbols as $symbolEntry )
                {
                    $chars = $cursor->current( $symbolEntry[0] );
                    if ( in_array( $chars, $symbolEntry[1] ) )
                    {
                        $operatorName = $chars;
                        break;
                    }
                }

                if ( $operatorName !== false )
                {
                    // Ignore the unary + operator.
                    if ( $operatorName == "+" ) 
                    {
                        $this->findNextElement();
                        $cursor->advance();
                        return true;
                    }

                    $operatorStartCursor = clone $cursor;
                    $cursor->advance( strlen( $operatorName ) );
                    $this->findNextElement();

                    if ( $this->parser->debug )
                    {
                        echo "pre-operator {$operatorName} <", $this->lastCursor->subString( $cursor->position ), ">\n";
                    }
                    $operatorMap = array( '-' => 'NegateOperator',
                                          '!' => 'LogicalNegateOperator' );
                    $operatorName = $operatorMap[$operatorName];

                    $function = "ezcTemplate". $operatorName . "TstNode";
                    $operator = new $function( $this->parser->source, clone $this->lastCursor, $cursor );

                    // If the min precedence has been reached we immediately stop parsing
                    // and return a successful parse result
                    if ( $this->minPrecedence !== false &&
                         $operator->precedence < $this->minPrecedence )
                    {
                        $cursor->copy( $operatorStartCursor );
                        return true;
                    }

                    if ( $this->currentOperator === null )
                    {
                        $this->currentOperator = $operator;
                    }
                    else
                    {
                        // All pre operators should not sort precedence at this
                        // moment so just append it to the current operator.
                        $this->currentOperator->appendParameter( $operator );
                        $operator->parentOperator = $this->currentOperator;
                        $this->currentOperator = $operator;
                    }

                    $this->parser->reportElementCursor( $operator->startCursor, $operator->endCursor, $operator );
                    $this->lastCursor->copy( $cursor );
                    return true;
                }
                return false;
        }

        protected function parsePostOperator( $cursor )
        {
            if ( $cursor->match( '++' ) )
            {
                $operatorStartCursor = clone $cursor;
                $operator = new ezcTemplatePostIncrementOperatorTstNode( $this->parser->source, clone $this->lastCursor, $cursor );
            }
            elseif(  $cursor->match( '--' ) )
            {
                $operatorStartCursor = clone $cursor;
                $operator = new ezcTemplatePostDecrementOperatorTstNode( $this->parser->source, clone $this->lastCursor, $cursor );
            }
            else
            {
                return false;
            }

            $this->currentOperator = $this->parser->handleOperatorPrecedence( $this->currentOperator, $operator );

            $this->parser->reportElementCursor( $operator->startCursor, $operator->endCursor, $operator );
            $this->lastCursor->copy( $cursor );

            return true;
        }

        protected function parsePreModifyingOperator( $cursor )
        {
            if ( $cursor->match( '++' ) )
            {
                $operatorStartCursor = clone $cursor;
                $operator = new ezcTemplatePreIncrementOperatorTstNode( $this->parser->source, clone $this->lastCursor, $cursor );
            }
            elseif(  $cursor->match( '--' ) )
            {
                $operatorStartCursor = clone $cursor;
                $operator = new ezcTemplatePreDecrementOperatorTstNode( $this->parser->source, clone $this->lastCursor, $cursor );
            }
            else
            {
                return false;
            }

            if ( $this->currentOperator === null )
            {
                $this->currentOperator = $operator;
            }
            else
            {
                // All pre operators should not sort precedence at this
                // moment so just append it to the current operator.
                $this->currentOperator->appendParameter( $operator );
                $operator->parentOperator = $this->currentOperator;
                $this->currentOperator = $operator;
            }

            $this->parser->reportElementCursor( $operator->startCursor, $operator->endCursor, $operator );
            $this->lastCursor->copy( $cursor );

            return true;
        }


        protected function parseArrayFetch( $cursor, $allowArrayAppend = false )
        {
            // Try the special array fetch operator
            $operator = null;
            while ( $cursor->match( '[' ) )
            {
                $this->findNextElement();
                
                if ( $allowArrayAppend && $cursor->match( "]" ) )
                {
                    $operator = new ezcTemplateArrayAppendOperatorTstNode( $this->parser->source, $this->startCursor, $cursor );
                    $this->foundArrayAppend = true;

                    $this->currentOperator = $this->parser->handleOperatorPrecedence( $this->currentOperator, $operator );
                    $this->lastCursor = clone $cursor;

                    return true;
                }
                else
                {
                    $operatorStartCursor = clone $cursor;
                    if ( !$this->parseRequiredType( 'ArrayFetch' ) )
                    {
                        return false;
                    }

                    $this->findNextElement();
                    if ( !$cursor->match( "]" ) )
                    {
                        throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, ezcTemplateSourceToTstErrorMessages::MSG_EXPECT_SQUARE_BRACKET_CLOSE );
                    }
                    
                    $operator = $this->lastParser->fetch;
                }

                // If the min precedence has been reached we immediately stop parsing
                // and return a successful parse result
                if ( $this->minPrecedence !== false &&
                $operator->precedence < $this->minPrecedence )
                {
                    $cursor->copy( $operatorStartCursor );
                    return true;
                }

                $this->currentOperator = $this->parser->handleOperatorPrecedence( $this->currentOperator, $operator );
                $this->lastCursor = clone $cursor;

                $this->findNextElement();
            }

            return ($operator !== null); 
        }

        protected function parseAssignmentOperator( $cursor )
        {
            if( $cursor->match( "=" ) )
            {
                $function = "ezcTemplateAssignmentOperatorTstNode";
                $operator = new $function( $this->parser->source, clone $this->lastCursor, $cursor );

                $this->checkForValidOperator( $this->currentOperator, $operator, $cursor );

                $this->currentOperator = $this->parser->handleOperatorPrecedence( $this->currentOperator, $operator );
                $this->parser->reportElementCursor( $operator->startCursor, $operator->endCursor, $operator );

                return true;
            }

            return false;
        }

        protected function parseOperator( $cursor, $canDoAssignment = true )
        {
            // Try som generic operators
            $operator = null;
            // This will contain the name of the operator if it is found.
            $operatorName = false;

            $operatorSymbols = array( array( 10,
            array( 'instanceof' ) ),
            array( 3,
            array( '===', '!==' ) ),
            array( 2,
            array( '->',
            '==', '!=',
            '<=', '>=',
            '&&', '||',
            '+=', '-=', '*=', '/=', '.=', '%=',
            '..',
            '=>' /* To make sure that the expression ends when this token is found */,) ),
            array( 1,
            array( '+', '-', '.',
            '*', '/', '%',
            '<', '>', '=' ) ) );
            foreach ( $operatorSymbols as $symbolEntry )
            {
                $chars = $cursor->current( $symbolEntry[0] );
                if ( in_array( $chars, $symbolEntry[1] ) )
                {
                    $operatorName = $chars;
                    break;
                }
            }

            if ( $operatorName !== false && $operatorName == "=>" )
            {
                return false;
            }

            // Cannot do an assignment right now.
            if( $operatorName == "=" && !$canDoAssignment)
            {
                return false;
            }


            if ( $operatorName !== false )
            {
                $operatorStartCursor = clone $cursor;
                $cursor->advance( strlen( $operatorName ) );

                $operatorMap = array( '+' => 'PlusOperator',
                '-' => 'MinusOperator',
                '.' => 'ConcatOperator',

                '*' => 'MultiplicationOperator',
                '/' => 'DivisionOperator',
                '%' => 'ModuloOperator',

                '->' => 'PropertyFetchOperator',

                '==' => 'EqualOperator',
                '!=' => 'NotEqualOperator',

                '===' => 'IdenticalOperator',
                '!==' => 'NotIdenticalOperator',

                '<' => 'LessThanOperator',
                '>' => 'GreaterThanOperator',

                '<=' => 'LessEqualOperator',
                '>=' => 'GreaterEqualOperator',

                '&&' => 'LogicalAndOperator',
                '||' => 'LogicalOrOperator',

                '=' => 'AssignmentOperator',
                '+=' => 'PlusAssignmentOperator',
                '-=' => 'MinusAssignmentOperator',
                '*=' => 'MultiplicationAssignmentOperator',
                '/=' => 'DivisionAssignmentOperator',
                '.=' => 'ConcatAssignmentOperator',
                '%=' => 'ModuloAssignmentOperator',

                '..' => 'ArrayRangeOperator',

                'instanceof' => 'InstanceOfOperator', );

                $requestedName = $operatorName;
                $operatorName = $operatorMap[$operatorName];

                $function = "ezcTemplate". $operatorName . "TstNode";
                $operator = new $function( $this->parser->source, clone $this->lastCursor, $cursor );

                // If the min precedence has been reached we immediately stop parsing
                // and return a successful parse result
                if ( $this->minPrecedence !== false &&
                $operator->precedence < $this->minPrecedence )
                {
                    $cursor->copy( $operatorStartCursor );
                    return $operatorName;
                }

                $this->checkForValidOperator( $this->currentOperator, $operator, $operatorStartCursor );

                $this->currentOperator = $this->parser->handleOperatorPrecedence( $this->currentOperator, $operator );

                $this->parser->reportElementCursor( $operator->startCursor, $operator->endCursor, $operator );
                $this->lastCursor->copy( $cursor );

                // instanceof operator can have an identifier as the next operand
                if ( $requestedName == 'instanceof' || $requestedName == '->' )
                {
                    $this->allowIdentifier = true;
                }

                return $operatorName;
            }

            return false;
        }

        /**
         *  Check whether the given operand can be the left hand side of the $operator.
         *  For example: 4 = 5; is not allowed. But $a = 5 , and $a[0][0]->bla  is.
         */
        private function checkForValidOperator( $lhs, $op, $cursor )
        {
            if( $op instanceof ezcTemplateModifyingOperatorTstNode)
            {
                if( !( $lhs instanceof ezcTemplateVariableTstNode ||
                    $lhs instanceof ezcTemplateArrayAppendOperatorTstNode ||
                    $lhs instanceof ezcTemplatePropertyFetchOperatorTstNode ||
                    $lhs instanceof ezcTemplateModifyingOperatorTstNode ) )
                {
                    if( $op instanceof ezcTemplateOperatorTstNode )
                    {
                        throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, 
                            sprintf( ezcTemplateSourceToTstErrorMessages::MSG_LHS_IS_NOT_VARIABLE, $op->symbol ));
                    }
                    else
                    {
                        throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, 
                            ezcTemplateSourceToTstErrorMessages::MSG_LHS_IS_NOT_VARIABLE_NO_SYMBOL );
                    }
                }

                if( $lhs instanceof ezcTemplateModifyingOperatorTstNode )
                {
                    $this->checkForValidOperator( $lhs->parameters[1], $op, $cursor);
                }

                return;
            }

            if( $lhs instanceof ezcTemplateModifyingBlockTstNode )
            {
                    throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, 
                          ezcTemplateSourceToTstErrorMessages::MSG_OPERATOR_LHS_IS_MODIFYING_BLOCK );
            }

            return;
        }

        private function operatorRhsCheck( $op, $rhs, $cursor )
        {
            if( $rhs instanceof ezcTemplateModifyingBlockTstNode )
            {
                if( $op instanceof ezcTemplateOperatorTstNode )
                {
                    throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, 
                        sprintf( ezcTemplateSourceToTstErrorMessages::MSG_OPERATOR_RHS_IS_MODIFYING_BLOCK, $op->symbol ));
                }
                else
                {
                    throw new ezcTemplateParserException( $this->parser->source, $cursor, $cursor, 
                        ezcTemplateSourceToTstErrorMessages::MSG_OPERATOR_IS_MODIFYING_BLOCK );
                }
            }
        }

 
}

?>
