<?php
session_start();
include 'functions/general.php';
include 'database/connect.php';
include_once "functions/validation.php";

//trimming
if(isset($_POST['submit'])){
	$uname = trim($_POST['user']);
	$email = trim($_POST['email']);
	$upass = trim($_POST['pass']);
	$ucpass= trim($_POST['cpass']);
	$uni = trim($_POST['uni']);
	$camp = trim($_POST['campus']);
	print_r($_POST);

	
	//check Data for entry
	$UserErrors = validateUser($uname, $upass, $ucpass);
	print_r($UserErrors);
	echo "string";
	$DetailErrors = validateUserDetails('', '', $email);
	//echo($DetailErrors);

	if ($UserErrors == false && $DetailErrors == false) {
		try{
		//encrypt password
			$upass = password_hash($upass, PASSWORD_DEFAULT);

		//Sql Query
			$dbconn->beginTransaction();
			$sql = "INSERT INTO `users` (`Username`, `Password`, `Active`) VALUES (:uname, :upass, 0)";
			$query = $dbconn->prepare($sql);
			$query->bindParam(':uname', $uname);
			$query->bindParam(':upass', $upass);
			$result = $query->execute();
			if($result){
				$userid = $dbconn->LastInsertId();
				echo $userid;
				$sql ="INSERT INTO `user-details` (`UserId`, `Email`, `UniId`, `CampusId`) VALUES (:id, :email, :uni, :camp)";
				$query = $dbconn->prepare($sql);
				$query->bindParam(':email', $email);
				$query->bindParam(':id', $userid);
				$query->bindParam(':uni', $uni);
				$query->bindParam(':camp', $camp);
				$result = $query->execute();
				$sentEmail = sendConfirmation($userid, $email, $dbconn);
				echo "here";
				if ($result && $sentEmail) {
					$dbconn->commit();
					setNotice("A confirmation email has been sent! Please verify to complete registration.");
					echo "true";
					header('location: ../index.php');
				}else{
					$dbconn->rollback();
				}
			}
		} catch(PDOException $e){
			$dbconn->rollback();
			handleError($e);
		}
	}else{
		
	}//End if
}else{
	echo "no submit";
}
?>