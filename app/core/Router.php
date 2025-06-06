<?php
namespace App\core;

class Router {
    protected $routes = [];

    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        
        $callback = $this->routes[$method][$path] ?? false;
        
        if ($callback === false) {
            http_response_code(404);
            echo "404 Not Found";
            exit;
        }
        
        if (is_array($callback)) {
            $controller = new $callback[0]();
            $method = $callback[1];
            $callback = [$controller, $method];
        }
        
        call_user_func($callback);
    }
}