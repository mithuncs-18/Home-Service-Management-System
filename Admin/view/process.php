<?php   include "regform.php" ; ?>
<?php include "../control/action.php"; ?>
<?php
   	

	   //Get form data
	   $formdata = array(
         
          'username'=>$_POST["username"],
	      'password'=> $_POST["password"],    
          
     );

	   
     $existingdata = file_get_contents('data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else 
          echo "no data saved";

   $data = file_get_contents("../view/data.json");
   $mydata = json_decode($data);




   

  
   //echo "my value: ".$mydata[1]->lastName;
         //echo "my value: ".$mydata[1]->lastName;
/* foreach($mydata as $myobject) //(for showing data in reg)
   {
   foreach($myobject as $key=>$value)
  {
      echo "your ".$key." is ".$value."<br>";
  } 
  }
  */
  
?>