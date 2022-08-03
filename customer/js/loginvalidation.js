function validateForm() {
    var email = document.getElementById("username").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var password= document.getElementById("password").value;

   
    if(username == ""){
        document.getElementById("errorusername").innerHTML="you must enter email";
        return false;
        }
        else if(!res){
       document.getElementById("errorusername").innerHTML="Please Enter a valid Email";
       return false; 
       }

    
       if (password == "") {
        document.getElementById("errorpassword").innerHTML="Enter a password";
         return false;
       }else if(password.length < 4){
           document.getElementById("errorpassword").innerHTML="Please Enter a valid Password";
           return false; 
        }
}