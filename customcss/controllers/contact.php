<?php

if(isset($_POST['title'])){

    $statement = $pdo->prepare('
  
  insert into 
post(title,body,author_id) 
values (:title,:body,:author_id);
  
  ');

    $statement->execute($_POST);

}

$sql = "Select title from post where author_id = 1;";

$statement = $pdo->query($sql);

$post = $statement->fetchAll();

$id = 1;

$sql2 = "SELECT title FROM post WHERE author_id = :id;";
$statement2 = $pdo->prepare($sql2);
$statement2->execute(['id' => $id]);
$post2 = $statement2->fetch();



require 'views/contact.view.php';