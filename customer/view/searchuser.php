
<?php

session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

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
  <h1>Search Your Order Information</h1>
</div>
</div>

<script>
function showmyuser() {
  var lname=  document.getElementById("lname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/customer/control/searchvalidation.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("lname="+lname);


}

</script>



<br><br>
Enter your Name: 
<input type='text' name="lastname" id="lname"><br><br>
<button onclick="showmyuser()">SearchInfo</button>

<p id="mytext"></p>

<h3><a href="pageone.php">Back</a></h3>
<div>
</body>
</html>