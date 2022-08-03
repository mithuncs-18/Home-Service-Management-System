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



 function MCheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $username."' AND Password='". $password."'");
 return $result;
 }

 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $username."' AND Password='". $password."'");
 return $result;
 }


 function CCheckUser($conn,$table,$username,$password)
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
 
 function Addvendor($conn,$table,$mname,$email,$pho,$password,$add,$gender)
 {
     //$id=0;
     //echo $add."<br>"; echo $gender."<br>"; 
$result = $conn->query("INSERT INTO `vendor` (`V_id`, `Fullname`, `Email`, `Phone`, `Password`, `Address`, `Gender`) VALUES ('', '$mname', '$email', '$pho', '$password', '$add', '$gender')");
 return $result;
 }
 
 function Addcustomer($conn,$table,$fname,$lname,$email,$pho,$password,$add,$gender,$atime)
 {
     //$id=0;
     //echo $add."<br>"; echo $gender."<br>"; 
$result = $conn->query("INSERT INTO `customer` (`C_id`, `Firstname`, `Lastname`, `Email`, `Phone`, `Password`, `Address`, `Gender`,`AvailableTime`) VALUES ('', '$fname','$lname', '$email', '$pho', '$password', '$add', '$gender','$atime')");
 return $result;
 }

 
 function MUpdateUser($conn,$table,$username,$fullname,$email,$phone,$password,$dob,$address,$gender)
 {
     $sql = "UPDATE $table SET Fullname='$fullname', Email='$email',Phone='$phone',Password='$password',Dob='$dob',Address='$address',Gender='$gender' WHERE Email='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
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



 function CUpdateUser($conn,$table,$username,$firstname,$lastname,$email,$phone,$password,$address,$gender,$availtime)
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
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function CShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }






 function CloseCon($conn)
 {
 $conn -> close();
 }
}
 ?>