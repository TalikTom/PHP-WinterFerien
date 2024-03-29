<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
    [
        '/customcss/' => 'controllers/index.php',
        '/customcss/about' => 'controllers/about.php',
        '/customcss/calendar' => 'controllers/calendar.php',
        '/customcss/contact' => 'controllers/contact.php',
        '/customcss/login' => 'controllers/login.php',
        '/customcss/protected' => 'controllers/protected.php',
        '/customcss/logout' => 'controllers/logout.php'

    ];

if (array_key_exists($uri, $routes)) 
{
    require $routes[$uri];

} else {
    http_response_code(404);

    require 'views/404.php';

    die();
}