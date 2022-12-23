<?php

$heading = 'Calendar';

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}


require "views/calendar.view.php";