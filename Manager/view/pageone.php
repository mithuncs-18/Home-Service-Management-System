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
    echo"Value is:" .$cookie_value;

}
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/pageone.css">
</head>
<body>
<div class="home">
<h1>Manager home page</h1>
<br>
<div class="sticky">
<div class="topnav">
  

</div>
</div>
<div class="header">
<h6>do you want to go see profile<a href="profileup.php">profile</a></h6>
<br>
<h7> click to see Vendor  Information<a href="Showdata.php">Click</a></h7>
<br>
<h8> click to  search Vendor  Information<a href="searchuser.php">Click</a></h8>
<br>
<h7> click to see customer Information. Then<a href="CShowdata.php">Click Here</a></h7>
<br>
<h8>click to  search customer Information. Then<a href="Csearchuser.php">Click Here</a></h8>
<br>
<h11>click to add payment status of customer. Then<a href="pay.php">Click Here</a></h10>
<br>
<h12> click to change payment status of customer. <a href="cpay.php">Click Here</a></h11>
<h5><a href="../control/logout.php">logout</a></h5>
</div>
</div>
</body>
</html>