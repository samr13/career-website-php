<?php 
session_start();
$_SESSION['user']="vijay";
header("Location:checknow.php");
?>