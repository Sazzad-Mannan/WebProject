<?php 
session_start();
include "includes/db/config.php";

if(isset($_POST['register'])){
    $email=mysqli_escape_string($conn,$_POST['email']);
    $pass=mysqli_escape_string($conn,$_POST['password']);
    $fname=mysqli_escape_string($conn,$_POST['fname']);
    $lname=mysqli_escape_string($conn,$_POST['lname']);
    $gender=mysqli_escape_string($conn,$_POST['gender']);
    
    $pass=password_hash($pass, PASSWORD_DEFAULT);

    $sql="SELECT * FROM user WHERE email='".$email."'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
         
        $_SESSION['message']="Email already registered.Login please.";
        header("Location: login.php");
        exit;
    }

    $sql2="INSERT INTO user(email,pass,fname,lname,gender) VALUES('".$email."','".$pass."','".$fname."','".$lname."','".$gender."')";
    $result2=mysqli_query($conn,$sql2);

    if(!$result2){
        $_SESSION['message']="Something went wrong,could not insert in database.Please try again.";
        header("Location: register.php");
        exit;
    }else{
        $_SESSION['message']="Registration successful.Login please.";
        header("Location: login.php");
        exit;
    }



}


if(isset($_POST['login'])){
    $email=mysqli_escape_string($conn,$_POST['email']);
    $pass=mysqli_escape_string($conn,$_POST['password']);
   

    $sql="SELECT * FROM user WHERE email='".$email."'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['pass'])) {
            $_SESSION['logged_email']=$row['email'];
        $_SESSION['logged_name']=$row['name'];
        $_SESSION['logged_id']=$row['id'];
        $_SESSION['message']="Login successful.";
        header("Location: index.php");
        exit;
        } else {
            $_SESSION['message']="Email or password did not match.";
        header("Location: login.php");
        exit;
        }
         
       
        
        
    }else{
        $_SESSION['message']="Email or password did not match.";
        header("Location: login.php");
        exit;
    }

}


if(isset($_POST['asset_insert'])){

$target_dir = "assets/";

$name=mysqli_escape_string($conn,$_POST['name']);
$category=mysqli_escape_string($conn,$_POST['category']);
$price=mysqli_escape_string($conn,$_POST['price']);
$status=mysqli_escape_string($conn,$_POST['status']);


if (isset($_FILES['file']['tmp_name'])){
    $file = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $folder="assets/";
    move_uploaded_file($file,$folder.$filename);
    $handle = $folder.$filename ;
    }

    $sql="INSERT INTO assets(user_id,name,category,price,status,asset) VALUES(".$_SESSION['logged_id'].",'".$name."','".$category."',".$price.",'".$status."','".$handle."')";
    $result=mysqli_query($conn,$sql);

    if($result){
        $_SESSION['message']="Asset upload successful.";
        header("Location: assets.php");
        exit;
    }else{
        $_SESSION['message']="Something went wrong.";
        header("Location: index.php");
        exit;
    }

}



?>