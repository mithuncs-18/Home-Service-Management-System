<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Cshowdata.css">
</head>
<body>
<div class="sticky">
<div class="topnav">
  <h1>Your Information</h1>
</div>
</div>

<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchCustomer=$connection->CShowAll($conobj,"customerinfo");

if ($SearchCustomer->num_rows > 0) {

    // output data of each row
    while($row = $SearchCustomer->fetch_assoc()) {

      echo "Customer id : ".$row["cid"]."<br>";
      echo "Customer Name : ".$row["Name"]."<br>";
      echo "Mobile Number : ".$row["Mobile"]."<br>";
      echo "Location : ".$row["Location"]."<br>";
      echo "Order for Service : ".$row["Order for Service"]."<br>";
      echo "Available Time : ".$row["Freetime"]."<br><br>";
     
      

    }
}

?>

<a href="../view/Customer.php">Back </a>
</div>
</body>
</html>