<?php
session_start(); 

include('../control/Cprofileupcheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/Cprofileup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "Cyan");
  });
  $("input").blur(function(){
    $(this).css("background-color", "white");
  });
});
</script>

</head>

<body>

<div class="sticky">
<div class="topnav">
  <h1>Update your information</h1>


</div>
</div>

<div class="middlecolumn ">



<?php
$radio1=$radio2="";
$firstname=$lastname=$email="";
$phone=$password=$address=$availtime="";
//$c1=$c2=$c3="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CCheckUser($conobj,"customer",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["Firstname"];
      $lastname=$row["Lastname"];
      $email=$row["Email"];
      $phone=$row["Phone"];
      $password=$row["Password"];
      $address=$row["Address"];
      $availtime=$row["AvailableTime"];

      if(  $row["Gender"]=="male" )
      { $radio1="checked"; }
      else if($row["Gender"]=="female")
      { $radio2="checked"; }
   
      
      /*

      if($row["Profession"]=="electrician" )
      { $c1="checked"; }
      if($row["Profession"]=="cleaner")
      { $c2="checked"; }
      if($row["Profession"]=="other")
      { $c3="checked"; }

      if($row["Profession"]=="electrician,cleaner")
      { $c1="checked";
        $c2="checked";
      }

      if($row["Profession"]=="electrician,other")
      { $c1="checked";
        $c3="checked";
      }

      if($row["Profession"]=="cleaner,other")
      { $c2="checked";
        $c3="checked";
      }

      if($row["Profession"]=="electrician,cleaner,other")
      { $c2="checked";
        $c3="checked";
        $c1="checked";
      }

        Profession:
    <input type="checkbox" name="i1"  value='electrician'<?php echo $c1; ?>>electrician
    <input type="checkbox" name="i2" value='cleaner'<?php echo $c2; ?>>cleaner
    <input type="checkbox" name="i3" value='other'<?php echo $c3; ?>>other
    <br>

      */
  

   
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
<div class="registrationBox">
<table>
<tr>
<td>First Name:</td>
<td> <input type='text' name='firstname' value="<?php echo $firstname; ?>" ><br>
</td>
</tr>
<tr>
<td>Last Name:</td> 
<td><input type='text' name='lastname' value="<?php echo $lastname; ?>" >
<br></td>
</tr>
<tr>
<td>Enter your email:</td>
<td> <input type='text' name='email' value="<?php echo $email; ?>" >
<br></td>
</tr>

<tr>
<td>Phone:</td>
<td> <input type='text' name='phone' value="<?php echo $phone; ?>" >
<br></td>
</tr>
<tr>
<td>Password:</td>
<td> <input type='text' name='password' value="<?php echo $password; ?>" >
<br></td>
</tr>

<tr>
<td>Address</td>
<td> <input type='text' name='address' value="<?php echo $address; ?>" >
</td></tr>
<tr>
<td>Gender:</td>
<td>    <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <br>
</td>
</tr>

<tr>
<td>Available Time:</td> 
<td><input type='time' name='atime' value="<?php echo $availtime; ?>" >
</td>
</tr>
</div>

<tr> <td>
<input name='update' type='submit' value='update'>  

     <?php echo $error; ?>
     </td>
 </tr>
 </table>
<br>
<a href="../view/Customer.php">Back </a>



</form>
</div>
</body>
</html>
