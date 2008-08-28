<?php
/**
 * File containing the ezcWebdavDigestAuth struct.
 *
 * @package Webdav
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Struct containing digest authentication information.
 *
 * This struct represents authentication data as provided by the HTTP Digest
 * specification.
 * 
 * @package Webdav
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @author  
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
class ezcWebdavDigestAuth extends ezcBaseStruct
{
    /**
     * Plain text user name.
     * 
     * @var string
     */
    public $username;

    /**
     * The authentication realm used. 
     * 
     * @var string
     */
    public $realm;

    /**
     * The nounce used to hash the password. 
     * 
     * @var mixed
     */
    public $nonce;

    /**
     * The request URI.
     *
     * Attention! This URI is not translated into a local path by the transport
     * layer, since this would affect the hashing of {@link $repsonse}.
     * 
     * @var string
     */
    public $uri;

    /**
     * The qop field of the request. 
     * 
     * @var string
     */
    public $qualityOfProtection;

    /**
     * Serial number of the request (nc header field).
     * 
     * @var string
     */
    public $requestCounter;

    /**
     * Request nonce generated by client (cnonce header field).
     * 
     * @var string
     */
    public $clientNonce;

    /**
     * The response hash.
     *
     * This is the authentication value itself. It is a MD5 hashed version of
     * the following string:
     *
     * <code>
     * <?php
     * $ha1      := md5( "$username:$realm:$password" );
     * $ha2      := md5( "$method:$uri" );
     * $response := md5( "$ha1:$nonce:$requestCounter:$clientNonce:$qop:$ha2" );
     * ?>
     * </code>
     *
     * @var string
     */
    public $response;

    public function __construct(
        $username = '',
        $realm = '',
        $nonce = '',
        $uri = '',
        $qualityOfProtection = '',
        $requestCounter = '',
        $clientNonce = ''
    )
    {
        $this->username            = $username;
        $this->realm               = $realm;
        $this->nonce               = $nonce;
        $this->uri                 = $uri;
        $this->qualityOfProtection = $qualityOfProtection;
        $this->requestCounter      = $requestCounter;
        $this->clientNonce         = $clientNonce;
    }
}

?>