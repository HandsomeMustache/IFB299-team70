<?php
include_once "functions/general.php";
session_start();
	$searchArray = $_SESSION['searchArray'];
	unset($_SESSION['searchArray']);
	$searchArray['Category'] = $_POST['cat'];
	$link = buildSearchLink($searchArray);
	echo $link;
	header("location: ../".$link);
?>