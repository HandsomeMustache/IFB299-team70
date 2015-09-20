<?php
include "database/connect.php";
include "functions/general.php";
if (isset($_GET['id'])){
	$img = retrieveTextbookImg($_GET['id'], $dbconn);

	if (count($img) == 0) {
		$img = retrieveTextbookImg(0, $dbconn);
	}

	header("content-type: image/".$img['Type']);
	echo $result['picture'];
}
?>