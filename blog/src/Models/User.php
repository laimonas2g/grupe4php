<?php

namespace Bebro\Blogas\Models;

class User extends Model
{
    public $username, $password, $session;

    static public function find(int $id): ?User
    {
        $sql = '
            SELECT * FROM users
            WHERE id = ?
        ';

        $stmt = self::getPdo()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        $user = new self();
        $user->id = $data['id'];
        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->session = $data['session'];

        return $user;
    }

    static public function findByCredentials(string $username, string $password): ?User
    {
        $sql = '
            SELECT * FROM users
            WHERE username = ? AND password = ?
        ';

        $stmt = self::getPdo()->prepare($sql);
        $stmt->execute([$username, $password]);
        $data = $stmt->fetch();

        if (!$data) {
            return null;
        }

        $user = new self();
        $user->id = $data['id'];
        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->session = $data['session'];

        return $user;
    }
    
    public function __construct()
    {
        parent::__construct();
    }

    public function store()
    {
        $sql = '
            INSERT INTO users 
            (username, password) 
            VALUES (?, ?)
        ';
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->username, $this->password]);
    }

    public function update($id)
    {
        $sql = '
            UPDATE users 
            SET username = ?, password = ?, session = ?
            WHERE id = ?
        ';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->username, $this->password, $this->session, $id]);
    }

}