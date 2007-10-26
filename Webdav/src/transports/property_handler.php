<?php
/**
 * File containing the ezcWebdavPropertyHandler class.
 *
 * @package Webdav
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Description missing
 *
 * @package Webdav
 * @version //autogen//
 */
class ezcWebdavPropertyHandler
{
    /**
     * XML tool. 
     * 
     * @var ezcWebdavXmlTool
     */
    protected $xmlTool;

    /**
     * Regedx to parse the <getcontenttype /> XML elemens content.
     *
     * Example: 'text/html; charset=UTF-8'
     */
    const GETCONTENTTYPE_REGEX = '(^(?P<mime>\w+/\w+)\s*(?:;\s*charset\s*=\s*(?P<charset>.+)\s*)?$)i';

    /**
     * Creates a new property handler.
     *
     * An instance of this class is capable of handling live and dead WebDAV
     * properties. It can extract properties from requests and generate
     * response information for properties.
     * 
     * @param ezcWebdavXmlTool $xml 
     * @return void
     */
    public function __construct( ezcWebdavXmlTool $xml = null )
    {
        if ( $xml !== null )
        {
            $this->xmlTool = $xml;
        }
    }

    protected function getXmlTool()
    {
        if ( $this->xmlTool === null )
        {
            return ezcWebdavServer::getInstance()->xmlTool;
        }
        return $this->xmlTool;
    }

    /**
     * Returns extracted properties in an ezcWebdavPropertyStorage.
     *
     * This method receives a DOMNodeList $domNodes which must contain a set
     * of DOMElement objects, while each of those represents a WebDAV property.
     *
     * The list may contain live properties as well as dead ones. Live
     * properties ({@link ezcWebdavLiveProperty}) as defined in RFC 2518 are
     * currently recognized. All other properties in the DAV: namespace are
     * added as dead properties ({@link ezcWebdavDeadProperty}). Dead
     * properties are parsed in general in any namespace.
     *
     * The properties are stored in the given {@link ezcWebdavPropertyStorage}
     * $storage. If a $flag value is provided, this one is submitted as the
     * second parameter to {@link ezcWebdavFlaggedPropertyStorage->attach()}.
     *  
     * @param DOMNodeList $domNodes 
     * @param ezcWebdavPropertyStorage $storage
     * @param int $flag
     * @return ezcWebdavBasicPropertyStorage
     */
    public final function extractProperties( DOMNodeList $domNodes, ezcWebdavBasicPropertyStorage $storage, $flag = null )
    {
        for ( $i = 0; $i < $domNodes->length; ++$i )
        {
            $currentNode = $domNodes->item( $i );
            if ( $currentNode->nodeType !== XML_ELEMENT_NODE )
            {
                // Skip
                continue;
            }

            // Initialize
            $property = null;

            // DAV: namespace indicates live property! If parsing live fails, a dead property is returned
            if ( $currentNode->namespaceURI === ezcWebdavXmlTool::XML_DEFAULT_NAMESPACE )
            {
                $property = $this->dispatchExtractLiveProperty( $currentNode );
            }
            // Other namespaces are always dead properties
            else
            {
                $property = $this->dispatchExtractDeadProperty( $currentNode );
            }

            $flag === null ? $storage->attach( $property ) : $storage->attach( $property, $flag );
        }
        return $storage;
    }

    /**
     * Dispatches the extraction of a live property.
     *
     * This method takes care that the dispatching to the plugin registry takes
     * place before and after the actual live property is extracted.
     * Additionally the extractUnknownLiveProperty is announced, if the
     * property could not be parsed internally. If the property still cannot be
     * parsed, it is dispatched to the dead property parsing. This also
     * includes the additional hook announcements.
     * 
     * @param DOMElement $element 
     * @return ezcWebdavLiveProperty
     */
    private function dispatchExtractLiveProperty ( DOMElement $element )
    {
        // Plugin hook beforeExtractLiveProperty
        ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
            __CLASS__,
            'beforeExtractLiveProperty',
            new ezcWebdavPluginParameters(
                array(
                    'domElement'  => $element,
                    'xmlTool'     => $this->getXmlTool(),
                )
            )
        );

        $property = $this->extractLiveProperty( $element );

        // First, let a plugin try
        if ( $property === null )
        {
            // Plugin hook extractUnknownLiveProperty
            $property = ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                __CLASS__,
                'extractUnknownLiveProperty',
                new ezcWebdavPluginParameters(
                    array(
                        'domElement'  => $element,
                        'xmlTool'     => $this->getXmlTool(),
                    )
                )
            );

