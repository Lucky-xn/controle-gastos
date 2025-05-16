<?php

namespace App\Services\System;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Auth {
  private $secretKey;
  private $algorithm;

  public function __construct() {
    $this->secretKey = $_ENV['JWT_SECRET_KEY'];
    $this->algorithm = $_ENV['JWT_ALG'];
  }

  public function generateToken($data) {
    $payload = [
      'id' => $data['id'],
      'name' => $data['name'],
      'exp' => time() + 3600,
    ];

    return json_encode(['token' => JWT::encode($payload, $this->secretKey, $this->algorithm)]);
  }

  public function verifyToken($jwt) {
    return JWT::decode($jwt, new Key($this->secretKey, $this->algorithm));
  }
}
