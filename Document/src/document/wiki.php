<?php
/**
 * File containing the ezcDocumentWiki class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Document handler for RST text documents.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentWiki extends ezcDocument implements ezcDocumentValidation
{
    /**
     * Registered plugins
     *
     * Plugins are special RST element, which are documented at:
     * http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#plugins
     *
     * Plugins are the best entry point for custom rules, and you may
     * register custom plugin classes using the class method
     * registerPlugin().
     * 
     * @var array
     */
    protected $plugins = array(
        'code' => 'ezcDocumentWikiCodePlugin',
    );

    /**
     * Asbtract syntax tree.
     *
     * The internal representation of RST documents.
     * 
     * @var ezcDocumentWikiDocumentNode
     */
    protected $ast;

    /**
     * Plain RST contents as a string
     * 
     * @var string
     */
    protected $contents;

    /**
     * Construct RST document.
     * 
     * @ignore
     * @param ezcDocumentWikiOptions $options
     * @return void
     */
    public function __construct( ezcDocumentWikiOptions $options = null )
    {
        parent::__construct( $options === null ?
            new ezcDocumentWikiOptions() :
            $options );
    }

    /**
     * Register plugin handler
     *
     * Register a custom plugin handler for special plugins or overwrite
     * existing plugin handlers. The plugins are specified by its
     * (lowercase) name and the class name, which should handle the plugin
     * and extend from ezcDocumentWikiPlugin.
     * 
     * @param string $name 
     * @param string $class 
     * @return void
     */
    public function registerPlugin( $name, $class )
    {
        $this->plugins[strtolower( $name )] = (string) $class;
    }

    /**
     * Get plugin handler
     *
     * Get plugin handler class name for the specified name.
     * 
     * @param string $name 
     * @return string
     */
    public function getPluginHandler( $name )
    {
        $name = strtolower( $name );
        if ( !isset( $this->plugins[$name] ) )
        {
            throw new ezcDocumentWikiMissingPluginHandlerException( $name );
        }

        return $this->plugins[$name];
    }

    /**
     * Create document from input string
     * 
     * Create a document of the current type handler class and parse it into a
     * usable internal structure.
     *
     * @param string $string 
     * @return void
     */
    public function loadString( $string )
    {
        $this->contents = $string;
    }

    /**
     * Return document compiled to the docbook format
     * 
     * The internal document structure is compiled to the docbook format and
     * the resulting docbook document is returned.
     *
     * This method is required for all formats to have one central format, so
     * that each format can be compiled into each other format using docbook as
     * an intermediate format.
     *
     * You may of course just call an existing converter for this conversion.
     *
     * @return ezcDocumentDocbook
     */
    public function getAsDocbook()
    {
        $tokenizer = $this->options->tokenizer;
        $parser    = new ezcDocumentWikiParser();
        $parser->options->errorReporting = $this->options->errorReporting;

        $this->ast = $parser->parse( $tokenizer->tokenizeString( $this->contents ) );

        $document = new ezcDocumentDocbook();

        $visitor = new ezcDocumentWikiDocbookVisitor( $this, $this->path );
        $document->setDomDocument(
            $visitor->visit( $this->ast, $this->path )
        );

        return $document;
    }

    /**
     * Create document from docbook document
     *
     * A document of the docbook format is provided and the internal document
     * structure should be created out of this.
     *
     * This method is required for all formats to have one central format, so
     * that each format can be compiled into each other format using docbook as
     * an intermediate format.
     *
     * You may of course just call an existing converter for this conversion.
     * 
     * @param ezcDocumentDocbook $document 
     * @return void
     */
    public function createFromDocbook( ezcDocumentDocbook $document )
    {
        $converter = new ezcDocumentDocbookToWikiConverter();
        $this->contents = $converter->convert( $document )->save();
    }

    /**
     * Validate the input file
     *
     * Validate the input file against the specification of the current
     * document format.
     *
     * Returns true, if the validation succeded, and an array with
     * ezcDocumentValidationError objects otherwise.
     * 
     * @param string $file
     * @return mixed
     */
    public function validateFile( $file )
    {
        return $this->validateString( file_get_contents( $file ) );
    }

    /**
     * Validate the input string
     *
     * Validate the input string against the specification of the current
     * document format.
     *
     * Returns true, if the validation succeded, and an array with
     * ezcDocumentValidationError objects otherwise.
     * 
     * @param string $string
     * @return mixed
     */
    public function validateString( $string )
    {
        $tokenizer = $this->options->tokenizer;
        $parser    = new ezcDocumentWikiParser();
        // Only halt on parse errors, and collect all other errors.
        $parser->options->errorReporting = E_PARSE;

        $errors = array();
        $ast    = null;
        try
        {
            // Try to parse the document and keep the parse tree for evetual
            // checking for decoration errors
            $ast = $parser->parse( $tokenizer->tokenizeString( $string ) );
        }
        catch ( ezcDocumentParserException $e )
        {
            $errors[] = $e;
        }

        // Get errors and notices from parsed document
        $errors = array_merge( $errors, $parser->errors );

        // If we had no parse error until now, we also try to decorate the
        // document, which may leed to another class of errors.
        if ( $ast !== null )
        {
            $oldErrorReporting = $this->options->errorReporting;
            $this->options->errorReporting = E_PARSE;
            try
            {
                $visitor = new ezcDocumentWikiDocbookVisitor( $this, $this->path );
                $visitor->visit( $ast, $this->path );

                // Get errors and notices from parsed document
                $errors = array_merge( $errors, $visitor->getErrors() );
            }
            catch ( ezcDocumentVisitException $e )
            {
                $errors[] = $e;
            }

            // Reset error reporting
            $this->options->errorReporting = $oldErrorReporting;
        }

        if ( count( $errors ) === 0 )
        {
            // If no problem could be found, jsut return true
            return true;
        }
        else
        {
            // Transform aggregated errors into validation errors
            foreach ( $errors as $nr => $error )
            {
                $errors[$nr] = ezcDocumentValidationError::createFromException( $error );
            }
            return $errors;
        }
    }

    /**
     * Return document as string
     * 
     * Serialize the document to a string an return it.
     *
     * @return string
     */
    public function save()
    {
        return $this->contents;
    }
}

?>
