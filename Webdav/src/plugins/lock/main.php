<?php
/**
 * File containing the ezcWebdavLockPlugin class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 *
 * @access private
 */
/**
 * ezcWebdavLockPlugin 
 * 
 * @package Webdav
 * @version //autogen//
 *
 * @access private
 */
class ezcWebdavLockPlugin
{
    /**
     * Namespace of the LOCK plugin. 
     */
    const PLUGIN_NAMESPACE = 'ezcWebdavLockPlugin';

    /**
     * XML namespace for properties.
     */
    const XML_NAMESPACE = 'http://ezcomponents.org/s/Webdav#lock';

    /**
     * Properties
     * 
     * @var array(string=>mixed)
     */
    protected $properties = array(
        'transport'       => null,
        'propertyHandler' => null,
        'headerHandler'   => null,
    );

    /**
     * Maps request classes to handling methods.
     *
     * @array(string=>string)
     */
    protected static $requestHandlingMap = array(
        'ezcWebdavLockRequest'     => 'ezcWebdavLockLockRequestResponseHandler',
        'ezcWebdavUnlockRequest'   => 'ezcWebdavLockUnlockRequestResponseHandler',
        'ezcWebdavCopyRequest'     => 'ezcWebdavLockCopyRequestResponseHandler',
        'ezcWebdavMoveRequest'     => 'ezcWebdavLockMoveRequestResponseHandler',
        'ezcWebdavOptionsRequest'  => 'ezcWebdavLockOptionsRequestResponseHandler',
        'ezcWebdavPropFindRequest' => 'ezcWebdavLockPropFindRequestResponseHandler',
    );

    /**
     * Lock plugin options. 
     * 
     * @var ezcWebdavLockPluginOptions
     */
    protected $options;

    /**
     * Lock transport. 
     * 
     * @var ezcWebdavLockTransport
     */
    protected $transport;

    /**
     * Lock property handler. 
     * 
     * @var ezcWebdavLockPropertyHandler
     */
    protected $propertyHandler;

    /**
     * Lock header handler. 
     * 
     * @var ezcWebdavLockHeaderHandler
     */
    protected $headerHandler;

    /**
     * Request / response handler.
     *
     * @var ezcWebdavLockRequestResponseHandler
     */
    protected $handler;

    /**
     * Creates the objects needed for dispatching the hooks.
     * 
     * @return void
     */
    public function __construct( ezcWebdavLockPluginOptions $options )
    {
        $this->options         = $options;
        $this->headerHandler   = new ezcWebdavLockHeaderHandler();
        $this->propertyHandler = new ezcWebdavLockPropertyHandler();
        $this->transport       = new ezcWebdavLockTransport(
            $this->headerHandler,
            $this->propertyHandler
        );
    }

    /**
     * Callback for the hook ezcWebdavTransport::parseUnknownRequest().
     *
     * This method is attached to the specified hook through {@link
     * ezcWebdavLockPluginConfiguration}.
     *
     * Parameters are:
     * - string path
     * - string body
     * - string requestUri
     *
     * Reacts on the LOCK and UNLOCK request methods.
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return ezcWebdavRequest|null
     */
    public function parseUnknownRequest( ezcWebdavPluginParameters $params )
    {
        return $this->transport->parseRequest(
            $params['requestMethod'],
            $params['path'],
            $params['body']
        );
    }

    /**
     * Callback for the hook ezcWebdavTransport::handleUnknownResponse().
     *
     * Parameters are:
     * - ezcWebdavResponse response
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return ezcWebdavDisplayInformation
     */
    public function processUnknownResponse( ezcWebdavPluginParameters $params )
    {
        return $this->transport->processResponse( $params['response'] );
    }

    /**
     * Callback for the hook ezcWebdavPropertyHandler::extractUnknownLiveProperty().
     *
     * Parameters are:
     * - DOMElement domElement
     * - ezcWebdavXmlTool xmlTool
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return void
     */
    public function extractUnknownLiveProperty( ezcWebdavPluginParameters $params )
    {
        return $this->propertyHandler->extractLiveProperty(
            $params['domElement'],
            $params['xmlTool']
        );
    }

    /**
     * Callback for the hook ezcWebdavPropertyHandler::serializeUnknownLiveProperty().;
     *
     * Parameters are:
     * - ezcWebdavLiveProperty property
     * - ezcWebdavTransport xmlTool
     * - DOMElement parentElement
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return void
     */
    public function serializeUnknownLiveProperty( ezcWebdavPluginParameters $params )
    {
        return $this->propertyHandler->serializeLiveProperty(
            $params['property'],
            $params['parentElement'],
            $params['xmlTool']
        );
    }

