<?php
// public/app.php

// Include the Composer autoloader
require __DIR__ . '/../../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(paths: __DIR__ . '/../../');
$dotenv->load();


// Include middlewares (autoloaded via Composer if properly namespaced)
App\Http\Middleware\CORSMiddleware::handle();


// Load the routing
require __DIR__ . '/../Router/BaseRouters.php'; // Corrigir nome do arquivo