<?php
session_start();
if(isset($_SESSION['lawyer'])){
  include('../../Login-Sign page/includes/functions/functions.php');
  $sql = $con->prepare( "SELECT * FROM posts LEFT JOIN users ON posts.user_id = users.id WHERE users.Role='user'");
  $sql->execute();
  $posts = $sql->fetchAll();
  $lawyers_id = $_SESSION['lawyer']['id']; // Take The Id In Session
  $lawyers= selectAllData('*','lawyer'); //Select Data Where id = lawyers_id
  $lawyers = json_encode(
    [
      'lawyersData' => $_SESSION['lawyer'], // This Daata Where lawyers Login
      'posts'=>$posts,                 // This is Data Posts From lawyers
      'lawyers'=>$lawyers, // This is Data Posts From lawyers
      'data'=>$posts, // This is Data Posts From lawyers
    ],
    200); // Data Send Successflly 

  
  echo $lawyers;

}
if(!isset($_SESSION['lawyer'])){
  $lawyers = json_encode(['faild' => 'You Not Authanticated'],401);

  
  echo $lawyers;

}