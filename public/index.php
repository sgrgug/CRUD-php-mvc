<?php

// require_once '../app/controllers/HomeController.php';

// // Include the UserController class
// require_once '../app/controllers/UserController.php';

// // Get the route from the URL, or use default if not provided
// $route = $_GET['route'] ?? 'user/index'; // Default route is 'user/index'

// // Split the route into controller and action
// list($controllerName, $actionName) = explode('/', $route);

// // Capitalize the controller name and add 'Controller' to it
// $controllerClassName = ucfirst($controllerName) . 'Controller';

// // Check if the controller class exists
// if (class_exists($controllerClassName)) {
//     // Create an instance of the controller class
//     $controller = new $controllerClassName();

//     // Check if the action method exists in the controller
//     if (method_exists($controller, $actionName)) {
//         // Call the action method on the controller
//         $controller->$actionName();
//     } else {
//         // Handle the case where the action method doesn't exist
//         echo "Action not found: $actionName";
//     }
// } else {
//     // Handle the case where the controller class doesn't exist
//     echo "Controller not found: $controllerClassName";
// }

// class Route {
//     public static function get()
//     {
//         // return 'd<br />';
//         return new self();
//     }

//     public static function more()
//     {
//         return 'more<br />';
//     }
// }

// $route = Route::get()->more();
// // $route = Route::get();
// echo $route;
// // echo $route->get();


// $route = $_GET['route'] ?? 'home/index';


// list($controllerName, $methodName) = explode('/', $route);

// // $methodName == NULL ? 'index' : $methodName;

// $controllerClassName = ucfirst($controllerName) . 'Controller';

// if(class_exists($controllerClassName)){

//     $controller = new $controllerClassName();

//     if(method_exists($controller, $methodName)){
//         $controller->$methodName();
//     }else{
//         echo "Method not found: $methodName";
//     }

// } else {
//     echo "Controller not found: $controllerClassName";
// }

// -------------------
require_once '../routes/web.php';

?>