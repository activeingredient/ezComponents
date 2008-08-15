<?php

return array(
    array(
        'server' => array(
            'REQUEST_URI'        => '/a/a2',
            'REQUEST_METHOD'     => 'PUT',
            // foo:bar
            'HTTP_AUTHORIZATION' => 'Basic Zm9vOmJhcg==',
            'CONTENT_TYPE'   => 'text/plain; charset="utf-8"',
            'HTTP_CONTENT_LENGTH' => '9',
        ),
        'body' => 'Some text',
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
