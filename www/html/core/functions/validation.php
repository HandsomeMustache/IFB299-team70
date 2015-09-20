<?php
/*
	validateUser()

	Validates a data entry going into the table users

	Input: Username, Password, Comfirmed Password
	Output: true or error array contain the issues

*/

function validateUser($uname, $upass, $cpass){
	include $_SERVER["DOCUMENT_ROOT"]."/core/database/connect.php";
	include_once "users.php";

	$error = false;
	$err_array = array_fill(0, 2, "");

	//check username
	if ($uname != false) {
		if($uname=="" ) {
			$err_array[0] = "Please enter a username!";
			$error = true;
		}else{
			$result = $dbconn->prepare("SELECT * FROM `users` WHERE `Username` = :user");
			$result->bindParam(':user', $uname);
			$result->execute();
			$rows = $result->fetchall();
			echo count($rows);
			if (count($rows) > 0) {
				echo "true";
				$err_array[1] = "Sorry username has been taken!";
				$error = true;
			}
		}
	}

	//check password
	if($upass=="") {
		$err_array[1] ="Please provide a password!";
	}else if(strlen($upass)<6) {
		$err_array[1] ="Password must be at least 6 characters !";
	}else if($cpass != $upass) {
		$err_array[1] ="Passwords are not the same ! Please enter again !";
	}

	if ($error == false) {
		return $error;	
	}else{
		return $err_array;
	}
}

/*
	validateUserDetails

	Validates a data entry into the table user-details

	Input: Firstname, Surname, Email, PhoneNumber, UniId
	Output: true or error array contain the issues

*/
function validateUserDetails($fname='', $sname='', $email='', $PhoneNumber='', $UniId='', $userid=''){
	include $_SERVER["DOCUMENT_ROOT"]."/core/database/connect.php";
	$error = false;
	$err_array = array_fill(0, 5, "");
	//check email
	if($email=="" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$err_array[2] = "Please provide a vaild email!";
		$error = true;
	}else{
		//Check if the email exists
		$query =$dbconn->prepare("SELECT * FROM `user-details` WHERE `Email`=:email");
		$query -> bindParam(':email', $email);
		$query->execute();
		$row=$query->fetchall();

		if(count($row) > 0 && $userid != $row[0]['UserId']) {
			$err_array[2] = "Sorry this email has been taken!";
			$error = true;
		}
	}

	if ($error == false) {
		echo "true";
		return $error;	
	}else{
		return $err_array;
	}
}



?>