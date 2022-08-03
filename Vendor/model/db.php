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
 
 function Addvendor($conn,$table,$mname,$email,$pho,$password,$add,$gender)
 {
     //$id=0;
     //echo $add."<br>"; echo $gender."<br>"; 
$result = $conn->query("INSERT INTO `vendor` (`V_id`, `Fullname`, `Email`, `Phone`, `Password`, `Address`, `Gender`) VALUES ('', '$mname', '$email', '$pho', '$password', '$add', '$gender')");
 return $result;
 }

 function UpdateUser($conn,$table,$username,$fullname,$email,$phone,$password,$address,$gender)
 {
     $sql = "UPDATE $table SET Fullname='$fullname', Email='$email',Phone='$phone',Password='$password',Address='$address',Gender='$gender' WHERE Email='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function SearchVendor($conn,$table,$mname)
 {
$result = $conn->query("SELECT * FROM  $table WHERE Name='$mname'");
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

 function DeleteUser($conn,$table,$mname)
 {
     $res = $conn->query("DELETE FROM $table WHERE Fullname='$mname'");
     if($res)
     {
         echo "Deleted";
         //header("location: ../control/logout.php");
     }
     else
     {
         echo "error occured";
     }
 }




 function CloseCon($conn)
 {
 $conn -> close();
 }
}
 ?>