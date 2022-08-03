<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/vshowdata.css">

</head>
<body>
  <div class="show">
<h1>Show All Information</h1>
<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchVendor=$connection->ShowAll($conobj,"vendorinfo");

if ($SearchVendor->num_rows > 0) {

    // output data of each row
    while($row = $SearchVendor->fetch_assoc()) {

      echo "Vendor id : ".$row["vid"]."<br>";
      echo "Vendor Name : ".$row["Name"]."<br>";
      echo "Work Location : ".$row["Work Location"]."<br>";
      echo "Fee : ".$row["Fee"]."<br>";
      echo "Work Duration : ".$row["Work Duration(hour)"]."<br><br>";
      

    }
}

?>

<h3><a href="pageone.php">Back</a></h3>
</body>
</html>