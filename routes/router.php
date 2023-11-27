<?php
function load(string $controller, string $action, array $params = [])
{
    try {
        // Validate controller
        $controllerNameSpace = "app\\controllers\\" . $controller;

        if (!class_exists($controllerNameSpace)) {
            http_response_code(404);
            throw new Exception('Controller ' . $controller . ' not found');
        }

        $controllerInstance = new $controllerNameSpace();

        if (!method_exists($controllerInstance, $action)) {
            http_response_code(404);
            throw new Exception('Method ' . $action . ' not found on controller ' . $controller);
        }

        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        http_response_code(500);
        echo $e->getMessage();
    }
}

$router = [
    'GET' => [
        '/hello-world' => fn () => load('HelloWorldController', 'get'),
    ],
    'POST' => [
        '/contact' => fn () => load('ContactController', 'store'),
    ]
];