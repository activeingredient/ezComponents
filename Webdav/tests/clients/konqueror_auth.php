<?php

return array (
  2 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection',
        'REDIRECT_URI' => '/index.php/secure_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6d6cd707f3348b0158cf65f294f3e191", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  3 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection',
        'REDIRECT_URI' => '/index.php/secure_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6d6cd707f3348b0158cf65f294f3e191", uri="/secure_collection", algorithm="MD5", response="83def1e3796a1e765fdaa959c7c4a7ed"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6d6cd707f3348b0158cf65f294f3e191", uri="/secure_collection", algorithm="MD5", response="83def1e3796a1e765fdaa959c7c4a7ed"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  4 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="9a84dfe2a4ee2d59700c2030fa1024f5", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  5 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="9a84dfe2a4ee2d59700c2030fa1024f5", uri="/secure_collection/", algorithm="MD5", response="e4d0093d688c23603df760d54edaea21"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="9a84dfe2a4ee2d59700c2030fa1024f5", uri="/secure_collection/", algorithm="MD5", response="e4d0093d688c23603df760d54edaea21"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  6 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="4005449ad30f31f291a6b7ecff24f979", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  7 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="4005449ad30f31f291a6b7ecff24f979", uri="/secure_collection/subdir", algorithm="MD5", response="b618bcb00ba809e8d57a7c867e939185"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="4005449ad30f31f291a6b7ecff24f979", uri="/secure_collection/subdir", algorithm="MD5", response="b618bcb00ba809e8d57a7c867e939185"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="17c02ae5c3f3bf9e24b9c8f1445b782c", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  9 => 
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="17c02ae5c3f3bf9e24b9c8f1445b782c", uri="/secure_collection/subdir", algorithm="MD5", response="cccfa1fccf5cfd064bd0dff20db02a53"',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="17c02ae5c3f3bf9e24b9c8f1445b782c", uri="/secure_collection/subdir", algorithm="MD5", response="cccfa1fccf5cfd064bd0dff20db02a53"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'c5478175e232c6c35b72e28fb638de42',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  10 => 
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6d127dfebb1fa35cc3254c33a85220b3", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6d127dfebb1fa35cc3254c33a85220b3", uri="/secure_collection/file.txt", algorithm="MD5", response="331b72235f827deb328b12b49896e0cd"',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6d127dfebb1fa35cc3254c33a85220b3", uri="/secure_collection/file.txt", algorithm="MD5", response="331b72235f827deb328b12b49896e0cd"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Some text content.',
      'headers' => 
      array (
        'ETag' => '915f244ec53702ea179db0509d787bde',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  12 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="831e164f1d91866081eb09bf47ba5c4e", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  13 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c25724ca2992faf72e7bfab57f3301c4", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  14 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c25724ca2992faf72e7bfab57f3301c4", uri="/secure_collection/subdir/", algorithm="MD5", response="c4a335db6fe2a13160851ba55353c2c2"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c25724ca2992faf72e7bfab57f3301c4", uri="/secure_collection/subdir/", algorithm="MD5", response="c4a335db6fe2a13160851ba55353c2c2"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.html</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  15 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="831e164f1d91866081eb09bf47ba5c4e", uri="/secure_collection/subdir", algorithm="MD5", response="5686677747ff45103f860a4e023ddfba"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="831e164f1d91866081eb09bf47ba5c4e", uri="/secure_collection/subdir", algorithm="MD5", response="5686677747ff45103f860a4e023ddfba"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  16 => 
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="19e0cd2a25539070370c95ad3b6e57f5", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="19e0cd2a25539070370c95ad3b6e57f5", uri="/secure_collection/subdir", algorithm="MD5", response="ab6a551e97b961f0fb94eae37acc7159"',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="19e0cd2a25539070370c95ad3b6e57f5", uri="/secure_collection/subdir", algorithm="MD5", response="ab6a551e97b961f0fb94eae37acc7159"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'c5478175e232c6c35b72e28fb638de42',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  18 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6af4703b457bb4749c775be6b8d99c9a", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  19 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6af4703b457bb4749c775be6b8d99c9a", uri="/secure_collection/subdir/file.html", algorithm="MD5", response="7eccf86524297e18de9c6bc491c2c300"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6af4703b457bb4749c775be6b8d99c9a", uri="/secure_collection/subdir/file.html", algorithm="MD5", response="7eccf86524297e18de9c6bc491c2c300"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<html><body><h1>Test</h1></body></html>',
      'headers' => 
      array (
        'ETag' => '63e609ad6597ac5f4a6c399729a4abe0',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/html; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  20 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="a22f59060752f784014bd134d4dd9b4f", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  21 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="a22f59060752f784014bd134d4dd9b4f", uri="/secure_collection/subdir/file.xml", algorithm="MD5", response="6fd069a2cbaeecdf9aba9a74d4b4bcad"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/file.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="a22f59060752f784014bd134d4dd9b4f", uri="/secure_collection/subdir/file.xml", algorithm="MD5", response="6fd069a2cbaeecdf9aba9a74d4b4bcad"',
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
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  22 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c0314e2b4e1ba9072b16ae4a8dc402b9", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  23 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c0314e2b4e1ba9072b16ae4a8dc402b9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="44a8696d11fee2cc1ca65d802591a171"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c0314e2b4e1ba9072b16ae4a8dc402b9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="44a8696d11fee2cc1ca65d802591a171"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  24 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="e19e4fe0b661807101503eceab4f42ce", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  25 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="e19e4fe0b661807101503eceab4f42ce", uri="/secure_collection/subdir/", algorithm="MD5", response="417fb53ffe9f85cc9defaf1d0d18b2b7"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="e19e4fe0b661807101503eceab4f42ce", uri="/secure_collection/subdir/", algorithm="MD5", response="417fb53ffe9f85cc9defaf1d0d18b2b7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.html</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.html</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/html; charset="utf-8"</D:getcontenttype>
        <D:getetag>63e609ad6597ac5f4a6c399729a4abe0</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>39</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/file.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/xml; charset="utf-8"</D:getcontenttype>
        <D:getetag>b23a873ef8c0f8e3b33339bed653b763</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  26 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="f9f58c842a32bc592c38785f85ed79cb", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  27 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="f9f58c842a32bc592c38785f85ed79cb", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="7c848629fdddfce651cb0242a4cb6005"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="f9f58c842a32bc592c38785f85ed79cb", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="7c848629fdddfce651cb0242a4cb6005"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="845f2f38ab9ec8f65be07d496f50fac9", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  29 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="845f2f38ab9ec8f65be07d496f50fac9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="24f076b7b9a6e8165fdaccd6b81a2a75"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="845f2f38ab9ec8f65be07d496f50fac9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="24f076b7b9a6e8165fdaccd6b81a2a75"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'e8fac981fae3020310afadcc6b78287c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  30 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="176afcdfec69d7f77ea912ead3f202a1", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  31 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="aa794a12ec846b289049b31300cb1a97", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  32 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="176afcdfec69d7f77ea912ead3f202a1", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="3aeccc062c6517f9ab8c066d5354a85f"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="176afcdfec69d7f77ea912ead3f202a1", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="3aeccc062c6517f9ab8c066d5354a85f"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  33 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="aa794a12ec846b289049b31300cb1a97", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="615781c4a247caa1744bb21b95bfd590"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="aa794a12ec846b289049b31300cb1a97", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="615781c4a247caa1744bb21b95bfd590"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  34 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="f9745620d3b183a95df51ffbf2d85020", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="f9745620d3b183a95df51ffbf2d85020", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="5dec2ddb68be9d44daeedf5a09bd0a24"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="f9745620d3b183a95df51ffbf2d85020", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="5dec2ddb68be9d44daeedf5a09bd0a24"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'e8fac981fae3020310afadcc6b78287c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  36 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="b59d77ee9754cc9c2cf71baf6009e5e9", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  37 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="b59d77ee9754cc9c2cf71baf6009e5e9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="f9fb1565f028dccf3473900087745c91"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="b59d77ee9754cc9c2cf71baf6009e5e9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="f9fb1565f028dccf3473900087745c91"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  38 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="eeecdd5bbee21b273406e5b5bd2ba386", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  39 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="eeecdd5bbee21b273406e5b5bd2ba386", uri="/secure_collection/subdir/newdir/file.txt", algorithm="MD5", response="51fce6fceb206ee853c2c457bfd92137"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="eeecdd5bbee21b273406e5b5bd2ba386", uri="/secure_collection/subdir/newdir/file.txt", algorithm="MD5", response="51fce6fceb206ee853c2c457bfd92137"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  40 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="eeecdd5bbee21b273406e5b5bd2ba386", uri="/secure_collection/subdir/newdir/file.txt", algorithm="MD5", response="51fce6fceb206ee853c2c457bfd92137"',
        'HTTP_CONTENT_LENGTH' => '18',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="eeecdd5bbee21b273406e5b5bd2ba386", uri="/secure_collection/subdir/newdir/file.txt", algorithm="MD5", response="51fce6fceb206ee853c2c457bfd92137"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="b68e02d04e47046d7a318c0240c441f4", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  41 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="b68e02d04e47046d7a318c0240c441f4", uri="/secure_collection/subdir/newdir/file.txt", algorithm="MD5", response="02f2d68910eebaf002cdbbee88cccc50"',
        'HTTP_CONTENT_LENGTH' => '18',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="b68e02d04e47046d7a318c0240c441f4", uri="/secure_collection/subdir/newdir/file.txt", algorithm="MD5", response="02f2d68910eebaf002cdbbee88cccc50"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'c0405933cd57c9b53258fe1be86b3e4f',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  42 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c1b8f7a7fa2db4e47b692762ca312617", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  43 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c1b8f7a7fa2db4e47b692762ca312617", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="12e3a2cf113f434d2b61d0d39a1fc923"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c1b8f7a7fa2db4e47b692762ca312617", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="12e3a2cf113f434d2b61d0d39a1fc923"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>c0405933cd57c9b53258fe1be86b3e4f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  44 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="755ba07a56de2ee1a51f4219d397bb48", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  45 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="755ba07a56de2ee1a51f4219d397bb48", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="879708aa41dba9e6c6afa1c754fd7225"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="755ba07a56de2ee1a51f4219d397bb48", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="879708aa41dba9e6c6afa1c754fd7225"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  46 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="762ad12e160d0b761b3635982f188ee7", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  47 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="762ad12e160d0b761b3635982f188ee7", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="1bfefe824966992e404c6ca15eb66bef"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="762ad12e160d0b761b3635982f188ee7", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="1bfefe824966992e404c6ca15eb66bef"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>c0405933cd57c9b53258fe1be86b3e4f</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  48 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="817f02fe7e77bd10b29ee07a98878fe0", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  49 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="817f02fe7e77bd10b29ee07a98878fe0", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="ee3378fbdf4f504531c89c3d5972f4a2"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="817f02fe7e77bd10b29ee07a98878fe0", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="ee3378fbdf4f504531c89c3d5972f4a2"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c46656898840b5107174ad5a03791840", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c46656898840b5107174ad5a03791840", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="e6928de625609698c6e442631e29d621"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c46656898840b5107174ad5a03791840", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="e6928de625609698c6e442631e29d621"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'd2ad792ed4ced17d12e267eb1feef75c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  52 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="e504f3268376c5e4f3d048409a1191f6", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  53 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="e504f3268376c5e4f3d048409a1191f6", uri="/secure_collection/subdir/newdir/newsubdir/", algorithm="MD5", response="46c13570022a8583214784ca287969fe"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="e504f3268376c5e4f3d048409a1191f6", uri="/secure_collection/subdir/newdir/newsubdir/", algorithm="MD5", response="46c13570022a8583214784ca287969fe"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  54 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1f2ba5061864acf0a3c4516060b5ddd3", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  55 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1f2ba5061864acf0a3c4516060b5ddd3", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="0a540487571c357e2cdfcd01b77dad9c"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1f2ba5061864acf0a3c4516060b5ddd3", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="0a540487571c357e2cdfcd01b77dad9c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="70eb9f76a5a5e5eb0d6d474e43983fd8", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  57 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="70eb9f76a5a5e5eb0d6d474e43983fd8", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="9dc641f2debf9af7c7a0c599ac68a8a7"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="70eb9f76a5a5e5eb0d6d474e43983fd8", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="9dc641f2debf9af7c7a0c599ac68a8a7"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'd2ad792ed4ced17d12e267eb1feef75c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  58 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="4432c256a6d23d2872866f27703a870b", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  59 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="4432c256a6d23d2872866f27703a870b", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="3129e1ae1b1831aa323f8faf94aa2ec0"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="4432c256a6d23d2872866f27703a870b", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="3129e1ae1b1831aa323f8faf94aa2ec0"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  60 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c03c546d08c6228a3918d556ef6dce66", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  61 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c03c546d08c6228a3918d556ef6dce66", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="15e8285d7be12a4a1d8c78ef61a8d726"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c03c546d08c6228a3918d556ef6dce66", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="15e8285d7be12a4a1d8c78ef61a8d726"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  62 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c03c546d08c6228a3918d556ef6dce66", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="15e8285d7be12a4a1d8c78ef61a8d726"',
        'HTTP_CONTENT_LENGTH' => '18',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c03c546d08c6228a3918d556ef6dce66", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="15e8285d7be12a4a1d8c78ef61a8d726"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="289caf07b355670c7e83dfb828f1b3b3", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  63 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="289caf07b355670c7e83dfb828f1b3b3", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="6fa4e60d3526384621fb1541189fd348"',
        'HTTP_CONTENT_LENGTH' => '18',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="289caf07b355670c7e83dfb828f1b3b3", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="6fa4e60d3526384621fb1541189fd348"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'bde09112b72b6fed63ff4e3917ebd56a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  64 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="2447efd7139a6308c25ca879f012d4bc", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  65 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="2447efd7139a6308c25ca879f012d4bc", uri="/secure_collection/subdir/newdir/newsubdir/", algorithm="MD5", response="e2e87217384bc14214760741b7d8371c"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="2447efd7139a6308c25ca879f012d4bc", uri="/secure_collection/subdir/newdir/newsubdir/", algorithm="MD5", response="e2e87217384bc14214760741b7d8371c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>bde09112b72b6fed63ff4e3917ebd56a</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  66 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c38ac3f81d521b2b743792ab4c29c29f", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  67 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c38ac3f81d521b2b743792ab4c29c29f", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="8e15ef6e7dec25d581913dfbc20064bc"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c38ac3f81d521b2b743792ab4c29c29f", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="8e15ef6e7dec25d581913dfbc20064bc"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  68 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6565c64c03d7f4fb5118502dd0acd2d1", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  69 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6565c64c03d7f4fb5118502dd0acd2d1", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="49068a385a3a6913b8aa8f641f6ef8bd"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6565c64c03d7f4fb5118502dd0acd2d1", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="49068a385a3a6913b8aa8f641f6ef8bd"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  70 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="ea9a9bd97cde595af829c007ea804fcd", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  71 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir/file.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir/file.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ea9a9bd97cde595af829c007ea804fcd", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="2d751e6e25a7b0dbe0de037649de3639"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ea9a9bd97cde595af829c007ea804fcd", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="2d751e6e25a7b0dbe0de037649de3639"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>bde09112b72b6fed63ff4e3917ebd56a</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  72 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_CONTENT_LENGTH' => '18',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="aaa69c81c964ff33203ffd45c74c77e7", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  73 => 
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="aaa69c81c964ff33203ffd45c74c77e7", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="7dff76efcbc41703626d713d569c2cf9"',
        'HTTP_CONTENT_LENGTH' => '18',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="aaa69c81c964ff33203ffd45c74c77e7", uri="/secure_collection/subdir/newdir/newsubdir/file.txt", algorithm="MD5", response="7dff76efcbc41703626d713d569c2cf9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'bde09112b72b6fed63ff4e3917ebd56a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  74 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="2b29bbffc6438288d9985630d2f6ae28", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  75 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="2b29bbffc6438288d9985630d2f6ae28", uri="/secure_collection/subdir/newdir/newsubdir/", algorithm="MD5", response="3dbae52909e44ed2b48a968160f56020"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="2b29bbffc6438288d9985630d2f6ae28", uri="/secure_collection/subdir/newdir/newsubdir/", algorithm="MD5", response="3dbae52909e44ed2b48a968160f56020"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>bde09112b72b6fed63ff4e3917ebd56a</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  76 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="38fc222539270414f98bc6ca39722c2c", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  77 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="38fc222539270414f98bc6ca39722c2c", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="77ae49321ca4e1fd3ade2684dfd1cfb9"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="38fc222539270414f98bc6ca39722c2c", uri="/secure_collection/subdir/newdir/", algorithm="MD5", response="77ae49321ca4e1fd3ade2684dfd1cfb9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  78 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="b7152d6fbe9e1aadd956608da218fe6d", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  79 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="b7152d6fbe9e1aadd956608da218fe6d", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="5055eb4c551992669da2cfce91d06f29"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="b7152d6fbe9e1aadd956608da218fe6d", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="5055eb4c551992669da2cfce91d06f29"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  80 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="9ca70d97dddb13368f115d2da7bdc313", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  81 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="9ca70d97dddb13368f115d2da7bdc313", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="de0b93dcaa1026a0033ad0c0f0ac049c"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="9ca70d97dddb13368f115d2da7bdc313", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="de0b93dcaa1026a0033ad0c0f0ac049c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'd2ad792ed4ced17d12e267eb1feef75c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  82 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="8d3e0e1da6ab6238bb393f645d135cf7", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  83 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="8d3e0e1da6ab6238bb393f645d135cf7", uri="/secure_collection/subdir/", algorithm="MD5", response="e065d4d1fff44e77977c3b706e086554"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="8d3e0e1da6ab6238bb393f645d135cf7", uri="/secure_collection/subdir/", algorithm="MD5", response="e065d4d1fff44e77977c3b706e086554"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  84 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="ef2f2eaa8c29c051a82ed8d2428d4bc8", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  85 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="817b1bd5855a65922395fcbae3d30d20", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  86 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef2f2eaa8c29c051a82ed8d2428d4bc8", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="b3da471adb210edb1a17415758736bb2"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef2f2eaa8c29c051a82ed8d2428d4bc8", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="b3da471adb210edb1a17415758736bb2"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir/newsubdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newsubdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>d2ad792ed4ced17d12e267eb1feef75c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  87 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="67ed3c408ab8fc265234c181a718978a", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  88 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="817b1bd5855a65922395fcbae3d30d20", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="00dda11f227bd2c26ecd3ff8a6058d92"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="817b1bd5855a65922395fcbae3d30d20", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="00dda11f227bd2c26ecd3ff8a6058d92"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  89 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir/newsubdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir/newsubdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir/newsubdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="67ed3c408ab8fc265234c181a718978a", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="8a366c0251cf6f40813db4b10cce160a"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir/newsubdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="67ed3c408ab8fc265234c181a718978a", uri="/secure_collection/subdir/newdir/newsubdir", algorithm="MD5", response="8a366c0251cf6f40813db4b10cce160a"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'd2ad792ed4ced17d12e267eb1feef75c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  90 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="ef104b2c74f046b416253d0ecb4b72e9", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  91 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="ef104b2c74f046b416253d0ecb4b72e9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="4b1fa2e0bf598a0550c877f3c50639e9"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="ef104b2c74f046b416253d0ecb4b72e9", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="4b1fa2e0bf598a0550c877f3c50639e9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'e8fac981fae3020310afadcc6b78287c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  92 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="65bb28ec94c420a529f9f71d04911c8a", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  93 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="65bb28ec94c420a529f9f71d04911c8a", uri="/secure_collection/", algorithm="MD5", response="5180c220e65bd8ad32e6ea8ee2e72cb4"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="65bb28ec94c420a529f9f71d04911c8a", uri="/secure_collection/", algorithm="MD5", response="5180c220e65bd8ad32e6ea8ee2e72cb4"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  94 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="5e6e7e9e3df67b3947adcaac9efcd93e", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  95 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1d54a5bc00609dc829fe31b66bfc674d", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  96 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="5e6e7e9e3df67b3947adcaac9efcd93e", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="cd5d6b2991528696bb079776ab1acc12"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="5e6e7e9e3df67b3947adcaac9efcd93e", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="cd5d6b2991528696bb079776ab1acc12"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir/newdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>newdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e8fac981fae3020310afadcc6b78287c</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  97 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1d54a5bc00609dc829fe31b66bfc674d", uri="/secure_collection/subdir", algorithm="MD5", response="97155ba064c9c38102311543b2a78339"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1d54a5bc00609dc829fe31b66bfc674d", uri="/secure_collection/subdir", algorithm="MD5", response="97155ba064c9c38102311543b2a78339"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/subdir</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>subdir</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>c5478175e232c6c35b72e28fb638de42</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  98 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6e06c08ca9ed874807535dfd22ea5dd0", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  99 => 
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="909c9b259e43c62fb42aa187d4bcd37c", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  100 => 
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
        'PATH_INFO' => '/secure_collection/subdir/newdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir/newdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir/newdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir/newdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6e06c08ca9ed874807535dfd22ea5dd0", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="93d6da9713d2086c6a757595de7a5ec3"',
        'PHP_SELF' => '/index.php/secure_collection/subdir/newdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6e06c08ca9ed874807535dfd22ea5dd0", uri="/secure_collection/subdir/newdir", algorithm="MD5", response="93d6da9713d2086c6a757595de7a5ec3"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'e8fac981fae3020310afadcc6b78287c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  101 => 
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="909c9b259e43c62fb42aa187d4bcd37c", uri="/secure_collection/subdir", algorithm="MD5", response="9038d2d6e13801ae689a09f6d88eb8ea"',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="909c9b259e43c62fb42aa187d4bcd37c", uri="/secure_collection/subdir", algorithm="MD5", response="9038d2d6e13801ae689a09f6d88eb8ea"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'c5478175e232c6c35b72e28fb638de42',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  102 => 
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="fa9a41c51631f4dee75869c0b2e7da25", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  103 => 
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
        'PATH_INFO' => '/secure_collection/subdir',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/subdir',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/subdir',
        'REDIRECT_URI' => '/index.php/secure_collection/subdir',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="fa9a41c51631f4dee75869c0b2e7da25", uri="/secure_collection/subdir", algorithm="MD5", response="94e623320d2b685ff849cb87376c49d2"',
        'PHP_SELF' => '/index.php/secure_collection/subdir',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="fa9a41c51631f4dee75869c0b2e7da25", uri="/secure_collection/subdir", algorithm="MD5", response="94e623320d2b685ff849cb87376c49d2"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  104 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="401851a24718d690397a2599c999f4ff", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  105 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="401851a24718d690397a2599c999f4ff", uri="/secure_collection/", algorithm="MD5", response="b05bcc7ae56ae01cbb7779ffeb07cd43"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="401851a24718d690397a2599c999f4ff", uri="/secure_collection/", algorithm="MD5", response="b05bcc7ae56ae01cbb7779ffeb07cd43"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  106 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6c66d155d83c4f691a46ee88968afd24", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  107 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6c66d155d83c4f691a46ee88968afd24", uri="/secure_collection/collection", algorithm="MD5", response="62d2137b43f6afc8be930e82fd19f566"',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6c66d155d83c4f691a46ee88968afd24", uri="/secure_collection/collection", algorithm="MD5", response="62d2137b43f6afc8be930e82fd19f566"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  108 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="d4a7dc4c57faeb04b72ff1b6d67a06c0", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  109 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.xml',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="402944db5f5a0cf76f8878105c6a60c2", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  110 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="d4a7dc4c57faeb04b72ff1b6d67a06c0", uri="/secure_collection/", algorithm="MD5", response="cf4ae66a3abdb5eb0af38ba833029f1c"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="d4a7dc4c57faeb04b72ff1b6d67a06c0", uri="/secure_collection/", algorithm="MD5", response="cf4ae66a3abdb5eb0af38ba833029f1c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  111 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="f8632226129f53c51cb8f891639f757e", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  112 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="402944db5f5a0cf76f8878105c6a60c2", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="f5050d7c3cb4dce0092a18c92283df06"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="402944db5f5a0cf76f8878105c6a60c2", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="f5050d7c3cb4dce0092a18c92283df06"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  113 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="f8632226129f53c51cb8f891639f757e", uri="/secure_collection/collection", algorithm="MD5", response="fae406fb2513440cb50b56a29fc92e2a"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="f8632226129f53c51cb8f891639f757e", uri="/secure_collection/collection", algorithm="MD5", response="fae406fb2513440cb50b56a29fc92e2a"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  114 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="402944db5f5a0cf76f8878105c6a60c2", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="f5050d7c3cb4dce0092a18c92283df06"',
        'HTTP_CONTENT_LENGTH' => '14013',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="402944db5f5a0cf76f8878105c6a60c2", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="f5050d7c3cb4dce0092a18c92283df06"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1768f4adbef2166660b0d1e1385eb645", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  115 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="8aadb686a122de7559fa207961b681b6", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  116 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="8aadb686a122de7559fa207961b681b6", uri="/secure_collection/collection", algorithm="MD5", response="9ad880792f8bb8319777f94f6d0f3fc3"',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="8aadb686a122de7559fa207961b681b6", uri="/secure_collection/collection", algorithm="MD5", response="9ad880792f8bb8319777f94f6d0f3fc3"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'f2ca4d9a14c296295dbd8e7fd428ceda',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  117 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1768f4adbef2166660b0d1e1385eb645", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="ee378acf2996c7f697452aa6a4fa49b8"',
        'HTTP_CONTENT_LENGTH' => '14013',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1768f4adbef2166660b0d1e1385eb645", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="ee378acf2996c7f697452aa6a4fa49b8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'e263a3a5e3e9b3394686e7db1f201c3e',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  118 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.zip',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6b0fdd07f878805cd7ee1d8c54f5487a", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  119 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6b0fdd07f878805cd7ee1d8c54f5487a", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="0b4536ae97f5d1d0deac7ad4636ab33c"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6b0fdd07f878805cd7ee1d8c54f5487a", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="0b4536ae97f5d1d0deac7ad4636ab33c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  120 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6b0fdd07f878805cd7ee1d8c54f5487a", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="0b4536ae97f5d1d0deac7ad4636ab33c"',
        'HTTP_CONTENT_LENGTH' => '10644',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6b0fdd07f878805cd7ee1d8c54f5487a", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="0b4536ae97f5d1d0deac7ad4636ab33c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="60117d2e84ada25731d45b0798208b2e", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  121 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="60117d2e84ada25731d45b0798208b2e", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="6635ab8f69f360f366c46706c8a49e10"',
        'HTTP_CONTENT_LENGTH' => '10644',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="60117d2e84ada25731d45b0798208b2e", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="6635ab8f69f360f366c46706c8a49e10"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '65ba838a2ea397dab2bf806b9c37d5be',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  122 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="b405cc28bf419cd03490f49a65cb88e8", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  123 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="b405cc28bf419cd03490f49a65cb88e8", uri="/secure_collection/put_test.html", algorithm="MD5", response="86fd87632b5db354877f7e81f91929f6"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="b405cc28bf419cd03490f49a65cb88e8", uri="/secure_collection/put_test.html", algorithm="MD5", response="86fd87632b5db354877f7e81f91929f6"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  124 => 
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
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="b405cc28bf419cd03490f49a65cb88e8", uri="/secure_collection/put_test.html", algorithm="MD5", response="86fd87632b5db354877f7e81f91929f6"',
        'HTTP_CONTENT_LENGTH' => '18803',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="b405cc28bf419cd03490f49a65cb88e8", uri="/secure_collection/put_test.html", algorithm="MD5", response="86fd87632b5db354877f7e81f91929f6"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="6e661d0081553cb0e696eb0019bbea52", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  125 => 
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
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="6e661d0081553cb0e696eb0019bbea52", uri="/secure_collection/put_test.html", algorithm="MD5", response="7495ff3e6610c79689fc7a8e6a4c21bc"',
        'HTTP_CONTENT_LENGTH' => '18803',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="6e661d0081553cb0e696eb0019bbea52", uri="/secure_collection/put_test.html", algorithm="MD5", response="7495ff3e6610c79689fc7a8e6a4c21bc"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'c35a41fb5a16ab4352d34d89c8bf1b96',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  126 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="514274b436d2f0843df33d24fea2d3ac", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  127 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="514274b436d2f0843df33d24fea2d3ac", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="802d149a5c2288833abe9f3cb82a30b6"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="514274b436d2f0843df33d24fea2d3ac", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="802d149a5c2288833abe9f3cb82a30b6"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  128 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="514274b436d2f0843df33d24fea2d3ac", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="802d149a5c2288833abe9f3cb82a30b6"',
        'HTTP_CONTENT_LENGTH' => '739',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="514274b436d2f0843df33d24fea2d3ac", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="802d149a5c2288833abe9f3cb82a30b6"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="47bc24ab45b1a1ae4c77e374bef797b5", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  129 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="47bc24ab45b1a1ae4c77e374bef797b5", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="05cc60f690ba80f4414e0670731d4aa4"',
        'HTTP_CONTENT_LENGTH' => '739',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="47bc24ab45b1a1ae4c77e374bef797b5", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="05cc60f690ba80f4414e0670731d4aa4"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '73950f62213f485fbbea3daf8908d850',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  130 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="5cdf326d31f268cf8b4ec8b870a02434", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  131 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '167',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="5cdf326d31f268cf8b4ec8b870a02434", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="7f06c6d46eedb83f52ab46915d1112a9"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '167',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="5cdf326d31f268cf8b4ec8b870a02434", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="7f06c6d46eedb83f52ab46915d1112a9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  132 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="5cdf326d31f268cf8b4ec8b870a02434", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="7f06c6d46eedb83f52ab46915d1112a9"',
        'HTTP_CONTENT_LENGTH' => '21',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="5cdf326d31f268cf8b4ec8b870a02434", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="7f06c6d46eedb83f52ab46915d1112a9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authentication failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="0cff032ea10e3af2d0ba62da94a2af94", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '22',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  133 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0cff032ea10e3af2d0ba62da94a2af94", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="1b1dd77f3537616e540ff6506a4eda10"',
        'HTTP_CONTENT_LENGTH' => '21',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0cff032ea10e3af2d0ba62da94a2af94", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="1b1dd77f3537616e540ff6506a4eda10"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'ed9bb6966a74aef124824d85b5a75304',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  134 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="5c43920ca5e7ed6203ccdf86ed7824fa", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  135 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="5c43920ca5e7ed6203ccdf86ed7824fa", uri="/secure_collection/", algorithm="MD5", response="f1d9eaff3b6d0710a47a719379ed6ed1"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="5c43920ca5e7ed6203ccdf86ed7824fa", uri="/secure_collection/", algorithm="MD5", response="f1d9eaff3b6d0710a47a719379ed6ed1"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/file.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>file.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>text/plain; charset="utf-8"</D:getcontenttype>
        <D:getetag>915f244ec53702ea179db0509d787bde</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test.html</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.html</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>c35a41fb5a16ab4352d34d89c8bf1b96</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_utf8_content.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test_utf8_content.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>73950f62213f485fbbea3daf8908d850</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>ed9bb6966a74aef124824d85b5a75304</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  136 => 
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
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="a1701e8391b10f105b31931f3748d9ed", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  137 => 
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
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="a1701e8391b10f105b31931f3748d9ed", uri="/secure_collection/file.txt", algorithm="MD5", response="10f39d53065350b6ecfe609ff49eb507"',
        'PHP_SELF' => '/index.php/secure_collection/file.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="a1701e8391b10f105b31931f3748d9ed", uri="/secure_collection/file.txt", algorithm="MD5", response="10f39d53065350b6ecfe609ff49eb507"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  138 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="0a3bf7495ce333ac2f65b052d2aafa0f", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  139 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0a3bf7495ce333ac2f65b052d2aafa0f", uri="/secure_collection/collection/", algorithm="MD5", response="df79929374169ac367f5a89f211df7e2"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0a3bf7495ce333ac2f65b052d2aafa0f", uri="/secure_collection/collection/", algorithm="MD5", response="df79929374169ac367f5a89f211df7e2"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>e263a3a5e3e9b3394686e7db1f201c3e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.zip</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>65ba838a2ea397dab2bf806b9c37d5be</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  140 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.xml',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="3b2c961d597001e72b61d573ba62b4aa", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  141 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="3b2c961d597001e72b61d573ba62b4aa", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="b21c73e7018c3019021c6f450e881d25"',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="3b2c961d597001e72b61d573ba62b4aa", uri="/secure_collection/collection/put_test.xml", algorithm="MD5", response="b21c73e7018c3019021c6f450e881d25"',
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
        'ETag' => 'e263a3a5e3e9b3394686e7db1f201c3e',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  142 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.zip',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="5cc29fc5425a75bcd8800a8b37f8e361", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  143 => 
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
        'PATH_INFO' => '/secure_collection/collection/put_test.zip',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/put_test.zip',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/put_test.zip',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/put_test.zip',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="5cc29fc5425a75bcd8800a8b37f8e361", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="f752c3d71b5f60b1db5e583f1a93153d"',
        'PHP_SELF' => '/index.php/secure_collection/collection/put_test.zip',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="5cc29fc5425a75bcd8800a8b37f8e361", uri="/secure_collection/collection/put_test.zip", algorithm="MD5", response="f752c3d71b5f60b1db5e583f1a93153d"',
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
        'ETag' => '65ba838a2ea397dab2bf806b9c37d5be',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  144 => 
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
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="d914765e3f263ffb08baef7a9af4e760", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  145 => 
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
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="d914765e3f263ffb08baef7a9af4e760", uri="/secure_collection/put_test.html", algorithm="MD5", response="0f2ef79bf840b4054362d8c9abf8c047"',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="d914765e3f263ffb08baef7a9af4e760", uri="/secure_collection/put_test.html", algorithm="MD5", response="0f2ef79bf840b4054362d8c9abf8c047"',
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
        'ETag' => 'c35a41fb5a16ab4352d34d89c8bf1b96',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  146 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="445c43859697d26df73cb29ce874167d", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  147 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="445c43859697d26df73cb29ce874167d", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="39598ab093b71fb43833b7ae2cd4b5d7"',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="445c43859697d26df73cb29ce874167d", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="39598ab093b71fb43833b7ae2cd4b5d7"',
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
        'ETag' => '73950f62213f485fbbea3daf8908d850',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  148 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="8763142551ccdfd89873eea78567945a", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  149 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="8763142551ccdfd89873eea78567945a", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="37ade40a725b9ac568388c61a43aa776"',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="8763142551ccdfd89873eea78567945a", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="37ade40a725b9ac568388c61a43aa776"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Some test content...
',
      'headers' => 
      array (
        'ETag' => 'ed9bb6966a74aef124824d85b5a75304',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  150 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/put_test_renamed.xml',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1eea6a05141e3c3b341f0482235b34f2", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  151 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1eea6a05141e3c3b341f0482235b34f2", uri="/secure_collection/put_test_renamed.xml", algorithm="MD5", response="7bdac406ca962b9d98aee7de900cf7d3"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/put_test_renamed.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1eea6a05141e3c3b341f0482235b34f2", uri="/secure_collection/put_test_renamed.xml", algorithm="MD5", response="7bdac406ca962b9d98aee7de900cf7d3"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  152 => 
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
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/put_test_renamed.xml',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="56f043f3eeeed1703fb382ea4ae635a8", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  153 => 
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
        'PATH_INFO' => '/secure_collection/put_test.html',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test.html',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test.html',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test.html',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="56f043f3eeeed1703fb382ea4ae635a8", uri="/secure_collection/put_test.html", algorithm="MD5", response="3c9e9949827b4a834b0ed9f249db277e"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/put_test_renamed.xml',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test.html',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="56f043f3eeeed1703fb382ea4ae635a8", uri="/secure_collection/put_test.html", algorithm="MD5", response="3c9e9949827b4a834b0ed9f249db277e"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  154 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_utf8_öäüß.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_öäüß.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_öäüß.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="8e19fa6b7ef603a2b049a3e9a1314ee4", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  155 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_test_utf8_öäüß.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_öäüß.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="8e19fa6b7ef603a2b049a3e9a1314ee4", uri="/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt", algorithm="MD5", response="b4016d09c9abcc71a1d5058f510b551e"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_öäüß.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="8e19fa6b7ef603a2b049a3e9a1314ee4", uri="/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt", algorithm="MD5", response="b4016d09c9abcc71a1d5058f510b551e"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  156 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="81d1d5b92a3d72335103732070822518", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  157 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_content.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_content.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_content.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="81d1d5b92a3d72335103732070822518", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="ebac38446eb1e9a13fe57e4e2476a6b8"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_content.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="81d1d5b92a3d72335103732070822518", uri="/secure_collection/put_test_utf8_content.txt", algorithm="MD5", response="ebac38446eb1e9a13fe57e4e2476a6b8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  158 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_non_utf8_test.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_non_utf8_test.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_non_utf8_test.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_non_utf8_test.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/put_non_utf8_test.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="92718f2f5ad093264206b8fb1fed359b", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  159 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/put_non_utf8_test.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_non_utf8_test.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_non_utf8_test.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_non_utf8_test.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="92718f2f5ad093264206b8fb1fed359b", uri="/secure_collection/put_non_utf8_test.txt", algorithm="MD5", response="2ff0f8db1881e98f3bc07f85aab8494c"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/put_non_utf8_test.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="92718f2f5ad093264206b8fb1fed359b", uri="/secure_collection/put_non_utf8_test.txt", algorithm="MD5", response="2ff0f8db1881e98f3bc07f85aab8494c"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  160 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/put_non_utf8_test.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="65219e8e2d671bc73f0f56a21df94d93", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  161 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="65219e8e2d671bc73f0f56a21df94d93", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="45bb1aed67331b3281d0efcc073c3fd6"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/put_non_utf8_test.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_filename_ςңα⊁∭⋉€₱‱⁌.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="65219e8e2d671bc73f0f56a21df94d93", uri="/secure_collection/put_test_utf8_filename_%CF%82%D2%A3%CE%B1%E2%8A%81%E2%88%AD%E2%8B%89%E2%82%AC%E2%82%B1%E2%80%B1%E2%81%8C.txt", algorithm="MD5", response="45bb1aed67331b3281d0efcc073c3fd6"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  162 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="53cba98476428045a92a80f6a1788a5d", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  163 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c011d1142cf597a1df03926ea2a0aa63", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  164 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="53cba98476428045a92a80f6a1788a5d", uri="/secure_collection/collection/", algorithm="MD5", response="1e4b09b6ed7caea346459d958d3a0619"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="53cba98476428045a92a80f6a1788a5d", uri="/secure_collection/collection/", algorithm="MD5", response="1e4b09b6ed7caea346459d958d3a0619"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>e263a3a5e3e9b3394686e7db1f201c3e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.zip</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>65ba838a2ea397dab2bf806b9c37d5be</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  165 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c011d1142cf597a1df03926ea2a0aa63", uri="/secure_collection/collection", algorithm="MD5", response="27d8926b13f1a9a7890f84515faea38a"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c011d1142cf597a1df03926ea2a0aa63", uri="/secure_collection/collection", algorithm="MD5", response="27d8926b13f1a9a7890f84515faea38a"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  166 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1ba9a35a12e20c2bc106b2a11fab1799", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  167 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1ba9a35a12e20c2bc106b2a11fab1799", uri="/secure_collection/collection", algorithm="MD5", response="6beb01a8ec2ad407793b83546c5e9ed8"',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1ba9a35a12e20c2bc106b2a11fab1799", uri="/secure_collection/collection", algorithm="MD5", response="6beb01a8ec2ad407793b83546c5e9ed8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'f2ca4d9a14c296295dbd8e7fd428ceda',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  168 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="a76ad5898faa576af1e43a2111b64af2", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  169 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="a76ad5898faa576af1e43a2111b64af2", uri="/secure_collection/collection", algorithm="MD5", response="b0d25ca17e5f0e461722923703d9df94"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="a76ad5898faa576af1e43a2111b64af2", uri="/secure_collection/collection", algorithm="MD5", response="b0d25ca17e5f0e461722923703d9df94"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  170 => 
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
        'PATH_INFO' => '/secure_collection/put_non_utf8_test.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_non_utf8_test.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_non_utf8_test.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_non_utf8_test.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/collection/put_non_utf8_test.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_non_utf8_test.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="f0ffd17219b147e45fa975c870b8eb11", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  171 => 
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
        'PATH_INFO' => '/secure_collection/put_non_utf8_test.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_non_utf8_test.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_non_utf8_test.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_non_utf8_test.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="f0ffd17219b147e45fa975c870b8eb11", uri="/secure_collection/put_non_utf8_test.txt", algorithm="MD5", response="9af311d3c9d7a36105cade98e50fcde8"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/collection/put_non_utf8_test.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_non_utf8_test.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="f0ffd17219b147e45fa975c870b8eb11", uri="/secure_collection/put_non_utf8_test.txt", algorithm="MD5", response="9af311d3c9d7a36105cade98e50fcde8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  172 => 
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
        'PATH_INFO' => '/secure_collection/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/collection/put_test_renamed.xml',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_renamed.xml',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="d260f2bb91960923d2eacc2cac42eaeb", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  173 => 
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
        'PATH_INFO' => '/secure_collection/put_test_renamed.xml',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_renamed.xml',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_renamed.xml',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_renamed.xml',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="d260f2bb91960923d2eacc2cac42eaeb", uri="/secure_collection/put_test_renamed.xml", algorithm="MD5", response="a046049dfd0361a49dc2474cdf963fec"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/collection/put_test_renamed.xml',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_renamed.xml',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="d260f2bb91960923d2eacc2cac42eaeb", uri="/secure_collection/put_test_renamed.xml", algorithm="MD5", response="a046049dfd0361a49dc2474cdf963fec"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  174 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_öäüß.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_öäüß.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_öäüß.txt',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="a698357df0989f678142126cdb0bd32b", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  175 => 
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
        'PATH_INFO' => '/secure_collection/put_test_utf8_öäüß.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/put_test_utf8_öäüß.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="a698357df0989f678142126cdb0bd32b", uri="/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt", algorithm="MD5", response="f953517dc1bae407ceaa1f810b994bf8"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/put_test_utf8_öäüß.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="a698357df0989f678142126cdb0bd32b", uri="/secure_collection/put_test_utf8_%C3%B6%C3%A4%C3%BC%C3%9F.txt", algorithm="MD5", response="f953517dc1bae407ceaa1f810b994bf8"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  176 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="3e2f0cab91fb8051eee41c8ac676e879", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  177 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="3e2f0cab91fb8051eee41c8ac676e879", uri="/secure_collection/collection/", algorithm="MD5", response="41c1623083de4815115b5173dc5bc0eb"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="3e2f0cab91fb8051eee41c8ac676e879", uri="/secure_collection/collection/", algorithm="MD5", response="41c1623083de4815115b5173dc5bc0eb"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>e263a3a5e3e9b3394686e7db1f201c3e</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.zip</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>65ba838a2ea397dab2bf806b9c37d5be</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>0</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_non_utf8_test.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>2a5e395148a671d1d0ebcce043459e58</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test_renamed.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>44ed48566e557f354912e74047ac76b2</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/collection/put_test_utf8_öäüß.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test_utf8_öäüß.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>9acb1e329bb5686479e1f675f90d9c22</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  178 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="7cbdb115fcd9b42f0390a3160d03f6bd", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  179 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="7cbdb115fcd9b42f0390a3160d03f6bd", uri="/secure_collection/", algorithm="MD5", response="2e1fbc4154619c738e5614cef59e76b9"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="7cbdb115fcd9b42f0390a3160d03f6bd", uri="/secure_collection/", algorithm="MD5", response="2e1fbc4154619c738e5614cef59e76b9"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  180 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="9d3c74b780fef8e4be48fa9826f4e62e", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  181 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="9d3c74b780fef8e4be48fa9826f4e62e", uri="/secure_collection/collection", algorithm="MD5", response="38b6bb3a09fd9406b1d26f3c41258070"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="9d3c74b780fef8e4be48fa9826f4e62e", uri="/secure_collection/collection", algorithm="MD5", response="38b6bb3a09fd9406b1d26f3c41258070"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>f2ca4d9a14c296295dbd8e7fd428ceda</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  182 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="b6027889fc897782236e0afe74fa5015", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  183 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="b6027889fc897782236e0afe74fa5015", uri="/secure_collection/collection", algorithm="MD5", response="84dbea2f2bd1df8f2a2f7e49ca9f8a67"',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="b6027889fc897782236e0afe74fa5015", uri="/secure_collection/collection", algorithm="MD5", response="84dbea2f2bd1df8f2a2f7e49ca9f8a67"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'f2ca4d9a14c296295dbd8e7fd428ceda',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  184 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1c5f6629e2b4abbe1458920bb9b0be84", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  185 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1c5f6629e2b4abbe1458920bb9b0be84", uri="/secure_collection/renamed_collection", algorithm="MD5", response="ae9e89e92e3c690163a2149b25eb6d38"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1c5f6629e2b4abbe1458920bb9b0be84", uri="/secure_collection/renamed_collection", algorithm="MD5", response="ae9e89e92e3c690163a2149b25eb6d38"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
                <html><head>
                <title>404 Not Found</title>
                </head><body>
                <h1>Not Found</h1>
                <p>The requested URL was not found on this server.</p>
                <hr>
                </body></html>',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '312',
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  186 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/renamed_collection',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="e178f9d46ecece2aa44cd371ac8b444c", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  187 => 
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
        'PATH_INFO' => '/secure_collection/collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/collection',
        'REDIRECT_URI' => '/index.php/secure_collection/collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="e178f9d46ecece2aa44cd371ac8b444c", uri="/secure_collection/collection", algorithm="MD5", response="6fd929741617888c2be977dc00ca031a"',
        'HTTP_DESTINATION' => 'http://some@webdav/secure_collection/renamed_collection',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_OVERWRITE' => 'F',
        'PHP_SELF' => '/index.php/secure_collection/collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="e178f9d46ecece2aa44cd371ac8b444c", uri="/secure_collection/collection", algorithm="MD5", response="6fd929741617888c2be977dc00ca031a"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  188 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="0cc362fb8bfaa34e7e941e8b910036b4", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  189 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0cc362fb8bfaa34e7e941e8b910036b4", uri="/secure_collection/renamed_collection", algorithm="MD5", response="6649f527462a53ff198d20727f388948"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0cc362fb8bfaa34e7e941e8b910036b4", uri="/secure_collection/renamed_collection", algorithm="MD5", response="6649f527462a53ff198d20727f388948"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>renamed_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e6ea4564b0d2b84b16e197475d46f4ab</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  190 => 
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
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="38dd06d0df3ab268e4083a916fe036b7", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  191 => 
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
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="38dd06d0df3ab268e4083a916fe036b7", uri="/secure_collection/renamed_collection", algorithm="MD5", response="6108e2480132b87b9f3050afa068a699"',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="38dd06d0df3ab268e4083a916fe036b7", uri="/secure_collection/renamed_collection", algorithm="MD5", response="6108e2480132b87b9f3050afa068a699"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Content-Length' => '4096',
        'ETag' => 'e6ea4564b0d2b84b16e197475d46f4ab',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  192 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="bad53552bb0c543ff18ca707672dcea8", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  193 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
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
        'HTTP_CONNECTION' => 'close',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="bad53552bb0c543ff18ca707672dcea8", uri="/secure_collection/", algorithm="MD5", response="7b43c9030be8993b676e86d59d682147"',
        'HTTP_DEPTH' => '0',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="bad53552bb0c543ff18ca707672dcea8", uri="/secure_collection/", algorithm="MD5", response="7b43c9030be8993b676e86d59d682147"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>secure_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>74c66f56a6551ab5bfb885e7f32aeac7</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  194 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection/',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="411b4972ea7ee8a9ad4e71adedf5c7f8", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  195 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><D:propfind xmlns:D="DAV:"><D:prop><D:creationdate/><D:getcontentlength/><D:displayname/><D:source/><D:getcontentlanguage/><D:getcontenttype/><D:executable/><D:getlastmodified/><D:getetag/><D:supportedlock/><D:lockdiscovery/><D:resourcetype/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '303',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/renamed_collection/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection/',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="411b4972ea7ee8a9ad4e71adedf5c7f8", uri="/secure_collection/renamed_collection/", algorithm="MD5", response="07636981675f7c623479ddffe5193c8e"',
        'HTTP_DEPTH' => '1',
        'CONTENT_TYPE' => 'text/xml; charset=utf-8',
        'HTTP_CONTENT_LENGTH' => '303',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="411b4972ea7ee8a9ad4e71adedf5c7f8", uri="/secure_collection/renamed_collection/", algorithm="MD5", response="07636981675f7c623479ddffe5193c8e"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection/</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>renamed_collection</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>httpd/unix-directory</D:getcontenttype>
        <D:getetag>e6ea4564b0d2b84b16e197475d46f4ab</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection/put_test.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>a037a128bbc2bdf28ce171d2bd721b12</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>14013</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection/put_test.zip</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test.zip</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>f42202bbe39c721e96b6c3582364f74d</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>10644</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection/put_non_utf8_test.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_non_utf8_test.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>3b70a46e30e916d6eb4fd14c8f04d4ae</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>21</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection/put_test_renamed.xml</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test_renamed.xml</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>af69fb3a56a6f1435eada8144f8a75f6</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>18803</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
  <D:response>
    <D:href>http://webdav/secure_collection/renamed_collection/put_test_utf8_öäüß.txt</D:href>
    <D:propstat>
      <D:prop>
        <D:creationdate>2003-05-27T11:27:00+0000</D:creationdate>
        <D:displayname>put_test_utf8_öäüß.txt</D:displayname>
        <D:getcontentlanguage>en</D:getcontentlanguage>
        <D:getcontenttype>application/octet-stream</D:getcontenttype>
        <D:getetag>35e6536ea65aa8c0a72e3ab21c3ecfd1</D:getetag>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>739</D:getcontentlength>
        <D:resourcetype/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat>
      <D:prop>
        <D:source/>
        <D:executable/>
        <D:supportedlock/>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  196 => 
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
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
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
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="dd5e12c748dce5f6ed1a10eea8305440", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  197 => 
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
        'PATH_INFO' => '/secure_collection/renamed_collection',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/renamed_collection',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/renamed_collection',
        'REDIRECT_URI' => '/index.php/secure_collection/renamed_collection',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_CONNECTION' => 'Keep-Alive',
        'HTTP_USER_AGENT' => 'Mozilla/5.0 (compatible; Konqueror/4.3; Linux) KHTML/4.3.2 (like Gecko)',
        'HTTP_PRAGMA' => 'no-cache',
        'HTTP_CACHE_CONTROL' => 'no-cache',
        'HTTP_ACCEPT' => 'text/html, image/jpeg;q=0.9, image/png;q=0.9, text/*;q=0.9, image/*;q=0.9, */*;q=0.8',
        'HTTP_ACCEPT_ENCODING' => 'x-gzip, x-deflate, gzip, deflate',
        'HTTP_ACCEPT_CHARSET' => 'utf-8, utf-8;q=0.5, *;q=0.5',
        'HTTP_ACCEPT_LANGUAGE' => 'en-US, en',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="dd5e12c748dce5f6ed1a10eea8305440", uri="/secure_collection/renamed_collection", algorithm="MD5", response="829fb3be46fead76a93b39129e50b868"',
        'PHP_SELF' => '/index.php/secure_collection/renamed_collection',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="dd5e12c748dce5f6ed1a10eea8305440", uri="/secure_collection/renamed_collection", algorithm="MD5", response="829fb3be46fead76a93b39129e50b868"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavKonquerorCompatibleTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 405 Method Not Allowed',
    ),
  ),
);

?>