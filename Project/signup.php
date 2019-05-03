<?php
	session_start();
	
	
	$email = $_POST["InputEmail1"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$username = $_POST["username"];
	$pword = $_POST["pword"];
	$language = $_POST["language"];
	$role = $_POST["role"];
	$desc = $_POST["description"];
	
	$conn = new PDO ("mysql:host=localhost;dbname=alavender;", "alavender", "SaeRae8p");
	
	$conn->query("INSERT into fmp_users (firstname, lastname, username, password, email, language, role, description)
							 VALUES('$firstname', '$lastname', '$username', '$pword', '$email', '$language', '$role', '$desc')");
	
	header("Location: index.php");
?>