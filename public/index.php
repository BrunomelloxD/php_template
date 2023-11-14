<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/routes/router.php';

try {
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($router[$request])) {
        throw new Exception('Route not found');
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception('Route not found');
    }

    $controller = $router[$request][$uri];
    $controller();
} catch (Exception $e) {
    throw $e; // Use "throw" para lançar a exceção corretamente
}