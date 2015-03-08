<?php
	require_once("connectDb.php");
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$email = $_POST["email"];
	$abil = $_POST["abil"];
	$int = $_POST["int"];
	$register = mysql_query("INSERT INTO users(username,password,email,interests,abilities) VALUES ('".$user."','".$pass."','".$email."','".$int."','".$abil."')");
?>