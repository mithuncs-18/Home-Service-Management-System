<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/showdata.css">
</head>
<body>
  <div class="show">
<h1>Show All Information</h1>
<?php
include "..\model\db.php";
$connection=new db();
$conobj=$connection->OpenCon();

$SearchVendor=$connection->ShowAll($conobj,"vendor");

if ($SearchVendor->num_rows > 0) {

    // output data of each row
    while($row = $SearchVendor->fetch_assoc()) {

      echo "Vendor id : ".$row["V_id"]."<br>";
      echo "Vendor Name : ".$row["Fullname"]."<br>";
      echo "Email : ".$row["Email"]."<br>";
      echo "Phone: ".$row["Phone"]."<br>";
      echo "Password: ".$row["Password"]."<br>";
      echo "Address: ".$row["Address"]."<br>";
      echo "Gender : ".$row["Gender"]."<br><br>";
      

    }
}

?>

<h3><a href="Vendor.php">Back</a></h3>

</body>
</html>