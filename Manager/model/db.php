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
 
 function Addmanager($conn,$table,$mname,$email,$pho,$password,$dob,$add,$gender)
 {
     //$id=0;
     //echo $add."<br>"; echo $gender."<br>"; 
$result = $conn->query("INSERT INTO `manager` (`M_id`, `Fullname`, `Email`,`Phone`,`Password`,`Dob`,`Address`, `Gender`) VALUES ('', '$mname', '$email', '$pho', '$password','$dob', '$add', '$gender')");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$fullname,$email,$phone,$password,$dob,$address,$gender)
 {
     $sql = "UPDATE $table SET Fullname='$fullname', Email='$email',Phone='$phone',Password='$password',Dob='$dob',Address='$address',Gender='$gender' WHERE Email='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


 function SearchVendor($conn,$table,$mname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Name='". $mname."' AND Name='". $mname."'");
 return $result;
 }



 
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function SearchCustomer($conn,$table,$lname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Name='". $lname."' AND Name='". $lname."'");
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