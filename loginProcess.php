<?php

include 'includes/connection.php';
session_start();

if(isset($_POST['login'])){
	$user = $_POST["username"];
	$pass = $_POST["password"];

    //to prevent from mysqli injection  
    $username = stripcslashes($user);  
    $password = stripcslashes($pass);  

    $username = mysqli_real_escape_string($con, $user);  
    $password = mysqli_real_escape_string($con, $pass);  

	$query = "SELECT * FROM login WHERE username='$username' && password = '$password'";
	$data = mysqli_query($con, $query);

	if(mysqli_num_rows($data) == 1){
		$_SESSION["username"] = ucfirst($user);
		header("location:home.php");
	}
	else{
		$invalid = "Invalid username or password";
		header("location:login.php");	
	}
}

?>