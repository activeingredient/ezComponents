<?php
/**
 * File containing the ezcQueryExpressionPgsql class.
 *
 * @package Database
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * The ezcQueryExpressionPgsql class is used to create SQL expression for PostgreSQL.
 *
 * This class reimplements the methods that have a different syntax in postgreSQL.
 *
 * @package Database
 */
class ezcQueryExpressionOracle extends ezcQueryExpression
{
    /**
     * Constructs an empty ezcQueryExpression
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns a series of strings concatinated
     *
     * concat() accepts an arbitrary number of parameters. Each parameter
     * must contain an expression or an array with expressions.
     *
     * @throws ezcQueryVariableException if no parameters are provided
     * @param string|array(string) strings that will be concatinated.
     * @return string
     */
    public function concat()
    {
        $args = func_get_args();
        $cols = ezcQuery::arrayFlatten( $args );
        if ( count( $cols ) < 1 )
        {
            throw new ezcQueryVariableParameterException( 'concat', count( $args ), 1 );
        }

        $cols = $this->getIdentifiers( $cols );
        return join( ' || ' , $cols );
    }

    /**
     * Returns part of a string.
     *
     * Note: Not SQL92, but common functionality.
     *
     * @param string $value the target $value the string or the string column.
     * @param int $from extract from this characeter.
     * @param int $len extract this amount of characters.
     * @return string sql that extracts part of a string.
     */
    public function subString( $value, $from, $len = null )
    {
        $value = $this->getIdentifier( $value );
        if ( $len === null )
        {
            return "substr( {$value}, {$from} )";
        }
        else
        {
            $len = $this->getIdentifier( $len );
            return "substr( {$value}, {$from}, {$len} )";
        }
    }
}
?>
