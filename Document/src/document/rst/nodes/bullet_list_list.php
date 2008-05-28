<?php
/**
 * File containing the ezcDocumentRstBulletListListNode struct
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * An aggregating AST node for bullet list items nodes
 * 
 * @package Document
 * @version //autogen//
 * @access private
 */
class ezcDocumentRstBulletListListNode extends ezcDocumentRstNode
{
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
        parent::__construct( $token, self::BULLET_LIST_LIST );
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
        $node = new ezcDocumentRstBulletListListNode(
            $properties['token']
        );

        $node->nodes       = $properties['nodes'];
        return $node;
    }
}

?>
