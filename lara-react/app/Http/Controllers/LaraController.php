<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaraController extends Controller
{
    //

    public function hello()
    {
        $laraIs = 'Lara is awesome';

        $laraColors = ['red', 'green', 'blue', 'yellow'];

        return inertia('HelloLara', [
            'laraIs' => $laraIs,
            'laraColors' => $laraColors
        ]);
    }
}
