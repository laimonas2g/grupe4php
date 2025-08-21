<?php

namespace Bebro\Blogas\Models;



class Article extends Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    
    public function index(): array
    {
        $sql = '
            SELECT * 
            FROM articles
        ';

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function show(int $id): bool|array
    {
        $sql = '
            SELECT * 
            FROM articles
            WHERE id = ?
        ';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}