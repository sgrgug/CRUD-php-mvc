<?php 

class Route {
    
    public static function get($routes)
    {   
        foreach ($routes as $url => $class) {
            list($controller, $method) = explode('@', $class);
            // echo "URL: $url, Class: $controller, Method: $method<br>";

            if($url == $_GET['route']){
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
                break;
            } else {
                include_once '../resources/errors/404.php';
                break;
            }
        }
    }
    
}