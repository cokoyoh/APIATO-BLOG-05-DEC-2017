<?php

    $router->get('/user', [
        'as'   => 'get_user_home_page',
        'uses' => 'Controller@sayWelcome',
    ]);

    $router->get('/register-user', [
        'as'   => 'register_user_page',
        'uses' => 'Controller@register',
    ]);

    $router->post('/save-user', [
        'as'   => 'store_user_page',
        'uses' => 'Controller@saveUser',
    ]);
