<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $username."' AND Password='". $password."'");
 return $result;
 }
 
 function Addcustomer($conn,$table,$fname,$lname,$email,$pho,$password,$add,$gender,$atime)
 {
     //$id=0;
     //echo $add."<br>"; echo $gender."<br>"; 
$result = $conn->query("INSERT INTO `customer` (`C_id`, `Firstname`, `Lastname`, `Email`, `Phone`, `Password`, `Address`, `Gender`,`AvailableTime`) VALUES ('', '$fname','$lname', '$email', '$pho', '$password', '$add', '$gender','$atime')");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$firstname,$lastname,$email,$phone,$password,$address,$gender,$availtime)
 {
     $sql = "UPDATE $table SET Firstname='$firstname',Lastname='$lastname', Email='$email',Phone='$phone',Password='$password',Address='$address',Gender='$gender',AvailableTime='$availtime' WHERE Email='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 ////
 function SearchCustomer($conn,$table,$lname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Name='". $lname."' AND Name='". $lname."'");
 return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
 function ConfirmUser($conn,$table,$cid)
 {
     $user="Confirmed";
     $sql="UPDATE $table SET status='$user' WHERE cid=$cid";

     if($conn->query($sql)=== True)
     {
         $result=TRUE;
     }
     else
     {
         $result= FALSE;
     }
     return $result;
 }
 function CancelUser($conn,$table,$cid)
 {
     $user="Cancelled";
     $sql="UPDATE $table SET status='$user' WHERE cid=$cid";

     if($conn->query($sql)=== True)
     {
         $result=TRUE;
     }
     else
     {
         $result= FALSE;
     }
     return $result;
 }


 function ConfirmPay($conn,$table,$cid)
 {
     $user="Paid";
     $sql="UPDATE $table SET status='$user' WHERE cid=$cid";

     if($conn->query($sql)=== True)
     {
         $result=TRUE;
     }
     else
     {
         $result= FALSE;
     }
     return $result;
 }
 function CancelPay($conn,$table,$cid)
 {
     $user="Payment Cancelled";
     $sql="UPDATE $table SET status='$user' WHERE cid=$cid";

     if($conn->query($sql)=== True)
     {
         $result=TRUE;
     }
     else
     {
         $result= FALSE;
     }
     return $result;
 }







 function CloseCon($conn)
 {
 $conn -> close();
 }
}
 ?>