<?php

return array(
    array(
        'server' => array(
            'REQUEST_URI'    => '/a/anew',
            'REQUEST_METHOD' => 'MKCOL',
        ),
        'body' => '',
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
