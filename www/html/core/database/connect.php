<?php
//Configurtion
$dbhost = 'localhost';
$dbname = 'bookhunters';
$dbuser = 'root';
$dbpass = 'ifb29970';

//Create Database Connection
try{
$dbconn = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser,$dbpass);
$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}catch(PDOException $e){
	echo $e->getMessage();
}
?>