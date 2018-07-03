;/*function myFunction(){
    alert("im here");
}*/
function validateForm() {
    //alert("im here")
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        //alert("fName must be filled out");
        document.getElementById("firstname").innerHTML="please enter your name";
        document.forms["myForm"]["fname"].focus();
        return false;

    }
     var x = document.forms["form1"]["uname"].value;
    if (x == "") {
        //alert("fName must be filled out");
        document.getElementById("username").innerHTML="please enter your username";
        document.forms["myForm"]["uname"].focus();
        return false;

    }
    var x = document.forms["myForm"]["lname"].value;
    if (x == "") {
        //alert("LName must be filled out");
        document.getElementById("lastname").innerHTML="please enter your name";
        document.forms["myForm"]["lname"].focus();
        return false;
    }
    var x = document.forms["myForm"]["uname"].value;
    if (x == "") {
        //alert("LName must be filled out");
        document.getElementById("username").innerHTML="please enter your username";
        document.forms["myForm"]["uname"].focus();
        return false;

    }
    //email validation
    var email=document.forms["myForm"]["email"].value;
    if (email == "") {
        //alert("please enter email");
        document.getElementById("email").innerHTML="please enter your email";
        document.forms["myForm"]["email"].focus();
        return false;
    }
    if (email.indexOf('@', 0) == -1){                
        //alert("Not a valid e-mail address!");  
        document.getElementById("email").innerHTML="Not a valid e-mail address!";       
        document.forms["myForm"]["email"].focus(); 
        return false;
    }
    var x = document.forms["myForm"]["pwd"].value;
    if (x == "") {
        //alert("please enter password");
        document.getElementById("password").innerHTML="please enter password";
        document.forms["myForm"]["pwd"].focus();
        return false;
    }
    if (x.length<5) {
        //alert("your password must be more than 5 characters");
        document.getElementById("password").innerHTML="your password must be more than 5 characters";
        document.forms["myForm"]["pwd"].focus();
        return false;
    }
    var x = document.forms["myForm"]["cpwd"].value;
    if (x == "") {
        //alert("please confirm password");
        document.getElementById("passwords").innerHTML="please confirm password";
        document.forms["myForm"]["cpwd"].focus();
        return false;
    }
    var pwd=document.forms["myForm"]["pwd"].value;
    var cpwd=document.forms["myForm"]["cpwd"].value;
    if (pwd!=cpwd){
        alert("password does not match");
        document.forms["myForm"]["pwd"].value="";
        document.forms["myForm"]["cpwd"].value="";
        document.forms["myForm"]["pwd"].focus();
        return false;
    }
    var x = document.forms["myForm"]["mobile"].value;
    if (x == "") {
        //alert("fName must be filled out");
        document.getElementById("mobile").innerHTML="please enter your mobile number";
        document.forms["myForm"]["mobile"].focus();
        return false;
    }
    if (isNaN(x)){
        document.getElementById("mobile").innerHTML="invalid number";
        document.forms["myForm"]["mobile"].focus();
        return false;
    }
    if (x.length<10) {
        //alert("your password must be more than 5 characters");
        document.getElementById("mobile").innerHTML="your mobile number must be more than 10 characters";
        document.forms["myForm"]["mobile"].focus();
        return false;
    }



}
