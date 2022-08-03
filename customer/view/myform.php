<?php include ('../control/insertcustomer.php'); ?>


<!DOCTYPE html>
<html>
<head>
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
<title>Customer Registration Page</title>
</head>
<body>


<div class="sticky">
<div class="topnav">
  <h1>Customer Registration Page</h1>


</div>
</div>

<div class="middlecolumn ">


<form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
<div class="registrationBox">
<table>
<tr>
<td>First Name:</td>
<td><input type="text" id="fname" name="fname" ></td><td><p id="errorfname" ></p></td> 
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" id="lname" name="lname"> 
</td>
<td><p id="errorlname" ></p></td> 
</tr>

<tr>
<td>Enter your email:</td>
<td><input type="text" id="email" name="email">
</td>
<td><p id="erroremail" ></p></td>
</tr>

<tr>
<td>Phone:</td>
<td><input type="text" id="pho" name="pho"> 
</td>
<td><p id="errorpho" ></p></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" id="password" name="password"> 
</td>
<td><p id="errorpassword" ></p></td>
</tr>

<tr>
<td>Address</td>
<td><input type="text" id="add" name="add">
</td>
<td><p id="erroradd" ></p></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" id="male" name="gender" value="male">Male
<input type="radio" id="female" name="gender" value="female">Female
</td>
<td><p id="errorgender" ></p></td>
</tr>

<tr>
<td>Available Time:</td>
<td><input type="time" id="atime" name="atime"> 
</td>
<td><p id="erroratime" ></p></td>
</tr>

</div>
 <tr>
 <td>
  <input type="submit" name="submit">
  <?php echo $error; ?>
 </td>
 </tr>
</table>
<hr>Already Have an account? Then please <a href="login.php">login</a>
</form>
</div>
</body>
</html>