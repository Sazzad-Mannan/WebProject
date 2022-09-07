<?php
session_start();
session_destroy();

$_SESSION['message']="Logout successful.";
        header("Location: login.php");
        exit;

?>