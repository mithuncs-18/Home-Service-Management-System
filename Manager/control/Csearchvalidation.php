<?php 
include "..\model\db.php";
$connection=new db();
$error="";

if(isset($_REQUEST['search']))
{
    
    if(empty($_POST['lastname']))
    {
        $error=" name can not empty !!";
    }

    else 
    {
        $pname=$_POST['lastname'];
        $conobj=$connection->OpenCon();

        $SearchCustomer=$connection->SearchCustomer($conobj,"customerinfo",$_POST["lastname"]);

        if ($SearchCustomer->num_rows > 0) {
        
            // output data of each row
            while($row = $SearchCustomer->fetch_assoc())
             {
              
                echo "Customer id : ".$row["cid"]."<br>";
                echo "Customer Name : ".$row["Name"]."<br>";
                echo "Mobile Number : ".$row["Mobile"]."<br>";
                echo "Location : ".$row["Location"]."<br>";
                echo "Order for Service : ".$row["Order for Service"]."<br>";
                echo "Available Time : ".$row["Freetime"]."<br><br>";
               
            }
        }
    }
}






?>
