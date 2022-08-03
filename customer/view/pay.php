<?php
include('../control/paycheck.php');

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/showdata.css">
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
<div class="sticky">
<div class="topnav">
  <h1>Pay For Your Order</h1>
</div>
</div>
<br><br>
<form action="" method="post">

<input type="text" name="cid" placeholder="Enter Your ID"/><br>
<input type="text" name="Name" placeholder="Enter Name"/><br>
<input type="submit" name="confirm" value="Confirm" /><br>

<h3><a href="pageone.php">Back</a></h3>
</form>
</div>
</body>
</html>

