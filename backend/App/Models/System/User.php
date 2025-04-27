<?php

namespace App\Models\System;

use App\Models\MySqlRequest;

class User extends MySqlRequest
{
  public function newUser($name, $password)
  {

    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";

    $params = [
      ':name' => $name,
      ':password' => $this->hashPassword($password)
    ];

    try {
      $this->executeQuery($sql, $params);
      return [
        'status' => 'success',
        'message' => 'User Created Successfully'
      ];
    } catch (\PDOException $e) {
      return [
        'status' => 'error',
        'message' => 'Error creating user: ' . $e->getMessage()
      ];
    }
  }

  public function hashPassword($password)
  {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  public function verifyPassword($password, $hashedPassword)
  {
    return password_verify($password, $hashedPassword);
  }
}
