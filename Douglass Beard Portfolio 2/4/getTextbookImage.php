<?php
include "database/connect.php";
include "functions/general.php";
if (isset($_GET['ref'])){
	$ref = $_GET['ref'];
	$id = bookRefToId($ref, $dbconn);
	$img = retrieveTextbookImg($id, $dbconn);
	if (count($img) == 0) {
		$img = retrieveTextbookImg(0, $dbconn);
	}
	header("Content-type: image/".$img[0]['Type']);
	echo $img[0]['picture'];
}
?>