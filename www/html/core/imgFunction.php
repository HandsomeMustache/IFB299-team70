<?php
session_start();

include_once 'database/connect.php';
include_once 'functions/general.php';
include_once 'functions/errors.php';

if(isset($_FILES['image'])&& $_FILES['image']['size']>0)
{
	$tmpName = $_FILES['image']['tmp_name'];
    $fp = fopen($tmpName, 'rb');
}

try
    {
		$sql = $dbconn -> prepare("INSERT INTO `image`(picture) VALUES (?)");
		
		$sql -> bindParam(1, $fp, PDO::PARAM_LOB);
		$result = $sql -> execute();
		if ($result) {
			echo "image upload successfully";
			}
	} catch(PDOException $e){
			handleError($e);
	    }
?>