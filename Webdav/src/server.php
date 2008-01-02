<?php
/**
 * File containing the ezcWebdavServer class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Base class for creating a webdav server, capable of serving webdav requests.
 *
 * <code>
 * $server = ezcWebdavServer::getInstance();
 *
 * // Optionally register aditional transport handlers
 *   
 * // This step is only required, if you want to add custom or third party extensions
 * // implementations for special clients.
 * $server->configurations[] = new ezcWebdavServerConfiguration(
 *     // Regular expression to match client name
 *     '(My.*Webdav\s+Cliengt)i',
 *     // Class name of transport handler, extending {@link ezcWebdavTransport}
 *     'myCustomTransportTransport'
 * );  
 * $server->configurations[] = new ezcWebdavServerConfiguration(
 *     // Regular expression to match client name
 *     '(.*Firefox.*)i',
 *     // Class name of transport handler, extending {@link ezcWebdavTransport}
 *     'customWebdavMozillaTransport',
 *     // A custom implementation of {@link ezcWebdavXmlTool}
 *     'customWebdavXmlTool',
 *     // A custom implementation of {@link ezcWebdavPropertyHandler}
 *     'customWebdavPropertyHandler',
 *     // A custom path factory
 *     new customWebdavPathFactory()
 * );  
 *
 * // Serve data using file backend with data in "path/"
 * $backend = new ezcWebdavBackendFile( '/path' );
 *
 * // Make the server serve WebDAV requests
 * $server->handle( $backend );
 * </code>
 *
 * @property ezcWebdavServerConfigurationManager $configurations
 *           Webdav server configuration manager, which holds and dispatches
 *           configurations that fit for a certain client.
 *
 * @version //autogentag//
 * @package Webdav
 * @mainclass
 */
class ezcWebdavServer
{
    /**
     * Singleton instance.
     *
     * @var ezcWebdavServer
     */
    protected static $instance;

    /**
     * Properties. 
     * 
     * @var array(string=>mixed)
     */
    protected $properties = array();

    /**
     * Creates a new instance.
     *
     * The constructor is private due to singleton reasons. Use {@link
     * getInstance()} and then use the properties of the server to adjust its
     * configuration.
     * 
     * @return void
     */
    protected function __construct()
    {
        $this->reset();
    }

    /**
     * Returns singleton instance.
     *
     * The instantiation of 2 WebDAV servers at the same time does not make
     * sense and could possibly cause strange effects, like double sending of a
     * response. Therefore the server implements a singleton and its only
     * instance must be retrieved using this method. Configuration changes can
     * then be performed through the properties of this instance.
     * 
     * @return ezcWebdavServer
     */
    public static function getInstance()
    {
        if ( self::$instance === null )
        {
            self::$instance = new ezcWebdavServer();
        }
        return self::$instance;
    }

    /**
     * Handles the current request.
     *
     * This method is the absolute heart of the Webdav component. It is called
     * to make the server instance handle the current request. This means, a
     * {@link ezcWebdavTransport} is selected and instantiated through the
     * {@link ezcWebdavServerConfigurationManager} in {@link $configurations}.
     * This transport (and all other objects, created from the configuration)
     * is used to parse the incoming request into an instance of {@link
     * ezcWebdavRequest}, which is then handed to the submitted $backend for
     * handling. The resulting {@link ezcWebdavResponse} is serialized by the
     * {@link ezcWebdavTransport} and send back to the client.
     *
     * The method receives at least an instance of {@link ezcWebdavBackend},
     * which is used to server the request. Optionally, the request URI can be
     * submitted in $uri. If this is not the case, the request URI is
     * determined by the server variables
     * <ul>
     *  <li>$_SERVER['SERVER_NAME']</li>
     *  <li>$_SERVER['REQUEST_URI']</li>
     * </ul>
     *
     * @param ezcWebdavBackend $backend
     * @param string $uri
     * 
     * @return void
     */
    public final function handle( ezcWebdavBackend $backend, $uri = null )
    {
        $uri = ( $uri === null 
            ? 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']
            : $uri );

        // Perform final setup
        $this->properties['backend'] = $backend;
        if ( !isset( $_SERVER['HTTP_USER_AGENT'] ) )
        {
            throw new ezcWebdavMissingHeaderException( 'User-Agent' );
        }
        // Configure the server according to the requesting client
        $this->configurations->configure( $this, $_SERVER['HTTP_USER_AGENT'] );

        // Initialize all plugins
        $this->pluginRegistry->initPlugins();

        // Parse request into request object
        $request = $this->transport->parseRequest( $uri );
        
        if ( $request instanceof ezcWebdavRequest )
        {
            // Plugin hook receivedRequest
            ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
                __CLASS__,
                'receivedRequest',
                new ezcWebdavPluginParameters(
                    array(
                        'request'  => $request,
                    )
                )
            );
            $response = $this->backend->performRequest( $request );
        }
        else
        {
            // The transport layer already issued an error.
            $response = $request;
        }

