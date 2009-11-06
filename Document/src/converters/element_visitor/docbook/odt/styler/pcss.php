<?php
/**
 * File containing the ezcDocumentOdtPcssStyler class.
 *
 * @access private
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * PCSS based ODT styler.
 *
 * This styler is based on the PCSS (simplified CSS rules) styling mechanism.  
 * You can use the {@link addStylesheetFile()} and {@link addStylesheet()} 
 * methods to add custom PCSS styles to it. It is used as the default in the 
 * {@link ezcDocumentDocbookToOdtConverterOptions}.
 *
 * @access private
 * @package Document
 * @version //autogen//
 */
class ezcDocumentOdtPcssStyler implements ezcDocumentOdtStyler
{
    /**
     * Style converter manager. 
     * 
     * @var ezcDocumentOdtPcssConverterManager
     */
    protected $styleConverters;

    /**
     * Set of style generators to use. 
     * 
     * @var array(ezcDocumentOdtStyleGenerator)
     */
    protected $styleGenerators;

    /**
     * Style sections for the current ODT document. 
     * 
     * @var ezcDocumentOdtStyleInformation
     */
    protected $styleInfo;

    /**
     * Style inferencer on DocBook source. 
     * 
     * @var ezcDocumentPcssStyleInferencer
     */
    protected $styleInferencer;

    /**
     * Style pre-processors. 
     * 
     * @var array(ezcDocumentOdtPcssPreprocessor)
     */
    protected $stylePreProcessors = array();

    /**
     * PCSS parser. 
     * 
     * @var ezcDocumentPcssParser
     */
    protected $styleParser;

    /**
     * Creates a new ODT document styler.
     *
     * Creates a new styler. Note that {@link init()} must be 
     * called before {@link applyStyles()} can be used. Otherwise an exception 
     * is thrown.
     * 
     * @param ezcDocumentOdtPcssConverterManager $styleConverters 
     */
    public function __construct( ezcDocumentOdtPcssConverterManager $styleConverters = null )
    {
        $this->styleConverters   = ( $styleConverters === null
            ? new ezcDocumentOdtPcssConverterManager()
            : $styleConverters
        );
        $this->styleInferencer   = new ezcDocumentPcssStyleInferencer();

        // @TODO: Make configurable
        $this->styleGenerators[] = new ezcDocumentOdtParagraphStyleGenerator(
            $this->styleConverters
        );
        $this->styleGenerators[] = new ezcDocumentOdtTextStyleGenerator(
            $this->styleConverters
        );
        $this->styleGenerators[] = new ezcDocumentOdtListStyleGenerator(
            $this->styleConverters
        );
        $this->styleGenerators[] = new ezcDocumentOdtTableStyleGenerator(
            $this->styleConverters
        );
        $this->styleGenerators[] = new ezcDocumentOdtTableRowStyleGenerator(
            $this->styleConverters
        );
        $this->styleGenerators[] = new ezcDocumentOdtTableCellStyleGenerator(
            $this->styleConverters
        );

        // @TODO: Make configurable
        $this->stylePreProcessors[] = new ezcDocumentOdtPcssListStylePreprocessor();
        $this->stylePreProcessors[] = new ezcDocumentOdtPcssFontStylePreprocessor();
    }

    /**
     * Initialize the styler with the given $styleInfo.
     *
     * This method *must* be called *before* {@link applyStyles()} is called 
     * at all. Otherwise an exception will be thrown.
     * 
     * @param ezcDocumentOdtStyleInformation $styleInfo 
     */
    public function init( ezcDocumentOdtStyleInformation $styleInfo )
    {
        $this->styleInfo = $styleInfo;
    }

    /**
     * Applies the given $style to the $odtElement.
     *
     * $style is an array of style information as produced by {@link 
     * ezcDocumentPcssStyleInferencer::inferenceFormattingRules()}. The styling 
     * information given in this array is applied to the $odtElement by 
     * creating a new anonymous style in the ODT style section and applying the 
     * corresponding attributes to reference this style.
     * 
     * @param DOMElement $odtElement 
     * @param array $styles
     * @throws ezcDocumentOdtStylerNotInitializedException
     */
    public function applyStyles( ezcDocumentLocateable $docBookElement, DOMElement $odtElement )
    {
        $styles = $this->preProcessStyles(
            $docBookElement,
            $odtElement,
            $this->styleInferencer->inferenceFormattingRules( $docBookElement )
        );

        $handled = false;
        foreach ( $this->styleGenerators as $generator )
        {
            if ( $generator->handles( $odtElement ) )
            {
                $generator->createStyle( $this->styleInfo, $odtElement, $styles );
                $handled = true;
            }
        }
        if ( !$handled )
        {
            // echo "DocBook element '{$docBookElement->localName}' not handled. No style generated for ODT element '{$odtElement->localName}'.\n";
        }
    }

    /**
     * Pre-process styles using $stylePreProcessors.
     * 
     * @param DOMElement $docBookElement 
     * @param DOMElement $odtElement 
     * @param array $styles 
     * @return array
     */
    protected function preProcessStyles( DOMElement $docBookElement, DOMElement $odtElement, array $styles )
    {
        foreach ( $this->stylePreProcessors as $preProcessor )
        {
            $styles = $preProcessor->process(
                $this->styleInfo,
                $docBookElement,
                $odtElement,
                $styles
            );
        }
        return $styles;
    }

    /**
     * Adds the given PCSS $stylesheet definitions.
     *
     * Adds the PCSS styles given as a string in $stylesheet to the styler.
     * 
     * @param string $stylesheet 
     */
    public function addStylesheet( $stylesheet )
    {
        $parser = $this->createStyleParser();
        $this->styleInferencer->appendStyleDirectives(
            $parser->parseString( $stylesheet )
        );
    }

    /**
     * Adds a PCSS stylesheet from the given file.
     *
     * Reads the given PCSS $file and adds the contained stylesheets to the 
     * styler.
     * 
     * @param string $file 
     */
    public function addStylesheetFile( $file )
    {
        $parser = $this->createStyleParser();
        
        if ( !file_exists( $file ) )
        {
            throw new ezcBaseFileNotFoundException( $file, 'PCSS' );
        }
        if ( !is_readable( $file ) )
        {
            throw new ezcBaseFilePermissionException( $file, ezcBaseFileException::READ );
        }

        $this->styleInferencer->appendStyleDirectives(
            $parser->parseFile( $file )
        );
    }

    /**
     * Returns a PCSS style parser instance.
     *
     * Initializes the $styleParser, if it has not been initialized, yet. Returns 
     * the instance of the style parser to use.
     */
    protected function createStyleParser()
    {
        if ( !isset( $this->styleParser ) )
        {
            $this->styleParser = new ezcDocumentPcssParser();
        }
        return $this->styleParser;
    }
}

?>
