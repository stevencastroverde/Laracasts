<?php

class Router {
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){

        $router = new static;

        require $file;

        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType){

       if(array_key_exists($uri, $this->routes[$requestType])) {

           return $this->callController(
           ...explode('@', $this->routes[$requestType][$uri])
       );

       } else {
           throw new Exception('No Route Defined');
       }
    }

    protected function callController($controller, $action) {

        if(! method_exists($controller, $action)) {
            throw new Exception('{$controller} does not have {$action}');
        }

        return (new $controller)->$action();

    }
}