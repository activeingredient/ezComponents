<?php

return array (
  2 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/',
        'REDIRECT_URI' => '/index.php/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'OPTIONS',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'PHP_SELF' => '/index.php/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'DAV' => '1',
        'Allow' => 'GET, HEAD, PROPFIND, PROPPATCH, OPTIONS, DELETE, COPY, MOVE, MKCOL, PUT',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  3 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/',
        'REDIRECT_URI' => '/index.php/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'PHP_SELF' => '/index.php/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  4 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/',
        'REDIRECT_URI' => '/index.php/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'PHP_SELF' => '/index.php/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection</D:href>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:getcontentlength/>
        <D:getlastmodified/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
        <D:resourcetype/>
        <D:checked-in/>
        <D:checked-out/>
      </D:prop>
      <D:status>HTTP/1.1 403 Forbidden</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>19</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/file.bin</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>7</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  5 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'PHP_SELF' => '/index.php/secure_collection/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  6 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/", response="907db86655d7d2698c791cdf8161edd6", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/", response="907db86655d7d2698c791cdf8161edd6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  7 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/", response="907db86655d7d2698c791cdf8161edd6", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/", response="907db86655d7d2698c791cdf8161edd6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  8 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/file.txt", response="c4dc20a736c638a3f41db715d28bf00a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/file.txt", response="c4dc20a736c638a3f41db715d28bf00a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Some text content.',
      'headers' => 
      array (
        'ETag' => '915f244ec53702ea179db0509d787bde',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  9 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  10 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  11 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="5ddf5507f3b2fb8598b095fa3f433ff9", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="5ddf5507f3b2fb8598b095fa3f433ff9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  12 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  13 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  14 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  15 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '18',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/file.txt", response="98976695631f5349080625564695e50a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/file.txt", response="98976695631f5349080625564695e50a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'c0405933cd57c9b53258fe1be86b3e4f',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  16 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  17 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="c71208fe7df8411b3518254d34735454", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="c71208fe7df8411b3518254d34735454", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  18 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  19 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  20 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  21 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '18',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", response="8d2fc72d1cd2ed7ae4d2ef8918554ae8", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", response="8d2fc72d1cd2ed7ae4d2ef8918554ae8", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'bde09112b72b6fed63ff4e3917ebd56a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  22 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  23 => 
  array (
    'request' => 
    array (
      'body' => 'Some text content.',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '18',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '18',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", response="8d2fc72d1cd2ed7ae4d2ef8918554ae8", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", response="8d2fc72d1cd2ed7ae4d2ef8918554ae8", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'bde09112b72b6fed63ff4e3917ebd56a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  24 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/newsubdir/", response="95b05ad4075ae74d2db98d18e3d0afb2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  25 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  26 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  27 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="3f69196a84c5aa6b5eb643cb2bbaaaea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  28 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="23a13084a490b2ae344e174f88eb75c5", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/newdir/", response="23a13084a490b2ae344e174f88eb75c5", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  29 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  30 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.html", response="8e8b805e765772770eec69c0d8d21e2a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.html", response="8e8b805e765772770eec69c0d8d21e2a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<html><body><h1>Test</h1></body></html>',
      'headers' => 
      array (
        'ETag' => '63e609ad6597ac5f4a6c399729a4abe0',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/html; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  31 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.xml", response="f40e940393cf24cef449592947bac02d", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.xml", response="f40e940393cf24cef449592947bac02d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml?>
<content/>',
      'headers' => 
      array (
        'ETag' => 'b23a873ef8c0f8e3b33339bed653b763',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  32 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.html", response="cd5bd9567b8fc8d3869c9e2ab8483c93", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.html", response="cd5bd9567b8fc8d3869c9e2ab8483c93", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  33 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.html", response="858275bb0af9540d8c48a160a3730fc7", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.html", response="858275bb0af9540d8c48a160a3730fc7", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  34 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.xml", response="8a1f679dc51ef6d92db9270813daccba", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.xml", response="8a1f679dc51ef6d92db9270813daccba", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  35 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/file.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/file.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/file.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/file.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.xml", response="a4185e35ccb1c1024dfadbc0658b3462", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/file.xml", response="a4185e35ccb1c1024dfadbc0658b3462", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  36 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  37 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="Docutils 0.4: http://docutils.sourceforge.net/" />
<title>eZ component: Webdav, Design, 1.0</title>
<meta name="author" content="Kore Nordmann, Tobias Schlitt" />
<meta name="date" content="$Date$" />
<style type="text/css">

/*
:Author: David Goodger
:Contact: goodger@users.sourceforge.net
:Date: $Date: 2005-12-18 01:56:14 +0100 (Sun, 18 Dec 2005) $
:Revision: $Revision: 4224 $
:Copyright: This stylesheet has been placed in the public domain.

Default cascading style sheet for the HTML output of Docutils.

See http://docutils.sf.net/docs/howto/html-stylesheets.html for how to
customize this style sheet.
*/

/* used to remove borders from tables and images */
.borderless, table.borderless td, table.borderless th {
  border: 0 }

table.borderless td, table.borderless th {
  /* Override padding for "table.docutils td" with "! important".
     The right padding separates the table cells. */
  padding: 0 0.5em 0 0 ! important }

.first {
  /* Override more specific margin styles with "! important". */
  margin-top: 0 ! important }

.last, .with-subtitle {
  margin-bottom: 0 ! important }

.hidden {
  display: none }

a.toc-backref {
  text-decoration: none ;
  color: black }

blockquote.epigraph {
  margin: 2em 5em ; }

dl.docutils dd {
  margin-bottom: 0.5em }

/* Uncomment (and remove this text!) to get bold-faced definition list terms
dl.docutils dt {
  font-weight: bold }
*/

div.abstract {
  margin: 2em 5em }

div.abstract p.topic-title {
  font-weight: bold ;
  text-align: center }

div.admonition, div.attention, div.caution, div.danger, div.error,
div.hint, div.important, div.note, div.tip, div.warning {
  margin: 2em ;
  border: medium outset ;
  padding: 1em }

div.admonition p.admonition-title, div.hint p.admonition-title,
div.important p.admonition-title, div.note p.admonition-title,
div.tip p.admonition-title {
  font-weight: bold ;
  font-family: sans-serif }

div.attention p.admonition-title, div.caution p.admonition-title,
div.danger p.admonition-title, div.error p.admonition-title,
div.warning p.admonition-title {
  color: red ;
  font-weight: bold ;
  font-family: sans-serif }

/* Uncomment (and remove this text!) to get reduced vertical space in
   compound paragraphs.
div.compound .compound-first, div.compound .compound-middle {
  margin-bottom: 0.5em }

div.compound .compound-last, div.compound .compound-middle {
  margin-top: 0.5em }
*/

div.dedication {
  margin: 2em 5em ;
  text-align: center ;
  font-style: italic }

div.dedication p.topic-title {
  font-weight: bold ;
  font-style: normal }

div.figure {
  margin-left: 2em ;
  margin-right: 2em }

div.footer, div.header {
  clear: both;
  font-size: smaller }

div.line-block {
  display: block ;
  margin-top: 1em ;
  margin-bottom: 1em }

div.line-block div.line-block {
  margin-top: 0 ;
  margin-bottom: 0 ;
  margin-left: 1.5em }

div.sidebar {
  margin-left: 1em ;
  border: medium outset ;
  padding: 1em ;
  background-color: #ffffee ;
  width: 40% ;
  float: right ;
  clear: right }

div.sidebar p.rubric {
  font-family: sans-serif ;
  font-size: medium }

div.system-messages {
  margin: 5em }

div.system-messages h1 {
  color: red }

div.system-message {
  border: medium outset ;
  padding: 1em }

div.system-message p.system-message-title {
  color: red ;
  font-weight: bold }

div.topic {
  margin: 2em }

h1.section-subtitle, h2.section-subtitle, h3.section-subtitle,
h4.section-subtitle, h5.section-subtitle, h6.section-subtitle {
  margin-top: 0.4em }

h1.title {
  text-align: center }

h2.subtitle {
  text-align: center }

hr.docutils {
  width: 75% }

img.align-left {
  clear: left }

img.align-right {
  clear: right }

ol.simple, ul.simple {
  margin-bottom: 1em }

ol.arabic {
  list-style: decimal }

ol.loweralpha {
  list-style: lower-alpha }

ol.upperalpha {
  list-style: upper-alpha }

ol.lowerroman {
  list-style: lower-roman }

ol.upperroman {
  list-style: upper-roman }

p.attribution {
  text-align: right ;
  margin-left: 50% }

p.caption {
  font-style: italic }

p.credits {
  font-style: italic ;
  font-size: smaller }

p.label {
  white-space: nowrap }

p.rubric {
  font-weight: bold ;
  font-size: larger ;
  color: maroon ;
  text-align: center }

p.sidebar-title {
  font-family: sans-serif ;
  font-weight: bold ;
  font-size: larger }

p.sidebar-subtitle {
  font-family: sans-serif ;
  font-weight: bold }

p.topic-title {
  font-weight: bold }

pre.address {
  margin-bottom: 0 ;
  margin-top: 0 ;
  font-family: serif ;
  font-size: 100% }

pre.literal-block, pre.doctest-block {
  margin-left: 2em ;
  margin-right: 2em ;
  background-color: #eeeeee }

span.classifier {
  font-family: sans-serif ;
  font-style: oblique }

span.classifier-delimiter {
  font-family: sans-serif ;
  font-weight: bold }

span.interpreted {
  font-family: sans-serif }

span.option {
  white-space: nowrap }

span.pre {
  white-space: pre }

span.problematic {
  color: red }

span.section-subtitle {
  /* font-size relative to parent (h1..h6 element) */
  font-size: 80% }

table.citation {
  border-left: solid 1px gray;
  margin-left: 1px }

table.docinfo {
  margin: 2em 4em }

table.docutils {
  margin-top: 0.5em ;
  margin-bottom: 0.5em }

table.footnote {
  border-left: solid 1px black;
  margin-left: 1px }

table.docutils td, table.docutils th,
table.docinfo td, table.docinfo th {
  padding-left: 0.5em ;
  padding-right: 0.5em ;
  vertical-align: top }

table.docutils th.field-name, table.docinfo th.docinfo-name {
  font-weight: bold ;
  text-align: left ;
  white-space: nowrap ;
  padding-left: 0 }

h1 tt.docutils, h2 tt.docutils, h3 tt.docutils,
h4 tt.docutils, h5 tt.docutils, h6 tt.docutils {
  font-size: 100% }

tt.docutils {
  background-color: #eeeeee }

ul.auto-toc {
  list-style-type: none }

</style>
</head>
<body>
<div class="document" id="ez-component-webdav-design-1-0">
<h1 class="title">eZ component: Webdav, Design, 1.0</h1>
<table class="docinfo" frame="void" rules="none">
<col class="docinfo-name" />
<col class="docinfo-content" />
<tbody valign="top">
<tr><th class="docinfo-name">Author:</th>
<td>Kore Nordmann, Tobias Schlitt</td></tr>
<tr><th class="docinfo-name">Revision:</th>
<td>$Rev$</td></tr>
<tr><th class="docinfo-name">Date:</th>
<td>$Date$</td></tr>
<tr><th class="docinfo-name">Status:</th>
<td>Draft</td></tr>
</tbody>
</table>
<div class="contents topic">
<p class="topic-title first"><a id="contents" name="contents">Contents</a></p>
<ul class="simple">
<li><a class="reference" href="#scope" id="id1" name="id1">Scope</a></li>
<li><a class="reference" href="#design-overview" id="id2" name="id2">Design overview</a></li>
<li><a class="reference" href="#tiers" id="id3" name="id3">Tiers</a></li>
<li><a class="reference" href="#classes" id="id4" name="id4">Classes</a><ul>
<li><a class="reference" href="#ezcwebdavserver" id="id5" name="id5">ezcWebdavServer</a></li>
<li><a class="reference" href="#ezcwebdavbackend" id="id6" name="id6">ezcWebdavBackend</a></li>
<li><a class="reference" href="#ezcwebdavtransport" id="id7" name="id7">ezcWebdavTransport</a></li>
<li><a class="reference" href="#ezcwebdavpathfactory" id="id8" name="id8">ezcWebdavPathFactory</a></li>
</ul>
</li>
<li><a class="reference" href="#example-code" id="id9" name="id9">Example code</a></li>
</ul>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id1" id="scope" name="scope">Scope</a></h1>
<p>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> protocol.</p>
<p>It is currently not planned to also offer a WebDAV client component.</p>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id2" id="design-overview" name="design-overview">Design overview</a></h1>
<p>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</p>
<p>The main class of this component will provide a fully <a class="reference" href="http://tools.ietf.org/html/rfc2518">RFC 2518</a> compliant
implementation of a <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</p>
<p>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</p>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id3" id="tiers" name="tiers">Tiers</a></h1>
<p>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</p>
<p>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</p>
<p>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</p>
<p>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</p>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id4" id="classes" name="classes">Classes</a></h1>
<div class="section">
<h2><a class="toc-backref" href="#id5" id="ezcwebdavserver" name="ezcwebdavserver">ezcWebdavServer</a></h2>
<p>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</p>
<p>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</p>
<p>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</p>
<p>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</p>
<p>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</p>
<p>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</p>
<p>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</p>
</div>
<div class="section">
<h2><a class="toc-backref" href="#id6" id="ezcwebdavbackend" name="ezcwebdavbackend">ezcWebdavBackend</a></h2>
<p>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</p>
<ul class="simple">
<li>head()</li>
<li>get()</li>
<li>propFind()</li>
<li>propFetch()</li>
</ul>
<p>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</p>
<p>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</p>
<p>The logical groups of capabilities are:</p>
<dl class="docutils">
<dt>Put</dt>
<dd>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</dd>
<dt>Change</dt>
<dd>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</dd>
<dt>Make collection</dt>
<dd>The creation of new collections also makes up a capability unit and can
optionally be implemented.</dd>
<dt>Lock</dt>
<dd>If the hander provides locking facilities on its own, the main server object
must not take care about that.</dd>
<dt>GZIP-Compress</dt>
<dd>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</dd>
</dl>
<p>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</p>
</div>
<div class="section">
<h2><a class="toc-backref" href="#id7" id="ezcwebdavtransport" name="ezcwebdavtransport">ezcWebdavTransport</a></h2>
<p>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</p>
<p>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</p>
<p>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</p>
<p>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</p>
<p>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</p>
<p>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</p>
<p>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</p>
<p>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</p>
</div>
<div class="section">
<h2><a class="toc-backref" href="#id8" id="ezcwebdavpathfactory" name="ezcwebdavpathfactory">ezcWebdavPathFactory</a></h2>
<p>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</p>
<p>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</p>
<p>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</p>
<p>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</p>
<p>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</p>
<p>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</p>
</div>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id9" id="example-code" name="example-code">Example code</a></h1>
<p>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</p>
<pre class="literal-block">
    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();
</pre>
<!-- Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79 -->
</div>
</div>
</body>
</html>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '18803',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '18803',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test.html", response="468f628f86fc8dbf42f1bab2b935e486", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test.html", response="468f628f86fc8dbf42f1bab2b935e486", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '866d436fdb9577521a1d1acd440e1026',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  38 => 
  array (
    'request' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Α Β Γ Δ Ε Ζ Η Θ Ι Κ Λ Μ Ν Ξ Ο Π Ρ Σ Τ Υ Φ Χ Ψ Ω 

α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ σ τ υ ϕ χ ψ ω

Mathematical characters
-----------------------

ℂ ℕ ℚ ℝ ℤ ∀ ∁ ∂ ∃ ∄ ∅ ∈ ∉ ∋ ∌ ∎ ∎ ∏ ∐ ∑ + − ∓ ∕ ∖ ∗ ∘ √ ∛ ∜ ∝ ∞ ∣ ∤ ∧ ∨ ∩ ∪ ∫
∬ ∭ = ≔ ≕ ≙ ≝ ≠ ≡ ≢ < > ≤ ≥ ≪ ≫ ≮ ≯ ≰ ≱ ≺ ≻ ≼ ≽ ⊀ ⊁ ⊂ ⊃ ⊄ ⊅ ⊆ ⊇ ⊈ ⊉ ⊕ ⊖ ⊗ ⊙ ⊚
⊛ ⊜ ⊝ ⊢ ⊣ ⊤ ⊥ ⊧ ⊬ ⊶ ⊷ ⊻ ⊼ ⊽ ‰ ‱ 
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '739',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '739',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_content.txt", response="a3a8dfa1e7bc835ec8ea9ba663a876a9", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_content.txt", response="a3a8dfa1e7bc835ec8ea9ba663a876a9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '94ad488564aca44123a62c6f22c090dd',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  39 => 
  array (
    'request' => 
    array (
      'body' => 'Some test content...
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '21',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '21',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt", response="b1e4dfdf75801dfb2515bf6fa22531ae", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt", response="b1e4dfdf75801dfb2515bf6fa22531ae", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '655a81988486514fa14b109f0f4e5073',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  40 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  41 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="5041375a5d441d62def061c483b89f90", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="5041375a5d441d62def061c483b89f90", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  42 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  43 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  44 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE document PUBLIC "+//IDN docutils.sourceforge.net//DTD Docutils Generic//EN//XML" "http://docutils.sourceforge.net/docs/ref/docutils.dtd">
<!-- Generated by Docutils 0.4 -->
<document ids="ez-component-webdav-design-1-0" names="ez\\ component:\\ webdav,\\ design,\\ 1.0" source="Webdav/design/design.txt" title="eZ component: Webdav, Design, 1.0"><title>eZ component: Webdav, Design, 1.0</title><docinfo><author>Kore Nordmann, Tobias Schlitt</author><revision>$Rev$</revision><date>$Date$</date><status>Draft</status></docinfo><topic classes="contents" ids="contents" names="contents"><title>Contents</title><bullet_list><list_item><paragraph><reference ids="id1" refid="scope">Scope</reference></paragraph></list_item><list_item><paragraph><reference ids="id2" refid="design-overview">Design overview</reference></paragraph></list_item><list_item><paragraph><reference ids="id3" refid="tiers">Tiers</reference></paragraph></list_item><list_item><paragraph><reference ids="id4" refid="classes">Classes</reference></paragraph><bullet_list><list_item><paragraph><reference ids="id5" refid="ezcwebdavserver">ezcWebdavServer</reference></paragraph></list_item><list_item><paragraph><reference ids="id6" refid="ezcwebdavbackend">ezcWebdavBackend</reference></paragraph></list_item><list_item><paragraph><reference ids="id7" refid="ezcwebdavtransport">ezcWebdavTransport</reference></paragraph></list_item><list_item><paragraph><reference ids="id8" refid="ezcwebdavpathfactory">ezcWebdavPathFactory</reference></paragraph></list_item></bullet_list></list_item><list_item><paragraph><reference ids="id9" refid="example-code">Example code</reference></paragraph></list_item></bullet_list></topic><section ids="scope" names="scope"><title refid="id1">Scope</title><paragraph>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> protocol.</paragraph><target ids="webdav" names="webdav" refuri="http://en.wikipedia.org/wiki/WebDAV"/><paragraph>It is currently not planned to also offer a WebDAV client component.</paragraph></section><section ids="design-overview" names="design\\ overview"><title refid="id2">Design overview</title><paragraph>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</paragraph><paragraph>The main class of this component will provide a fully <reference name="RFC 2518" refuri="http://tools.ietf.org/html/rfc2518">RFC 2518</reference> compliant
implementation of a <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</paragraph><target ids="rfc-2518" names="rfc\\ 2518" refuri="http://tools.ietf.org/html/rfc2518"/><paragraph>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</paragraph></section><section ids="tiers" names="tiers"><title refid="id3">Tiers</title><paragraph>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</paragraph><paragraph>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</paragraph><paragraph>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</paragraph><paragraph>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</paragraph></section><section ids="classes" names="classes"><title refid="id4">Classes</title><section ids="ezcwebdavserver" names="ezcwebdavserver"><title refid="id5">ezcWebdavServer</title><paragraph>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</paragraph><paragraph>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</paragraph><paragraph>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</paragraph><paragraph>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</paragraph><paragraph>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</paragraph><paragraph>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</paragraph><paragraph>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</paragraph></section><section ids="ezcwebdavbackend" names="ezcwebdavbackend"><title refid="id6">ezcWebdavBackend</title><paragraph>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</paragraph><bullet_list bullet="-"><list_item><paragraph>head()</paragraph></list_item><list_item><paragraph>get()</paragraph></list_item><list_item><paragraph>propFind()</paragraph></list_item><list_item><paragraph>propFetch()</paragraph></list_item></bullet_list><paragraph>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</paragraph><paragraph>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</paragraph><paragraph>The logical groups of capabilities are:</paragraph><definition_list><definition_list_item><term>Put</term><definition><paragraph>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</paragraph></definition></definition_list_item><definition_list_item><term>Change</term><definition><paragraph>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</paragraph></definition></definition_list_item><definition_list_item><term>Make collection</term><definition><paragraph>The creation of new collections also makes up a capability unit and can
optionally be implemented.</paragraph></definition></definition_list_item><definition_list_item><term>Lock</term><definition><paragraph>If the hander provides locking facilities on its own, the main server object
must not take care about that.</paragraph></definition></definition_list_item><definition_list_item><term>GZIP-Compress</term><definition><paragraph>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</paragraph></definition></definition_list_item></definition_list><paragraph>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</paragraph></section><section ids="ezcwebdavtransport" names="ezcwebdavtransport"><title refid="id7">ezcWebdavTransport</title><paragraph>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</paragraph><paragraph>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</paragraph><paragraph>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</paragraph><paragraph>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</paragraph><paragraph>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</paragraph><paragraph>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</paragraph><paragraph>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</paragraph><paragraph>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</paragraph></section><section ids="ezcwebdavpathfactory" names="ezcwebdavpathfactory"><title refid="id8">ezcWebdavPathFactory</title><paragraph>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</paragraph><paragraph>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</paragraph><paragraph>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</paragraph><paragraph>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</paragraph></section></section><section ids="example-code" names="example\\ code"><title refid="id9">Example code</title><paragraph>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</paragraph><literal_block xml:space="preserve">    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();</literal_block><comment xml:space="preserve">Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79</comment></section></document>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '14013',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '14013',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.xml", response="54314e4a015cfee884f0971c0e16b907", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.xml", response="54314e4a015cfee884f0971c0e16b907", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '5ad59a93c1eb407447585fc830b848a7',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  45 => 
  array (
    'request' => 
    array (
      'body' => 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '�M7%����' . "\0" . '' . "\0" . '�6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT	' . "\0" . '�G�GUx' . "\0" . '�d' . "\0" . '�[is�6��_��t����I�m���$q�f��\'u���t �P��' . "\0" . '���~� ARr�nv�!�(' . "\0" . '�����ߖ��U�զ��=^~<�JM���Ŭu�������O�?>�������-U����Ͼ{�\\���Z�����;]إ5m���4[���[�.�/ť�U|�*��t�z��j��ￛ��ι�l�:y' . "\0" . '�`W�����f��b��I�2�9�T>^~*X�q�3{1S�-RS֦�\'���d�v�)������d�h�ѭ;{#x��������|^��N?��G�g�޺�p��@�+:N������9-]����/D�t����l��4뿚F�L������f��?��B;w���u����^���W�������������:�Z��ldG�o竎�3�NEZHkQm���mg����Wk� H��?�ڴE��/��n}�����*��l䶑��U�����<���̦�V��O�%���h�*:�)<�(x_1.�Z�gk���\'�O:�NCt�����}R����M8[?�\'��}֑Q��Jԥ�����Dާp�R���FUYD�?y�t?��u��lmQ���\'�/��k�v�L�i�+x����������/{��ʲ.�p����	��G8!�R�cjt<(0�&5Nx���]]�����S|v�@�荂A�J;-�p��!<q;�Dݘ[��/��˧��s���t\'����b��NȢ���4���Ш$-Q>�GJD
F1)�����!��j��7�V��Kȧ+�����7V;��Lj���' . "\0" . 'NB*�)�ݪSo�z«XۯH�i�' . "\0" . '�8�ʀ�
�a��Aײ��
��K���<dv�a�c���7�����<9��y�R�Z�2J��FKw���v�=Ye�*�2x��ױps򸤓�\\�{�"����`��B\\�L�dF\'*�2�π�L�����S���p�F�~��eC�#�����߅�)�E1{�:���œ�1�gyZ��|g��b��)�]�]�%�j	7�,���,\\8���)8Y�R�A�i�k���௒x�;����,p�֦�9(�E�2M	�8�Q�n��b7xj��i;>�]ciK�e��|t:�A����
x������,�� @�aN������#��+@;��ȳ�C&�C�VT�����@7��A�' . "\0" . 'J�h�}x&�CCGbqj' . "\0" . '�R�#Bepjj-����߭q_QP�G�	���S��' . "\0" . '. Ҫ�I�l�@�nJX����P_��g�<{��z�C�K���\\Y��:s��t���T�G=Xd#�g<S$���:�L��~��@��Qu�,�=\\�^:2�]!�1ʠ�����w���ՃF%��*}\'�С��)���B0v��1XK<���v�wA��TQ' . "\0" . 'T=`m���HK�n��E§l�D"!���?%d&��E�ed��Q@M�9*�r9T��7ʤ:�F;���Z8�l~�,�V�d�ЋP%5r��$���w�P�3��0{UI���ҝJoXkd�h�(�hg!��&�k��"���R��l�%鋲�H*�kes�9��9�' . "\0" . '����	���oaQ@\\��-���u����@\'�E���z��>��' . "\0" . '' . "\0" . 'm�l(1��@�Ԋ+��ʈ�<���HX����!WW�1��ʴ�iLS�@�}#/��טv�#b
�g��@gT�-	����������\'���܊k�~�=�4�
*�D�' . "\0" . 'O�E�#��S�І����{��F=����A��Y�Z����鶏��hU��H�I"�
��H1	��#�B��h��P�QT*�3�����9,ڪ�t�y�\\gcf�T��Jw:+�8k����Ig~Z�.�V�޶M�Q�t�p�-��F�A%0���B�p�y<�;�O[�����ՅvX	$C���4�pð�8�en����8�t�ĵk�1}�g�M�$\'T���7J&��S)�\\���L��gH}��n�w���[��G�z���F��' . "\0" . '�u�1(3Ay��LM�#=0�Gn�c��2U����Վ�;T�ֽ�z��\\JӠ��*���tȓ�ȅ��iauB�?�@�OXy[�\\�cI�����5˓q����\'f���`�\'�z��Z�/�BtW�L� ��-zOD�S�f{��m|�Lr�+�' . "\0" . '��җ	�S\'�G#$��L�"�A�"��v8�:��,�z&�}�S`g��������;2FI�n��(/0SD�G��I���2�������Io�U�C�Q�#�ȸ��?~�d����APx��v�b�h���R�d�;I��x�#�rl4<I��q#D����)�@�r���0�W<�\\b�_�]�(��Ǌ\'�����' . "\0" . '�mF���6Q�-I�*4g�f��?_��#ߝ���G�`C������%`�ڧ D��8-���X��H�ԝ׌�^�����@[�`"C�&�b������J&~���FGw�`��p�wX���ID*�e���Rv�B|�@h��$ ���ş' . "\0" . '�us e�Xn쪨<H6ڕ�� J�=�ԡ��<w�ra�8�[�Hj*b���8�H$�����;��r}�:���3' . "\0" . 'j�I:��{�~,؏ �Kz�*�y^�֘8���R|{}}����ڛk��1#���!�s2��	��vӷ�0	I4S8�725��K����$YzGJ��R��_�
�߷�|���^˗�eb�۹��Hbl�bp��{�;��\'��`	ڰP�PtPSQR2�j~�RK(�a�H�DrcZG~�^��_���!�b)t���\\� �a/݁
�L&P�����6���	�茮c|�uIƏG��F�4�QvDǬ��ΑRYs��������]pdP�����g??����Ϲ�^�ݯ�/�\'�Xt7>��>?~]>��bb���k�a�+E#��!�%�Q(�m����u4v�3�0R��YU�Bm�?��K�cul
ܶ�e|hu�C�xx�X���6�s��XE=�Ŋ<��s�]��l\\��fp#�` �͔ĊPUʑ6\\�8��Uv�i��پI��@�뺨r�s�ϟkB���Ս�-�����0��8��Wte@�Ӑc�$(�ǈ~.IJ � �!�M��~$�/��z�xB��8P��
F��x��7g@��~�b���^@�9�����-�.O��r�bi��-
B�6��`C���\'�A-*�W��$�U��E V�#%t�@�y��I����Q4��O�Ʈ;�(rL�$��(:;�N��\'}��Q
�����' . "\0" . '����:u2����u4���*�ޢ��~�j�n��^�1#/w@>�y�%_ť�L/� /��fDے�����=:�*,A>�x���29��l��Z�xL{~n���������x.�v��i/0w��a���ss	%��{1��47��{]E�K|3���U;	���t����]�4�	���h ��!e�N���P�U�<cp>]�X7T��p�U	!������o�jc�6ܸ����rG�I���R�����`�s_�qA��{KB�7�$1�Gn�kѭ��������7�d' . "\0" . '�X�0L�2��F�h��vc�]"��Q��^K��=\'R��tbw���ぐ��c��Pj��JY��k�q�i�Ek����w\\�� ��c�@�)�EI�ql��*��N����L��CWά��e���GԀ�&��R1�����4-�}' . "\0" . '�`O	�������`�����k̆j�S*��R�����W��㗀�En]ʭ�cY�d��^VP�/����5�03�8|I�߬1eC~�Т�=���q�Ex�)`��l���:u��@��v���A�Z����j�i�:�b!��{�q���W�6{cc��v
��f;X�o�K;Ƴ/ǯ����!.��V���{�;��W���+z�a�' . "\0" . 'x5;z�U�u�����/��`A�-�3[K�\'���5:ˇ���k�$�o��/h�2��~��+^�Z	MMu*����;�`���;YrJ��Z|�u_�m#��6�%��P< �~ �	`��~�|,�
wz�����̩��C�p���P��Dbڍ��)�q?���	�MD̎o������zZ\'8�C,J�m~���X���G��7����z�����\\��k��L�w�:&��h壩����X~�l���ˏ��:0�$ʩ����0rx[E��@�hHgp��7|�P{��' . "\0" . 'Bg���' . "\0" . '-' . "\0" . 'ʊ������ɋ*;Knu	��ϡ�h�D�_|�����`dx�PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ډM7mh
��' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.htmlUT	' . "\0" . '��G��GUx' . "\0" . '�d' . "\0" . '�\\��6��ο�x;����vl���v��pٝ�j�� �0&	�' . "\0" . '[VR���' . "\0" . '	RT��ɮ?�	<<���@~���"ת�ڔO\'��Pej2]n�N��=��//�\'������?_�[^���w����l�����ŋ���^}��' . "\0" . '
⪖��(�|�x��DL��U��b���w���,��,�#�S��?�\\4s��l+ӂ�ei���9}��1Ϟ�e.�qUND�	i(��?�rR ������O\'�M�T�fW�JMD�ߞN�z�H�B�[Y[�zQ,�R��d�JUKg�h��6N�V��,��8���4u�������-���.W��_@��L	t���j���x��ޔS���� ��1�_�V�Sg�,aޕYii��t�k���Io���~�GY�ϕp /��Z�f��<Y>�U�ⅼ֙�Ƙl��d��)p��\'m,��p��WY�;��������lv�H��.�.O��������o��#BJ��;���h�@�������|n�}�7[��j���MحRNlA+�JQ�2U�Хp[%�f��Td����\'���M�D*m*���`"�	�E�nW5N��Z��o�:T�����bkvΐy�:�����{�L�6֙B�h��<̓����`��Ua��X��A�b]�B8��B���Bn�#L��xa�<"z"\\6�p+~M���\'�$�����' . "\0" . '0��@�2#��6\'<!�hL�Nä�\'�qej\'K7��s\'��$��$�����%R���q�"�C�O���ED�1_�ں.t [�T��.
Yo�RXUc�z<l�L�Y(��M�g�l�"7�u���q�챙[�e`�86�,w�%@��sg��J��j��!観L�DCnAC/�Mjr����;���M����85W��Բ�F�S��Pl88�;=e�(�$���,�' . "\0" . 'R' . "\0" . '\'�.���N�b��{h��ɳٚ|1Sk]�\\�N���_�����{8�E�2}=�+$u��m0��U:�u�8$}D*s��%�dݒ�
�<O}w��������A4R533��Hlu��a�u�Z�b����ɺD�n�"r�Be�)� hћ�N#����/,
^{��x=:�?:v4���ӵ,t�o!E�AT��v;A�G��8�k��tR���A/G���V�^>f��P�H��H�t*s@1�.t���[40���I\'�h?�����IG�k���L��[�e4�4��g`�)��8`��l+e��Nb����mq!&V��' . "\0" . 'i{bk�i��>r�v����>K9��6�6$0e�ɂr%���vCb' . "\0" . '��� �T3�~��G����	*�p"�7B��F(��Nc��lW�>��ǡ����Ɍ���i����rē?��r#aN(.:	�wռnV5�ʯ7��@/��@io�*f$E���V�c0l{:ďс���v�? P|xy��2�/��s�R�Đ�L��l���Ç������� Ƀ��n�x�Gc:GF�]��kgh_����b3�)dױ/�����_G���`�E��l��1��
���+�L�JA^�=L����vͫ�<H�f��7Uul0����P���e~Q̔���Z���c�t�܃��?��TV��8' . "\0" . 'c�ε����
�����ک^;�<d#G"
��a>hy�]`�xFZ�F����<�H�\\����VV+H�����i�NFr�1X>=��' . "\0" . '�%�h�gS������t�!�C��H' . "\0" . 'R�k(�)$?JJ�?J���*�?7cd���u���}� r�v�Tv#�0�tnt��iX���|����r�t$�ѐQ<�t��(�΁' . "\0" . '���Zʐ��ۇBq�~�����p�!�n��A�kۚ\\g�z/ U�&2���˵9�>����X��%&��!�U7�J����д�m��-�����¯��!<��ѽ5I@.��S[H�U�Ͱ;y�t�H�oY�S��8b��[�A8�r������w�S����ߣ' . "\0" . '�å�1r�j��0�ϰe�u��,��%|�}����$n�����Ew��=��_fm#d�}h�lC�Ng\'�P?3�3\'��]oO��͍�vUT�D�k�E_�MD��
^"���|0���-ꑗ����UqM�' . "\0" . '��
)���	X��K��~�p[�]��M�a�%�U�jۦ��b���m�S�<�KM��N~��h��Z�{�/�����o^�VP�F�U��hN���I&M�)C�����\'	�W@�iUȹ-.�k���j�' . "\0" . '�S��>?��ɦlp%���E���[|�ā�)y�6�N�Z�ͳ�����0���Dih��hޟ\\^��S�������' . "\0" . 'd�/�Z����%e���{
D�;���ѿ���oi��Ym�#|�2�v�F��Q��>�b\'2��E���
Wa��X��n���3�>��[�Q��k�5���Y�>n��{��' . "\0" . '�����[����%�8�p�پ�����:Z::4h\'7�5�k��%�)���c�%�}Q#2D�MI��M�VSt:C�}(<3�Gk!�h���t��k�1,�q�x�7��9Ũ�n������T]������' . "\0" . '�Zh�Ҕ�ل8R�Q��9U�w�����t��������]#s 3(V���W�ʹ�1���j*�%�����%��m\'�5J�ݶ���j팵v' . "\0" . 'c�pw�xɼN�R�l�ר��Yk���u�l6{>J�N4��Ё�qouJ��;��Ƽ���G0�w��li-��5iʉR����W
O��i<SPՂ\'GH' . "\0" . '�z�����rY�2�X<�eq�f{�K�nrP쇍��۹VnM&����z����8�����OdE$9-����c�͕=g.�� \'�$���K��r���·�x�[P3v5h`�>\'���*,:��@��.��e_+�O-���.�7�V���8��MYk���x���3����G��B�9�r�`�H�����H�^�I�~�R�����5l�4�t{��=�l��ΐ�"�Z�Sj' . "\0" . '
R��(̼a�t��)�^��G�&	#X�3�#T"�,u`�=�$XP��c%��jϼ�<{�2:�@�HM �g@���S�(�t
ZI���)�*z�Pm��%�@���)�6�Ԫ���>X&V��"�f�ۛ�A�?@~PZ�o��KC��@�ޤJ_�,9�{+�6	nӚ\'zK��4��J�v�,=\\: 5��)�b�U�>g���_^��O�\'�|;��d��a��P�b,�����X3��\\B�t�I��6�v�)' . "\0" . '� bV�a�Q90���o�L*�:#@����gy|%q�)ca�iN���V��XL$pta�ߵ�9t�yk�1M`Q�{.^q����w)I�\'%؁�����Ӕd�&' . "\0" . 'FAa΄���2aP' . "\0" . 'U���ۘ�I���:�9^�O��K@S]�\\��7��!��}²%^f"�p' . "\0" . '�J#vr?�EN�#a	Ģ���X]ҁ)����e����`��g�k��*�6�fKԽw�k���>��8�zI��ml��&Z��������p�#�c�H�!�L��(@�̢�q�į�B��Ҷ���ګ�P��t����C�gP����!,t=x��I��VX�Nn�)��YBg�����Q@C/1TFT>�mMnDD��T�7M��5("xO�����jJWC*BI3�
P�B!~t�Y��´a���' . "\0" . '�KG�Բ�NY4' . "\0" . 's+��d`h�}�@��G�u�P�+���`h��@��(�e<' . "\0" . '�g����+,s� xE�p�F��r�|(F����6M���\\�SOe�*9�k��{=�l"��_�^��?�a�[/p\\��u w�#A=X�]Рh8�*Q��`��kG���ҏI��L��L��jG���^H{���R�a��$��R�k���0{
r~�' . "\0" . '�.H��2����49x�����iY�2|Q,8�@7��u2L�l�����x2��e�' . "\0" . '�;��;����5kߗ�Udr�+������D].�Xc{v�6�I�h(H�r���^�0)A^B1�V6�N��Z���!�%q��v�� �����&k�8����+IG�^4��X��A�"�H_x廝o���~�1�p��l1ϫjm����*�~8�=���!9�k������lhb��-�򴨘�p�rti�Al��zv�I�{Ў�E+��6��c�f����4�Y�O��"�:���j�卍x<4�{��aBX�� U_R<S`��C�Q��m�7�N�kŀ��le��%�#
�}{�I	M���(Cr�\\$b' . "\0" . '�n��8ԢGg��Ї�h�P�xuNŲ�H�x�t*@P#M�6��S ��|��i���c�`]H��J�B�w�z~�F(����?��l�)�BV�����v���N0�z2w��q���dD0�ٷ�����:P]���S�퀆���0FXq���������OW^������I����C�fե��F�>S��%��[�t�6�L�R�X�g��{�*���/n���O�q���\\�`ˮ)5��X����9N��w�t+Ge/&!�y�v�%a�ٕ�#!9!����F�u��4����Ϳ^��=��x���m𹞋nz>���d
��B#�ͯ~���jFMg(Ú����U���t���$�4�]N��q$�М�E��"��~�L>ʅc������ON��%�:]���K�������l�7G��BD�݁κ�|ߋC\'
x�#�' . "\0" . '��{J9qh�Û��[��BK�q���&��L.~,Ǌ}න;Q�sl��M��N���,v=Z�����C����]��ld�^[�^+�V_YŒ��@|�Ƞ���e8�{!�b�	�y�Z�mfKqv�����?��f藵�,5)V&7�e�;�	v=�S�C�jk�$A*܏��5	�|(�а�ｇ���$pMGm�eFk����cav8U�_��^tk�ܪ�;"&C�:���˧�H�J�vW�荥���v�����˪�M���Ŧ����d\\V�rL��n�L�ʅ�l�G���c����>��^���Uġ�ӊ�{�M�F�Q����FV��O�Z0߼���N	P"��4���7���ine�?,��;�>�xC$��Hq����v�P�_j[�a6�k�C�P�%`n�5O�z*��|�����˷,���NZO*��Ǧ���z�R{�/�k_��%d�#�î���4;/����\'o,���@�V�\\G�G����5�kTwS��bG������g�УO�n�*�p����x���2�G���w�e���n������õBQ���qH�-/��� ����
�f�u��U|(����n����wZ|�,�l�$��@�r3��M�t=��780AH3V�"+���u��������c>h��v5�w�[�d^��*d.�8���\\)>C���k��%�pZ���ƩC\'b,��"�1�Mz@\\
!He�̂��W۪}D�0���?M;�
��Cߒ�~x}%�ey�ؐu�b�&c' . "\0" . '�N�^Ę���a0�3�9�p7HbѲ�l�x�����O���Mp@��o	B����R]��"D��Hq��`9��0,�p]�R^����u�]��C�E��9l	��ƶ�AUS�è0���_�=>���y\\���\\������͎�ǀRW��v��J<{���h��F�khPz\'���s�^e���6���i�.��I��O�)U��#���.x�b!���\\0��v7�@���E�@�/5�t�.´�����5P�+>#�L ���]\'"����f��]k�x�����j��h�' . "\0" . 'nto�' . "\0" . '�[Ēo��' . "\0" . '�h������po�`���a�.��Ps����޴��~���X�v��Y��m�����g�!}:��8>�柎U�C�����Z&����{���?���A�k�~�����/' . "\0" . '��P=j���0�r��5^w�d6�lt�o=����L
�������r�FS@|������5/Ŋ�,3؝' . "\0" . '\'�y��SDJ�m�-tu1
@}��z��@;.' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '�M7%����' . "\0" . '' . "\0" . '�6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '��' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT' . "\0" . '�GUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ډM7mh
��' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '��' . "\0" . '' . "\0" . 'put_test.htmlUT' . "\0" . '��GUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '�' . "\0" . '' . "\0" . '' . "\0" . '�(' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '10644',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '10644',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.zip", response="f4238d90bf38670dc692670026f9e12f", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.zip", response="f4238d90bf38670dc692670026f9e12f", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'ef383241769f0df9a982a37b53504cf2',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  46 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  47 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  48 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test.html", response="86bcd51f1cf482bbbc983a30793f335c", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test.html", response="86bcd51f1cf482bbbc983a30793f335c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="generator" content="Docutils 0.4: http://docutils.sourceforge.net/" />
<title>eZ component: Webdav, Design, 1.0</title>
<meta name="author" content="Kore Nordmann, Tobias Schlitt" />
<meta name="date" content="$Date$" />
<style type="text/css">

/*
:Author: David Goodger
:Contact: goodger@users.sourceforge.net
:Date: $Date: 2005-12-18 01:56:14 +0100 (Sun, 18 Dec 2005) $
:Revision: $Revision: 4224 $
:Copyright: This stylesheet has been placed in the public domain.

Default cascading style sheet for the HTML output of Docutils.

See http://docutils.sf.net/docs/howto/html-stylesheets.html for how to
customize this style sheet.
*/

/* used to remove borders from tables and images */
.borderless, table.borderless td, table.borderless th {
  border: 0 }

table.borderless td, table.borderless th {
  /* Override padding for "table.docutils td" with "! important".
     The right padding separates the table cells. */
  padding: 0 0.5em 0 0 ! important }

.first {
  /* Override more specific margin styles with "! important". */
  margin-top: 0 ! important }

.last, .with-subtitle {
  margin-bottom: 0 ! important }

.hidden {
  display: none }

a.toc-backref {
  text-decoration: none ;
  color: black }

blockquote.epigraph {
  margin: 2em 5em ; }

dl.docutils dd {
  margin-bottom: 0.5em }

/* Uncomment (and remove this text!) to get bold-faced definition list terms
dl.docutils dt {
  font-weight: bold }
*/

div.abstract {
  margin: 2em 5em }

div.abstract p.topic-title {
  font-weight: bold ;
  text-align: center }

div.admonition, div.attention, div.caution, div.danger, div.error,
div.hint, div.important, div.note, div.tip, div.warning {
  margin: 2em ;
  border: medium outset ;
  padding: 1em }

div.admonition p.admonition-title, div.hint p.admonition-title,
div.important p.admonition-title, div.note p.admonition-title,
div.tip p.admonition-title {
  font-weight: bold ;
  font-family: sans-serif }

div.attention p.admonition-title, div.caution p.admonition-title,
div.danger p.admonition-title, div.error p.admonition-title,
div.warning p.admonition-title {
  color: red ;
  font-weight: bold ;
  font-family: sans-serif }

/* Uncomment (and remove this text!) to get reduced vertical space in
   compound paragraphs.
div.compound .compound-first, div.compound .compound-middle {
  margin-bottom: 0.5em }

div.compound .compound-last, div.compound .compound-middle {
  margin-top: 0.5em }
*/

div.dedication {
  margin: 2em 5em ;
  text-align: center ;
  font-style: italic }

div.dedication p.topic-title {
  font-weight: bold ;
  font-style: normal }

div.figure {
  margin-left: 2em ;
  margin-right: 2em }

div.footer, div.header {
  clear: both;
  font-size: smaller }

div.line-block {
  display: block ;
  margin-top: 1em ;
  margin-bottom: 1em }

div.line-block div.line-block {
  margin-top: 0 ;
  margin-bottom: 0 ;
  margin-left: 1.5em }

div.sidebar {
  margin-left: 1em ;
  border: medium outset ;
  padding: 1em ;
  background-color: #ffffee ;
  width: 40% ;
  float: right ;
  clear: right }

div.sidebar p.rubric {
  font-family: sans-serif ;
  font-size: medium }

div.system-messages {
  margin: 5em }

div.system-messages h1 {
  color: red }

div.system-message {
  border: medium outset ;
  padding: 1em }

div.system-message p.system-message-title {
  color: red ;
  font-weight: bold }

div.topic {
  margin: 2em }

h1.section-subtitle, h2.section-subtitle, h3.section-subtitle,
h4.section-subtitle, h5.section-subtitle, h6.section-subtitle {
  margin-top: 0.4em }

h1.title {
  text-align: center }

h2.subtitle {
  text-align: center }

hr.docutils {
  width: 75% }

img.align-left {
  clear: left }

img.align-right {
  clear: right }

ol.simple, ul.simple {
  margin-bottom: 1em }

ol.arabic {
  list-style: decimal }

ol.loweralpha {
  list-style: lower-alpha }

ol.upperalpha {
  list-style: upper-alpha }

ol.lowerroman {
  list-style: lower-roman }

ol.upperroman {
  list-style: upper-roman }

p.attribution {
  text-align: right ;
  margin-left: 50% }

p.caption {
  font-style: italic }

p.credits {
  font-style: italic ;
  font-size: smaller }

p.label {
  white-space: nowrap }

p.rubric {
  font-weight: bold ;
  font-size: larger ;
  color: maroon ;
  text-align: center }

p.sidebar-title {
  font-family: sans-serif ;
  font-weight: bold ;
  font-size: larger }

p.sidebar-subtitle {
  font-family: sans-serif ;
  font-weight: bold }

p.topic-title {
  font-weight: bold }

pre.address {
  margin-bottom: 0 ;
  margin-top: 0 ;
  font-family: serif ;
  font-size: 100% }

pre.literal-block, pre.doctest-block {
  margin-left: 2em ;
  margin-right: 2em ;
  background-color: #eeeeee }

span.classifier {
  font-family: sans-serif ;
  font-style: oblique }

span.classifier-delimiter {
  font-family: sans-serif ;
  font-weight: bold }

span.interpreted {
  font-family: sans-serif }

span.option {
  white-space: nowrap }

span.pre {
  white-space: pre }

span.problematic {
  color: red }

span.section-subtitle {
  /* font-size relative to parent (h1..h6 element) */
  font-size: 80% }

table.citation {
  border-left: solid 1px gray;
  margin-left: 1px }

table.docinfo {
  margin: 2em 4em }

table.docutils {
  margin-top: 0.5em ;
  margin-bottom: 0.5em }

table.footnote {
  border-left: solid 1px black;
  margin-left: 1px }

table.docutils td, table.docutils th,
table.docinfo td, table.docinfo th {
  padding-left: 0.5em ;
  padding-right: 0.5em ;
  vertical-align: top }

table.docutils th.field-name, table.docinfo th.docinfo-name {
  font-weight: bold ;
  text-align: left ;
  white-space: nowrap ;
  padding-left: 0 }

h1 tt.docutils, h2 tt.docutils, h3 tt.docutils,
h4 tt.docutils, h5 tt.docutils, h6 tt.docutils {
  font-size: 100% }

tt.docutils {
  background-color: #eeeeee }

ul.auto-toc {
  list-style-type: none }

</style>
</head>
<body>
<div class="document" id="ez-component-webdav-design-1-0">
<h1 class="title">eZ component: Webdav, Design, 1.0</h1>
<table class="docinfo" frame="void" rules="none">
<col class="docinfo-name" />
<col class="docinfo-content" />
<tbody valign="top">
<tr><th class="docinfo-name">Author:</th>
<td>Kore Nordmann, Tobias Schlitt</td></tr>
<tr><th class="docinfo-name">Revision:</th>
<td>$Rev$</td></tr>
<tr><th class="docinfo-name">Date:</th>
<td>$Date$</td></tr>
<tr><th class="docinfo-name">Status:</th>
<td>Draft</td></tr>
</tbody>
</table>
<div class="contents topic">
<p class="topic-title first"><a id="contents" name="contents">Contents</a></p>
<ul class="simple">
<li><a class="reference" href="#scope" id="id1" name="id1">Scope</a></li>
<li><a class="reference" href="#design-overview" id="id2" name="id2">Design overview</a></li>
<li><a class="reference" href="#tiers" id="id3" name="id3">Tiers</a></li>
<li><a class="reference" href="#classes" id="id4" name="id4">Classes</a><ul>
<li><a class="reference" href="#ezcwebdavserver" id="id5" name="id5">ezcWebdavServer</a></li>
<li><a class="reference" href="#ezcwebdavbackend" id="id6" name="id6">ezcWebdavBackend</a></li>
<li><a class="reference" href="#ezcwebdavtransport" id="id7" name="id7">ezcWebdavTransport</a></li>
<li><a class="reference" href="#ezcwebdavpathfactory" id="id8" name="id8">ezcWebdavPathFactory</a></li>
</ul>
</li>
<li><a class="reference" href="#example-code" id="id9" name="id9">Example code</a></li>
</ul>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id1" id="scope" name="scope">Scope</a></h1>
<p>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> protocol.</p>
<p>It is currently not planned to also offer a WebDAV client component.</p>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id2" id="design-overview" name="design-overview">Design overview</a></h1>
<p>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</p>
<p>The main class of this component will provide a fully <a class="reference" href="http://tools.ietf.org/html/rfc2518">RFC 2518</a> compliant
implementation of a <a class="reference" href="http://en.wikipedia.org/wiki/WebDAV">WebDAV</a> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</p>
<p>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</p>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id3" id="tiers" name="tiers">Tiers</a></h1>
<p>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</p>
<p>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</p>
<p>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</p>
<p>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</p>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id4" id="classes" name="classes">Classes</a></h1>
<div class="section">
<h2><a class="toc-backref" href="#id5" id="ezcwebdavserver" name="ezcwebdavserver">ezcWebdavServer</a></h2>
<p>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</p>
<p>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</p>
<p>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</p>
<p>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</p>
<p>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</p>
<p>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</p>
<p>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</p>
</div>
<div class="section">
<h2><a class="toc-backref" href="#id6" id="ezcwebdavbackend" name="ezcwebdavbackend">ezcWebdavBackend</a></h2>
<p>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</p>
<ul class="simple">
<li>head()</li>
<li>get()</li>
<li>propFind()</li>
<li>propFetch()</li>
</ul>
<p>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</p>
<p>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</p>
<p>The logical groups of capabilities are:</p>
<dl class="docutils">
<dt>Put</dt>
<dd>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</dd>
<dt>Change</dt>
<dd>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</dd>
<dt>Make collection</dt>
<dd>The creation of new collections also makes up a capability unit and can
optionally be implemented.</dd>
<dt>Lock</dt>
<dd>If the hander provides locking facilities on its own, the main server object
must not take care about that.</dd>
<dt>GZIP-Compress</dt>
<dd>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</dd>
</dl>
<p>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</p>
</div>
<div class="section">
<h2><a class="toc-backref" href="#id7" id="ezcwebdavtransport" name="ezcwebdavtransport">ezcWebdavTransport</a></h2>
<p>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</p>
<p>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</p>
<p>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</p>
<p>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</p>
<p>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</p>
<p>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</p>
<p>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</p>
<p>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</p>
</div>
<div class="section">
<h2><a class="toc-backref" href="#id8" id="ezcwebdavpathfactory" name="ezcwebdavpathfactory">ezcWebdavPathFactory</a></h2>
<p>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</p>
<p>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</p>
<p>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</p>
<p>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</p>
<p>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</p>
<p>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</p>
</div>
</div>
<div class="section">
<h1><a class="toc-backref" href="#id9" id="example-code" name="example-code">Example code</a></h1>
<p>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</p>
<pre class="literal-block">
    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();
</pre>
<!-- Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79 -->
</div>
</div>
</body>
</html>
',
      'headers' => 
      array (
        'ETag' => '866d436fdb9577521a1d1acd440e1026',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  49 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_content.txt", response="da23d4245e8b0eb8b473c6197ca39868", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_content.txt", response="da23d4245e8b0eb8b473c6197ca39868", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is an UTF-8 test file
==========================

This file contains a variaty of Unicode characters to test with the eZ Webdav
component.

Greek letters
-------------

Α Β Γ Δ Ε Ζ Η Θ Ι Κ Λ Μ Ν Ξ Ο Π Ρ Σ Τ Υ Φ Χ Ψ Ω 

α β γ δ ε ζ η θ ι κ λ μ ν ξ ο π ρ σ τ υ ϕ χ ψ ω

Mathematical characters
-----------------------

ℂ ℕ ℚ ℝ ℤ ∀ ∁ ∂ ∃ ∄ ∅ ∈ ∉ ∋ ∌ ∎ ∎ ∏ ∐ ∑ + − ∓ ∕ ∖ ∗ ∘ √ ∛ ∜ ∝ ∞ ∣ ∤ ∧ ∨ ∩ ∪ ∫
∬ ∭ = ≔ ≕ ≙ ≝ ≠ ≡ ≢ < > ≤ ≥ ≪ ≫ ≮ ≯ ≰ ≱ ≺ ≻ ≼ ≽ ⊀ ⊁ ⊂ ⊃ ⊄ ⊅ ⊆ ⊇ ⊈ ⊉ ⊕ ⊖ ⊗ ⊙ ⊚
⊛ ⊜ ⊝ ⊢ ⊣ ⊤ ⊥ ⊧ ⊬ ⊶ ⊷ ⊻ ⊼ ⊽ ‰ ‱ 
',
      'headers' => 
      array (
        'ETag' => '94ad488564aca44123a62c6f22c090dd',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  50 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt", response="af991bf39339f914c3a5e7ec9a341a23", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt", response="af991bf39339f914c3a5e7ec9a341a23", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Some test content...
',
      'headers' => 
      array (
        'ETag' => '655a81988486514fa14b109f0f4e5073',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  51 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.xml", response="bee153feb29a7242d655c25f26dc114e", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.xml", response="bee153feb29a7242d655c25f26dc114e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE document PUBLIC "+//IDN docutils.sourceforge.net//DTD Docutils Generic//EN//XML" "http://docutils.sourceforge.net/docs/ref/docutils.dtd">
<!-- Generated by Docutils 0.4 -->
<document ids="ez-component-webdav-design-1-0" names="ez\\ component:\\ webdav,\\ design,\\ 1.0" source="Webdav/design/design.txt" title="eZ component: Webdav, Design, 1.0"><title>eZ component: Webdav, Design, 1.0</title><docinfo><author>Kore Nordmann, Tobias Schlitt</author><revision>$Rev$</revision><date>$Date$</date><status>Draft</status></docinfo><topic classes="contents" ids="contents" names="contents"><title>Contents</title><bullet_list><list_item><paragraph><reference ids="id1" refid="scope">Scope</reference></paragraph></list_item><list_item><paragraph><reference ids="id2" refid="design-overview">Design overview</reference></paragraph></list_item><list_item><paragraph><reference ids="id3" refid="tiers">Tiers</reference></paragraph></list_item><list_item><paragraph><reference ids="id4" refid="classes">Classes</reference></paragraph><bullet_list><list_item><paragraph><reference ids="id5" refid="ezcwebdavserver">ezcWebdavServer</reference></paragraph></list_item><list_item><paragraph><reference ids="id6" refid="ezcwebdavbackend">ezcWebdavBackend</reference></paragraph></list_item><list_item><paragraph><reference ids="id7" refid="ezcwebdavtransport">ezcWebdavTransport</reference></paragraph></list_item><list_item><paragraph><reference ids="id8" refid="ezcwebdavpathfactory">ezcWebdavPathFactory</reference></paragraph></list_item></bullet_list></list_item><list_item><paragraph><reference ids="id9" refid="example-code">Example code</reference></paragraph></list_item></bullet_list></topic><section ids="scope" names="scope"><title refid="id1">Scope</title><paragraph>The scope of this document is to describe the initial design of a component
that provides a WebDAV server, which works with all major other implementations
of the <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> protocol.</paragraph><target ids="webdav" names="webdav" refuri="http://en.wikipedia.org/wiki/WebDAV"/><paragraph>It is currently not planned to also offer a WebDAV client component.</paragraph></section><section ids="design-overview" names="design\\ overview"><title refid="id2">Design overview</title><paragraph>Because of the variaty of buggy and incomplete implementations of WebDAV, this
component will provide an abstraction to suite the different needs. Beside
that, an abstract interface to the backend will be provided.</paragraph><paragraph>The main class of this component will provide a fully <reference name="RFC 2518" refuri="http://tools.ietf.org/html/rfc2518">RFC 2518</reference> compliant
implementation of a <reference name="WebDAV" refuri="http://en.wikipedia.org/wiki/WebDAV">WebDAV</reference> server. An instance of this class retrieves an
instance of a handler class, which takes care for performing the requested
operations on a backend (for example the filesystem).</paragraph><target ids="rfc-2518" names="rfc\\ 2518" refuri="http://tools.ietf.org/html/rfc2518"/><paragraph>Additionally, a collection of classes, which inherit the main class will be
provided. Each of this classes will provide a compatibility layer on top of the
RFC implementation, which works correctly with one or more &quot;buggy&quot; WebDAV
clients. A factory pattern implementation will be provided, which takes
automatically care of creating the correct server instance for a client.</paragraph></section><section ids="tiers" names="tiers"><title refid="id3">Tiers</title><paragraph>The component is basically devided into 3 tiers: The top tier, being
represented by the main server class. An instance of this class is responsible
to dispatch a received request to a correct transport handler, which is capable
of parsing the request.</paragraph><paragraph>The transport handler level is the second tier. Classes in this tier are
responsible to parse an incoming request and extract all relevant information
to generate a response for it into a struct object. These struct object is then
passed back to the server object.</paragraph><paragraph>Based on the request struct object, the server checks the capabilities of its
third tier, the used backend handler. If the handler object provides all
necessary capabilities to generate a response, it is called to do so. If the
server class can perform emulation of not available capabilities and rely on
different features of the backend. In case there is no way, the backend can
handle the request, the server class will indicate that with an error
response.</paragraph><paragraph>The way back flows through the 3 tiers back again: The backend handler
generates a response object, which is passed back to the main server object,
which makes the active transport handler encode the response and sends it back
to the client.</paragraph></section><section ids="classes" names="classes"><title refid="id4">Classes</title><section ids="ezcwebdavserver" names="ezcwebdavserver"><title refid="id5">ezcWebdavServer</title><paragraph>The ezcWebdavServer class is the main class of the package. It has to be
instantiated to create a server instance and provides a method to get the
server up and running. An object of this class takes the main controll over
serving the webdav service.</paragraph><paragraph>Among the configuration of the server instance there must be: A backend handler
object, which will be used to serve the received WebDAV requests. A fitting
configuration for the backend handler. A collection of transport handlers which
can be used to parse incoming requests. General configuration on the bevahiour
of the server instance (like locking and stuff).</paragraph><paragraph>The backend handler object must extend the base class ezcWebdavBackendHandler
and must indicate to the main server, which capabilities it provides. The
server class can potentially emulate certain capabilities, if the handler does
not provide it. An example here is locking, which can be either performed by
the handler itself or the main server class.</paragraph><paragraph>Such emulation functionality could possibly be extracted to a third category of
classes, which is only loaded by the main server object on-demand.</paragraph><paragraph>All configured transport handlers must implement the interface
ezcWebdavTransportHandler, which defines the necessary methods.</paragraph><paragraph>The standard webdav server contains a list of transport handlers associated
with regular expressions which should match the client name to be used. As a
fallback the standards compliant transport handler will be used.</paragraph><paragraph>Special implementation added by the user will be add on top of the list, to be
used at highest priority.</paragraph></section><section ids="ezcwebdavbackend" names="ezcwebdavbackend"><title refid="id6">ezcWebdavBackend</title><paragraph>All backend handlers for the Webdav component must extends this abstract base
class and implement its abstract methods for very basic WebDAV serving. The
operations defined for every backend handler to be mandatory are:</paragraph><bullet_list bullet="-"><list_item><paragraph>head()</paragraph></list_item><list_item><paragraph>get()</paragraph></list_item><list_item><paragraph>propFind()</paragraph></list_item><list_item><paragraph>propFetch()</paragraph></list_item></bullet_list><paragraph>All other WebDAV operations are optional to be implemented by a backend handler
and are defined by the handler itself. The additional basic capabilities of
backend handlers are indicated by implementing interfaces for the support
additional request methods, like put, change, etc.</paragraph><paragraph>Additional features, like encryption support will be indicated by returning a
bitmask of supported features by the backend handler.</paragraph><paragraph>The logical groups of capabilities are:</paragraph><definition_list><definition_list_item><term>Put</term><definition><paragraph>The put capability indicates, that a handler is capable of handling file
uploads via HTTP-PUT method.</paragraph></definition></definition_list_item><definition_list_item><term>Change</term><definition><paragraph>This sub class of WebDAV operations defines delete, copy and move operations to
be supported by the handler class.</paragraph></definition></definition_list_item><definition_list_item><term>Make collection</term><definition><paragraph>The creation of new collections also makes up a capability unit and can
optionally be implemented.</paragraph></definition></definition_list_item><definition_list_item><term>Lock</term><definition><paragraph>If the hander provides locking facilities on its own, the main server object
must not take care about that.</paragraph></definition></definition_list_item><definition_list_item><term>GZIP-Compress</term><definition><paragraph>Handlers implementing this facility can deal with GZIP and bzip2 based
compression.</paragraph></definition></definition_list_item></definition_list><paragraph>If a handler does not support a certain facility and the main server object is
not capable of emulating it, the server will respond using a &quot;501 Not
Implemented&quot; server error.</paragraph></section><section ids="ezcwebdavtransport" names="ezcwebdavtransport"><title refid="id7">ezcWebdavTransport</title><paragraph>A class implementing this interface is capable of parsing a raw HTTP request
into a struct extending ezcWebdavRequest and generating the HTTP response out
of the ezcWebdavResponse struct. One transport handler is usually built to
handle the communication with a certain set of specific client
implementations.</paragraph><paragraph>A transport handler class will be able to parse the incoming HTTP request data
into a struct identifying a certain type of request and containg all necessary
and unified data, so that a backend handler can repsond to it.</paragraph><paragraph>The backend handler will then create a corresponding response object, which
will be encoded back into HTTP data by the transport handler and send to the
client by the server.</paragraph><paragraph>Each request type will come with its own struct classes to represent request
and response data for the request. Beside the structured HTTP data, the structs
can contain any additional information that must be transferred between server,
transport handler and backend handler.</paragraph><paragraph>All struct classes representing either a request of response of the server will
extend the abstract base classes ezcWebdavRequest and ezcWebdavResponse.</paragraph><paragraph>An example of this structure is: ezcWebdavGetRequest and ezcWebdavGetResponse</paragraph><paragraph>These 2 classes will be used to serve GET requests. Beside the usual request
information - like URI, date and headers - the request object will contain
information about partial GET mechanisms to use and what else is important.
The backend handler will return an instance of ezcWebdavGetResponse if the
request was handled correctly, or a corresponding ezcWebdavErrorResponse
object, if the request failed.</paragraph><paragraph>The main server instance will know about available clients and will have a
regular expression for each of them, to identify the clients it communicates
to by matching the regualr expression against the client name provided in the
HTTP headers.</paragraph></section><section ids="ezcwebdavpathfactory" names="ezcwebdavpathfactory"><title refid="id8">ezcWebdavPathFactory</title><paragraph>This class is meant to calculate the path of the requested item from the
backend based on the given path by the webdav client. The resulting path
string is absolute to the root of the backend repository.</paragraph><paragraph>This class is necessary to calculate the correct path when a server uses
rewrite rules for mapping directories to one or more webdav implementations.
The basic class uses pathinfo to parse the requested file / collection.</paragraph><paragraph>Request:   /path/to/webdav.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>You may want to provide custome implementations for different mappings so that
rewrite could be used by the webserver to access files.</paragraph><paragraph>Request:   /images/path/to/file
Rewritten: /path/to/dav_images.php/path/to/file
Result:    /path/to/file</paragraph><paragraph>The factory class is necessary, because the paths contained in the request
body will match the same scheme like the original request path, but not be
rewritten by the webserver, so that the user may extend the path factory to
fit his own purposes.</paragraph></section></section><section ids="example-code" names="example\\ code"><title refid="id9">Example code</title><paragraph>The following snippet shows the API calls necessary to get a WebDAV server up
and running.</paragraph><literal_block xml:space="preserve">    &lt;?php

    $server = new ezcWebdavServer();

    // Server data using file backend with data in &quot;path/&quot;
    $server-&gt;backend = new ezcWebdavBackendFile( \'/path\' );

// Optionally register aditional transport handlers
    //
    // This step is only required, when a user wants to provide own
    // implementations for special clients.
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(Microsoft.*Webdav\\s+XP)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMicrosoftTransport\'
    );
    $server-&gt;registerTransportHandler(
            // Regular expression to match client name
            \'(.*Firefox.*)i\',
            // Class name of transport handler, extending ezcWebdavTransportHandler
            \'ezcWebdavMozillaTransport\'
    );

    // Serve requests
    $server-&gt;handle();</literal_block><comment xml:space="preserve">Local Variables:
mode: rst
fill-column: 79
End:
vim: et syn=rst tw=79</comment></section></document>',
      'headers' => 
      array (
        'ETag' => '5ad59a93c1eb407447585fc830b848a7',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  52 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.zip", response="5485f72b3e3878c0bfa25d0cfa5a234f", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/put_test.zip", response="5485f72b3e3878c0bfa25d0cfa5a234f", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '�M7%����' . "\0" . '' . "\0" . '�6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT	' . "\0" . '�G�GUx' . "\0" . '�d' . "\0" . '�[is�6��_��t����I�m���$q�f��\'u���t �P��' . "\0" . '���~� ARr�nv�!�(' . "\0" . '�����ߖ��U�զ��=^~<�JM���Ŭu�������O�?>�������-U����Ͼ{�\\���Z�����;]إ5m���4[���[�.�/ť�U|�*��t�z��j��ￛ��ι�l�:y' . "\0" . '�`W�����f��b��I�2�9�T>^~*X�q�3{1S�-RS֦�\'���d�v�)������d�h�ѭ;{#x��������|^��N?��G�g�޺�p��@�+:N������9-]����/D�t����l��4뿚F�L������f��?��B;w���u����^���W�������������:�Z��ldG�o竎�3�NEZHkQm���mg����Wk� H��?�ڴE��/��n}�����*��l䶑��U�����<���̦�V��O�%���h�*:�)<�(x_1.�Z�gk���\'�O:�NCt�����}R����M8[?�\'��}֑Q��Jԥ�����Dާp�R���FUYD�?y�t?��u��lmQ���\'�/��k�v�L�i�+x����������/{��ʲ.�p����	��G8!�R�cjt<(0�&5Nx���]]�����S|v�@�荂A�J;-�p��!<q;�Dݘ[��/��˧��s���t\'����b��NȢ���4���Ш$-Q>�GJD
F1)�����!��j��7�V��Kȧ+�����7V;��Lj���' . "\0" . 'NB*�)�ݪSo�z«XۯH�i�' . "\0" . '�8�ʀ�
�a��Aײ��
��K���<dv�a�c���7�����<9��y�R�Z�2J��FKw���v�=Ye�*�2x��ױps򸤓�\\�{�"����`��B\\�L�dF\'*�2�π�L�����S���p�F�~��eC�#�����߅�)�E1{�:���œ�1�gyZ��|g��b��)�]�]�%�j	7�,���,\\8���)8Y�R�A�i�k���௒x�;����,p�֦�9(�E�2M	�8�Q�n��b7xj��i;>�]ciK�e��|t:�A����
x������,�� @�aN������#��+@;��ȳ�C&�C�VT�����@7��A�' . "\0" . 'J�h�}x&�CCGbqj' . "\0" . '�R�#Bepjj-����߭q_QP�G�	���S��' . "\0" . '. Ҫ�I�l�@�nJX����P_��g�<{��z�C�K���\\Y��:s��t���T�G=Xd#�g<S$���:�L��~��@��Qu�,�=\\�^:2�]!�1ʠ�����w���ՃF%��*}\'�С��)���B0v��1XK<���v�wA��TQ' . "\0" . 'T=`m���HK�n��E§l�D"!���?%d&��E�ed��Q@M�9*�r9T��7ʤ:�F;���Z8�l~�,�V�d�ЋP%5r��$���w�P�3��0{UI���ҝJoXkd�h�(�hg!��&�k��"���R��l�%鋲�H*�kes�9��9�' . "\0" . '����	���oaQ@\\��-���u����@\'�E���z��>��' . "\0" . '' . "\0" . 'm�l(1��@�Ԋ+��ʈ�<���HX����!WW�1��ʴ�iLS�@�}#/��טv�#b
�g��@gT�-	����������\'���܊k�~�=�4�
*�D�' . "\0" . 'O�E�#��S�І����{��F=����A��Y�Z����鶏��hU��H�I"�
��H1	��#�B��h��P�QT*�3�����9,ڪ�t�y�\\gcf�T��Jw:+�8k����Ig~Z�.�V�޶M�Q�t�p�-��F�A%0���B�p�y<�;�O[�����ՅvX	$C���4�pð�8�en����8�t�ĵk�1}�g�M�$\'T���7J&��S)�\\���L��gH}��n�w���[��G�z���F��' . "\0" . '�u�1(3Ay��LM�#=0�Gn�c��2U����Վ�;T�ֽ�z��\\JӠ��*���tȓ�ȅ��iauB�?�@�OXy[�\\�cI�����5˓q����\'f���`�\'�z��Z�/�BtW�L� ��-zOD�S�f{��m|�Lr�+�' . "\0" . '��җ	�S\'�G#$��L�"�A�"��v8�:��,�z&�}�S`g��������;2FI�n��(/0SD�G��I���2�������Io�U�C�Q�#�ȸ��?~�d����APx��v�b�h���R�d�;I��x�#�rl4<I��q#D����)�@�r���0�W<�\\b�_�]�(��Ǌ\'�����' . "\0" . '�mF���6Q�-I�*4g�f��?_��#ߝ���G�`C������%`�ڧ D��8-���X��H�ԝ׌�^�����@[�`"C�&�b������J&~���FGw�`��p�wX���ID*�e���Rv�B|�@h��$ ���ş' . "\0" . '�us e�Xn쪨<H6ڕ�� J�=�ԡ��<w�ra�8�[�Hj*b���8�H$�����;��r}�:���3' . "\0" . 'j�I:��{�~,؏ �Kz�*�y^�֘8���R|{}}����ڛk��1#���!�s2��	��vӷ�0	I4S8�725��K����$YzGJ��R��_�
�߷�|���^˗�eb�۹��Hbl�bp��{�;��\'��`	ڰP�PtPSQR2�j~�RK(�a�H�DrcZG~�^��_���!�b)t���\\� �a/݁
�L&P�����6���	�茮c|�uIƏG��F�4�QvDǬ��ΑRYs��������]pdP�����g??����Ϲ�^�ݯ�/�\'�Xt7>��>?~]>��bb���k�a�+E#��!�%�Q(�m����u4v�3�0R��YU�Bm�?��K�cul
ܶ�e|hu�C�xx�X���6�s��XE=�Ŋ<��s�]��l\\��fp#�` �͔ĊPUʑ6\\�8��Uv�i��پI��@�뺨r�s�ϟkB���Ս�-�����0��8��Wte@�Ӑc�$(�ǈ~.IJ � �!�M��~$�/��z�xB��8P��
F��x��7g@��~�b���^@�9�����-�.O��r�bi��-
B�6��`C���\'�A-*�W��$�U��E V�#%t�@�y��I����Q4��O�Ʈ;�(rL�$��(:;�N��\'}��Q
�����' . "\0" . '����:u2����u4���*�ޢ��~�j�n��^�1#/w@>�y�%_ť�L/� /��fDے�����=:�*,A>�x���29��l��Z�xL{~n���������x.�v��i/0w��a���ss	%��{1��47��{]E�K|3���U;	���t����]�4�	���h ��!e�N���P�U�<cp>]�X7T��p�U	!������o�jc�6ܸ����rG�I���R�����`�s_�qA��{KB�7�$1�Gn�kѭ��������7�d' . "\0" . '�X�0L�2��F�h��vc�]"��Q��^K��=\'R��tbw���ぐ��c��Pj��JY��k�q�i�Ek����w\\�� ��c�@�)�EI�ql��*��N����L��CWά��e���GԀ�&��R1�����4-�}' . "\0" . '�`O	�������`�����k̆j�S*��R�����W��㗀�En]ʭ�cY�d��^VP�/����5�03�8|I�߬1eC~�Т�=���q�Ex�)`��l���:u��@��v���A�Z����j�i�:�b!��{�q���W�6{cc��v
��f;X�o�K;Ƴ/ǯ����!.��V���{�;��W���+z�a�' . "\0" . 'x5;z�U�u�����/��`A�-�3[K�\'���5:ˇ���k�$�o��/h�2��~��+^�Z	MMu*����;�`���;YrJ��Z|�u_�m#��6�%��P< �~ �	`��~�|,�
wz�����̩��C�p���P��Dbڍ��)�q?���	�MD̎o������zZ\'8�C,J�m~���X���G��7����z�����\\��k��L�w�:&��h壩����X~�l���ˏ��:0�$ʩ����0rx[E��@�hHgp��7|�P{��' . "\0" . 'Bg���' . "\0" . '-' . "\0" . 'ʊ������ɋ*;Knu	��ϡ�h�D�_|�����`dx�PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ډM7mh
��' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.htmlUT	' . "\0" . '��G��GUx' . "\0" . '�d' . "\0" . '�\\��6��ο�x;����vl���v��pٝ�j�� �0&	�' . "\0" . '[VR���' . "\0" . '	RT��ɮ?�	<<���@~���"ת�ڔO\'��Pej2]n�N��=��//�\'������?_�[^���w����l�����ŋ���^}��' . "\0" . '
⪖��(�|�x��DL��U��b���w���,��,�#�S��?�\\4s��l+ӂ�ei���9}��1Ϟ�e.�qUND�	i(��?�rR ������O\'�M�T�fW�JMD�ߞN�z�H�B�[Y[�zQ,�R��d�JUKg�h��6N�V��,��8���4u�������-���.W��_@��L	t���j���x��ޔS���� ��1�_�V�Sg�,aޕYii��t�k���Io���~�GY�ϕp /��Z�f��<Y>�U�ⅼ֙�Ƙl��d��)p��\'m,��p��WY�;��������lv�H��.�.O��������o��#BJ��;���h�@�������|n�}�7[��j���MحRNlA+�JQ�2U�Хp[%�f��Td����\'���M�D*m*���`"�	�E�nW5N��Z��o�:T�����bkvΐy�:�����{�L�6֙B�h��<̓����`��Ua��X��A�b]�B8��B���Bn�#L��xa�<"z"\\6�p+~M���\'�$�����' . "\0" . '0��@�2#��6\'<!�hL�Nä�\'�qej\'K7��s\'��$��$�����%R���q�"�C�O���ED�1_�ں.t [�T��.
Yo�RXUc�z<l�L�Y(��M�g�l�"7�u���q�챙[�e`�86�,w�%@��sg��J��j��!観L�DCnAC/�Mjr����;���M����85W��Բ�F�S��Pl88�;=e�(�$���,�' . "\0" . 'R' . "\0" . '\'�.���N�b��{h��ɳٚ|1Sk]�\\�N���_�����{8�E�2}=�+$u��m0��U:�u�8$}D*s��%�dݒ�
�<O}w��������A4R533��Hlu��a�u�Z�b����ɺD�n�"r�Be�)� hћ�N#����/,
^{��x=:�?:v4���ӵ,t�o!E�AT��v;A�G��8�k��tR���A/G���V�^>f��P�H��H�t*s@1�.t���[40���I\'�h?�����IG�k���L��[�e4�4��g`�)��8`��l+e��Nb����mq!&V��' . "\0" . 'i{bk�i��>r�v����>K9��6�6$0e�ɂr%���vCb' . "\0" . '��� �T3�~��G����	*�p"�7B��F(��Nc��lW�>��ǡ����Ɍ���i����rē?��r#aN(.:	�wռnV5�ʯ7��@/��@io�*f$E���V�c0l{:ďс���v�? P|xy��2�/��s�R�Đ�L��l���Ç������� Ƀ��n�x�Gc:GF�]��kgh_����b3�)dױ/�����_G���`�E��l��1��
���+�L�JA^�=L����vͫ�<H�f��7Uul0����P���e~Q̔���Z���c�t�܃��?��TV��8' . "\0" . 'c�ε����
�����ک^;�<d#G"
��a>hy�]`�xFZ�F����<�H�\\����VV+H�����i�NFr�1X>=��' . "\0" . '�%�h�gS������t�!�C��H' . "\0" . 'R�k(�)$?JJ�?J���*�?7cd���u���}� r�v�Tv#�0�tnt��iX���|����r�t$�ѐQ<�t��(�΁' . "\0" . '���Zʐ��ۇBq�~�����p�!�n��A�kۚ\\g�z/ U�&2���˵9�>����X��%&��!�U7�J����д�m��-�����¯��!<��ѽ5I@.��S[H�U�Ͱ;y�t�H�oY�S��8b��[�A8�r������w�S����ߣ' . "\0" . '�å�1r�j��0�ϰe�u��,��%|�}����$n�����Ew��=��_fm#d�}h�lC�Ng\'�P?3�3\'��]oO��͍�vUT�D�k�E_�MD��
^"���|0���-ꑗ����UqM�' . "\0" . '��
)���	X��K��~�p[�]��M�a�%�U�jۦ��b���m�S�<�KM��N~��h��Z�{�/�����o^�VP�F�U��hN���I&M�)C�����\'	�W@�iUȹ-.�k���j�' . "\0" . '�S��>?��ɦlp%���E���[|�ā�)y�6�N�Z�ͳ�����0���Dih��hޟ\\^��S�������' . "\0" . 'd�/�Z����%e���{
D�;���ѿ���oi��Ym�#|�2�v�F��Q��>�b\'2��E���
Wa��X��n���3�>��[�Q��k�5���Y�>n��{��' . "\0" . '�����[����%�8�p�پ�����:Z::4h\'7�5�k��%�)���c�%�}Q#2D�MI��M�VSt:C�}(<3�Gk!�h���t��k�1,�q�x�7��9Ũ�n������T]������' . "\0" . '�Zh�Ҕ�ل8R�Q��9U�w�����t��������]#s 3(V���W�ʹ�1���j*�%�����%��m\'�5J�ݶ���j팵v' . "\0" . 'c�pw�xɼN�R�l�ר��Yk���u�l6{>J�N4��Ё�qouJ��;��Ƽ���G0�w��li-��5iʉR����W
O��i<SPՂ\'GH' . "\0" . '�z�����rY�2�X<�eq�f{�K�nrP쇍��۹VnM&����z����8�����OdE$9-����c�͕=g.�� \'�$���K��r���·�x�[P3v5h`�>\'���*,:��@��.��e_+�O-���.�7�V���8��MYk���x���3����G��B�9�r�`�H�����H�^�I�~�R�����5l�4�t{��=�l��ΐ�"�Z�Sj' . "\0" . '
R��(̼a�t��)�^��G�&	#X�3�#T"�,u`�=�$XP��c%��jϼ�<{�2:�@�HM �g@���S�(�t
ZI���)�*z�Pm��%�@���)�6�Ԫ���>X&V��"�f�ۛ�A�?@~PZ�o��KC��@�ޤJ_�,9�{+�6	nӚ\'zK��4��J�v�,=\\: 5��)�b�U�>g���_^��O�\'�|;��d��a��P�b,�����X3��\\B�t�I��6�v�)' . "\0" . '� bV�a�Q90���o�L*�:#@����gy|%q�)ca�iN���V��XL$pta�ߵ�9t�yk�1M`Q�{.^q����w)I�\'%؁�����Ӕd�&' . "\0" . 'FAa΄���2aP' . "\0" . 'U���ۘ�I���:�9^�O��K@S]�\\��7��!��}²%^f"�p' . "\0" . '�J#vr?�EN�#a	Ģ���X]ҁ)����e����`��g�k��*�6�fKԽw�k���>��8�zI��ml��&Z��������p�#�c�H�!�L��(@�̢�q�į�B��Ҷ���ګ�P��t����C�gP����!,t=x��I��VX�Nn�)��YBg�����Q@C/1TFT>�mMnDD��T�7M��5("xO�����jJWC*BI3�
P�B!~t�Y��´a���' . "\0" . '�KG�Բ�NY4' . "\0" . 's+��d`h�}�@��G�u�P�+���`h��@��(�e<' . "\0" . '�g����+,s� xE�p�F��r�|(F����6M���\\�SOe�*9�k��{=�l"��_�^��?�a�[/p\\��u w�#A=X�]Рh8�*Q��`��kG���ҏI��L��L��jG���^H{���R�a��$��R�k���0{
r~�' . "\0" . '�.H��2����49x�����iY�2|Q,8�@7��u2L�l�����x2��e�' . "\0" . '�;��;����5kߗ�Udr�+������D].�Xc{v�6�I�h(H�r���^�0)A^B1�V6�N��Z���!�%q��v�� �����&k�8����+IG�^4��X��A�"�H_x廝o���~�1�p��l1ϫjm����*�~8�=���!9�k������lhb��-�򴨘�p�rti�Al��zv�I�{Ў�E+��6��c�f����4�Y�O��"�:���j�卍x<4�{��aBX�� U_R<S`��C�Q��m�7�N�kŀ��le��%�#
�}{�I	M���(Cr�\\$b' . "\0" . '�n��8ԢGg��Ї�h�P�xuNŲ�H�x�t*@P#M�6��S ��|��i���c�`]H��J�B�w�z~�F(����?��l�)�BV�����v���N0�z2w��q���dD0�ٷ�����:P]���S�퀆���0FXq���������OW^������I����C�fե��F�>S��%��[�t�6�L�R�X�g��{�*���/n���O�q���\\�`ˮ)5��X����9N��w�t+Ge/&!�y�v�%a�ٕ�#!9!����F�u��4����Ϳ^��=��x���m𹞋nz>���d
��B#�ͯ~���jFMg(Ú����U���t���$�4�]N��q$�М�E��"��~�L>ʅc������ON��%�:]���K�������l�7G��BD�݁κ�|ߋC\'
x�#�' . "\0" . '��{J9qh�Û��[��BK�q���&��L.~,Ǌ}න;Q�sl��M��N���,v=Z�����C����]��ld�^[�^+�V_YŒ��@|�Ƞ���e8�{!�b�	�y�Z�mfKqv�����?��f藵�,5)V&7�e�;�	v=�S�C�jk�$A*܏��5	�|(�а�ｇ���$pMGm�eFk����cav8U�_��^tk�ܪ�;"&C�:���˧�H�J�vW�荥���v�����˪�M���Ŧ����d\\V�rL��n�L�ʅ�l�G���c����>��^���Uġ�ӊ�{�M�F�Q����FV��O�Z0߼���N	P"��4���7���ine�?,��;�>�xC$��Hq����v�P�_j[�a6�k�C�P�%`n�5O�z*��|�����˷,���NZO*��Ǧ���z�R{�/�k_��%d�#�î���4;/����\'o,���@�V�\\G�G����5�kTwS��bG������g�УO�n�*�p����x���2�G���w�e���n������õBQ���qH�-/��� ����
�f�u��U|(����n����wZ|�,�l�$��@�r3��M�t=��780AH3V�"+���u��������c>h��v5�w�[�d^��*d.�8���\\)>C���k��%�pZ���ƩC\'b,��"�1�Mz@\\
!He�̂��W۪}D�0���?M;�
��Cߒ�~x}%�ey�ؐu�b�&c' . "\0" . '�N�^Ę���a0�3�9�p7HbѲ�l�x�����O���Mp@��o	B����R]��"D��Hq��`9��0,�p]�R^����u�]��C�E��9l	��ƶ�AUS�è0���_�=>���y\\���\\������͎�ǀRW��v��J<{���h��F�khPz\'���s�^e���6���i�.��I��O�)U��#���.x�b!���\\0��v7�@���E�@�/5�t�.´�����5P�+>#�L ���]\'"����f��]k�x�����j��h�' . "\0" . 'nto�' . "\0" . '�[Ēo��' . "\0" . '�h������po�`���a�.��Ps����޴��~���X�v��Y��m�����g�!}:��8>�柎U�C�����Z&����{���?���A�k�~�����/' . "\0" . '��P=j���0�r��5^w�d6�lt�o=����L
�������r�FS@|������5/Ŋ�,3؝' . "\0" . '\'�y��SDJ�m�-tu1
@}��z��@;.' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '�M7%����' . "\0" . '' . "\0" . '�6' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '��' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'put_test.xmlUT' . "\0" . '�GUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'ډM7mh
��' . "\0" . '' . "\0" . 'sI' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '��' . "\0" . '' . "\0" . 'put_test.htmlUT' . "\0" . '��GUx' . "\0" . '' . "\0" . 'PK' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '�' . "\0" . '' . "\0" . '' . "\0" . '�(' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '',
      'headers' => 
      array (
        'ETag' => 'ef383241769f0df9a982a37b53504cf2',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  53 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_renamed.xml/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_renamed.xml/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_renamed.xml/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_renamed.xml/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_renamed.xml/", response="869d101292152afe329fdf0fc81469a1", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_renamed.xml/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_renamed.xml/", response="869d101292152afe329fdf0fc81469a1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  54 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/put_test_renamed.xml',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test.html", response="600ec1c595ab133287ebef17c75f9cb1", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test.html", response="600ec1c595ab133287ebef17c75f9cb1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  55 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_öäüß.txt/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_öäüß.txt/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt/", response="397f7bb3f49f6f2beaedbc597babfca5", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_öäüß.txt/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt/", response="397f7bb3f49f6f2beaedbc597babfca5", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  56 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_content.txt", response="6c4fdb145783fe536ddfc8b24eebf4dd", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_content.txt", response="6c4fdb145783fe536ddfc8b24eebf4dd", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  57 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_non_utf8_test.txt/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_non_utf8_test.txt/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_non_utf8_test.txt/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_non_utf8_test.txt/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_non_utf8_test.txt/", response="a8b778ec14ae2e03ab875723b3969ea0", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_non_utf8_test.txt/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_non_utf8_test.txt/", response="a8b778ec14ae2e03ab875723b3969ea0", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  58 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/put_non_utf8_test.txt',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt", response="ffb84ad314b66449321f9245697a6411", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_utf8_filename_%cf%82%d2%a3%ce%b1%e2%8a%81%e2%88%ad%e2%8b%89%e2%82%ac%e2%82%b1%e2%80%b1%e2%81%8c.txt", response="ffb84ad314b66449321f9245697a6411", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  59 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  60 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  61 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/collection/put_test_renamed.xml',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_renamed.xml", response="e7ad32d15d6eb99000f18cf87d7e1383", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_renamed.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_renamed.xml", response="e7ad32d15d6eb99000f18cf87d7e1383", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  62 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  63 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_test_öäüß.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_test_öäüß.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/collection/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt", response="71b7f954eda948bfbde4b755dfdd74ee", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_test_öäüß.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt", response="71b7f954eda948bfbde4b755dfdd74ee", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  64 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  65 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/put_non_utf8_test.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/put_non_utf8_test.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/put_non_utf8_test.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/put_non_utf8_test.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/collection/put_non_utf8_test.txt',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_non_utf8_test.txt", response="f1f11a347537f3f153b705e681cb8d97", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/put_non_utf8_test.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/put_non_utf8_test.txt", response="f1f11a347537f3f153b705e681cb8d97", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  66 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  67 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/renamed_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  68 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/renamed_collection',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection", response="9256da0b649b25ef39a4fe61ae09a517", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection", response="9256da0b649b25ef39a4fe61ae09a517", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  69 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  70 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/renamed_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>14013</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>10644</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  71 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  72 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/subdir/collection',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection", response="7efbd0a8b4de108f60a233d6bc515a64", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/renamed_collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection", response="7efbd0a8b4de108f60a233d6bc515a64", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  73 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  74 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/collection/", response="0928eb343b97ba103422278d6edd2d5a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>14013</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>10644</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  75 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/renamed_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>14013</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>10644</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  76 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/renamed_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="696bda59824424e08d7dc1d513d6e541", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/renamed_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  77 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="3c8c3f077932650c8159ab1d3407fe84", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/renamed_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/renamed_collection/", response="3c8c3f077932650c8159ab1d3407fe84", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  78 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<executable xmlns="http://apache.org/dav/props/"/>
<resourcetype xmlns="DAV:"/>
<checked-in xmlns="DAV:"/>
<checked-out xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '288',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'cadaver/0.23.2 neon/0.28.6',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '1',
        'HTTP_CONTENT_LENGTH' => '288',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="32ff013db9c2c66f0b83633165e73947", uri="/secure_collection/subdir/", response="34fb71372a82e6bf0042a91e6b1e1eb4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_test_%c3%b6%c3%a4%c3%bc%c3%9f.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response xmlns:default="http://apache.org/dav/props/">
    <D:href>http://webdav/secure_collection/subdir/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://apache.org/dav/props/">
      <D:prop>
        <D:checked-in/>
        <D:checked-out/>
        <default:executable xmlns="http://apache.org/dav/props/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
);

?>