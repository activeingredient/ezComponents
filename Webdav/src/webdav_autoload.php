<?php
/**
 * Autoloader definition for the Webdav component.
 *
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Webdav
 */

return array(
    'ezcWebdavException'                       => 'Webdav/exceptions/exception.php',
    'ezcWebdavBrokenRequestUriException'       => 'Webdav/exceptions/broken_request_uri.php',
    'ezcWebdavHeadersNotValidatedException'    => 'Webdav/exceptions/headers_not_validated.php',
    'ezcWebdavInvalidHeaderException'          => 'Webdav/exceptions/invalid_header.php',
    'ezcWebdavInvalidRequestBodyException'     => 'Webdav/exceptions/invalid_request_body.php',
    'ezcWebdavInvalidRequestMethodException'   => 'Webdav/exceptions/invalid_request_method.php',
    'ezcWebdavMissingHeaderException'          => 'Webdav/exceptions/missing_header.php',
    'ezcWebdavMissingServerVariableException'  => 'Webdav/exceptions/misssing_server_variable.php',
    'ezcWebdavNotTransportHandlerException'    => 'Webdav/exceptions/no_transport_handler.php',
    'ezcWebdavRequestNotSupportedException'    => 'Webdav/exceptions/request_not_supported.php',
    'ezcWebdavUnknownHeaderException'          => 'Webdav/exceptions/unknown_header.php',
    'ezcWebdavXmlBase'                         => 'Webdav/interfaces/xml_base.php',
    'ezcWebdavProperty'                        => 'Webdav/interfaces/property.php',
    'ezcWebdavBackend'                         => 'Webdav/interfaces/backend.php',
    'ezcWebdavBackendChange'                   => 'Webdav/interfaces/backend/change.php',
    'ezcWebdavBackendMakeCollection'           => 'Webdav/interfaces/backend/make_collection.php',
    'ezcWebdavBackendPut'                      => 'Webdav/interfaces/backend/put.php',
    'ezcWebdavLiveProperty'                    => 'Webdav/interfaces/property_live.php',
    'ezcWebdavPathFactory'                     => 'Webdav/interfaces/path_factory.php',
    'ezcWebdavPropertyStorage'                 => 'Webdav/interfaces/property_storage.php',
    'ezcWebdavResponse'                        => 'Webdav/interfaces/response.php',
    'ezcWebdavBasicPathFactory'                => 'Webdav/path_factory.php',
    'ezcWebdavBasicPropertyStorage'            => 'Webdav/property_storage.php',
    'ezcWebdavCopyResponse'                    => 'Webdav/responses/copy.php',
    'ezcWebdavPropFindResponse'                => 'Webdav/responses/propfind.php',
    'ezcWebdavRequest'                         => 'Webdav/interfaces/request.php',
    'ezcWebdavSimpleBackend'                   => 'Webdav/backends/simple.php',
    'ezcWebdavSupportedLockPropertyLockentry'  => 'Webdav/properties/supportedlock_lockentry.php',
    'ezcWebdavAutomaticPathFactory'            => 'Webdav/path_factory/automatic.php',
    'ezcWebdavCollection'                      => 'Webdav/structs/collection.php',
    'ezcWebdavCopyRequest'                     => 'Webdav/requests/copy.php',
    'ezcWebdavCreationDateProperty'            => 'Webdav/properties/creationdate.php',
    'ezcWebdavDateTime'                        => 'Webdav/tools/date_time.php',
    'ezcWebdavDeadProperty'                    => 'Webdav/properties/dead.php',
    'ezcWebdavDeleteRequest'                   => 'Webdav/requests/delete.php',
    'ezcWebdavDeleteResponse'                  => 'Webdav/responses/delete.php',
    'ezcWebdavDisplayInformation'              => 'Webdav/structs/display_information.php',
    'ezcWebdavDisplayNameProperty'             => 'Webdav/properties/displayname.php',
    'ezcWebdavErrorResponse'                   => 'Webdav/responses/error.php',
    'ezcWebdavFileBackend'                     => 'Webdav/backends/file.php',
    'ezcWebdavFileBackendOptions'              => 'Webdav/options/backend_file_options.php',
    'ezcWebdavFlaggedPropertyStorage'          => 'Webdav/property_storage_flagged.php',
    'ezcWebdavGetCollectionResponse'           => 'Webdav/responses/get_collection.php',
    'ezcWebdavGetContentLanguageProperty'      => 'Webdav/properties/getcontentlanguage.php',
    'ezcWebdavGetContentLengthProperty'        => 'Webdav/properties/getcontentlength.php',
    'ezcWebdavGetContentTypeProperty'          => 'Webdav/properties/getcontenttype.php',
    'ezcWebdavGetEtagProperty'                 => 'Webdav/properties/getetag.php',
    'ezcWebdavGetLastModifiedProperty'         => 'Webdav/properties/getlastmodified.php',
    'ezcWebdavGetRequest'                      => 'Webdav/requests/get.php',
    'ezcWebdavGetResourceResponse'             => 'Webdav/responses/get_resource.php',
    'ezcWebdavHeadRequest'                     => 'Webdav/requests/head.php',
    'ezcWebdavHeadResponse'                    => 'Webdav/responses/head.php',
    'ezcWebdavLockDiscoveryProperty'           => 'Webdav/properties/lockdiscovery.php',
    'ezcWebdavLockDiscoveryPropertyActiveLock' => 'Webdav/properties/lockdiscovery_activelock.php',
    'ezcWebdavLockRequest'                     => 'Webdav/requests/lock.php',
    'ezcWebdavMakeCollectionRequest'           => 'Webdav/requests/mkcol.php',
    'ezcWebdavMakeCollectionResponse'          => 'Webdav/responses/mkcol.php',
    'ezcWebdavMemoryBackend'                   => 'Webdav/backends/memory.php',
    'ezcWebdavMemoryBackendOptions'            => 'Webdav/options/backend_memory_options.php',
    'ezcWebdavMoveRequest'                     => 'Webdav/requests/move.php',
    'ezcWebdavMoveResponse'                    => 'Webdav/responses/move.php',
    'ezcWebdavMultistatusResponse'             => 'Webdav/responses/multistatus.php',
    'ezcWebdavNamespaceRegistry'               => 'Webdav/namespace_registry.php',
    'ezcWebdavOptionsRequest'                  => 'Webdav/requests/options.php',
    'ezcWebdavOptionsResponse'                 => 'Webdav/responses/options.php',
    'ezcWebdavPropFindRequest'                 => 'Webdav/requests/propfind.php',
    'ezcWebdavPropPatchRequest'                => 'Webdav/requests/proppatch.php',
    'ezcWebdavPropPatchResponse'               => 'Webdav/responses/proppatch.php',
    'ezcWebdavPropStatResponse'                => 'Webdav/responses/propstat.php',
    'ezcWebdavPutRequest'                      => 'Webdav/requests/put.php',
    'ezcWebdavPutResponse'                     => 'Webdav/responses/put.php',
    'ezcWebdavRequestLockInfoContent'          => 'Webdav/requests/content/lock_info.php',
    'ezcWebdavRequestPropertyBehaviourContent' => 'Webdav/requests/content/property_behaviour.php',
    'ezcWebdavResource'                        => 'Webdav/structs/resource.php',
    'ezcWebdavResourceTypeProperty'            => 'Webdav/properties/resourcetype.php',
    'ezcWebdavServer'                          => 'Webdav/server.php',
    'ezcWebdavSourceProperty'                  => 'Webdav/properties/source.php',
    'ezcWebdavSourcePropertyLink'              => 'Webdav/properties/source_link.php',
    'ezcWebdavSupportedLockProperty'           => 'Webdav/properties/supportedlock.php',
    'ezcWebdavTransport'                       => 'Webdav/transport.php',
    'ezcWebdavTransportOptions'                => 'Webdav/options/transport.php',
    'ezcWebdavUnlockRequest'                   => 'Webdav/requests/unlock.php',
    'ezcWebdavXmlTool'                         => 'Webdav/tools/xml.php',
);
?>
