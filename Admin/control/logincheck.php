<?php

 

session_start(); 

 

 $error=$error1="";
// store session data
if (isset($_POST['submit']))

 

{

 
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Please enter your Username and Password. ";
        }
        else
            {
               
                if($_POST["username"]=="Admin" && $_POST["password"]=="12345" )
                {
                   $_SESSION["username"] = $_POST['username'];
                   $_SESSION["password"] = $_POST['password'];
                }
                else{
                   $error="authentic problem";
                }
        
                
               
            }
            
        }
        
        
        
        ?>



    
    