<?php
include "database/connect.php";
include "functions/general.php";
session_start();
print_r($_SESSION['request']);
print_r($_POST);

if (isset($_POST['newPass']) && isset($_POST['oldPass']) && isset($_SESSION['request'])) {
	if ($_POST['newPass'] == $_POST['oldPass']) {
		$request = $_SESSION['request'];
		unset($_SESSION['request']);
		$newPass = password_hash($_POST['newPass'], PASSWORD_DEFAULT);
		$dbconn->beginTransaction();
		$sql = $dbconn->prepare("UPDATE `users` SET `Password`= :pass WHERE `UserId` = :id");
		$sql->bindParam(":pass", $newPass);
		$sql->bindParam(":id", $request['UserId']);
		$result = $sql->execute();
		if ($result) {
			$sql = $dbconn->prepare("DELETE FROM `pass-request` WHERE UserId = :id");
			$sql->bindParam(":id", $request['UserId']);
			$result = $sql->execute();
			if ($result) {
				$dbconn->commit();
				setNotice("Password succesfully changed!", "alert alert-success");
				header("location: ../log_in.php");
			}else{
				$dbconn->rollback();
				setNotice("Error changing password! Please try again and if the problem persists contact our team.",
					"alert alert-danger");
				header("location: ../log_in.php");
			}
		}
	}else{
		setNotice("Passwords Don't Match!", "alert alert-danger");
		$link ="location: ../passwordreset.php?code=".$_SESSION['request']['code'];
		header($link);
	}
}
?>