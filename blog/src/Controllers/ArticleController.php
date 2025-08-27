<?php
namespace Bebro\Blogas\Controllers;

use Bebro\Blogas\App;
use Bebro\Blogas\Models\Article;

class ArticleController
{

    public function index(): string
    {
        $articles = Article::all();
        return App::view('articles/index', ['articles' => $articles, 'title' => 'Articles List']);
    }

    public function show(int $id) : string
    {
        
        if (!$id) {
            return App::view('404', ['title' => '404 Not Found']);
        }

        $article = Article::find($id);

        if (!$article) {
            return App::view('404', ['title' => '404 Not Found']);
        }

        return App::view('articles/show', ['article' => $article, 'title' => $article->title]);
    }

    public function create(): string
    {
        return App::view('articles/create', ['title' => 'Create Article']);
    }

    public function store()
    {
        $article = new Article();
        $article->title = $_POST['title'] ?? '';
        $article->content = $_POST['content'] ?? '';
        $article->author = $_POST['author'] ?? '';
        $article->image = $_FILES['image'] ?? null;

        if ($article->image) {
            $article->image = $this->uploadImage($article->image);
        }

        $article->store();

        return App::redirect('', ['message' =>
            [
                'text' => 'Article created successfully!',
                'type' => 'success'
            ]
        ]);
    }

    public function delete($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return App::view('404', ['title' => 'Article Not Found']);
        }

        if ($article->image) {
            $this->deleteImage($article->image);
        }

        $article->delete($id);

        return App::redirect('article', ['message' =>
            [
                'text' => 'Article deleted successfully!',
                'type' => 'success'
            ]
        ]);
    }

    public function edit($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return App::view('404', ['title' => 'Article Not Found']);
        }
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $csrfToken;
        return App::view('articles/edit', ['article' => $article, 'csrf_token' => $csrfToken]);
    }

    public function update($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return App::view('404', ['title' => 'Article Not Found']);
        }

        if (
            !isset($_POST['csrf_token']) ||
            !isset($_SESSION['csrf_token']) ||
            $_POST['csrf_token'] !== $_SESSION['csrf_token']
        ) {
            return App::view('403', ['title' => 'Forbidden']);
        }
        unset($_SESSION['csrf_token']);


        $oldImage = $article->image ?? '';

        $article->title = $_POST['title'] ?? '';
        $article->content = $_POST['content'] ?? '';
        $article->author = $_POST['author'] ?? '';
        $article->image = $_FILES['image'] ?? null;
        $deleteImage = isset($_POST['delete_image']) ? (bool)$_POST['delete_image'] : false;

        if ($article->image) {
            $this->deleteImage($oldImage);
            $article->image = $this->uploadImage($article->image);
        } elseif ($deleteImage) {
            $this->deleteImage($oldImage);
            $article->image = null;
        } else {
            $article->image = $oldImage;
        }

        $article->update($id);

        return App::redirect('article', ['message' =>
            [
                'text' => 'Article updated successfully!',
                'type' => 'success'
            ]
        ]);
    }

    private function deleteImage(string $image): void
    {
        if (!$image) {
            return;
        }

        $imagePath = __DIR__ . '/../../public/' . $image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    private function uploadImage(array $image): string
    {
        $targetDir = __DIR__ . '/../../public/images/';

        $fileName = rand(1000000, 9999999) . basename($image['name']);
        $targetFilePath = $targetDir . $fileName;

        // Move to folder
        if (move_uploaded_file($image['tmp_name'], $targetFilePath)) {
            return 'images/' . $fileName; // Return relative path for database storage
        }

        return '';
    }
}