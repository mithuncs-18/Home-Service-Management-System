<?php 
include "..\model\db.php";

$user = $_POST['lname'];
if($user!="")
{
$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->SearchCustomer($conobj,"customerinfo",$user );



if ($MyQuery->num_rows > 0) {
    echo "<table><th>Name  </th> <th>Mobile </th> <th>Location </th> <th> Order for Service </th> <th> Freetime </th> </tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["Name"]."</td><td>".$row["Mobile"]."</td><td>".$row["Location"]."</td><td>".$row["Order for Service"]."</td><td>".$row["Freetime"]."</td></tr>";
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
