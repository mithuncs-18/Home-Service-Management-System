<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>

<?php
$cookie_name="user";
$cookie_value ="ttt";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
    echo"Cookie named'".$cookie_name."' is not set!";
}
else
{
    echo"Cookie'" .$cookie_name. "' is set!<br>";
    //echo"Value is:" .$cookie_value;

}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/pageone.css">
</head>
<body>
<div class="home">
<h1>Welcome to Vendor home page</h1>
<br>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="profileup.php">Profile</a>
  <a href="Showrequest.php">Show Work Request</a>
  <a href="#">About US</a>
  <a href="#">Contact</a>

</div>
</div>
<div class="header">
<h7>Do you want to see Vendor work Information<a href="Showdata.php">Click</a></h7>
<br><br>
<h8>Do you want to  search Vendor work Information<a href="searchuser.php">Click</a></h8>
<br><br>
<h9>Do you want to work confirm<a href="confirm.php">Click</a></h9>
<br><br>
<h10>Do you want to work cancel<a href="cancel.php">Click</a></h10>
<br><br>
<h11>Do you want to delete<a href="delete.php">Click</a></h11>
<br><br>
 <h5><a href="../control/logout.php">logout</a></h5>
 </div>
</div>
</body>
</html>
