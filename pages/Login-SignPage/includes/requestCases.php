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
        $checkLawyer = selectData('*', 'cases', 'user_id',$user_id);
        if(!$checkLawyer){
            insertQuery('cases',$dataRequests);
             header('Location:../../LawyersPage/lawyerPage.php');
             $_SESSION['success'] = 'case Request Successfully';

        }
        else{
            header('Location:../../LawyersPage/lawyerPage.php');
            $_SESSION['faild'] = 'You Send Request from This User Befor';
        // redirectHome('You Send Request from This User Befor ', '', 5);
        }
        }


    }