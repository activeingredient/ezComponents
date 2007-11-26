<?php
/**
 * File containing the ezcWebdavLockPluginConfiguration class.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 *
 * @access private
 */
/**
 * Plugin configuration class for the LOCK plugin.
 *
 * To activate (load) the plugin, the user must instanciate this class and
 * submit the instance to {@link ezcWebdavPluginRegistry::registerPlugin()}.
 * 
 * @package Webdav
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 *
 * @access private
 */
class ezcWebdavLockPluginConfiguration extends ezcWebdavPluginConfiguration
{
    /**
     * Namespace of the LOCK plugin. 
     */
    const NAMESPACE = 'ezcWebdavLockPlugin';

    /**
     * Main object of the lock plugin. 
     * 
     * @var ezcWebdavLockPlugin
     */
    private $main;

    /**
     * Creates a new lock plugin configuration.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->main = new ezcWebdavLockPlugin();
    }

    /**
     * Returns the hooks this plugin wants to assign to.
     *
     * This method is called by {@link ezcWebdavPluginRegistry}, as soon as the
     * plugin is registered to be used. The method must return a structured
     * array, representing the hooks the plugin want to be notified about.
     *
     * The returned array must be of the following structure:
     * <code>
     *  array(
     *      '<className>' => array(
     *          '<hookName>' => array(
     *              <callback1>,
     *              <callback2>,
     *          ),
     *          '<anotherHookName>' => array(
     *              <callback3>,
     *          ),
     *      ),
     *      '<secondClassName>' => array(
     *          '<thirdHookName>' => array(
     *              <callback1>,
     *              <callback3>,
     *          ),
     *      ),
     *  )
     * </code>
     * 
     * @return array
     */
    public function getHooks()
    {
        return array(
            'ezcWebdavTransport' => array(
                'parseUnknownRequest'   => array( $this->main, 'parseRequest' ),
                'handleUnknownResponse' => array( $this->main, 'handleResponse' ),
            ),
            'ezcWebavPropertyHandler' => array(
                'extractUnknownLiveProperty'   => array( $this->main, 'parseProperty' ),
                'serializeUnknownLiveProperty' => array( $this->main, 'parseProperty' ),
            ),
            'ezcWebdavServer' => array(
                'receivedRequest'   => array( $this->main, 'receivedRequest' ),
                'generatedResponse' => array( $this->main, 'generatedResponse' ),
            ),
        );
    }

    /**
     * Returns the namespace of this plugin.
     *
     * The namespace of a plugin is a unique identifier string that allows it
     * to be recognized bejond other plugins. The namespace is used to provide
     * storage for the plugin in the 
     * 
     * @return string
     */
    public function getNamespace()
    {
        return self::NAMESPACE;
    }

    /**
     * Initialize the plugin.
     *
     * This method is called after the server has be initialized to make the
     * plugin setup necessary objects and to retreive necessary information
     * from the server.
     * 
     * @return void
     */
    public function init()
    {
    }
}

?>
