<?php
include('../model/db.php');


if(isset($_POST['submit']))
{
    
    if (empty($_POST['mname']) || empty($_POST['email']) || empty($_POST['pho']) || empty($_POST['password']) || empty($_POST['add']) || empty($_POST['gender']))
    {
        $error = "Input given invalid";
    }

    else
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        
        $userQuery=$connection->Addvendor($conobj,"vendor",$_POST['mname'],$_POST['email'],$_POST['pho'],$_POST['password'],$_POST['add'],$_POST['gender']);
        if($userQuery==TRUE){
           
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