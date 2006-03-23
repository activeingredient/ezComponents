<?php
/**
 * File containing the ezcTemplateAssignmentOptimizer
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * @package Template
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogen//
 */
class ezcTemplateAstToAstAssignmentOptimizer extends ezcTemplateAstWalker
{
    protected function isOptimizableConcat( $element )
    {
        if( $element instanceof ezcTemplateGenericStatementAstNode )
        {
            if( $element->expression instanceof ezcTemplateConcatAssignmentOperatorAstNode )
            {
                if( $element->expression->parameters[0] instanceof ezcTemplateVariableAstNode ) 
                {
                    if( $element->expression->parameters[1] instanceof ezcTemplateOutputAstNode )
                    {
                        if( $element->expression->parameters[1]->expression instanceof ezcTemplateLiteralAstNode )
                        {
                            return true;
                        }
                    }
                }
            }
        }

        return false;
    }

    public function visitBodyAstNode( ezcTemplateBodyAstNode $body )
    {
        array_unshift( $this->nodePath, $body );

        $statements = sizeof( $body->statements );
       
        $k = 0;
        $i = 0;
        $j = 1;
        while( $i < $statements )
        {
            if ( $this->isOptimizableConcat( $body->statements[$i] ) ) 
            {
                while ( $i + $j < $statements && $this->isOptimizableConcat( $body->statements[$i + $j] ) && 
                    ( $body->statements[$i]->expression->parameters[0]->name === $body->statements[$i + $j]->expression->parameters[0]->name ) )
                {
                    $body->statements[$i]->expression->parameters[1]->expression->value .= $body->statements[$i + $j]->expression->parameters[1]->expression->value;
                    $j++;
                }
            }
 
            if( $k != $i )
            {
                $body->statements[$k] = $body->statements[$i];
            }

            $i += $j;
            $j = 1;
            $k++;
        }

        for( $i = $k; $i < $statements; $i++ )
        {
            unset( $body->statements[$i] );
        }
        
        array_shift( $this->nodePath );

        return $body;
    }
}
?>
