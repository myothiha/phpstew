<?php

namespace App\Core;


class Router
{

	public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller) {

        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {

        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file){

        $router = new static;

        require $file;

        return $router;
    }

    public function direct($uri, $requestType ){
        
    	if( ! array_key_exists($uri, $this->routes[$requestType])) {
            
            throw new Exception("Error No route has been decide for you");
    	}

        $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
    }

    public function callAction($controller, $action) {

        $controller = "App\\Controllers\\{$controller}";
        
        $controller = new $controller;

        if( ! method_exists($controller, $action)) {
            
            throw new Exception (
                "{$controller} does not respond to {$action} action"
            );
        }
        
        $controller->$action();
    }
    
}