<?php

namespace Core;

use Illuminate\Support\Str;

class Router
{
    protected $prefix='App\\Controller\\';
    protected $routes=[
        'GET'=>[],
        'POST'=>[]
        ];

    public static function load($file){
        $router=new static();
        require $file;
        return $router;
    }

    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$this->prefix.$controller;
    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri]=$this->prefix.$controller;
    }
    public function direct($uri,$requestType)
    {
        if (isset($this->routes[$requestType][$uri])) {
            $conn = explode('@', $this->routes[$requestType][$uri]);
            if (array_key_exists($uri, $this->routes[$requestType])) {
                return $this->callAction(
                    (string)$conn[0], (string)$conn[1]
                );

            } else {
                throw new \Exception('Method Not Found For this Url');
            }
        }else{
            throw new \Exception('No Route For this Url');
        }

    }

    protected function callAction($controller,$action){
        $controller= new $controller;
        if (! method_exists($controller, $action)){
            throw new Exception("{$controller} does not has method {$action}");
        }
        return $controller->$action();
    }
}