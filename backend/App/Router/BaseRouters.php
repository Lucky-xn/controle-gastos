<?php

use App\Core\SystemRouter;

$router = new SystemRouter();

const BASE__ROUTES = __DIR__ . '/ChildsRoutes';

require_once BASE__ROUTES . '/test.php';

$router->run();