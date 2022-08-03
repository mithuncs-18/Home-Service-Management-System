<?php
include('../model/db.php');

$error="";
if(isset($_POST["confirm"]))
{
    if(empty($_POST['cid'])  || empty($_POST['Name']))
    {
        $error="input is invalid";
        echo $error;
        echo "<br>";
    }
    else
    {
        $connection = new db();
        $conobj=$connection->Opencon();

        $userQuery=$connection->ConfirmPay($conobj,"custpay",$_POST['cid']);

        if($userQuery==TRUE)
        {
            echo "Request Confirmed";
            echo "<br>";
        }
        else
        {
            echo "Could not confirm request";
        }
        $connection->CloseCon($conobj);
    }
}
?>