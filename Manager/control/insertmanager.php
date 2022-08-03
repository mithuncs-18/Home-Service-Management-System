<?php
include('../model/db.php');
$error="";

if(isset($_POST['submit']))
{
    echo "1234";
    if (empty($_POST['mname']) || empty($_POST['email']) || empty($_POST['pho']) || empty($_POST['password']) || empty($_POST['dob']) || empty($_POST['add']) || empty($_POST['gender']))
    {
        $error = "Input given invalid";
    }

    else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        //$tt="elec";
        $userQuery=$connection->Addmanager($conobj,"manager",$_POST['mname'],$_POST['email'],$_POST['pho'],$_POST['password'],$_POST['dob'],$_POST['add'],$_POST['gender']);
        if($userQuery==TRUE){
           // $userQuery=$connection->Addmanager($conobj,"table",$_POST['mname'],$_POST['email'],$_POST["password"],$_POST['pho'],$_POST['Dob'],$_POST["add"],$_POST["gender"]);
           echo "data uploaded";
        }
         else
         {
             echo"sorry not uploaded".$conobj->error;
         }
        
         
         
         $connection->CloseCon($conobj);
    }
}

?>