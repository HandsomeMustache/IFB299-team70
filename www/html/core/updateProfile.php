<?php
/*
	updateProfile.php

	Recieves post data and updates the users profile in the database

	Input: $_POST['submit']
	Output: Redircts to profile page and sets a notice

*/
include "database/connect.php";
include "functions/general.php";
include "functions/validation.php";
include "validation.php";
if (isset($_POST['submit'])) {
	//Timming
	//$username = trim($_POST['user']);
	//$img = trim($_POST['img']);
	$fname = trim($_POST['fname']);
	$sname = trim($_POST['sname']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$uni = trim($_POST['uni']);
	$camp = trim($_POST['camp']);
	$opass = trim($_POST['opass']);
	$npass = trim($_POST['npass']);
	$cpass = trim($_POST['cpass']);
	$userid = activeUser();
	$errors = validateUserDetails($fname, $sname, $email, $phone, $uni, $camp, $userid);
	echo "33";
	if ($errors == false) {
		echo "t";
		$query = $dbconn->prepare("UPDATE `user-details` SET `Firstname`=:fname, `Surname`=:sname,
			`Email`=:email, `PhoneNumber`=:phone, `UniId`=:uni, `CampusId`=:camp WHERE 
			`UserId`=:userid");
		$query->bindParam(":fname", $fname);
		$query->bindParam(":sname", $sname);
		$query->bindParam(":email", $email);
		$query->bindParam(":phone", $phone);
		$query->bindParam(":uni", $uni);
		$query->bindParam(":camp", $camp);	
		$query->bindParam(":uni", $uni);
		$query->bindParam(":userid", $userid);
		$result =$query->execute();
		if ($result) {
			setNotice("Your account has been succesfully updated!", "alert alert-success");
		}else{
			setNotice("Oops! There seems to be a problem. Try again and if the problem persists contact our team.");
		}
		header("location: ../my_profile.php");
	}else{
		echo "string";
		setErrArray($errors);
		header("location: ../edit_profile.php");
	}
}




?>