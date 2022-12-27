<?php

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($x)
{
echo '<pre>';
var_dump($x);
echo '</pre>';
die;

}

?>