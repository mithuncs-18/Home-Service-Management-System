<?php
include('../control/logincheck.php');

if(isset($_SESSION['username']) )
{
    header("location: afterlog.php");
}
?>

<?php include "../control/action.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script src="js/loginvalidation.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "Cyan");
  });
  $("input").blur(function(){
    $(this).css("background-color", "white");
  });
});
</script>
</head>
<body>
<div class="login">
<h2>Login</h2><hr>
<table>

<form action="" method="post">
<tr>
    <td for="user name">User Name:</td>
  <td>
  <input type="text" name="username"  placeholder="Enter your username"></td>
  </tr>
 

  <tr>
      <td for="pass">password:</td>
  <td>
  <input type="password"  name="password" placeholder="Enter your password"></td>
  </tr>
  <tr>
  </tr>
  <tr>
  <br>
<td>
  <input type="submit" name="submit" value="LOGIN">
  <input type="reset" name="submit" value="RESET">
</td>
</tr>

</form>

</table>
<a href="../../index.php">Go to Home Page</a>
<br>
<?php echo $error; ?>  <?php echo $error1; ?>

</div>
</body>
</html>










