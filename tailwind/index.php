<?php

require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =
    [
        '/tailwind/' => 'controllers/index.php',
        '/tailwind/about' => 'controllers/about.php',
        '/tailwind/calendar' => 'controllers/calendar.php',
        '/tailwind/contact' => 'controllers/contact.php',
    ];

if (array_key_exists($uri, $routes)) 
{
    require $routes[$uri];
}

dd($uri);

$heading = 'Home';