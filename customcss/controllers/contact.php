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

$post = $statement->fetch();



require 'views/contact.view.php';