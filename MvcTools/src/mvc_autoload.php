<?php
/**
 * Autoloader definition for the MvcTools component.
 *
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package MvcTools
 */

return array(
    'ezcMvcToolsException'              => 'MvcTools/exceptions/exception.php',
    'ezcMvcFilterHasNoOptionsException' => 'MvcTools/exceptions/filter_has_no_options.php',
    'ezcMvcInfiniteLoopException'       => 'MvcTools/exceptions/infinite_loop.php',
    'ezcMvcInvalidEncodingException'    => 'MvcTools/exceptions/invalid_encoding.php',
    'ezcMvcNoRoutesException'           => 'MvcTools/exceptions/no_routes.php',
    'ezcMvcNoZonesException'            => 'MvcTools/exceptions/no_zones.php',
    'ezcMvcRegexpRouteException'        => 'MvcTools/exceptions/regexp_route.php',
    'ezcMvcRouteNotFoundException'      => 'MvcTools/exceptions/route_not_found.php',
    'ezcMvcDispatcher'                  => 'MvcTools/interfaces/dispatcher.php',
    'ezcMvcRequestParser'               => 'MvcTools/interfaces/request_parser.php',
    'ezcMvcResponseFilter'              => 'MvcTools/interfaces/response_filter.php',
    'ezcMvcResponseWriter'              => 'MvcTools/interfaces/response_writer.php',
    'ezcMvcResult'                      => 'MvcTools/structs/result.php',
    'ezcMvcRoute'                       => 'MvcTools/interfaces/route.php',
    'ezcMvcViewHandler'                 => 'MvcTools/interfaces/view_handler.php',
    'ezcMvcConfigurableDispatcher'      => 'MvcTools/dispatchers/configurable.php',
    'ezcMvcController'                  => 'MvcTools/interfaces/controller.php',
    'ezcMvcDispatcherConfiguration'     => 'MvcTools/interfaces/dispatcher_configuration.php',
    'ezcMvcExternalRedirect'            => 'MvcTools/result_types/external_redirect.php',
    'ezcMvcFilterDefinition'            => 'MvcTools/structs/filter_definition.php',
    'ezcMvcGzDeflateResponseFilter'     => 'MvcTools/response_filters/gzdeflate.php',
    'ezcMvcGzipResponseFilter'          => 'MvcTools/response_filters/gzip.php',
    'ezcMvcHttpRawRequest'              => 'MvcTools/structs/request_raw_http.php',
    'ezcMvcHttpRequestParser'           => 'MvcTools/request_parsers/http.php',
    'ezcMvcHttpResponseWriter'          => 'MvcTools/response_writers/http.php',
    'ezcMvcInternalRedirect'            => 'MvcTools/structs/internal_redirect.php',
    'ezcMvcJsonViewHandler'             => 'MvcTools/view_handlers/json.php',
    'ezcMvcPhpViewHandler'              => 'MvcTools/view_handlers/php.php',
    'ezcMvcRailsRoute'                  => 'MvcTools/routes/rails.php',
    'ezcMvcRecodeResponseFilter'        => 'MvcTools/response_filters/recode.php',
    'ezcMvcRegexpRoute'                 => 'MvcTools/routes/regexp.php',
    'ezcMvcRequest'                     => 'MvcTools/structs/request.php',
    'ezcMvcRequestAccept'               => 'MvcTools/structs/request_accept.php',
    'ezcMvcRequestAuthentication'       => 'MvcTools/structs/request_authentication.php',
    'ezcMvcRequestFile'                 => 'MvcTools/structs/request_file.php',
    'ezcMvcRequestFilter'               => 'MvcTools/interfaces/request_filter.php',
    'ezcMvcRequestUserAgent'            => 'MvcTools/structs/request_user_agent.php',
    'ezcMvcResponse'                    => 'MvcTools/structs/response.php',
    'ezcMvcResultCache'                 => 'MvcTools/structs/result_cache.php',
    'ezcMvcResultContent'               => 'MvcTools/structs/result_content.php',
    'ezcMvcResultCookie'                => 'MvcTools/structs/result_cookie.php',
    'ezcMvcResultFilter'                => 'MvcTools/interfaces/result_filter.php',
    'ezcMvcResultUnauthorized'          => 'MvcTools/result_types/unauthorized.php',
    'ezcMvcRouter'                      => 'MvcTools/router.php',
    'ezcMvcRoutingInformation'          => 'MvcTools/structs/routing_information.php',
    'ezcMvcView'                        => 'MvcTools/view.php',
);
?>