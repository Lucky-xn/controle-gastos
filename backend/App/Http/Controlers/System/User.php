<?php

use App\Models\System\User;

$input = json_decode(file_get_contents('php://input'), true);

$password = 'teste123';

$user = (new User)->verifyUser($input['name'], $input['password']);

// echo $user->hashPassword($password);
$response = [
  'dados' => $user,
];
echo json_encode($response);
