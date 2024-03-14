<?php
session_start();
if(isset($_SESSION['user'])){
  $user = json_encode(['userData' => $_SESSION['user']],200);

  
  echo $user;

}else{
  echo "Not User  Login";
    header("Location:../Login-Sign page/registration.php");

}