<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/showreq.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>
</head>
<body>
  <div class="show">
<h1>Show Work Request</h1>
<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchVendor=$connection->ShowAll($conobj,"workdetails");

if ($SearchVendor->num_rows > 0) {

    // output data of each row
    while($row = $SearchVendor->fetch_assoc()) {

      echo "Customer id : ".$row["Cid"]."<br>";
      echo "Customer Name : ".$row["Name"]."<br>";
      echo "Address : ".$row["Address"]."<br>";
      echo "Problem : ".$row["Problem"]."<br><br>";
      

    }
}

?>

<p> you can see more feature press back</p>
<button> Click </button>

<h3><a href="pageone.php">Back</a></h3>

</body>
</html>