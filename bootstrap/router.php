<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
[
'/bootstrap/' => 'controllers/index.php',
'/bootstrap/about' => 'controllers/about.php',
'/bootstrap/calendar' => 'controllers/calendar.php',
'/bootstrap/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri, $routes))
{
require $routes[$uri];
} else {
http_response_code(404);

require 'views/404.php';

die();

}