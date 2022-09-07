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
        margin: 40px auto;
        table-layout: fixed;
        text-align: center;
        border-collapse: collapse;
      "
    >
      <col width="30%" />
      <col width="70%" />
      <tr>
          <td colspan="2"><a href="index.php"><img src="includes/images/logo.png" alt=""></a></td>
      </tr>
      <tr>
        <td colspan="2"><h1> Login</h1></td>
      </tr>
      <tr>
          <form action="functions.php" name="loginForm" method="post" onsubmit="return validateForm();">
        <td>Email:</td>
        <td><input type="email" name="email" required id="" style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="password" required id="" style="width: 90%;padding: 10px;" /></td>
      </tr>
      <tr><td colspan="2"><input class="btn1" type="submit" name="login" value="Login">
     </form></td></tr>
     <tr><td colspan="2"><a href="forgetpass.php">Forgot password</a></td></tr>
<tr>
    <td> <!--a href="index.php"><button class="btn1">Home</button></a--></td>
    <td>Not registered yet? <a href="register.php"><button class="btn1">Register</button></a></td>
</tr>
   
    </table>

    <script type="text/javascript" src="includes/js/main.js"></script>
    <script>
      function validateForm(){

var email=document.forms["loginForm"]['email'].value;
var pass=document.forms["loginForm"]['password'].value;

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
}

}
    </script>
  </body>
</html>
