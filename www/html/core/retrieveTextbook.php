<?php
	include_once 'database/connect.php';
	include_once 'functions/general.php';


	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$results = retrieveTextbook($_GET['id'], $dbconn);
		if(isActiveUser($results['UserId'], $dbconn)){
			$currentUser = true;
		} else {
			$currentUser = false;
		}
	}
?>