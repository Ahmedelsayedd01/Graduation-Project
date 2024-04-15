<?php



    if(isset($_GET['requestNewCase'] ,$_GET['post_id'] ,$_GET['lawyers_id'] )){
    session_start();
    include 'functions/functions.php';
    $post_id = $_GET['post_id'];
    $lawyer_id = $_GET['lawyers_id'];
   $user_id = $_GET['user_id'];

    $dataRequests = [
   'user_id'=>$user_id,
   'lawyer_id'=>$lawyer_id,
   'post_id'=>$post_id,
   ];
   if(!empty($dataRequests)){
        $checkLawyer = selectData('*', 'users', 'id',$lawyer_id);
        if($checkLawyer){
            if($checkLawyer[0]['Role'] == 'lawyer'){
            insertQuery('cases',$dataRequests);
             header('Location:../../Lawyers Page/lawyerPage.php');
             $_SESSION['success'] = 'case Request Successfully';

            }else{
            redirectHome('this is Not Lawyer', '', 5);
            }
        }
        }


    }