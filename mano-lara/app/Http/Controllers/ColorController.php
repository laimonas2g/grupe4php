<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function showName()
    {
        return view('name');
    }

    public function showColor($color)
    {
        $allowedColors = ['red', 'green', 'blue', 'yellow', 'purple', 'orange'];
        
        if (!in_array($color, $allowedColors)) {
            abort(404);
        }

        return view('color', ['color' => $color]);
    }

    // Padaryti linką /suma/5/8, kuris gražintų 13 5 ir 8 yra parametrai. Blade daryti nereikia

    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function randomColor()
    {
        $colors = ['red', 'green', 'blue', 'yellow', 'purple', 'orange'];
        $randomColor = $colors[array_rand($colors)];

        return view('color', ['color' => $randomColor]);
    }
}