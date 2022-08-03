<?php
include('../model/db.php');

$error="";
if(isset($_POST["cancel"]))
{
    if(empty($_POST['cid']) || empty($_POST['Name']))
    {
        $error="input is invalid";
        echo $error;
        echo "<br>";
    }
    else
    {
        $connection = new db();
        $conobj=$connection->Opencon();

        $userQuery=$connection->CancelPay($conobj,"custpay",$_POST['cid']);

        if($userQuery==TRUE)
        {
            echo "Payment Cancelled!!!";
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