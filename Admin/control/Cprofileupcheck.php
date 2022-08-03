<?php
include('../model/db.php');


 $error="";

if (isset($_POST['update'])) {
    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password']) || empty($_POST['address']) || empty($_POST['gender']) || empty($_POST['atime'])) {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();
/*
$profession ="";
if(isset($_POST["i1"]) )
{
    $profession =$profession."electrician";
}
if(isset($_POST["i2"]) )
{
    $profession =$profession.",cleaner";
}
if(isset($_POST["i3"]) )
{
    $profession =$profession.",other";
}
*/

$userQuery=$connection->CUpdateUser($conobj,"customer",$_SESSION["username"],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['phone'],$_POST['password'],$_POST['address'],$_POST['gender'],$_POST['atime']);
if($userQuery==TRUE)
{
    echo "update successful"; 
}
else
{
    echo "could not update";    
}
$connection->CloseCon($conobj);

}
}


?>