            // Second, parse dead property instead
            $property = $this->dispatchExtractDeadProperty( $element );
        }

        // Plugin hook afterExtractLiveProperty
        ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
            __CLASS__,
            'afterExtractLiveProperty',
            new ezcWebdavPluginParameters(
                array(
                    'property' => $property,
                    'xmlTool'  => $this->getXmlTool(),
                )
            )
        );
        
        return $property;
    }

    /**
     * Dispatches the extraction of a dead property.
     *
     * This method takes care that the dispatching to the plugin registry takes
     * place before and after the actual dead property is extracted.
     * 
     * @param DOMElement $element 
     * @return ezcWebdavDeadProperty
     */
    private function dispatchExtractDeadProperty ( DOMElement $element )
    {
        // Plugin hook beforeExtractDeadProperty
        ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
            __CLASS__,
            'beforeExtractDeadProperty',
            new ezcWebdavPluginParameters(
                array(
                    'domElement' => $element,
                    'xmlTool'    => $this->getXmlTool(),
                )
            )
        );

        $property = $this->extractDeadProperty( $element );

        // Plugin hook afterExtractDeadProperty
        ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
            __CLASS__,
            'afterExtractDeadProperty',
            new ezcWebdavPluginParameters(
                array(
                    'property' => $property,
                    'xmlTool'  => $this->getXmlTool(),
                )
            )
        );
        
        return $property;
    }

    /**
     * Extract a dead property from a DOMElement.
     *
     * This method is responsible for parsing a {@link ezcWebdavDeadProperty}
     * (unknown) property from a DOMElement.
     * 
     * @param DOMElement $domElement 
     * @return ezcWebdavDeadProperty
     */
    protected function extractDeadProperty( DOMElement $domElement )
    {
        // Create standalone XML for property
        // It may possibly occur, that shortcut clashes occur...
        $propDom    = new DOMDocument();
        $copiedNode = $propDom->importNode( $domElement, true );
        $propDom->appendChild( $copiedNode );
        
        return new ezcWebdavDeadProperty(
            $domElement->namespaceURI,
            $domElement->localName,
            $propDom->saveXML()
        );
    }

    /**
     * Extracts a live property from a DOMElement.
     *
     * This method is responsible for parsing WebDAV live properties. The
     * DOMElement $domElement must be an XML element in the DAV: namepsace. If
     * the received property is not defined in RFC 2518, null is returned.
     * 
     * @param DOMElement $domElement 
     * @return ezcWebdavLiveProperty|null
     */
    protected function extractLiveProperty( DOMElement $domElement )
    {
        $property = null;
        switch ( $domElement->localName )
        {
            case 'creationdate':
                $property = new ezcWebdavCreationDateProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    $property->date = new ezcWebdavDateTime( $domElement->nodeValue );
                }
                break;
            case 'displayname':
                $property = new ezcWebdavDisplayNameProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    $property->displayName = $domElement->nodeValue;
                }
                break;
            case 'getcontentlanguage':
                $property = new ezcWebdavGetContentLanguageProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    // e.g. 'de, en'
                    $property->languages = array_map( 'trim', explode( ',', $domElement->nodeValue ) );
                }
                break;
            case 'getcontentlength':
                $property = new ezcWebdavGetContentLengthProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    $property->length = trim( $domElement->nodeValue );
                }
                break;
            case 'getcontenttype':
                $property = new ezcWebdavGetContentTypeProperty();
                // @TODO: Should this throw an exception, if the match fails?
                // Currently, the property stays empty and the backend needs to handle this
                if ( empty( $domElement->nodeValue ) === false 
                  && preg_match( self::GETCONTENTTYPE_REGEX, $domElement->nodeValue, $matches ) > 0 )
                {
                    $property->mime    = $matches['mime'];

                    if ( isset( $matches['charset'] ) )
                    {
                        $property->charset = $matches['charset'];
                    }
                }
                break;
            case 'getetag':
                $property = new ezcWebdavGetEtagProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    $property->etag = $domElement->nodeValue;
                }
                break;
            case 'getlastmodified':
                $property = new ezcWebdavGetLastModifiedProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    $property->date = new ezcWebdavDateTime( $domElement->nodeValue );
                }
                break;
            case 'resourcetype':
                $property = new ezcWebdavResourceTypeProperty();
                if ( empty( $domElement->nodeValue ) === false )
                {
                    $property->type = $domElement->nodeValue;
                }
                break;
            case 'source':
                $property = new ezcWebdavSourceProperty();
                if ( $domElement->hasChildNodes() === true )
                {
                    $property->links = $this->extractLinkContent( $domElement );
                }
                break;
            default:
                return null;
        }
        return $property;
    }

    /**
     * Serializes an object of new ezcWebdavBasicPropertyStorage to XML.
     * Attaches all properties of the $storage to the $parentElement XML
     * element.
     * 
     * @param new ezcWebdavPropertyStorage $storage 
     * @param DOMElement $parentElement 
     * @return void
     */
    public final function serializeProperties( ezcWebdavPropertyStorage $storage, DOMElement $parentElement )
    {
        foreach ( $storage as $property )
        {
            if ( $property instanceof ezcWebdavLiveProperty )
            {
                // Plugin hook beforeSerializeLiveProperty
                ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                    __CLASS__,
                    'beforeSerializeLiveProperty',
                    new ezcWebdavPluginParameters(
                        array(
                            'property' => $property,
                            'xmlTool'  => $this->getXmlTool(),
                        )
                    )
                );

                $propertyElement = $this->serializeLiveProperty( $property, $parentElement );

                // Attempt plugins to parse an unknown live property
                if ( $propertyElement === null )
                {
                    // Plugin hook beforeSerializeLiveProperty
                    $propertyElement = ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                        __CLASS__,
                        'serializeUnknownLiveProperty',
                        new ezcWebdavPluginParameters(
                            array(
                                'property'      => $property,
                                'xmlTool'       => $this->getXmlTool(),
                                'parentElement' => $parentElement,
                            )
                        )
                    );
                }
                
                // Plugin hook afterSerializeLiveProperty
                ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                    __CLASS__,
                    'afterSerializeLiveProperty',
                    new ezcWebdavPluginParameters(
                        array(
                            'domElement' => $propertyElement,
                            'xmlTool'    => $this->getXmlTool(),
                        )
                    )
                );
            }
            else
            {
                // Plugin hook beforeSerializeDeadProperty
                ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                    __CLASS__,
                    'beforeSerializeDeadProperty',
                    new ezcWebdavPluginParameters(
                        array(
                            'property' => $property,
                            'xmlTool'  => $this->getXmlTool(),
                        )
                    )
                );
                
                $propertyElement = $this->serializeDeadProperty( $property, $parentElement );

                // Plugin hook afterSerializeDeadProperty
                ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                    __CLASS__,
                    'afterSerializeDeadProperty',
                    new ezcWebdavPluginParameters(
                        array(
                            'domElement' => $propertyElement,
                            'xmlTool'    => $this->getXmlTool(),
                        )
                    )
                );
            }
            if ( $propertyElement instanceof DOMNode )
            {
                $parentElement->appendChild( $propertyElement );
            }
        }
    }

    // Extracting

    /**
     * Extracts the <link /> XML elements.
     * This method extracts the <link /> XML elements from the <source />
     * element and returns the corresponding ezcWebdavSourcePropertyLink object
     * to be used as the content of ezcWebdavSourceProperty.
     * 
     * @param DOMElement $domElement 
     * @return ezcWebdavSourcePropertyLink
     */
    protected function extractLinkContent( DOMElement $domElement )
    {
        $links = array();

        $linkElements = $domElement->getElementsByTagNameNS(
            ezcWebdavXmlTool::XML_DEFAULT_NAMESPACE, 'link'
        );
        for ( $i = 0; $i < $linkElements->length; ++$i )
        {
            $links[] = new ezcWebdavSourcePropertyLink(
                $linkElements->item( $i )->getElementsByTagNameNS( ezcWebdavXmlTool::XML_DEFAULT_NAMESPACE, 'src' )->nodeValue,
                $linkElements->item( $i )->getElementsByTagNameNS( ezcWebdavXmlTool::XML_DEFAULT_NAMESPACE, 'dst' )->nodeValue
            );
        }
        return $links;
    }

    // Serializing

    /**
     * Returns the XML representation of a dead property.
     * Returns a DOMElement, representing the content of the given $property.
     * 
     * @param ezcWebdavDeadProperty $property 
     * @param DOMElement $parentElement 
     * @return DOMElement
     */
    protected function serializeDeadProperty( ezcWebdavDeadProperty $property, DOMElement $parentElement )
    {
        if ( $property->content === null || ( $contentDom = $this->getXmlTool()->createDomDocument( $property->content ) ) === false )
        {
            return $this->getXmlTool()->createDomElement(
                $parentElement->ownerDocument,
                $property->name,
                $property->namespace
            );
        }

        return  $parentElement->ownerDocument->importNode( $contentDom->documentElement, true );
    }

    /**
     * Returns the XML representation of a live property.
     * Returns a DOMElement, representing the content of the given $property.
     * The newly created element is also appended as a child to the given
     * $parentElement.
     * 
     * @param ezcWebdavLiveProperty $property 
     * @param DOMElement $parentElement 
     * @return DOMElement
     */
    protected function serializeLiveProperty( ezcWebdavLiveProperty $property, DOMElement $parentElement )
    {
        switch ( get_class( $property ) )
        {
            case 'ezcWebdavCreationDateProperty':
                $elementName  = 'creationdate';
                $elementValue = ( $property->date !== null ? $property->date->format( DATE_ISO8601 ) : null );
                break;
            case 'ezcWebdavDisplayNameProperty':
                $elementName  = 'displayname';
                $elementValue = $property->displayName;
                break;
            case 'ezcWebdavGetContentLanguageProperty':
                $elementName  = 'getcontentlanguage';
                $elementValue = ( count( $property->languages ) > 0 ? implode( ', ', $property->languages ) : null );
                break;
            case 'ezcWebdavGetContentLengthProperty':
                $elementName  = 'getcontentlength';
                $elementValue = $property->length;
                break;
            case 'ezcWebdavGetContentTypeProperty':
                $elementName  = 'getcontenttype';
                $elementValue = ( $property->mime !== null ? $property->mime . ( $property->charset === null ? '' : '; charset="' . $property->charset . '"' ) : null );
                break;
            case 'ezcWebdavGetEtagProperty':
                $elementName  = 'getetag';
                $elementValue = $property->etag;
                break;
            case 'ezcWebdavGetLastModifiedProperty':
                $elementName  = 'getlastmodified';
                $elementValue = ( $property->date !== null ? $property->date->format( DATE_RFC1123 ) : null );
                break;
            case 'ezcWebdavResourceTypeProperty':
                $elementName  = 'resourcetype';
                $elementValue = ( $property->type === ezcWebdavResourceTypeProperty::TYPE_COLLECTION ? array( $this->getXmlTool()->createDomElement( $parentElement->ownerDocument, 'collection' ) ) : null );
                break;
            case 'ezcWebdavSourceProperty':
                $elementName  = 'source';
                $elementValue = ( $property->links !== null ? $this->serializeLinkContent( $property->links, $parentElement->ownerDocument ) : null );
                break;
            default:
                // Now let the plugin registry hook in
                return null;
        }

        $propertyElement = $parentElement->appendChild( 
            $this->getXmlTool()->createDomElement( $parentElement->ownerDocument, $elementName, $property->namespace )
        );

        if ( $elementValue instanceof DOMDocument )
        {
            $propertyElement->appendChild(
                $dom->importNode( $elementValue->documentElement, true )
            );
        }
        else if ( is_array( $elementValue ) )
        {
            foreach( $elementValue as $subValue )
            {
                $propertyElement->appendChild( $subValue );
            }
        }
        else if ( is_scalar( $elementValue ) )
        {
            $propertyElement->nodeValue = $elementValue;
        }

        return $propertyElement;
    }

    /**
     * Serializes an array of ezcWebdavSourcePropertyLink elements to XML.
     * 
     * @param array(ezcWebdavSourcePropertyLink) $links 
     * @param DOMDocument $dom To create the returned DOMElements.
     * @return array(DOMElement)
     */
    protected function serializeLinkContent( array $links = null, DOMDocument $dom )
    {
        $linkContentElements = array();

        foreach( $links as $link )
        {
            $linkElement = $this->getXmlTool()->createDomElement( $dom, 'link' );
            $linkElement->appendChild(
                $this->getXmlTool()->createDomElement( $dom, 'src' )
            )->nodeValue = $link->src;
            $linkElement->appendChild(
                $this->getXmlTool()->createDomElement( $dom, 'dst' )
            )->nodeValue = $link->dst;
            $linkContentElements[] = $linkElement;
        }

        return $linkContentElements;
    }
}

?>
