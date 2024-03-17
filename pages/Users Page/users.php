<?php
session_start();
if(isset($_SESSION['user'])){
  $user = json_encode(['userData' => $_SESSION['user']],200);


 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawyer Case</title>
  <link rel="stylesheet" href="users-style.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
  <h1>Welcome To User</h1>
  <div class="container" id='data'></div>
  <div class="container" id='data'></div>
  <div class="container" id='data'></div>
  <div class="container" id='data'></div>
  <a href="../../loguot.php">loguot</a>


  <script>
    let myRequest = new XMLHttpRequest();
    myRequest.onreadystatechange = function () {
      if (this.readyState === 4 && this.status === 200) {
        // console.log(this.responseText);
        // console.log(this.readyState);
        // console. (this.status);
        let data = JSON.parse(this.responseText);
        //console.log(data);
        div = document.getElementById('data');

        dataText = document.createTextNode("welcome " + data.userData.email);
        div.appendChild(dataText)
      }
    };
    myRequest.open('Get', 'data.php', 'true');
    myRequest.send();
  </script>
</body>

</html>
<?php 
}else{
  echo "Not User  Login";

    header("Location:../Login-Sign page/registration.php");
}
?>