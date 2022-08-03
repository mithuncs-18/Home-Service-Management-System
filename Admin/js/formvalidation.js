function validateForm() {
    var mname = document.getElementById("mname").value;
    var email = document.getElementById("email").value;
    var pho = document.getElementById("pho").value;
    var password = document.getElementById("password").value;
    var add = document.getElementById("add").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

    if (mname == "") {
        document.getElementById("errormname").innerHTML="you must enter name";
         return false;
       }
       else if(mname.length < 5){
           document.getElementById("errormname").innerHTML="Must input 5 character ";
           return false;
       }

    if(email == ""){
        document.getElementById("erroremail").innerHTML="you must enter email";
        return false;
        }
        else if(!res){

       document.getElementById("erroremail").innerHTML="Please input correct format";
       return false; 
       }

       if (pho == "") {
        document.getElementById("errorpho").innerHTML="Enter a Phone Number";
         return false;
       }else if(pho.length < 11){
           document.getElementById("errorpho").innerHTML="Must enter valid phone number";
           return false;
       }

    if (password == "") {
        document.getElementById("errorpassword").innerHTML="Enter a password";
         return false;
       }else if(password.length < 4){
           document.getElementById("errorpassword").innerHTML="Must enter long password";
           return false;
       }

       if (add == "") {
        document.getElementById("erroradd").innerHTML="Enter address here";
        return false;
    }else if(add.length < 6){
        document.getElementById("erroradd").innerHTML="Please type full address";
        return false;
    }

    if (!male.checked && !female.checked) {
        document.getElementById("errorgender").innerHTML="Choose your gender";
        return false;
    }
}
