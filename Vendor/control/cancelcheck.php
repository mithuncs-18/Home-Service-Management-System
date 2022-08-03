<?php
include('../model/db.php');

$error="";
if(isset($_POST["cancel"]))
{
    if( empty($_POST['cid']))
    {
        $error="input is invalid";
        echo $error;
        echo "<br>";
    }
    else
    {
        $connection = new db();
        $conobj=$connection->Opencon();

        $userQuery=$connection->CancelUser($conobj,"custven",$_POST['cid']);

        if($userQuery==TRUE)
        {
            echo "Request Cancelled";
            echo "<br>";
        }
        else
        {
            echo "Could not cancel request";
        }
        $connection->CloseCon($conobj);
    }
}
?>