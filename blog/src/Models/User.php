<?php
 
namespace Bebro\Blogas\Models;
 
class User extends Model
{
    public $username, $password, $session;
   
   
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
       
        $stmt =  $this->pdo->prepare($sql);
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
 