    /**
     * Callback for the hook ezcWebdavPropertyHandler::extractDeadProperty().
     *
     * Parameters are:
     * - DOMElement domElement
     * - ezcWebdavXmlTool xmlTool
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return ezcWebdavDeadProperty|null
     */
    public function extractDeadProperty( ezcWebdavPluginParameters $params )
    {
        // Check namespace before bothering property handler
        if ( $params['domElement']->namespaceURI !== ezcWebdavLockPlugin::XML_NAMESPACE )
        {
            return;
        }

        return $this->propertyHandler->extractDeadProperty(
            $params['domElement'],
            $params['xmlTool']
        );
    }

    /**
     * Callback for the hook ezcWebdavPropertyHandler::serializeDeadProperty().
     *
     * Parameters are:
     * - ezcWebdavDeadProperty property
     * - ezcWebdavXmlTool xmlTool
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return DOMElement|null
     */
    public function serializeDeadProperty( ezcWebdavPluginParameters $params )
    {
        return $this->propertyHandler->serializeDeadProperty(
            $params['property'],
            $params['xmlTool']
        );
    }

    /**
     * Callback for the hook ezcWebdavServer::receivedRequest().
     *
     * Parameters are:
     * - ezcWebdavRequest request
     *
     * Needs to react directly on:
     * - ezcWebdavLockRequest
     * - ezcWebdavUnlockRequest
     *
     * Needs to check if lock violations occur on:
     * - ezcWebdavCopyRequest
     * - ezcWebdavMoveRequest
     * - ezcWebdavMakeCollectionRequest
     * - ezcWebdavPropPatchRequest
     * - ezcWebdavPutRequest
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return ezcWebdavResponse|null
     */
    public function receivedRequest( ezcWebdavPluginParameters $params )
    {
        $request  = $params['request'];

        // Set headers parsed by the lock plugin only.
        $request->setHeader(
            'If',
            $this->headerHandler->parseIfHeader( $request )
        );
        $request->setHeader(
            'Timeout',
            $this->headerHandler->parseTimeoutHeader( $request )
        );
        $request->setHeader(
            'Lock-Token',
            $this->headerHandler->parseLockTokenHeader( $request )
        );

        $request->validateHeaders();

        $requestClass = get_class( $request );
        if ( isset( ezcWebdavLockPlugin::$requestHandlingMap[$requestClass] ) )
        {
            $handlerClass = ezcWebdavLockPlugin::$requestHandlingMap[$requestClass];
            $this->handler = new $handlerClass(
                new ezcWebdavLockTools( $this->options )
            );
            return $this->handler->receivedRequest( $request );
        }
        // return null
    }

    /**
     * Handles responses generated by the backend.
     * 
     * @param ezcWebdavPluginParameters $params 
     * @return ezcWebdavResponse|null
     */
    public function generatedResponse( ezcWebdavPluginParameters $params )
    {
        if ( isset( $this->handler ) )
        {
             return $this->handler->generatedResponse( $params['response'] );
        }
        // return null
    }

    //
    //
    // Property access
    //
    //

    /**
     * Sets a property.
     *
     * This method is called when an property is to be set.
     * 
     * @param string $propertyName The name of the property to set.
     * @param mixed $propertyValue The property value.
     * @return void
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBaseValueException
     *         if the value to be assigned to a property is invalid.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a read-only property.
     */
    public function __set( $propertyName, $propertyValue )
    {
        switch ( $propertyName )
        {
            case 'transport':
                if ( !( $propertyValue instanceof ezcWebdavLockTransport ) )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'ezcWebdavLockTransport' );
                }
                break;
            case 'propertyHandler':
                if ( !( $propertyValue instanceof ezcWebdavLockPropertyHandler ) )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'ezcWebdavLockPropertyHandler' );
                }
                break;
            case 'headerHandler':
                if ( !( $propertyValue instanceof ezcWebdavLockHeaderHandler ) )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'ezcWebdavLockPropertyHandler' );
                }
                break;

            default:
                throw new ezcBasePropertyNotFoundException( $propertyName );
        }
        $this->properties[$propertyName] = $propertyValue;
    }

    /**
     * Property get access.
     *
     * Simply returns a given property.
     *
     * @param string $propertyName The name of the property to get.
     * @return mixed The property value.
     *
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a write-only property.
     */
    public function __get( $propertyName )
    {
        if ( $this->__isset( $propertyName ) )
        {
            return $this->properties[$propertyName];
        }
        throw new ezcBasePropertyNotFoundException( $propertyName );
    }
    
    /**
     * Returns if a property exists.
     *
     * Returns true if the property exists in the {@link $properties} array
     * (even if it is null) and false otherwise. 
     *
     * @param string $propertyName Option name to check for.
     * @return void
     * @ignore
     */
    public function __isset( $propertyName )
    {
        return array_key_exists( $propertyName, $this->properties );
    }
}

?>
