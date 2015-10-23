<?php
/*
	retrieveMyTextbooks.php

	Retrieves a list of the users textbooks

	Input: n/a
	Output: echos html code in the form of a table with 9 columns

*/
include_once 'database/connect.php';
include_once 'functions/general.php';
include 'validation.php';
$conditions = retrieveConditions($dbconn);
$categories = retrieveCategories($dbconn);
$userId = activeUser();

//Get textbooks
$sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `UserID` = :userID ORDER BY `BookID`");
$sql -> bindParam(":userID", $userId);
$sql -> execute();
$result = $sql -> fetchall();

//Print the result for each row
for ($i=0; $i < count($result); $i++) {
	$bookRef = bookIdToRef($result[$i]['BookId'], $dbconn);
	$view = generateLink("View", buildTextbookLink($bookRef, "singlebook.php"));
	$remove = generateLink("Remove", buildTextbookLink($bookRef, "core/remove.php"));
	$action = '';

	//Chooses what action to display and links them correctly
	if ($result[$i]['CategoryId'] == "2") {
		if ($result[$i]['State'] == "Active") {
			$action = generateLink("Borrowed", buildTextbookLink($bookRef, "core/updateState.php")."&action=borrowed");
		}elseif ($result[$i]['State'] != 'Hidden'){
			$action = generateLink("UnBorrow",buildTextbookLink($bookRef, "core/updateState.php")."&action=unborrow");
		}	
	}elseif ($result[$i]['CategoryId'] == "1") {
		if ($result[$i]['State'] == "Active") {
			$action = generateLink("Swaped", buildTextbookLink($bookRef, "core/updateState.php")."&action=swapped");
		}elseif ($result[$i]['State'] != 'Hidden'){
			$action = generateLink("UnSwap", buildTextbookLink($bookRef, "core/updateState.php")."&action=unswap");
		}	
	}elseif ($result[$i]['CategoryId'] == "0") {
		if ($result[$i]['State'] == "Active") {
			$action = generateLink("Sold", buildTextbookLink($bookRef, "core/updateState.php")."&action=sold");
		}elseif ($result[$i]['State'] != 'Hidden'){
			$action = generateLink("UnSell", buildTextbookLink($bookRef, "core/updateState.php")."&action=unsell");
		}
	}

	if ($result[$i]['State'] == "Active") {
		$hide = generateLink("Hide", buildTextbookLink($bookRef, "core/updateState.php")."&action=hide");
	}elseif ($result[$i]['State'] == "Hidden") {
		$hide = generateLink("Activate", buildTextbookLink($bookRef, "core/updateState.php")."&action=active");
	}else{
		$hide = "";
	}


	echo '<tr><td>'.$bookRef.'</td><td>'.$result[$i]['Title'].'</td><td>'.$result[$i]['ISBN'].'</td><td>'.$result[$i]['Subject'].
	'</td><td>'.$result[$i]['Edition'].'</td><td>'.$conditions[$result[$i]['CondId']]['Condname'].'</td><td>'.$categories[$result[$i]['CategoryId']]['CategoryName'].
	'</td><td>'.$result[$i]['State'].'</td><td>'.$view.'  '.$remove.'  '.$action.'  '.$hide.'</td></tr>';
}
?>