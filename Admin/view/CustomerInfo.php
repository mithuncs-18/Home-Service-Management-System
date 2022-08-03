<?php include "../control/action.php"; ?>
<?php

   $data = file_get_contents("../../customer/view/data.json");
     $mydata = json_decode($data);

     
     foreach($mydata as $myobject)
     {
         echo "Customer details: <br>";

         foreach($myobject as $key=>$value)
    {
        echo $key." is ".$value."<br>";
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
     go back<a href="afterlog.php">Back</a>
     </body>
     </html>