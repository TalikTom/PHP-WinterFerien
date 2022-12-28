<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
    [
        '/materialize/' => 'controllers/index.php',
        '/materialize/about' => 'controllers/about.php',
        '/materialize/calendar' => 'controllers/calendar.php',
        '/materialize/contact' => 'controllers/contact.php',
    ];

if (array_key_exists($uri, $routes)) 
{
    require $routes[$uri];
} else {
    http_response_code(404);

    require 'views/404.php';

    die();
}

?>