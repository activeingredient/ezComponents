<?php
/**
 * File containing the ezcTemplateRootAstNode class
 *
 * @package Template
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Represents the root node of the AST tree. This node may contain settings of the template.
 *
 * @package Template
 * @version //autogen//
 * @access private
 */
class ezcTemplateRootAstNode extends ezcTemplateBodyAstNode
{
    /**
     * Whether or not the template uses the cache.
     * 
     * @var bool
     */
    public $cacheTemplate = false;

    /**
     * The cache keys in this template
     *
     * @var array(ezcTemplateAstNode)
     */
    public $cacheKeys = array();

    /**
     * The time to live of the cache.
     * 
     * @var ezcTemplateAstNode
     */
    public $ttl = null;

    /**
     * Is this template the start of the program.
     * 
     * @var bool
     */
    public $startProgram = true;

    /**
     * The character set that the template uses.
     *
     * @var string
     */
    public $charset = false;

    /**
     * Initialize with function name code and optional arguments
     *
     * @param array(ezcTemplateAstNode) $statements
     * @param bool $startProgram
     */
    public function __construct( Array $statements = null, $startProgram = true )
    {
        parent::__construct();
        $this->startProgram = $startProgram;
    }
}
?>
