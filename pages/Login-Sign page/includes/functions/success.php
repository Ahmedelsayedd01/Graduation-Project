<?php
@session_start();
if (isset( $_SESSION['success'])) {
$message = $_SESSION['success'];
unset($_SESSION['success']);
  echo "
<div class='alert alert-success' role='alert'>
    $message
</div>
";
}
if (isset( $_SESSION['faild'])) {
$message = $_SESSION['faild'];
unset($_SESSION['faild']);
  echo "
<div class='alert alert-danger' role='alert'>
    $message
</div>
";
}