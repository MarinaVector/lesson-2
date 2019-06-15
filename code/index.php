<?php

require 'vendor/autoload.php';

// import the AppBuilder class
/**
AppBuilder::build();

 **/


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    //$r->addRoute('GET', '/', '/views/home/index');
    $r->addRoute('GET', '/', '/');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo "<h3>404-page not found!</h3>";
        //break;
        die;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo "<h3>405 Method Not Allowed</h3>";
        //break;
        die;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
    // ... call $handler with $vars
    //break;
}

include 'views/home/index.php';


//$ r-> addRoute ('POST', '/ test', 'handler');