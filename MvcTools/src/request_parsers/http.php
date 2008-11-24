<?php
/**
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package MvcTools
 */

/**
 * Request parser that uses HTTP headers to populate an ezcMvcRequest object.
 * @package MvcTools
 * @version //autogentag//
 * @mainclass
 */
class ezcMvcHttpRequestParser extends ezcMvcRequestParser
{
    /**
     * Uses the data from the superglobals.
     *
     * @return ezcMvcRequest
     */
    public function createRequest()
    {
        $this->request = new ezcMvcRequest();
        $this->processStandardHeaders();
        $this->processAcceptHeaders();
        $this->processUserAgentHeaders();
        $this->processFiles();
        $this->processAuthVars();

        $this->request->raw = &$_SERVER;

        return $this->request;
    }

    protected function processAuthVars()
    {
        $req = $this->request;
        if ( isset( $_SERVER['PHP_AUTH_USER'] ) && isset( $_SERVER['PHP_AUTH_PW'] ) )
        {
            $req->authentication = new ezcMvcRequestAuthentication( $_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'] );
        }
    }

    /**
     * Processes the standard headers that are not subdivided into other structs.
     */
    protected function processStandardHeaders()
    {
        $req = $this->request;
        $req->date = isset( $_SERVER['REQUEST_TIME'] )
            ? new DateTime( "@{$_SERVER['REQUEST_TIME']}" )
            : new DateTime();
        if ( isset( $_SERVER['REQUEST_METHOD'] ) )
        {
            switch( $_SERVER['REQUEST_METHOD'] )
            {
                case 'POST':
                    $req->protocol = 'http-post';
                    break;
                case 'PUT':
                    $req->protocol = 'http-put';
                    break;
                case 'DELETE':
                    $req->protocol = 'http-delete';
                    break;
                default:
                    $req->protocol = 'http-get';
            }
        }
        $req->host = isset( $_SERVER['HTTP_HOST'] )
            ? $_SERVER['HTTP_HOST']
            : (
                isset( $_SERVER['SERVER_NAME'] ) 
                    ? $_SERVER['SERVER_NAME']
                    : 'localhost.localdomain'
              );
        $req->uri = isset( $_SERVER['REQUEST_URI'] )
            ? $_SERVER['REQUEST_URI']
            : '';
        // remove the query string from the URI
        $req->uri = preg_replace( '@\?.*$@', '', $req->uri );
        // url decode the uri
        $req->uri = urldecode( $req->uri );
        // remove the prefix from the URI
        $req->uri = preg_replace( '@^' . preg_quote( $this->properties['prefix'] ) . '@', '', $req->uri );
        $req->requestId = $req->host . $req->uri;
        $req->referrer = isset( $_SERVER['HTTP_REFERER'] )
            ? $_SERVER['HTTP_REFERER']
            : null;
        $req->variables =& $_REQUEST;
        if ( $req->protocol == 'http-put' )
        {
            $req->body = file_get_contents( "php://input" );
        }
    }

    /**
     * Proccesses the HTTP Accept headers into the ezcMvcRequestAccept struct.
     */
    protected function processAcceptHeaders()
    {
        $this->request->accept = new ezcMvcRequestAccept;
        $accept = $this->request->accept;

        $map = array(
            'HTTP_ACCEPT' => 'types',
            'HTTP_ACCEPT_CHARSET' => 'charsets',
            'HTTP_ACCEPT_ENCODING' => 'encodings',
            'HTTP_ACCEPT_LANGUAGE' => 'languages',
        );

        foreach ( $map as $var => $property )
        {
            if ( !isset( $_SERVER[$var] ) )
            {
                $accept->$property = array();
                continue;
            }
            $parts = explode( ',', $_SERVER[$var] );
            $tmpPriorities = array();
            foreach ( $parts as $part )
            {
                $priPart = explode( ';q=', $part );
                if ( count( $priPart ) == 2 )
                {
                    $tmpPriorities[$priPart[0]] = $priPart[1];
                }
                else
                {
                    $tmpPriorities[$part] = 1;
                }
            }
            asort( $tmpPriorities );
            $accept->$property = array_keys( array_reverse( $tmpPriorities ) );
        }
    }

    /**
     * Proccesses the User Agent header into the ezcMvcRequestUserAgent struct.
     */
    protected function processUserAgentHeaders()
    {
        $this->request->agent = new ezcMvcRequestUserAgent;
        $agent = $this->request->agent;

        $agent->agent = isset( $_SERVER['HTTP_USER_AGENT'] )
            ? $_SERVER['HTTP_USER_AGENT']
            : null;
    }

    /**
     * Processes uploaded files.
     */
    protected function processFiles()
    {
        foreach( $_FILES as $name => $info )
        {
            $file = new ezcMvcRequestFile;
            $file->mimeType = $info['type'];
            $file->name = $info['name'];
            $file->size = $info['size'];
            $file->status = $info['error'];
            $file->tmpPath = $info['tmp_name'];

            $this->request->files[] = $file;
        }
    }
}
?>
