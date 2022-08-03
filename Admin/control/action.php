<?php



$validateuname ="";
$validatepass ="";


if($_SERVER["REQUEST_METHOD"]=="POST") {


    
    
     if(empty($_POST["username"]) || (strlen($_POST["username"])<6))
   {
       $validateuname="please enter valid a User Name";
   }
  
   else
   {
 
    $validateuname= $_POST['username'];
   } 
   
  

    if(empty($_POST["password"]) || (strlen($_POST["password"])<5))
   
    {
        $validatepass="please enter a valid password";
    }
    else
    {
      $validatepass=$_POST["password"];
    }
    


}
 

?>