<?php include ('../control/insertmanager.php'); ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Mreg.css">
<script src="../js/Vformvalidation.js"></script>
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
<title>Registration Page</title>
</head>
<body>
<div class="sticky">
<div class="topnav">
  <h1>Manager Registration Page</h1>


</div>
</div>

<div class="middlecolumn ">


<form action="" onsubmit="return validateForm()"  method="post">
<p>Full Name:</p>
<input type="text" id="mname" name="mname"> <p id="errormname" ></p> 

<p>E-mail:</p>
<input type="text" id="email" name="email"> <p id="erroremail" ></p> 


<p>Phone:</p>
<input type="text" id="pho" name="pho"> <p id="errorpho" ></p> 


<p>Password:</p>
<input type="password" id="password" name="password"> <p id="errorpassword" ></p> 

<p>dob:</p>
<input type="date" id="dob" name="dob"> <p id="errordob" ></p> 


<p>Address:</p>
<input type="text" id="add" name="add"> <p id="erroradd" ></p> 

<p>Gender:</p>
<input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
<p id="errorgender"></p>




  <input type="submit" name="submit"> 
  <?php echo $error; ?>


<a href="Manager.php">Back</a>
</form>
</div>
</body>
</html>