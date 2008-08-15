<?php

return array(
    array(
        'server' => array(
            'REQUEST_URI'        => '/a/a2',
            'REQUEST_METHOD'     => 'PROPFIND',
            // 23:42
            'HTTP_AUTHORIZATION' => 'Basic MjM6NDI=',
        ),
        'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propfind xmlns:D="DAV:">
  <D:allprop/>
</D:propfind>',
    ),
    array(
        'status' => 'HTTP/1.1 401 Unauthorized',
        'headers' => array(
            'WWW-Authenticate' => 'Basic realm="eZ Components WebDAV"',
            'Server'           => 'eZComponents/dev/ezcWebdavTransportTestMock',
            'Content-Type'     => 'text/plain; charset="utf-8"',
        ),
        'body' => 'Authorization failed.',
    ),
);

?>
