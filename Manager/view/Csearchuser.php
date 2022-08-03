<?php
include "..\control\Csearchvalidation.php";
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/showdata.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "yellow");
  });
  $("input").blur(function(){
    $(this).css("background-color", "white");
  });
});
</script>
</head>
<body>
<div class="sticky">
<div class="topnav">
    
<h2> Customer  information </h2>
</div>
</div>


<form action='' method='post'>

Enter Customer Name: 

<input type='text' name="lastname"><?php echo $error; ?><br><br>
<input type='submit' name="search" value="Search Info">

<h3><a href="pageone.php">Back</a></h3>
</form>
</div>
</body>
</html>