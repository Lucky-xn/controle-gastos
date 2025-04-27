<?php

namespace App\Core;

use PDO;
use PDOException;

class ConnectionMysql {
  private $pdo;

  public function __construct()
  {
    $host =  $_ENV['MYSQL_HOST'];
    $port =  $_ENV['MYSQL_PORT'];
    $dbname =  $_ENV['MYSQL_DB'];
    $username =  $_ENV['MYSQL_USER'];
    $password =  $_ENV['MYSQL_PASSWORD'];

    $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4";

    try {
      $this->pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
      ]);
    } catch (PDOException $e) {
      die('Database connection failed: ' . $e->getMessage());
    }
  }

  public function getConnection()
  {
    return $this->pdo;
  }
}