<?php
include('../functions/functions.php');


session_start();

//  ['type-case'];

// $data = json_decode($_REQUEST['data']);
// print_r( $data);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     

     //     if (!is_integer($nameCase)) {
     //          $error['numCase'] = '<h1>'. 'This Is Not Number'.'</h1>';
     //         redirectHome('This is Not Number Pls Try Again....','back', 5);
     //     
//   echo $typeCase = $_REQUEST['case_Token'];
   $typeCase = stringCheck($_POST['case_Type']);
   $locationCase = stringCheck($_POST['case_Location']);
   $dateCase = stringCheck($_POST['case_Date']);
   $timeCase = stringCheck($_POST['case_Hour']);
  $descriptionCase = stringCheck($_POST['case_Description']);
  $numberCase = stringCheck($_POST['case_Num']);

     // Start Validate Image File 
     $file = $_FILES['case_Image'];
     $f_name = $file['name'];
     $f_type = $file['type'];
     $f_tmp_name = $file['tmp_name'];
     $f_error = $file['error'];
     $f_size = $file['size'];
     if ($f_name != '') {
          $ext = pathinfo($f_name); // Start Take Extension Image 
          // print_r($ext); Test
          // Start Get Orginal Name About image 
          $original_name = $ext['filename'];
          $original_ext = $ext['extension'];
          $allowed = array("png", "jpg", "jpeg", "gif");
          if (in_array($original_ext, $allowed)) {
               if ($f_error === 0) { // If This image Don;t Have any error 
                    if ($f_size < 50000) {
                         $new_name = uniqid('', true) . "." . $original_ext;
                         $destnation = "../../../Users Page/asstesUser/userImage/" . $new_name;
                         move_uploaded_file($f_tmp_name, $destnation);
                         $new_name; // This Is New Name Validate Image
                    } else {
                         $error = 'your File Is to Big ';
                    }
               } else {
                    $error = 'your Have an Error ';
               }
          } else { // if The Image Don't Have Anything In This Array ('png , jpg , jpeg , gif') 
               $error = 'your File  Not Allowed ';
          }
     } else { // If The Name of Image Is Empty 
          $error = 'please Choose Image';
     }
     // Start Validate Image File 
     // Start Validate Image File 
     
     $file = $_FILES['case_Fill'];
     $f_name = $file['name'];
     $f_type = $file['type'];
     $f_tmp_name = $file['tmp_name'];
     $f_error = $file['error'];
     $f_size = $file['size'];
     if ($f_name != '') {
          $ext = pathinfo($f_name); // Start Take Extension Image 
          // print_r($ext); Test
          // Start Get Orginal Name About image 
          $original_name = $ext['filename'];
          $original_ext = $ext['extension'];
          $allowed = array("pdf", "pdf");
          if (in_array($original_ext, $allowed)) {
               if ($f_error === 0) { // If This image Don;t Have any error 
                    if ($f_size < 500000) {
                         $file_new_name = uniqid('', true) . "." . $original_ext;
                         $destnation = "../../../Users Page/asstesUser/userFileCase/" . $file_new_name;
                         move_uploaded_file($f_tmp_name, $destnation);
                         $file_new_name; // This Is New Name Validate File Pdf Cases
                    } else {
                         $error = 'your File Is to Big ';
                    }
               } else {
                    $error = 'your Have an Error ';
               }
          } else { // if The Image Don't Have Anything In This Array ('png , jpg , jpeg , gif') 
               $error = 'your File  Not Allowed ';
          }
     } else { // If The Name of Image Is Empty 
          $error = 'please Choose Image';
     }
     // Start Validate Image File 

     $user_id =  $_SESSION['user']['id'];
       $dataInsert = [
       'user_id' => $user_id,
       'typeCase' => $typeCase,
       'description' => $descriptionCase,
       'Date' => $dateCase,
       'numberCase' => $numberCase,
       'location' => $locationCase,
       'houerCase' => $timeCase,
       'fileCase' => $file_new_name,
       'ImageCase' => $new_name,
       'status' => '0',
       ];
     // print_r($dataInsert);
     $checkData = checkedData('numberCase', 'posts', $numberCase);
     if ($checkData > 0) {
          header('Location:../../../Users Page/userPage.php');
          $_SESSION['faild'] = 'The Number Case Is Exists';

     } else {
          $insertNewPost = insertQuery('posts', $dataInsert);
          // if ($insertNewPost == true) {
          //      $successMesg =  "<div class='alert alert-danger'>" . "Data Inserted Successfully" . '</div>';
          // }
          header('Location:../../../Users Page/userPage.php');
          $_SESSION['success'] =  'post Insert Successfuly';
     }
}