<?php
namespace router;

class Router implements IRouter{
    private $routes;
    private $method;
    
    public function __construct($method, $routes) {
        $this->routes = $routes;
        $this->method = $method;

    }
    public function getRoute(){
        
        //var_dump($this->routes);
       // var_dump($this->method);
        
        foreach($this->routes as $reg => $value) {
            
            if(preg_match($reg, implode($this->method))){
                //var_dump( $value);
                new \app\controllers\Controller($value);
                
            }
            
            
            
            
        } 
        
      
        
    }
    
}
