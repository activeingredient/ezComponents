<?php
/**
 * File containing the ezcTemplateIdentifierAstNode class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateIdentifierAstNode extends ezcTemplateAstNode
{
    /**
     * The name of the identifier.
     */
    public $name;

    /**
     * @param string $name The name of the variable.
     */
    public function __construct( $name )
    {
        parent::__construct();

        $this->typeHint = self::TYPE_ARRAY | self::TYPE_VALUE;
        /*
        if ( !is_string( $name ) )
        {
            throw new ezcBaseValueException( "name", $name, 'string' );
        }
        */

        $this->name = $name;
    }
}
?>
