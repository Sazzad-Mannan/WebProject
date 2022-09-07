<?php
session_start();
include "includes/db/config.php";


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Arts Buy & Sell</title>
    <link rel="icon" href="includes/images/icon.png" />
    <link rel="stylesheet" href="includes/css/main.css" />
  </head>
  <body>
    <table
      
      width="500px"
      style="
        margin: 30px auto;
        table-layout: fixed;
        text-align: center;
        border-collapse: collapse;
      "
    >
      <col width="30%" />
      <col width="70%" />
      <tr>
        <td colspan="2"><img src="includes/images/logo.png" alt=""></td>
    </tr>
      <tr>
        <td colspan="2"><h1>Registration</h1></td>
      </tr>
      <tr>
          <form action="functions.php" method="post" name="registerForm" onsubmit="return validateForm()">
        <td>First Name:</td>
        <td><input type="text" name="fname" required id="" style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr>  <td>Last Name:</td>
        <td><input type="text" name="lname" id="" required style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr>  <td>Email:</td>
        <td><input type="email" name="email" id="" required style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr>  <td>Gender:</td>
        <td><select name="gender" id="" required style="width: 97%;padding: 10px;">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select></td>
      </tr>
      
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password" required id="" style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input type="password" name="cpassword" id="" required style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr><td colspan="2"><input type="submit" class="btn1" name="register" value="Submit">
      </form></td></tr>
      <tr><td colspan="2"><a href="">Terms & conditions</a></td></tr>
<tr>
    
    <td colspan="2">Already have account? <a href="login.php"><button class="btn1">Login</button></a></td>
</tr>
   
    </table>
    <script>
      function validateForm(){


var fname=document.forms["registerForm"]['fname'].value;
var lname=document.forms["registerForm"]['lname'].value;
var email=document.forms["registerForm"]['email'].value;
var pass=document.forms["registerForm"]['password'].value;
var cpass=document.forms["registerForm"]['cpassword'].value;


if(fname.length>30){
    alert("First name should be less than 30 characters.");
    return false;
}
if(lname.length>30){
    alert("Last name should be less than 30 characters.");
    return false;
}

if(email.length>100){
    alert("Email should be less than 100 characters.");
    return false;
}else if(email.slice(-9) !="gmail.com"){
    alert("Please enter a gmail(Ex:@gmail.com).");
    return false;
}

if(pass.length>20){
    alert("Password should be less than 20 characters.");
    return false;
}else if(pass.length<8){
    alert("Password should be more than 8 characters.");
    return false;
}

if(pass!=cpass){
  alert("Password did not match with confirm password.");
  return false;
}


}
    </script>
  </body>
</html>

