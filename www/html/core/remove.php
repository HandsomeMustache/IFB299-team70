<?php
	include_once 'database/connect.php';
	include_once 'functions/general.php';

	try{
	    $id = $_GET['id'];
	    $sql = $dbconn -> prepare("DELETE FROM `textbooks` WHERE `BookId` = :id");
	    $sql -> bindParam(':id', $id);
	    $sql -> execute();
	    if($sql ->execute()){
	        header("location: ../myuploads.php");
	    }else{
	        echo('Unable to delete Textbook  !');
	    }   
	}catch(PDOException $e){
	errorHandle($e);
    }
?>