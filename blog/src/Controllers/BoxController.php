<?php

namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\Box;
use Bebro\Blogas\Services\Auth;

class BoxController
{
    public function index()
    {
        $boxes = Box::all();
        return App::view('box/index', ['boxes' => $boxes]);
    }

    public function create()
    {
        if (!Auth::check()) {
            return App::redirect('login', ['message' =>
                [
                    'text' => 'You must be logged in to create a box.',
                    'type' => 'error'
                ]
            ]);
        }

        return App::view('box/create');
    }

    public function store()
    {
        $box = new Box();
        $box->count = $_POST['count'] ?? 0;
        $box->store();

        return App::redirect('box', ['message' =>
            [
                'text' => 'Box created successfully!',
                'type' => 'success'
            ]
        ]);
    }

    public function edit($id)
    {
        $box = Box::find($id);
        if (!$box) {
            return App::view('404', ['title' => 'Box Not Found']);
        }
        return App::view('box/edit', ['box' => $box]);
    }

    public function update($id)
    {
        $box = Box::find($id);
        if (!$box) {
            return App::view('404', ['title' => 'Box Not Found']);
        }

        $box->count = $_POST['count'] ?? 0;
        $box->update($id);

        return App::redirect('box', ['message' =>
            [
                'text' => 'Box updated successfully!',
                'type' => 'success'
            ]
        ]);
    }

    public function delete($id)
    {
        $box = Box::find($id);
        if (!$box) {
            return App::view('404', ['title' => 'Box Not Found']);
        }

        $box->delete($id);

        return App::redirect('box', ['message' =>
            [
                'text' => 'Box deleted successfully!',
                'type' => 'success'
            ]
        ]);
    }
}