<?php

namespace App\Models\System;

use App\Models\MySqlRequest;
use App\Services\System\Auth;

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

  public function verifyUser($name, $password)
  {
    $sql = "
    SELECT
      *
    FROM
      users
    WHERE
      name = :name
    ";

    $params = [
      ':name' => $name,
    ];

    try {
      $response = $this->executeQuery($sql, $params);

      $middlerPassword = $this->verifyPassword($password, $response[0]['password']);

      if ($middlerPassword) {
        if (isset($response[0]['name']) && isset($response[0]['password'])) {
          return ['success' => true, 'token' => (new Auth)->generateToken($response[0])];
          // return $response[0];
        }
      }
    } catch (\PDOException $e) {
      http_response_code(401);
      return json_encode(["message" => "Credenciais Invalidas", "error" => $e]);
    }



  }

  public function hashPassword($password)
  {
    return password_hash($password, PASSWORD_BCRYPT);
  }

  private function verifyPassword($password, $hashedPassword)
  {
    return password_verify($password, $hashedPassword);
  }
}
