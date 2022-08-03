<?php include "../control/action.php"; ?>
<?php
   
   $data = file_get_contents("../../Manager/view/data.json");
     $mydata = json_decode($data);

     
     foreach($mydata as $myobject)
     {
         echo "Manager details: <br>";

         foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
    } 
    echo"<br>";
    
}
    ?>
    <!DOCTYPE html>
    <html>
    <head>
     <title>Form</title>
     </head>
     <body>
     <a href="afterlog.php">Back</a>
     </body>
     </html>