<?php
session_start();
if(isset($_SESSION['lawyer'])){
    $dataJson =  json_encode($_SESSION['lawyer']); // Your Data Json

    echo $dataJson;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawyer Case</title>
  <link rel="stylesheet" href="users-style.css" />
</head>

<body>
  <h1>Welcome To Lawyer</h1>
  <?php
      if(isset($_SESSION['lawyer'])){
          $fullName=    $_SESSION['lawyer']['userName'] . ' ' . $_SESSION['lawyer']['lastName'];
            echo "<br>";
         $email = $_SESSION['lawyer']['email'];
            "<br>";
             $idintityUser= $_SESSION['lawyer']['idintityUser'];
            "<br>";
           $userNumber = $_SESSION['lawyer']['user_number'];
            "<br>";
           $userRole =  $_SESSION['lawyer']['Role'];
            "<br>";
          $type =  "Your Category :". $_SESSION['lawyer']['type'];
?>
  <a href="../../loguot.php">loguot</a>

  <h1>
    <?php echo $fullName?>
    <br>
    <?php echo $email?>
    <br>
    <?php echo $userNumber?>
    <br>
    <?php echo $userRole ?>
    <br>
    <?php echo $idintityUser?>
    <br>
    <?php echo $type ?>
    <br>

  </h1>
  <?php
      }
      ?>


</body>

</html>
<?php 
}else{ // This Else IF Any One Don't Login Redirect Login
    header("Location:../Login-Sign page/registration.php");
}
?>