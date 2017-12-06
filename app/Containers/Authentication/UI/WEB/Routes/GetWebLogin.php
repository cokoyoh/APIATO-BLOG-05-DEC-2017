<?php

    $router->get('/login-web', [
        'as'   => 'get_web_login_page',
        'uses' => 'Controller@showWebLoginPage',
    ]);

    $router->post('/login-web', [
        'as'   => 'post_web_login_form',
        'uses' => 'Controller@loginWeb',
    ]);