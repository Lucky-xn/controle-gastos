<?php

namespace App\Core;

use App\Services\System\Auth;

class SystemRouter
{
  private $routes = [];
  private $notFoundHandler;
  // private $secret = 'chave_secreta';

  public function add($method, $endpoint, $handler, $protected = false, $permission = null, $adminOnly = false)
  {
    $this->routes[] = [
      'method' => strtoupper(string: $method),
      'endpoint' => $endpoint,
      'handler' => $handler,
      'protected' => $protected,
      'permission' => $permission,
      'adminOnly' => $adminOnly,
    ];
  }

  private function matchRoute($routeEndpoint, $requestEndpoint)
  {
    $routeParts = explode('/', trim($routeEndpoint, '/'));
    $requestParts = explode('/', trim($requestEndpoint, '/'));

    if (count($routeParts) !== count($requestParts)) {
      return false;
    }

    $params = [];
    for ($i = 0; $i < count($routeParts); $i++) {
      if (preg_match('/^{(.+)}$/', $routeParts[$i], $matches)) {
        $params[$matches[1]] = $requestParts[$i];
        continue;
      }
      if ($routeParts[$i] !== $requestParts[$i]) { // Corrigir comparação
        return false;
      }
    }
    return $params;
  }

  public function run()
  {
    $requestMethod = $this->getServerVar('REQUEST_METHOD', 'GET');
    $requestUri = parse_url(url: $_SERVER['REQUEST_URI'], component: PHP_URL_PATH) ?? '/';
    $scriptName = $this->getServerVar('SCRIPT_NAME', '');

    $basePath = rtrim(string: dirname(path: $scriptName), characters: '/');
    $endpoint = '/' . trim(substr($requestUri, strlen($basePath)), '/');

    foreach ($this->routes as $route) {
      $params = $this->matchRoute($route['endpoint'], $endpoint);
      if ($route['method'] === $requestMethod && $params !== false) {
        $this->handlerProtectedRoute(route: $route, params: $params);
        $this->loadRouteHandler($route['handler']);
        return;
      }
    }

    $this->handleNotFound();
  }

  private function getServerVar(string $key, string $default = '')
  {
    return isset($_SERVER[$key]) && is_string($_SERVER[$key]) ? $_SERVER[$key] : $default;
  }

  private function handlerProtectedRoute(array $route, array $params)
  {
    if ($route['protected']) {
      $decodedToken = (new Auth)->verifyToken($_SERVER['token']);

      if ($route['adminOnly'] ?? false) {
        #AdminMiddleware::checkAdmin($decodedToken);
      }

      if ($route['permission'] ?? false) {
        #PermissionsMiddleware::checkPermission($decodedToken, $route['permission']);
      }
    }

    if (!empty($params)) {
      $_GET = array_merge($_GET ?? [], $params);
    }
  }

  private function loadRouteHandler(string $handler) {
    $handlerPath = __DIR__ . '/../Http/Controlers/' . $handler;
    if (file_exists(filename: $handlerPath)) {
      require $handlerPath;
    } else {
      throw new \Exception(message: "Arquivo não encontrado:" . $handlerPath);
    }
  }

  private function handleNotFound() {
    if ($this->notFoundHandler) {
      call_user_func($this->notFoundHandler);
    } else {
      http_response_code(404);
      header('Content-Type: application/json');
      echo json_encode(['Menssage' => 'Endpoint não encontrado!']);
    }
  }
}
