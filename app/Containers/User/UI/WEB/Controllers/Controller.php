<?php

namespace App\Containers\User\UI\WEB\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Actions\RegisterUserAction;
use App\Containers\User\UI\WEB\Requests\RegisterUserRequest;
use App\Ship\Parents\Controllers\WebController;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends WebController
{

    /**
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sayWelcome()
    {   // user say welcome
        return view('user::user-welcome');
    }

    public function register() {
        return view('user::register');
    }

    public function saveUser(RegisterUserRequest $request) {
        $user = Apiato::call('User@RegisterUserAction', [$request]);
        return  redirect('/login-web');
    }
}
