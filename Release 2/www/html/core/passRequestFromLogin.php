<?php 
session_start();
	$_POST['user'] = $_SESSION['Username'];
	header("location: passRequest.php");
?>