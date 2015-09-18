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
		$category = "Borrow";
		$state = "Borrowed";
	}elseif($action == "unborrow"){
		$category = "Borrow";
		$state = "Active";
	}elseif ($action == "swapped") {
		$category = "Swap";
		$state = "Swapped";
	}elseif ($action == "unswaped") {
		$category = "Swap";
		$state = "Active";
	}elseif ($action == "sold") {
		$category = "Sell";
		$state = "Sold";
	}elseif ($action == "unsell") {
		$category = "Sell";
		$state = "Active";	
	}else{
		$category = '';
	}

	$sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `Id` = :id");
	$sql -> bindParam(":id", $id);
	$sql -> execute();
	$result = $sql -> fetch(PDO::FETCH_ASSOC);
	if ($action == "hide"){
		$category = $result['Category'];
		$state = "Hidden";
	}elseif ($action == "active") {
		$category = $result['Category'];
		$state = "Active";
	}

	if ($result['Category'] == $category && $result['Username'] == $_SESSION['Username']) {
		try{
		$sql = $dbconn -> prepare("UPDATE `textbooks` SET `State`=:state WHERE `Id` = :id");
		$sql -> bindParam(":id", $id);
		$sql -> bindParam(":state", $state);
		$result = $sql -> execute();

		if ($result) {
			header('location: ../MyTextbooks.php');
		}

		}catch(PDOException $e){
			errorHandle($e);
		}
	}
}
?>