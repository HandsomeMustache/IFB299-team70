<?php
echo $_SERVER["DOCUMENT_ROOT"];
include $_SERVER["DOCUMENT_ROOT"]."/core/functions/general.php";
$searchArray = buildSearchArray();
$searchArray['Title'] = $_POST['title'];
$link = buildSearchLink($searchArray);
header("location: ../".$link);
?>