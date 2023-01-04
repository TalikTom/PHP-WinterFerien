<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
    [
    '/foundation/' => 'controllers/index.php',
    '/foundation/about' => 'controllers/about.php',
    '/foundation/calendar' => 'controllers/calendar.php',
    '/foundation/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);

    require 'views/404.php';

    die();
}