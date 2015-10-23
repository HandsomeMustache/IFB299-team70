<?php
	include_once 'database/connect.php';
	include_once 'functions/general.php';
	session_start();

	if (isset($_GET['ref'])) {
		$ref = $_GET['ref'];
		$id = bookRefToId($ref, $dbconn);
		$results = retrieveTextbook($id, $dbconn);
		$user = retrieveUser($results['UserId'], $dbconn);
		$categories = retrieveCategories($dbconn);
		$conditions = retrieveConditions($dbconn);
		if(isActiveUser($user['UserId'], $dbconn)){
			$currentUser = true;
		} else {
			$currentUser = false;
		}
	}
?>