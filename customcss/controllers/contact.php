<?php

$sql = "Select * from post";

$statement = $pdo->query($sql);

$post = $statement->fetch();



require 'views/contact.view.php';