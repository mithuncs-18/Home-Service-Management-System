<?php include ('../control/insertvendor.php'); ?>


<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="../css/reg.css">
<script src="../js/formvalidation.js"></script>
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
<div class="reg">

<h1>Registration Form</h1>
<hr>

<form action="" onsubmit="return validateForm()"  method="post">
<p>Full Name:</p>
<input type="text" id="mname" name="mname"> <p id="errormname" ></p> <br>

<p>E-mail:</p>
<input type="text" id="email" name="email"> <p id="erroremail" ></p> <br>


<p>Phone:</p>
<input type="text" id="pho" name="pho"> <p id="errorpho" ></p> <br>


<p>Password:</p>
<input type="password" id="password" name="password"> <p id="errorpassword" ></p> <br>


<p>Address:</p>
<input type="text" id="add" name="add"> <p id="erroradd" ></p> <br>

<p>Gender:</p>
<input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
<p id="errorgender"></p>
<br>



  <input type="submit" name="submit"> <br>
  <?php echo $error; ?>


  <a href="../view/Vendor.php">Back </a>
</form>
</div>
</body>
</html>