<?php

namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\About;

class AboutController
{
    public function index()
    {
        $about = new About();
        $aboutText = $about->getInfo();

        return App::view('about', ['text' => $aboutText, 'title' => 'Apie Bebro Blogą']);
    }
}