<?php
	//includes
	include_once "database/connect.php";
	include_once "functions/general.php";

	$filters = "`State` = 'Active'";
	$searchArray = buildSearchArray();
	//Check which filters are turned on and construct query
	//BookId
	if (isset($_GET['bid'])){
		$bid = $_GET['bid'];
		$searchArray['BookRef'] = $bid;
		$bookId = bookReftoId($bid, $dbconn);
		$filters = $filters." AND `BookId` = ".$bookId;
	}

	//UserId
	if (isset($_GET['user'])){
		$user = retieveUser($_GET['user'], $dbconn);
		$searchArray['User'] = $user['Username'];
		$filters = $filters." AND `UserId` = ".$user['UserId'];
	}

	//Title
	if (isset($_GET['t'])){
		$t = $_GET['t'];
		$searchArray['Title'] = $t;
		$filters = $filters." AND `Title` LIKE '%".$t."%'";
	}

	//ISBN
	if (isset($_GET['ib'])){
		$ib = $_GET['ib'];
		$searchArray['ISBN'] = $ib;
		$filters = $filters." AND `ISBN` = ".$ib;
	}

	//Subject
	if (isset($_GET['s'])){
		$s = $_GET['s'];
		$searchArray['Subject'] = $s;
		$filters = $filters." AND `Subject` = '".$s."'";
	}

	//Edition
	if (isset($_GET['ed'])){
		$ed = $_GET['ed'];
		$searchArray['Edition'] = $ed;
		$filters = $filters." AND `Edition` = '".$ed."'";
	}

	//Condition
	if (isset($_GET['con'])){
		$con = $_GET['con'];
		$searchArray['Condition'] = $con;
		$filters = $filters." AND `Cond` = ".$con;
	}

	//Category
	if (isset($_GET['cat'])){
		$cat = $_GET['cat'];
		$searchArray['Category'] = $cat;
		$filters = $filters." AND `CategoryId` = ".$cat;
	}

	//SQL
	$sql = "SELECT * FROM `textbooks` WHERE ".$filters;
	$sql = $dbconn->prepare($sql);
	$sql->execute();

	//Outputs
	$results = $sql->fetchall();
	$page = (isset($_GET['pg'])) ? $_GET['pg'] : 1 ;
	$link = buildSearchLink($searchArray);

?>