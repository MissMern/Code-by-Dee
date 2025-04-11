<?php
//router.php
require 'controllers/add.php';
require 'controllers/edit.php'; 
require 'controllers/view.php';
require 'controllers/delete.php';

//define the routes
$routes = [
    '/' => 'view',
    '/add' => 'add',
    '/edit' => 'edit',
    '/delete' => 'delete',
];
//get the current path
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//check if the current path is in the routes array
if (array_key_exists($currentPath, $routes)) {
    //call the controller function
    $controller = $routes[$currentPath];
    if (function_exists($controller)) {
        $controller();
    } else {
        http_response_code(404);
        echo "Controller not found.";
    }
} else {
    http_response_code(404);
    echo "Page not found.";
}
?>
