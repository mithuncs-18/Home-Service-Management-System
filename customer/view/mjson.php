
<?php   include "myform.php" ; ?>
<?php include "../control/process.php"; ?>
<?php
   	

	   //Get form data
	   if(isset($_REQUEST["gender"]))
 {
    $gender= $_REQUEST["gender"];
 }
 else{
    $gender= "";
  }
  if(!isset($_POST["electrician"])&&!isset($_POST["cleaner"])&&!isset($_POST["other"]))
{
    $v1=$v2=$v3= "";
    
}
else{
   if(isset($_POST["electrician"]))
   {
       $v1=$_POST["electrician"];
   }
   if(isset($_POST["cleaner"]))
   { 
       $v2=$_POST["cleaner"];
   }
   if(isset($_POST["other"]))
   {
    $v3=$_POST["other"];
   }
}
	   $formdata = array(
	      'fname'=> $_POST["fname"],
		  'lname'=> $_POST["lname"],
	      'email'=>$_POST["email"],
	      'phone'=> $_POST["pho"],
		  'password' => $_POST["password"],
          'address'=> $_POST["add"],
          'gender'=> $gender,
		  'atime'=> $_POST["atime"]
		 // 'Profession'=>$v1." ".$v2." ".$v3,
		  //'Profession'=>$_POST["cleaner"],
		 // 'Profession'=>$_POST["other"],
          

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

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

	 /*

	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	*/

    

	
	
?>
