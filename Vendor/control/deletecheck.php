<?php
include('../model/db.php');



//session_start();

if(isset($_POST['delete']))
{
    
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->DeleteUser($conobj,"vendor",$_POST["fullname"]);
    
   
}
?>