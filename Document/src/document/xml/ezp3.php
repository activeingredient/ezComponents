<?php
/**
 * File containing the ezcDocumentEzp3Xml class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * The document handler for the eZ Publish 3 XML document markup.
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentEzp3Xml extends ezcDocumentXmlBase implements ezcDocumentValidation
{
    /**
     * Construct document xml base.
     * 
     * @ignore
     * @param ezcDocumentEzp3XmlOptions $options
     * @return void
     */
    public function __construct( ezcDocumentEzp3XmlOptions $options = null )
    {
        parent::__construct( $options === null ?
            new ezcDocumentEzp3XmlOptions() :
            $options );
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
        // @TODO: Implement
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
        // Use internal error handling to handle XML errors manually.
        $oldXmlErrorHandling = libxml_use_internal_errors( true );
        libxml_clear_errors();

        // Load XML document
        $this->document = new DOMDocument();
        $this->document->registerNodeClass( 'DOMElement', 'ezcDocumentXhtmlDomElement' );

        // Use the loadHtml method here, as it for example convers tag names
        // and attribute names to lower case, and handles some more errors
        // common in HTML documents.
        $this->document->loadHtml( $string );

        $errors = ( $this->options->failOnError ?
            libxml_get_errors() :
            null );

        libxml_clear_errors();
        libxml_use_internal_errors( $oldXmlErrorHandling );

        // If there are errors and the error handling is activated throw an
        // exception with the occured errors.
        if ( $errors )
        {
            throw new ezcDocumentErrnousXmlException( $errors );
        }
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
        // @TODO: Implement
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
        $oldSetting = libxml_use_internal_errors( true );
        libxml_clear_errors();
        $document = new DOMDocument();
        $document->load( $file );
        $document->relaxNGValidate( $this->options->relaxNgSchema );

        // Get all errors
        $xmlErrors = libxml_get_errors();
        $errors = array();
        foreach ( $xmlErrors as $error )
        {
            $errors[] = ezcDocumentValidationError::createFromLibXmlError( $error );
        }
        libxml_clear_errors();
        libxml_use_internal_errors( $oldSetting );

        return ( count( $errors ) ? $errors : true );
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
        $oldSetting = libxml_use_internal_errors( true );
        libxml_clear_errors();
        $document = new DOMDocument();
        $document->loadXml( $string );
        $document->relaxNGValidate( $this->options->relaxNgSchema );

        // Get all errors
        $xmlErrors = libxml_get_errors();
        $errors = array();
        foreach ( $xmlErrors as $error )
        {
            $errors[] = ezcDocumentValidationError::createFromLibXmlError( $error );
        }
        libxml_clear_errors();
        libxml_use_internal_errors( $oldSetting );

        return ( count( $errors ) ? $errors : true );
    }
}

?>
