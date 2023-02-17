<?php

session_start();

$login = $_SESSION['login'] ?? false;

$email = 'test@gmail.com';
$password = 'root';

function login()
{
    session_regenerate_id(true);
    $_SESSION['login'] = true;

}

function logout()
{
    $_SESSION = [];

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    session_destroy();
}

function require_login($login)
{
    if ($login == false) {
        header('Location: /customcss/login');
        exit;
    }
}