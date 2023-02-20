<?php

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function dd($x)
{
    echo '<pre>';
    var_dump($x);
    echo '</pre>';
    die;
}

function pdo (PDO $pdo, string $sql, array $arguments = null) {
    if (!$arguments) {
        return $pdo->query($sql);
    }

    $statement = $pdo->prepare($sql);
    $statement->execute($arguments);
    return $statement;
}

$year = date('Y');