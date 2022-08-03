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
<link rel="stylesheet" type="text/css" href="../css/search.css">
</head>
<body>
    <div class="search">
<h2>Search Vendor Work information </h2>
<script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
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
  xhttp.open("POST", "/just/Vendor/control/searchvalidation.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>

Vendor Name: 
<input type="text" name="uname" id="uname" ><br><br>
<button onclick="showmyuser()">SearchInfo</button>

<p id="mytext"></p>

<h3><a href="pageone.php">Back</a></h3>
<div>
</body>
</html>