        // Plugin hook generatedResponse
        ezcWebdavServer::getInstance()->pluginRegistry->announceHook(
            __CLASS__,
            'generatedResponse',
            new ezcWebdavPluginParameters(
                array(
                    'response'  => $response,
                )
            )
        );

        $this->transport->handleResponse( $response );
    }

    /**
     * Initializes the server with the given objects.
     * 
     * This method is marked proteced, because it is intended to be used by by
     * {@link ezcWebdavServerConfiguration} instances and instances of derived
     * classes, but not directly.
     *
     * @param ezcWebdavPathFactory $pathFactory
     * @param ezcWebdavXmlTool $xmlTool
     * @param ezcWebdavPropertyHandler $propertyHandler
     * @param ezcWebdavHeaderHandler $headerHandler
     * @param ezcWebdavTransport $transport
     * @access protected
     * @return void
     */
    public function init(
        ezcWebdavPathFactory $pathFactory,
        ezcWebdavXmlTool $xmlTool,
        ezcWebdavPropertyHandler $propertyHandler,
        ezcWebdavHeaderHandler $headerHandler,
        ezcWebdavTransport $transport
    )
    {
        $this->properties['pathFactory']     = $pathFactory;
        $this->properties['xmlTool']         = $xmlTool;
        $this->properties['propertyHandler'] = $propertyHandler;
        $this->properties['headerHandler']   = $headerHandler;
        $this->properties['transport']       = $transport;
    }

    /**
     * Reset the server to its initial state.
     *
     * Resets the internal server state as if a new instance has just been
     * constructed.
     * 
     * @return void
     */
    public function reset()
    {
        unset( $this->properties['configurations'] );
        unset( $this->properties['pluginRegistry'] );
        $this->properties['configurations']  = new ezcWebdavServerConfigurationManager();
        $this->properties['pluginRegistry']  = new ezcWebdavPluginRegistry();

        $this->properties['transport']       = null;
        $this->properties['backend']         = null;
        $this->properties['pathFactory']     = null;
        $this->properties['xmlTool']         = null;
        $this->properties['propertyHandler'] = null;
        $this->properties['headerHandler']   = null;
    }

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
            case 'configurations':
                if ( ( $propertyValue instanceof ezcWebdavServerConfigurationManager ) === false )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'ezcWebdavServerConfigurationManager' );
                }
                break;
            case 'backend':
            case 'pluginRegistry':
            case 'pathFactory':
            case 'xmlTool':
            case 'propertyHandler':
            case 'headerHandler':
            case 'transport':
                throw new ezcBasePropertyPermissionException( $propertyName, ezcBasePropertyPermissionException::READ );

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
     * @throws ezcBasePropertyNotFoundException
     *         If a the value for the property propertys is not an instance of
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
        if ( $this->__isset( $propertyName ) === true )
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
