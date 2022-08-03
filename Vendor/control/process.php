<?php
$validatename="";
$validateemail="";
$validatepho="";
$validateadd="";
$validateradio="";
$validatecheckbox="";
$v1=$v2=$v3="";
$validatepassword="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{

if(empty($_REQUEST["mname"]) || (strlen($_REQUEST["mname"])<3))
{
    $validatename= "you must enter name";

}

if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
 {
        $validateemail = "You must enter email";
}

if(empty($_REQUEST["password"]))
{
    $validatepassword= "please enter vaild password";
}


if(empty($_REQUEST["pho"]))
{
    $validatepho= "please enter phone number";
}

if(empty($_REQUEST["add"]))
{
    $validateadd= "please enter text";
}


if(!isset($_REQUEST["gender"]))
{

     $validateradio= "please select at least one radio";
}
if(!isset($_POST["electrician"])&&!isset($_POST["cleaner"])&&!isset($_POST["other"]))
{
    $validatecheckbox = "please select at least one service";
    
}
else{
   if(isset($_POST["electrician"]))
   {
       $v1=$_POST["electrician"];
   }
   if(isset($_POST["cleaner"]))
   { 
       $v2=$_POST["cleaner"];
   }
   if(isset($_POST["other"]))
   {
    $v3=$_POST["other"];
   }
}
}
?>