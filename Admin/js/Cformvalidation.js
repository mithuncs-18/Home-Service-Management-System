function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var pho = document.getElementById("pho").value;
    var password = document.getElementById("password").value;
    var add = document.getElementById("add").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var atime = document.getElementById("atime").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

    if (fname == "") {
        document.getElementById("errorfname").innerHTML="Enter your first name";
         return false;
       }
       else if(fname.length <5){
           document.getElementById("errorfname").innerHTML="Please enter a valid name ";
           return false;
       }

       if (lname == "") {
        document.getElementById("errorlname").innerHTML="Enter your last name";
         return false;
       }
       else if(lname.length < 6){
           document.getElementById("errorlname").innerHTML="Please enter a valid name";
           return false;
       }

    if(email == ""){
        document.getElementById("erroremail").innerHTML="Enter your email";
        return false;
        }
        else if(!res){

       document.getElementById("erroremail").innerHTML="Please enter a valid email";
       return false; 
       }

       if (pho == "") {
        document.getElementById("errorpho").innerHTML="Enter your Phone Number";
         return false;
       }else if(pho.length < 11){
           document.getElementById("errorpho").innerHTML="Please Enter valid phone number";
           return false;
       }

    if (password == "") {
        document.getElementById("errorpassword").innerHTML="Enter a password";
         return false;
       }else if(password.length < 4){
           document.getElementById("errorpassword").innerHTML="Please enter a valid password";
           return false;
       }

       if (add == "") {
        document.getElementById("erroradd").innerHTML="Enter your address";
        return false;
    }else if(add.length < 6){
        document.getElementById("erroradd").innerHTML="Please enter a valid address";
        return false;
    }

    if (!male.checked && !female.checked) {
        document.getElementById("errorgender").innerHTML="Choose your gender";
        return false;
    }

    if (atime == "") {
        document.getElementById("erroratime").innerHTML="Please Enter your Available Time";
        return false;
    }
}
