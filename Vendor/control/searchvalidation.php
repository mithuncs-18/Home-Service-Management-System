<?php 
include "..\model\db.php";

$user = $_POST['uname'];

if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->SearchVendor($conobj,"vendorinfo",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><th>Name  </th> <th>Work Location </th> <th>Fee </th> <th> Work Duration(hour)</th> </tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["Name"]."</td><td>".$row["Work Location"]."</td><td>".$row["Fee"]."</td><td>".$row["Work Duration(hour)"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "Please give some valid name";
  }
}
else{
  echo "please enter your name";
}






?>
