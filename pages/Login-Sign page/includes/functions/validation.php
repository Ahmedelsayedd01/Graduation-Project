<?php

include('../functions/functions.php');

session_start();

$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $email = $_POST['email_login'];
   $password = $_POST['password_login'];
   "<br>";
  $data = checkedLogin('*', 'users', $email,'email');
  $data['Role'];
  if ($data) {
   
    if ($data['Role'] == 'user') {
            // Validate Email and Password With User
            if ($data['email'] != $email) {
              $error['email_wrong'] = "Email or Password Wrong";
              
            }elseif($data['password'] != md5($password)){
              $error['password_wrong'] = "Email or Password Wrong";
              
            }
            // Validate Email and Password With User
                // Start Session With User
              
      $_SESSION['user'] = [
        'id' => $data['id'],
        'userName' => $data['userName'],
        'lastName' => $data['lastName'],
        'email' => $data['email'],
        'idintityUser' => $data['idintity'],
        'user_number' => $data['phoneNumber'],
        'Role' => $data['Role'],
      ];
                
                   header('Location:../../../Users Page/userPage.php');
                  // Start Session With User
              
            }
    if ($data['Role'] == 'lawyer') {

            // Validate Email and Password With User
            if ($data['email'] != $email) {
              $error['email_wrong'] = "Email or Password Wrong";
              
            }elseif($data['password'] != md5($password)){
              $error['password_wrong'] = "Email or Password Wrong";
              
            }
            // Validate Email and Password With User
                // Start Session With User              
                  $_SESSION['lawyer'] = [
                    'id' => $data['id'],
                    'userName' => $data['userName'],
                    'lastName' => $data['lastName'],
                    'email' => $data['email'],
                    'idintityUser' => $data['idintity'],
                    'user_number' => $data['phoneNumber'],
                    'Role' => $data['Role'],
                    'type' => $data['type'],
                  ];

                   header('Location:../../../Lawyers Page/lawyers.php');
      $dataJson = json_encode(['dataJson'=>$data]);
                     return $dataJson;
                  // Start Session With User
              
            }
  } 



    
  
}

// ziadm57@yahoo.com