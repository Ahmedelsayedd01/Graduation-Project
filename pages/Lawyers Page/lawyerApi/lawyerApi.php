<?php
session_start();
if(isset($_SESSION['lawyer'])){
  include('../../Login-Sign page/includes/functions/functions.php');
  $sql = $con->prepare( "SELECT * FROM posts LEFT JOIN users ON posts.user_id = users.id WHERE users.Role='user'");
  $sql->execute();
  $posts = $sql->fetchAll();

$query = $con->prepare( "SELECT lastName,email,idintity,lawyer_id,phoneNumber,cases.id,description as description_post FROM cases
    JOIN users 
    ON user_id = users.id
    JOIN 
    posts ON cases.post_id = posts.id
WHERE
users.Role='user'");
$query->execute();
$cases = $query->fetchAll();

    // $query = $con->prepare( "SELECT users.userName ,users.Role ,users.phoneNumber,users.email,posts.id FROM cases,posts
    // INNER JOIN users ON cases.user_id = users.id 
    // INNER JOIN posts ON posts.user_id = users.id 
    // ");
    // $query->execute();
    // $cases = $query->fetchAll();
  // print_r($cases);
  //   for ($i=0; $i <count($cases) ; $i++) {
  //   echo  $cases[$i];

  //   $array = [
  //     'userName' => $cases[$i]['userName'],
  //   ];
  //   }
  $lawyers_id = $_SESSION['lawyer']['id']; // Take The Id In Session
  $lawyers= selectAllData('*','lawyer'); //Select Data Where id = lawyers_id
  $lawyers = json_encode(
    [
      'lawyersData' => $_SESSION['lawyer'], // This Daata Where lawyers Login
      'posts'=>$posts,                 // This is Data Posts From lawyers
      'lawyers'=>$lawyers, // This is Data Posts From lawyers
      'cases'=>$cases, // This is Data Posts From lawyers
    ],
    200); // Data Send Successflly 
  echo $lawyers;

}
if(!isset($_SESSION['lawyer'])){
  $lawyers = json_encode(['faild' => 'You Not Authanticated'],401);

  
  echo $lawyers;

}