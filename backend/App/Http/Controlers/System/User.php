<?php

use App\Models\System\User;

$password = 'teste123';

$user = new User();

echo $user->hashPassword($password);
