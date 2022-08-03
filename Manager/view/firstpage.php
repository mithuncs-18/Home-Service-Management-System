<?php
include('../control/logincheck.php');

if(isset($_SESSION['username']))
{
    header("location: pageone.php");
}
?>

<?php include "../control/process.php"; ?>
<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" >
    <input type="password" name="password" placeholder="Enter your password" >
    <input name="submit" type="submit" value="LOGIN">
</form>

<br>

<a href="myform.php">please register</a>
<?php echo $error; ?>

</body>
</html>
