<?php

if(isset($_POST['title'])){

    $statement = $pdo->prepare('
  
  insert into 
post(title,body,author_id) 
values (:title,:body,:author_id);
  
  ');

    $statement->execute($_POST);

}

$sql = "Select * from post";

$statement = $pdo->query($sql);

$post = $statement->fetchAll();

$id = 1;

$sql2 = "SELECT title FROM post WHERE author_id = :id;";
$statement2 = $pdo->prepare($sql2);
$statement2->execute(['id' => $id]);
$post2 = $statement2->fetch();


$sql4 = "Select * from author where author_id = :id";

$author = pdo($pdo, $sql4, ['id' => $id])->fetch();



require 'views/contact.view.php';