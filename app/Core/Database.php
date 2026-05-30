<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];
        
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection F: " . $e->getMessage());
        }
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
}