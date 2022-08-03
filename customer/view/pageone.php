<?php
session_start(); 
if(empty($_SESSION["username"])) 
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
    echo"Value is:" .$cookie_value;

}
?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/pageone.css">
</head>

<body>

<div class="sticky">
<div class="topnav">
  <h1>Customer Home Page</h1>


</div>
</div>



 <h3>Your Email is: <?php echo $_SESSION["username"];?></h3>
<h7>Do you want to update your profile? Then<a href="profileup.php">Click Here</a></h7>
<br><br>
<h7>Do you want to see Your Order Information? Then<a href="Showdata.php">Click Here</a></h7>
<br><br>
<h8>Do you want to  search Your order Information? Then<a href="searchuser.php">Click Here</a></h8>
<br><br>
<h9>Do you want to confirm your order? Then <a href="confirm.php">Click Here</a></h9>
<br><br>
<h10>Do you want to cancel your order? Then<a href="cancel.php">Click Here</a></h10>
<br><br>
<h11>Do you want to pay for your order? Then<a href="pay.php">Click Here</a></h10>
<br><br>
<h12>Do you want to cancel your payment?<a href="cpay.php">Click Here</a></h11>
<br><br>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>
