<?php
	include_once 'database/connect.php';
	include_once 'functions/general.php';
	include_once 'validation.php';

	    $ref = $_GET['ref'];
		$id = bookRefToId($ref, $dbconn);
		$book = retrieveTextbook($id, $dbconn);

	if (isActiveUser($book['UserId'])) {
		try{
	    $sql = $dbconn -> prepare("DELETE FROM `textbooks` WHERE `BookId` = :id");
	    $sql -> execute();
	    $sql -> bindParam(':id', $id);
	    $imagesql = $dbconn -> prepare("DELETE FROM `textbook-images` WHERE `BookId` = :id");
	    $imagesql -> bindParam(':id', $id);
	    $imagesql -> execute();
	    if($sql ->execute()||$imagesql ->execute()){
	        header("location: ../myuploads.php");
	    }else{
	        echo('Unable to delete Textbook  !');
	    }   
		}catch(PDOException $e){
			errorHandle($e);
    	}
	}
?>