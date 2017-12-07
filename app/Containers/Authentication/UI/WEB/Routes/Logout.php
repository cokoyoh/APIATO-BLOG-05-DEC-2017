<?php

    $router->get('/logout', [
        'as'   => 'logout',
        'uses'       => 'Controller@logoutAdmin',
        'middleware' => [
            'auth:web'
        ],
    ]);
