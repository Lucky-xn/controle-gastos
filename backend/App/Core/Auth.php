<?php

namespace App\Core;

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
    return JWT::encode($data, $this->secretKey, $this->algorithm);
  }

  public function decodeToken($jwt) {
    return JWT::decode($jwt, new Key($this->secretKey, $this->algorithm));
  }
}
