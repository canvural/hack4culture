<?php

require_once 'vendor/autoload.php';

$db = new PDO('sqlite:dd.sqlite');

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/profile/{name}', 'profile_handler');
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
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = [$routeInfo[2], $db];
        call_user_func_array($handler, $vars);
        break;
}

function profile_handler($url, $pdo) {
    $profileName = $url['name'];
    
    $result = $pdo->query("SELECT * FROM performers WHERE profileNameTEXT = \"" . $profileName . "\"");
    foreach($result AS $row) {
        echo $row['name'] . "<br>";
        echo $row['bio'];
    }
}
