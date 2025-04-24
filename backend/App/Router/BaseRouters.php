<?php

use App\Core\Router;

$router = new Router();

const BASE__ROUTES = __DIR__ . '/ChildsRoutes';

require_once BASE__ROUTES . '/test.php';

$router->run();