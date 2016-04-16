<?php

require_once 'vendor/autoload.php';

$db = new PDO('sqlite:dd.sqlite');

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/profile/{name}', 'profile_handler');
    $r->addRoute('GET', '/getPerformers', 'ajax_performers_handler');
    $r->addRoute('POST', '/perform', 'form_handler');
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
    $el;
    foreach($result AS $row) {
        $el = $row;
    }

    include 'performer.php';

}

function ajax_performers_handler($args, $db) {
    $result = $db->query("SELECT * FROM performers");
    $json = [];
    foreach($result AS $row) {
        $json[] = [
            'nick' => $row['profileNameTEXT'],
            'Name' => $row['name'],
            'Category' => $row['categories'],
            'Tags' => $row['tags'],
            'Popularity' => $row['points']
        ];
    }

    echo json_encode($json); 
}

function form_handler($args, $db) {
        
}
