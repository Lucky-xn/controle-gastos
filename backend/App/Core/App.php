<?php
// public/app.php

// Include the Composer autoloader
require __DIR__ . '/../../vendor/autoload.php';

// Include middlewares (autoloaded via Composer if properly namespaced)
use App\Http\Middleware\CORSMiddleware;

CORSMiddleware::handle();

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(paths: __DIR__ . '/../../');
$dotenv->load();

// Load the routing
require __DIR__ . '/../Router/BaseRouters.php'; // Corrigir nome do arquivo