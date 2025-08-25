<?php

namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\User;

class RegisterController
{
    public function show()
    {
        return App::view('register', ['title' => 'Register']);
    }

    public function register() // tai yra store metodas user
    {
        $user = new User();
        $user->username = $_POST['username'];
        $user->password = md5($_POST['password']);
        $user->store();

        return App::redirect('login', ['message' =>
            [
                'text' => 'Registration successful!',
                'type' => 'success'
            ]
        ]);
    }

}