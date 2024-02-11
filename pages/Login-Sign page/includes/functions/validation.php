<?php

include('../functions/functions.php');

// session_start();

$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo $email = $_POST['email_login'];
  echo $password = $_POST['password_login'];
  echo "<br>";
  $data = checkedLogin('email', 'users', $email);
  if ($data) {
    if ($data['Role'] == 'مواطن') {
      if ($data['email'] != $email) {
        $error['email_wrong'] = "Email or Password Wrong";
      } else {

        if ($data['password'] != md5($password)) {
          header('Location:../registration.php');
          $error['wrong_password'] = "Email or Password Wrong";
        } else {
          $_SESSION['user'] = [
            'userName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'idintityUser' => $idintityUser,
            'user_number' => $user_number,
            'Role' => $role,
          ];
          header('Location:../../../Users Page/users.php');
        }
      }
    }
  } else {


                // Check Login Layer We Should Send Sesson with data Thanks Hamada <3 ;
     $dataLawyer = checkedLogin('email', 'lawyer', $email);
  
if ($dataLawyer) {
    if ($dataLawyer['Role'] == 'مواطن') {
      if ($dataLawyer['email'] != $email) {
        $error['email_wrong'] = "Email or Password Wrong";
      } else {

        if ($dataLawyer['password'] != md5($password)) {
          header('Location:../registration.php');
          $error['wrong_password'] = "Email or Password Wrong";
        } else {
          $_SESSION['user'] = [
            'userName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'idintityUser' => $idintityUser,
            'user_number' => $user_number,
            'Role' => $role,
          ];
          header('Location:../../../Users Page/users.php');
        }
      }
    }
  }
    // header('Location:../../registration.php');
    // $error['wrong_password'] = "Email or Password Wrong";
  }




  
}