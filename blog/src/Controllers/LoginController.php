<?php

namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\User;
use Bebro\Blogas\Services\Auth;

class LoginController
{
    public function show()
    {
        return App::view('login', ['title' => 'Login']);
    }

    public function login()
    {
        $user = User::findByCredentials($_POST['username'], md5($_POST['password']));

        if ($user) {
            Auth::login($user);
            return App::redirect('', ['message' =>  // '' yra url į "namus"
                [
                    'text' => 'Login successful!',
                    'type' => 'success'
                ]
            ]);
        }

        return App::redirect('login', ['message' =>
            [
                'text' => 'Invalid username or password.',
                'type' => 'error'
            ]
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return App::redirect('', ['message' =>
            [
                'text' => 'Logout successful!',
                'type' => 'success'
            ]
        ]);
    }
}