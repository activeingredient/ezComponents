<?php

return array (
  'SCRIPT_URL' => '/secure_collection/litmus/lockme',
  'SCRIPT_URI' => 'http://webdav/secure_collection/litmus/lockme',
  'HTTP_HOST' => 'webdav',
  'HTTP_USER_AGENT' => 'litmus/0.11 neon/0.26.3',
  'HTTP_CONNECTION' => 'TE',
  'HTTP_TE' => 'trailers',
  'CONTENT_LENGTH' => '32',
  'HTTP_IF' => '(<opaquelocktoken:c26207a1-874a-02da-e1f4-5035a7de3fa8>) (Not <DAV:no-lock>)',
  'HTTP_X_LITMUS' => 'locks: 17 (cond_put_with_not)',
  'SERVER_SIGNATURE' => '<address>Apache Server at webdav Port 80</address>
',
  'SERVER_SOFTWARE' => 'Apache',
  'SERVER_NAME' => 'webdav',
  'SERVER_ADDR' => '127.0.0.1',
  'SERVER_PORT' => '80',
  'REMOTE_ADDR' => '127.0.0.1',
  'DOCUMENT_ROOT' => '/var/www/webdav/htdocs',
  'SERVER_ADMIN' => '[no address given]',
  'SCRIPT_FILENAME' => '/var/www/webdav/htdocs/index.php',
  'REMOTE_PORT' => '33458',
  'GATEWAY_INTERFACE' => 'CGI/1.1',
  'SERVER_PROTOCOL' => 'HTTP/1.1',
  'REQUEST_METHOD' => 'PUT',
  'QUERY_STRING' => '',
  'REQUEST_URI' => '/secure_collection/litmus/lockme',
  'SCRIPT_NAME' => '',
  'PATH_INFO' => '/secure_collection/litmus/lockme',
  'PATH_TRANSLATED' => '/var/www/webdav/htdocs/index.php/secure_collection/litmus/lockme',
  'PHP_SELF' => '/secure_collection/litmus/lockme',
  'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="4596859c821da0a19a90e4cb78e799a6", uri="/secure_collection/litmus/lockme", response="0b0ca3e74cf0ea4ff845b26c2d69ed80", algorithm="MD5"',
  'REQUEST_TIME' => 1220431173,
);

?>