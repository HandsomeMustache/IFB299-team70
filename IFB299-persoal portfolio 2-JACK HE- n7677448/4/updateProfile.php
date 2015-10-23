<?php
/*
	updateProfile.php

	Recieves post data and updates the users profile in the database

	Input: $_POST['submit']
	Output: Redircts to profile page and sets a notice

*/
session_start();

include "database/connect.php";
include "functions/general.php";
include "functions/validation.php";
include "validation.php";
include_once 'functions/errors.php';

if (isset($_POST['update'])) {
	//Timming
	//$username = trim($_POST['user']);
	//$img = trim($_POST['img']);
	$fname = trim($_POST['fname']);
	$sname = trim($_POST['sname']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$uni = trim($_POST['uni']);
	$camp = trim($_POST['campus']);
	$opass = trim($_POST['opass']);
	$npass = trim($_POST['npass']);
	$cpass = trim($_POST['cpass']);
	$userid = activeUser();
	$img_flag = false;
	$errmsg_arr = array();
	//Validate Image
	if(isset($_FILES['image'])){
		if ($_FILES['image']['size'] > 0 && $_FILES['image']['size'] < 5242880  && substr($_FILES['image']['type'], 0, 5) == "image") {
			$tmpName = $_FILES['image']['tmp_name'];
			$imgType = substr($_FILES['image']['type'], 6);
    		$fp = fopen($tmpName, 'rb');
    		$img_flag = true;
		}else{
			$errmsg_arr[] = "Image Error! The file may be empty, corrupted or exceeding 5mbs";
		}
	}


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
		    if ($img_flag == true) {
						$sql = $dbconn->prepare("INSERT INTO `profile-images`(`UserId`, `Image`, `Type`) VALUES (:id, :img, :type)");
						$sql->bindParam(':img', $fp, PDO::PARAM_LOB);
						$sql->bindParam(':id', $userid);
						$sql->bindParam(':type', $imgType);
						$result = $sql->execute();
					
					//Check if its succesful
						if ($result) {
							setNotice("Your account has been succesfully updated!", "alert alert-success");
							
						}else{
						    setNotice("Oops! There seems to be a problem. Try again and if the problem persists contact our team.");
						}
			}else{
					setNotice("Oops! There seems to be a problem. Try again and if the problem persists contact our team.");
			}
			setNotice("Your account has been succesfully updated!", "alert alert-success");
		}else{
			setNotice("Oops! There seems to be a problem. Try again and if the problem persists contact our team.");
			$dbconn->rollback();
		}
		header("location: ../my_profile.php");

}




?>