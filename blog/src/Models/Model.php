<?php
namespace Bebro\Blogas\Models;
 
use PDO;
 
class Model
{
    protected $pdo;
 
    public function __construct()
    {
        $this->pdo = self::getPdo();
    }
 
    static public function getPdo(): PDO
    {
        $host = '127.0.0.1';
        $db   = 'blog';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
 
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        return new PDO($dsn, $user, $pass, $options);
    }
 
 
}