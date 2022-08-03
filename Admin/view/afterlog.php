<?php
session_start(); 

if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../view/login.php"); // Redirecting To Home Page
}

?>


<?php
$cookie_name="user";
$cookie_value ="customer";
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
    

}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/afterlog.css">
</head>
<body>
<div class="afterlog">
<h1>WELCOME!<br></h1>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="Vendor.php">Vendor Information</a>
  <a href="Customer.php">Customer Information</a>
  <a href="Manager.php">Manager Information</a>

</div>
</div>
<div class="log">
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>
</div>
</div>
</body>
</html>










