<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<?php include "../control/process.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script src="../js/loginvalidation.js"></script>
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
  <h1>Login Page</h1>


</div>
</div>



<br><br><br>

<form action=""  onsubmit="return validateForm()" method="post">
    <input type="text" name="username" id="username" placeholder="Enter your email" > <p id="errorusername" ></p>
    <input type="password" name="password" id="password" placeholder="Enter your password" >  <p id="errorpassword" ></p> 
    <input name="submit" type="submit" value="LOGIN">
</form>

<br>

<a href="myform.php">Sign up</a> <?php echo $error; ?><br><br>


</div>
</body>
</html>