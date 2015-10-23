<?php
include "database/connect.php";
include "functions/general.php";
if (isset($_GET['user'])){
	$user = $_GET['user'];
	$user = retrieveUserByName($user, $dbconn);
	$img = retrieveProfileImg($user['UserId'], $dbconn);
	if (count($img) == 0) {
		$img = retrieveProfileImg(0, $dbconn);
		
	}
	header("Content-type: image/".$img[0]['Type']);
	echo $img[0]['Image'];
}
?>