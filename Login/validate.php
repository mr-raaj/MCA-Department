<?php

?>
<html>  
<head>  
<title> Validate the Password </title>  
</head>  
<script>  
function validateForm() {  
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;  
     
      
   
    if(pw1 == "") {  
      document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(pw2 == "") {  
      document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
     
    //minimum password length validation  
    if(pw1.length < 8) {  
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";  
      return false;  
    }  
  
    //maximum length of password validation  
    if(pw1.length > 15) {  
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";  
      return false;  
    }  
    
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      alert ("Your password created successfully");  
    }  
 }  
</script>  
  
<body>  
<h1 style="color:green">Javatpoint</h1>  
<h3> Verify valid password Example </h3>  
  
<form onsubmit ="return validateForm()">  
  
 
<td> Create Password* </td>  
<input type = "password" id = "pswd1" value = "">   
<span id = "message1" style="color:red"> </span> <br><br>  
  
 
<td> Confirm Password* </td>  
<input type = "password" id = "pswd2" value = "">   
<span id = "message2" style="color:red"> </span> <br><br>  
  
 
<input type = "submit" value = "Submit">  
  
 
<button type = "reset" value = "Reset" >Reset</button>  
</form>  
</body>  
</html>  