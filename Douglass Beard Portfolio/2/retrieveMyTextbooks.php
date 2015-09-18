<?php
session_start();
include_once 'database/connect.php';
include_once 'functions/general.php';
include 'validation.php';
$conditions = retrieveConditions($dbconn);
$categories = retrieveCategories($dbconn);
$userId = activeUser();

$sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `UserID` = :userID ORDER BY `BookID`");
$sql -> bindParam(":userID", $userId);
$sql -> execute();
$result = $sql -> fetchall();

?>