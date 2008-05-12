<?php
/**
 * File containing the ezcDocumentRstBlockquoteNode struct
 *
 * @package TextLine
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * The blockquote AST node
 * 
 * @package TextLine
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
class ezcDocumentRstBlockquoteNode extends ezcDocumentRstNode
{
    /**
     * Blockquote indentation level
     * 
     * @var int
     */
    public $indentation;

    /**
     * Blockquote annotation
     * 
     * @var ezcDocumentRstBlockquoteAnnotationNode
     */
    public $annotation = null;

    /**
     * Indicator telling whether a blockquote has been finished by either a
     * annotation or an explicit blockquote separation marker.
     * 
     * @var bool
     */
    public $closed = false;

    /**
     * Construct RST document node
     * 
     * @param ezcDocumentRstToken $token 
     * @return void
     */
    public function __construct( ezcDocumentRstToken $token )
    {
        // Perhaps check, that only node of type section and metadata are
        // added.
        parent::__construct( $token, self::BLOCKQUOTE );
    }

    /**
     * Set state after var_export
     * 
     * @param array $properties 
     * @return void
     * @ignore
     */
    public static function __set_state( $properties )
    {
        $node = new ezcDocumentRstBlockquoteNode(
            $properties['token']
        );

        $node->nodes       = $properties['nodes'];
        $node->indentation = $properties['indentation'];
        $node->annotation  = $properties['annotation'];
        $node->closed      = $properties['closed'];
        return $node;
    }
}

?>
