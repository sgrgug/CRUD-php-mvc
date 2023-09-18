<?php 

class Route {
    
    public static function get($routes)
    {  
        if(array_key_exists($_GET['route'], $routes)){
            
            list($controller, $method) = explode('@', $routes[$_GET['route']]);

            if(class_exists($controller)){
                $controller = new $controller();
            
                if(method_exists($controller, $method)){
                    $controller->$method();
                }else{
                    echo "Method not found: $method";
                }
            
            } else {
                echo "Controller not found: $controller";
            }

        } else {
            include_once '../resources/errors/404.php';
        }

    }
    
}