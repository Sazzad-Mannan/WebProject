<?php 
$host="localhost";
$user="root";
$pass="";
$db="digital_arts";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    echo "Database connection error.";
    die();
}


if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
    echo "<script type='text/javascript'>alert('".$_SESSION['message']."');</script>";
    $_SESSION['message']='';
  }


?>