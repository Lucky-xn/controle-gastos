<?php

namespace App\Models;

use App\Core\ConnectionMysql;
use PDO;
use PDOException;

class MySqlRequest extends ConnectionMysql
{
  public function executeQuery($sql, $params = [])
  {
    try {
      $stmt = $this->getConnection()->prepare($sql);
      foreach ($params as $key => $value) {
        $stmt->bindValue($key, $value, is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR);
      }
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $result;
    } catch (PDOException $e) {
      throw new \Exception('Error na execução da consulta: ' . $e->getMessage());
    }
  }
}
