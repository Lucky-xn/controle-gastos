<?php

// $router->add(method: 'GET', endpoint: 'api/teste', handler: 'System/user.php');
$router->add(method: 'POST', endpoint: 'api/teste', handler: 'System/user.php');


$router->add(method: 'POST', endpoint: 'api/dash', handler: 'System/user.php', protected: true);