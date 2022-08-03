<?php
session_start(); 

include('../control/profileupcheck.php');

/*
if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}
*/
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/reg.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("input").focus(function(){
    $(this).css("background-color", "yellow");
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
$fullname=$email=$phone=$password="";
$dob=$address="";
//$c1=$c2=$c3="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"manager",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $fullname=$row["Fullname"];
      $email=$row["Email"];
      $phone=$row["Phone"];
      $password=$row["Password"];
      $dob=$row["Dob"];
      $address=$row["Address"];

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
<tr>
fullname : <input type='text' name='fullname' value="<?php echo $fullname; ?>" >
<br>
email : <input type='text' name='email' value="<?php echo $email; ?>" >
<br>
Phone : <input type='text' name='phone' value="<?php echo $phone; ?>" >
<br>
Password: <input type='text' name='password' value="<?php echo $password; ?>" >
<br>
Dob : <input type='date' name='dob' value="<?php echo $dob; ?>" >
<br>
Address : <input type='text' name='address' value="<?php echo $address; ?>" >
<br>
 Gender:
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female

     <br>
     </div>
     <input name='update' type='submit' value='update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

</form>
</div>
</body>
</html>
