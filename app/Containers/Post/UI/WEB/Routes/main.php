<?php

    /** @var Route $router */
    $router->get('/posts/create', [
        'as'         => 'web_post_create',
        'uses'       => 'Controller@create',
        'middleware' => [
            'auth:web',
        ],
    ]);

    /** @var Route $router */
    $router->post('posts/store', [
        'as'         => 'web_post_store',
        'uses'       => 'Controller@store',
        'middleware' => [
            'auth:web',
        ],
    ]);

    /** @var Route $router */
    $router->get('posts/{id}/edit', [
        'as' => 'web_post_edit',
        'uses'  => 'Controller@edit',
        'middleware' => [
            'auth:web',
        ],
    ]);