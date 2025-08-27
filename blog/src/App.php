<?php

namespace Bebro\Blogas;

use Bebro\Blogas\Controllers\AboutController;
use Bebro\Blogas\Controllers\ArticleController;
use Bebro\Blogas\Controllers\RegisterController;
use Bebro\Blogas\Controllers\BoxController;
use Bebro\Blogas\Controllers\LoginController;
use Bebro\Blogas\Controllers\ColorController;
use Bebro\Blogas\Services\Auth;

class App
{
    
    const URL = 'http://localhost/grupe4php/blog/public/';
    
    public static function run()
    {
        session_start();
        return self::route();
    }




    private static function route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $serverHome = '/grupe4php/blog/public';

        $params = str_replace($serverHome, '', $uri);

        $params = explode('/', $params);
        array_shift($params);

        $method = $_SERVER['REQUEST_METHOD'];

        if ($params[0] === 'box' && !Auth::check()) {
            return App::redirect('login', ['message' =>
                [
                    'text' => 'You must be logged in to access this page.',
                    'type' => 'error'
                ]
            ]);
        }

        return match(true) {


            $method == 'GET' && count($params) === 1 && $params[0] === 'color' => (new ColorController())->index(),
            $method == 'POST' && count($params) === 1 && $params[0] === 'color' => (new ColorController())->getName(),


            //box CRUD

            $method == 'GET' && count($params) === 1 && $params[0] === 'box' => (new BoxController())->index(),
            $method == 'GET' && count($params) === 2 && $params[0] === 'box' && $params[1] === 'create' => (new BoxController())->create(),
            $method == 'GET' && count($params) === 3 && $params[0] === 'box' && $params[1] === 'edit' => (new BoxController())->edit((int)$params[2]),
            $method == 'POST' && count($params) === 2 && $params[0] === 'box' && $params[1] === 'store' => (new BoxController())->store(),
            $method == 'POST' && count($params) === 3 && $params[0] === 'box' && $params[1] === 'update' => (new BoxController())->update((int)$params[2]),
            $method == 'POST' && count($params) === 3 && $params[0] === 'box' && $params[1] === 'delete' => (new BoxController())->delete((int)$params[2]),

            //article CRUD

            $method == 'GET' && count($params) === 1 && $params[0] === 'article' => (new ArticleController())->index(),
            $method == 'GET' && count($params) === 2 && $params[0] === 'article' && $params[1] === 'create' => (new ArticleController())->create(),
            $method == 'GET' && count($params) === 3 && $params[0] === 'article' && $params[1] === 'edit' => (new ArticleController())->edit((int)$params[2]),
            $method == 'POST' && count($params) === 2 && $params[0] === 'article' && $params[1] === 'store' => (new ArticleController())->store(),
            $method == 'POST' && count($params) === 3 && $params[0] === 'article' && $params[1] === 'update' => (new ArticleController())->update((int)$params[2]),
            $method == 'POST' && count($params) === 3 && $params[0] === 'article' && $params[1] === 'delete' => (new ArticleController())->delete((int)$params[2]),

            $method == 'GET' && count($params) === 1 && $params[0] === 'register' => (new RegisterController())->show(),
            $method == 'POST' && count($params) === 1 && $params[0] === 'register' => (new RegisterController())->register(),

            $method == 'GET' && count($params) === 1 && $params[0] === 'login' => (new LoginController())->show(),
            $method == 'POST' && count($params) === 1 && $params[0] === 'login' => (new LoginController())->login(),
            $method == 'POST' && count($params) === 1 && $params[0] === 'logout' => (new LoginController())->logout(),

            count($params) === 1 && $params[0] === '' => (new ArticleController())->index(),
            count($params) === 1 && $params[0] === 'about' => (new AboutController())->index(),
            count($params) === 2 && $params[0] === 'article' => (new ArticleController())->show((int)$params[1]),
            default => self::view('404', ['title' => '404 Not Found'])
        };
    }

    public static function view(string $template, array $data = []): string
    {
        extract($data); // sukuriame kintamuosius iš masyvo data['text'] ==> $text
        $url = self::URL;
        $flash = $_SESSION['flash'] ?? []; // nuskaitome iš sesijos
        unset($_SESSION['flash']);

        ob_start();
        include __DIR__ . '/views/top.php';
        include __DIR__ . '/views/' . $template . '.php';
        include __DIR__ . '/views/bottom.php';
        return ob_get_clean();
    }

    public static function redirect(string $url, array $data = []): string
    {
        $_SESSION['flash'] = $data; // irasome i sesijos kintamąjį

        header('Location: ' . self::URL . $url);
        return '';
    }

}