<?php

namespace Bebro\Blogas\Models;

class Box extends Model
{
    public $id;
    public $count;

    static public function all(): array
    {
        $sql = '
            SELECT * FROM boxes
        ';

        $stmt = self::getPdo()->query($sql);
        return $stmt->fetchAll();
    }

    static public function find(int $id): ?Box
    {
        $sql = '
            SELECT * FROM boxes 
            WHERE id = ?
        ';

        $stmt = self::getPdo()->prepare($sql);
        $stmt->execute([$id]); // klaida istaisyta?
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        $box = new self();
        $box->id = $data['id'];
        $box->count = $data['count'];

        return $box;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function store()
    {
        $sql = '
            INSERT INTO boxes 
            (count) 
            VALUES (?)
        ';
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->count]);
    }

    public function update($id)
    {
        $sql = '
            UPDATE boxes 
            SET count = ?
            WHERE id = ?
        ';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->count, $id]);
    }

    public function delete($id)
    {
        $sql = '
            DELETE FROM boxes 
            WHERE id = ?
        ';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

}