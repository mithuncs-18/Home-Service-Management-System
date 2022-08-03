<?php
session_start(); 

include('../control/profileupcheck.php');




?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
  <div class="pro">
<h2>Profile Page</h2>
<br><br>
Your Profile Page
<br><br>
<?php
$radio1=$radio2="";
$fullname=$email="";
$phone=$password=$address="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"vendor",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $fullname=$row["Fullname"];
      $email=$row["Email"];
      $phone=$row["Phone"];
      $password=$row["Password"];
      $address=$row["Address"];

      if(  $row["Gender"]=="male" )
      { $radio1="checked"; }
      else if($row["Gender"]=="female")
      { $radio2="checked"; }
    
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
<p>Fullname : </p>
  <input type='text' name='fullname' value="<?php echo $fullname; ?>" >
<br>
<p>Email : </p>
 <input type='text' name='email' value="<?php echo $email; ?>" >
<br>
<p>Phone : </p> 
<input type='text' name='phone' value="<?php echo $phone; ?>" >
<br>
<p>Password: </p>
<input type='text' name='password' value="<?php echo $password; ?>" >
<br>
<p>Address : </p>
<input type='text' name='address' value="<?php echo $address; ?>" >
<br>
 <p>Gender:</p>
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female

     <br>

     <input name='update' type='submit' value='update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>
</div>
</body>
</html>
