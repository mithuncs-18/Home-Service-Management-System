<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location: ../view/firstpage.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Welcome</h2><br>



<h3><?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to home page.</h5>





<br>
 <a href="../control/logout.php">logout</a><br>

</body>
</html>