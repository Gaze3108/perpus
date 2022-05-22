<?php 
// <link rel="stylesheet" href="login.css">
ob_start()
session_start()
ob_end_clean()
$usernmame = $_POST["username"]
$password = $_POST["password"]

if ($username == "doni" && $password == "Bugy31") {
	$_SESSION["username"]=$username;
	header("location:home.php");
}else{
	header("location:login.php?login.error")
}

 ?>