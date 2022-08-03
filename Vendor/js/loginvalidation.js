function validateForm() {
    var username = document.getElementById("username").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(username);
    var password= document.getElementById("password").value;

    if(username == ""){
        document.getElementById("errorusername").innerHTML="you must enter email";
        return false;
        }
        else if(!res){
       document.getElementById("errorusername").innerHTML="Please input correct format";
       return false; 
       }

    
       if (password == "") {
        document.getElementById("errorpassword").innerHTML="Enter a password";
         return false;
       }else if(password.length < 6){
           document.getElementById("errorpassword").innerHTML="Must enter long password";
           return false;
       }
    }