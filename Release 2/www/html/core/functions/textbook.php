<?php
/*
	buildTextbookLink()

	Builds a link for any pages that use GET to recieve the textbook id

	Input: The id, Desired page to travel too
	Output: the address of the page

*/
function buildTextbookLink($ref = '', $page = ''){
	return $page."?ref=".$ref;
}

/*
	generateLink()

	generates a hyperlink to connect pages

	Input: text, link and the class of the hyperlink
	Output: returns the html code

*/
function generateLink($text = '', $link = '', $class=''){
	return '<a class="'.$class.'" href="'.$link.'">'.$text.'</a>';
}


function retrieveTextbooksByCategory($category, $dbconn){
	if ($category = "all") {
		$sql = $dbconn -> prepare("SELECT * FROM `textbooks`");
	}else{
		$sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `Category` = :cat");
		$sql -> bindParam(':cat', $category);
	}
	$sql -> execute();
	return $sql -> fetchall();
}

/*
	retrieveTextbook()

	retrieve the textbook from the database

	Input: The book id, The database connection
	Output: the results

*/
function retrieveTextbook($id, $dbconn){
	if (isset($id) && isset($dbconn)) {
		$sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `BookId` = :id");
		$sql -> bindParam(':id', $id);
		$sql -> execute();
		$results = $sql -> fetch(PDO::FETCH_ASSOC);
		return $results;
	} else {
		return -1;
	}
}

//retrieveTextbookImg()
//
//Retrieves an uploaded image from the database.
//input: Book id
//output: Array containg all the images found matching that id

function retrieveTextbookImg($id, $dbconn){
	if (isset($id) && isset($dbconn)) {
		$sql = $dbconn -> prepare("SELECT * FROM `textbook-images` WHERE `Bookid` = :id");
		$sql -> bindParam(':id', $id);
		$sql -> execute();
		$results = $sql -> fetchall();
		return $results;
	} else {
		return -1;
	}
}

/*
	retrieveCategories()

	retrieves all the categories

	Input: n/a
	Output: array containing all the categories

*/
function retrieveCategories($dbconn){
	if (isset($dbconn)) {
		$sql = $dbconn -> prepare("SELECT * FROM `category` ORDER BY `CategoryId`");
		$sql -> execute();
		$results = $sql -> fetchall();
		return $results;
	} else {
		return -1;
	}
}
/*
	retrieveConditons()

	retrieves all the Conditons

	Input: n/a
	Output: array containing all the Conditons

*/
function retrieveConditions($dbconn){
	if (isset($dbconn)) {
		$sql = $dbconn -> prepare("SELECT * FROM `cond` ORDER BY `CondId`");
		$sql -> execute();
		$results = $sql -> fetchall();
		return $results;
	} else {
		return -1;
	}
}

/*
	buildSearchArray()

	Returns an array of the appropiate size to be handed to the buildSearchLink()
	function.

	Input: n/a
	Output: Array of the correct length

*/
function buildSearchArray(){
	$searchArray['BookRef'] = "";
	$searchArray['User'] = "";
	$searchArray['Title'] = "";
	$searchArray['ISBN'] = "";
	$searchArray['Subject'] = "";
	$searchArray['Edition'] = "";
	$searchArray['Condition'] = "";
	$searchArray['Category'] = "";
	$searchArray['Advance'] = "";
	return $searchArray;
}

/*
	buildSearchLink()

	Builds a link to the textbooklistpage with the search paramaters

	Input: Search Aarry containg filters
	Output: Link

*/
function buildSearchLink($searchArray){
	$link = "textbooklistpage.php?";
	if ($searchArray['BookRef'] != "") {
		$link = $link."bid=".$searchArray['BookRef']."&";
	}
	if ($searchArray['User'] != "") {
		$link = $link."user=".$searchArray['User']."&";
	}
	if ($searchArray['Title'] != "") {
		$link = $link."t=".$searchArray['Title']."&";
	}
	if ($searchArray['ISBN'] != "") {
		$link = $link."ib=".$searchArray['ISBN']."&";
	}
	if ($searchArray['Subject'] != "") {
		$link = $link."s=".$searchArray['Subject']."&";
	}
	if ($searchArray['Edition'] != "") {
		$link = $link."ed=".$searchArray['Edition']."&";
	}
	if ($searchArray['Condition'] != "") {
		$link = $link."con=".$searchArray['Condition']."&";
	}
	if ($searchArray['Category'] != "") {
		$link = $link."cat=".$searchArray['Category']."&";
	}
	if ($searchArray['Advance'] != ""){
		$link = $link."adv=1&";
	}
	return $link;

}

/*
	generateBookRef();

	Generates a refrence number for a book using a randome number, time and encyrption;

	Input: n/a
	Output: Unique refrence number

*/

function generateBookRef(){
	define('BOOKREFLENGTH', 7);

	$bookRef = crypt(uniqid(rand(),1));
	//Removecharacters
	$bookRef = strip_tags(stripslashes($bookRef));
	$bookRef = str_replace(".", "", $bookRef);
	$bookRef = strrev(str_replace("/","",$bookRef));
	$bookRef = substr($bookRef, 0, BOOKREFLENGTH);
	return $bookRef;
	
}

/*
	refToBookId()

	Retrieves the bookid of a refrence number

	Input: Book refrence number
	Output: BookId or -1 if not found;

*/
function bookRefToId($bookRef, $dbconn){
	$sql = $dbconn->prepare('SELECT `BookId` FROM `book-ref` WHERE `BookRef` = :ref');
	$sql->bindParam(':ref', $bookRef);
	$sql->execute();
	$results = $sql->fetchall();

	if (count($results) == 1) {
		return $results[0]['BookId'];
	}else{
		return -1;
	}
}

/*
	bookIdToRef()

	Retrieves the BookRef of a book id

	Input: BookId
	Output: BookRef

*/
function bookIdToRef($bookId, $dbconn){
	$sql = $dbconn->prepare('SELECT `BookRef` FROM `book-ref` WHERE `BookId` = :id');
	$sql->bindParam(':id', $bookId);
	$sql->execute();
	$results = $sql->fetchall();

	if (count($results) == 1) {
		return $results[0]['BookRef'];
	}else{
		return -1;
	}
}



?>