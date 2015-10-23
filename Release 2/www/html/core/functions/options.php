<?php
/*
	printCategoryOptions

	returns string containing html for options of all categories(to be used in a select on a form)

	Input: database connection
	Output: string containing html

*/

function printCategoryOptions($dbconn){
	$sql = $dbconn->prepare("SELECT * FROM `category` ORDER BY `CategoryId")
}
?>