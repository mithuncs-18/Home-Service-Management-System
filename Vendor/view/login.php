<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
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
<div class="login">
<h2>Login</h2><br><br>

<form action="" onsubmit="return validateForm()" method="post">
    <p>Email</p>
    <input type="text" name="username" id="username" placeholder="Enter your username" > <p id="errorusername" ></p> <br>
    <p>Password</p>
    <input type="password" name="password" id="password" placeholder="Enter your password" > <p id="errorpassword" ></p> <br><br>
    <input name="submit" type="submit" value="LOGIN">

</form>

<br>

<a href="myform.php">Please Register</a><br>
<a href="../../index.php">GO TO DASHBOARD</a>
<?php echo $error; ?>
</div>
</body>
</html>