<?php
include_once 'database/connect.php';
include_once 'functions/general.php';
include_once 'validation.php';
echo "1";

if (isset($_GET['id']) && isset($_GET['action'])) {
	$id = $_GET['id'];
	$action = $_GET['action'];
	echo "2";
	if ($action == "borrowed"){
		$category = "2";
		$state = "Borrowed";
	}elseif($action == "unborrow"){
		$category = "2";
		$state = "Active";
	}elseif ($action == "swapped") {
		$category = "1";
		$state = "Swapped";
	}elseif ($action == "unswaped") {
		$category = "1";
		$state = "Active";
	}elseif ($action == "sold") {
		$category = "0";
		$state = "Sold";
	}elseif ($action == "unsell") {
		$category = "0";
		$state = "Active";	
	}else{
		$category = '';
	}

	$sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `BookId` = :id");
	$sql -> bindParam(":id", $id);
	$sql -> execute();
	$result = $sql -> fetch(PDO::FETCH_ASSOC);
	if ($action == "hide"){
		$category = $result['CategoryId'];
		$state = "Hidden";
	}elseif ($action == "active") {
		$category = $result['CategoryId'];
		$state = "Active";
	}

	if ($result['CategoryId'] == $category && $result['UserId'] == $_SESSION['Username']) {
		try{
		$sql = $dbconn -> prepare("UPDATE `textbooks` SET `State`=:state WHERE `BookId` = :id");
		$sql -> bindParam(":id", $id);
		$sql -> bindParam(":state", $state);
		$result = $sql -> execute();

		if ($result) {
			header('location: ../myuploads.php');
		}

		}catch(PDOException $e){
			errorHandle($e);
		}
	}
}
?>