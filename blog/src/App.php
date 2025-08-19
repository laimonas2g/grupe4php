<?php

namespace Bebro\Blogas;

use Bebro\Blogas\Controllers\AboutController;

class App
{
    public static function run()
    {
        return self::route();
    }




    private static function route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $serverHome = '/grupe4php/blog/public';

        $params = str_replace($serverHome, '', $uri);

        $params = explode('/', $params);
        array_shift($params);

        return match(true) {
            $params[0] === '' => '<h1>home</h1>',
            $params[0] === 'about' => (new AboutController())->index(),
            $params[0] === 'contact' => 'contact',
            default => '404',
        };
    }

    static public function view(string $template, array $data = []): string
    {
        extract($data); // sukuriame kintamuosius iš masyvo data['text'] ==> $text

        ob_start();
        include __DIR__ . '/views/top.php';
        include __DIR__ . '/views/' . $template . '.php';
        include __DIR__ . '/views/bottom.php';
        return ob_get_clean();
    }





}