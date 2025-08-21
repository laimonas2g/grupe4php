<?php
namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\Article;

class ArticleController
{

    public function index(): string
    {
        $articles = (new Article())->index();
        return App::view('articles/index', ['articles' => $articles, 'title' => 'Articles List']);
    }
    
    
    
    
    public function show(int $id) : string
    {
        
        if (!$id) {
            return App::view('404', ['title' => '404 Not Found']);
        }

        $article = (new Article())->show($id);

        if (!$article) {
            return App::view('404', ['title' => '404 Not Found']);
        }

        return App::view('articles/show', ['article' => $article, 'title' => $article['title']]);
    }
}