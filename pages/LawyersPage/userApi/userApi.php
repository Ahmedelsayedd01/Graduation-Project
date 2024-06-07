<?php
@session_start();
if(isset($_SESSION['user'])){
  include('../../Login-SignPage/includes/functions/functions.php');
  $user_id = $_SESSION['user']['id']; // Take The Id In Session
  $posts= selectData('*','posts','user_id',$user_id); //Select Data Where id = user_id
  $user = json_encode(
    [
      'userData' => $_SESSION['user'],  // This Daata Where user Login
      'posts'=>$posts,                 // This is Data Posts From User
    ],
    200); // Data Send Successflly 

  
  echo $user;

}
if(!isset($_SESSION['user'])){
  $user = json_encode(['faild' => 'You Not Authanticated'],419);

  
  echo $user;

}