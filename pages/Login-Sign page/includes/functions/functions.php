<?php
include('conf.php');
// This Page About All Functions I use it In any Page Globaly

/**
 *  Title Function V1.0
 * Title Functions That Echo The Page Title In Case The Page 
 * Has Thr Variable $pageTitle And Echo Defulte Title Oter Pages
 * 
 * 
 */

function getTitle()
{    // This Function Cause Do Title Daynamic
    global $pageTitle;
    if (isset($pageTitle)) {
        echo $pageTitle;
    } else {
        echo 'Defulte';
    }
}
;








/*
 -  Function Select Feild From DataBase Wher Any Feild Where Feild = Value == 
 - $Feild Selector any Feild For Example userName
 - $From = This Any Database Selected 
 - $value = Compain The Feild With The Value For Example Post Data Request
 Version = 1.0 
*/

function checkedData($select, $from, $value)
{
    global $con;
    $statement = $con->prepare("SELECT $select FROM $from WHERE $select =?");
    $statement->execute(array($value));
    $count = $statement->rowCount();
    return  $count;

}
function checkedLogin($select, $from, $value, $email)
{
    global $con;
    $statement = $con->prepare("SELECT $select FROM $from WHERE $email =?");
    $statement->execute(array($value));
    $data = $statement->fetch();
    // $count=$statement->rowCount();
    return $data;

}

function selectData($select, $from, $check, $value)
{
    global $con;
    $statement = $con->prepare("SELECT $select FROM $from WHERE $check =?");
    $statement->execute(array($value));
    $data = $statement->fetchAll();
    return  $data;
}
function selectAllData($select, $from)
{
    global $con;
    $statement = $con->prepare("SELECT $select FROM $from ");
    $statement->execute();
    $data = $statement->fetchAll();
    return  $data;
}



function stringCheck($nameCheck)
{           
    return htmlspecialchars(strip_tags(trim($nameCheck)));
}


// Select Data Where Exepssion
function insertQuery($table, $data) 
{
    global $con;

    $key = implode(',', array_keys($data));
    $value = "'" . implode("','", array_values($data)) . "'";

    $sqlQuery = $con->prepare("INSERT INTO $table ($key) VALUES ($value)");
    $sqlQuery->execute();
    $count = $sqlQuery->rowCount();
    return $count;
}
// Select Data Where Exepssion



//  Function Redirect If user Have Error in any Thing
function redirectHome($theErrorMsg, $url = null, $seconds = 3)
{
    if ($url === null) {
        $url = 'index.php';
    } else {
        if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {
            $url = $_SERVER['HTTP_REFERER'];
        } else {
            $url = 'index.php';
        }
    }
    echo $theErrorMsg;

    echo "<div class='alert alert-info'>" . "You Will Be Redirected To Home Page After[ $seconds
                                                ]Seconds" . '</div>';
    header("refresh:$seconds;url=$url");

    exit();
}
;


        function deleteRecord($table,$column,$value){
        global $con;
            $sql = "DELETE FROM $table WHERE $column = $value";
            $con->exec($sql);
            return "Post Delete Successfully";
        }
//  Function Redirect If user Have Error in any Thing