<?php

namespace Bebro\Blogas\Models;



class Article extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }

    static public function all(): array
    {
        $sql = '
            SELECT * FROM articles
        ';

        $stmt = self::getPdo()->query($sql);
        return $stmt->fetchAll();
    }

    static public function find(int $id): ?Article  // tipizacija sako kad reikia null (?) arba Article objekto
    {
        $sql = '
            SELECT * FROM articles
            WHERE id = ?
        ';

        $stmt = self::getPdo()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        $article = new self();
        $article->id = $data['id'];
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->author = $data['author'];
        $article->image = $data['image'];

        return $article; 
    }

    public function store()
    {
        $sql = '
            INSERT INTO articles
            (title, content, author, image)
            VALUES (?, ?, ?, ?)
        ';
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->title, $this->content, $this->author, $this->image]);
    }

    public function update($id)
    {
        $sql = '
            UPDATE articles
            SET title = ?, content = ?, author = ?, image = ?
            WHERE id = ?
        ';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->title, $this->content, $this->author, $this->image, $id]);
    }

    /**
     * Deletes an article by its unique identifier.
     *
     * @param int $id The unique identifier of the article to delete.
     * @return bool True on success, false on failure.
     */
    public function delete($id)
    {
        $sql = '
            DELETE FROM articles
            WHERE id = ?
        ';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
    
}