<?php
/*
	buildTextnookLink()

	Builds a link for any pages that use GET to recieve the textbook id

	Input: The id, Desired page to travel too
	Output: the address of the page

*/
function buildTextbookLink($id = '', $page = ''){
	return $page."?id=".$id;
}

/*
	generateLink()

	generates a hyperlink to connect pages

	Input: text, link and the class of the hyperlink
	Output: returns the html code

*/
function generateLink($text = '', $link = '', $class=''){
	return '<a class="'.$class'" href="'.$link.'">'.$text.'</a>';
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
		$sql = $dbconn -> prepare("SELECT * FROM `category`");
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
		$sql = $dbconn -> prepare("SELECT * FROM `cond`");
		$sql -> execute();
		$results = $sql -> fetchall();
		return $results;
	} else {
		return -1;
	}
}

?>