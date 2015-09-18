<?php

session_start();

include_once 'database/connect.php';
include_once 'functions/general.php';
include_once 'functions/errors.php';

//conect to the bookid for the book image
$BookId = $_SESSION['BookId'];


$dbconn -> beginTransaction();

//select image from the database
$sql = $dbconn->prepare('SELECT FROM `textbook-images` WHERE BookId = :BookId');
$result = $sql->execute();



?>