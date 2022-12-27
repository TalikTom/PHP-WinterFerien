<?php


require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
    [
        '/bootstrap/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/calendar' => 'controllers/calendar.php',
        '/contact' => 'controllers/contact.php',
    ];

if (array_key_exists($uri, $routes))
{
    require $routes[$uri];
}

?>