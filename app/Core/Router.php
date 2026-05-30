<?php
namespace App\Core;

class Router {
    private $routes = [];
    
    public function add($url, $handler) {
        $this->routes[$url] = $handler;
    }
    
    public function dispatch($url) {
        $url = trim($url, '/');
        
        if (array_key_exists($url, $this->routes)) {
            $handler = $this->routes[$url];
            $parts = explode('@', $handler);
            $controllerName = "App\\Controllers\\" . $parts[0];
            $method = $parts[1];
            
            $controller = new $controllerName();
            $controller->$method();
        } else {
            http_response_code(404);
            echo "404";
        }
    }
}