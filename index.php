<?php session_start(); /* Starts the session */

if(!isset($_SESSION['EmailData']['email'])){
	header("location:login.php");
	exit;
}
?>

  You have logged . <a href="logout.php">Click here</a> to Logout.