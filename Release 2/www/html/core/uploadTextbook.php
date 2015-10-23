<?php
session_start();

include_once 'database/connect.php';
include_once 'functions/general.php';
include_once 'functions/errors.php';

if(isset($_POST['submit'])){
	//Trimming	
	$title = trim($_POST['title']);
	$isbn = trim($_POST['isbn']);
	$subject = trim($_POST['subject']);
	$edition = trim($_POST['edition']);
	$condition = trim($_POST['condition']);
	$description = trim($_POST['description']);
	$category = trim($_POST['category']);

	//Validate Entry
	$valid = true;
	$img_flag = false;
	$errmsg_arr = array();
	
	//check title exist and size
	if ($title == "") {
		$errmsg_arr[] = "Please enter a title ";
		$valid = false;
	}
	if (strlen($title) > 30) {
		$errmsg_arr[] = "Title needs to be less then 30 characters";
		$valid = false;
	}
	
	//check isbn exist and size
	if ($isbn = ""){
        if (!is_numeric($isbn)) {
		    $errmsg_arr[] = "ISBN needs to be digits only";
		    $valid = false;
	    }
	    if (strlen($isbn) != 13) {
		    $errmsg_arr[] = "ISBN needs to be 13 digits";
		    $valid = false;
	    }
	}else {
	    $valid = true;
	}
	
    //check edition exist and size
	if (!is_numeric($edition) && $edition != '') {
		$errmsg_arr[] = "Edition needs to be digits only";
		$valid = false;
	}
    if (strlen($edition) > 11) {
		$errmsg_arr[] = "Edition needs to be less then 11 digits";
		$valid = false;
	}
	
	//check subject length
	if (strlen($subject) > 30) {
		$errmsg_arr[] = "Subject needs to be less then 30 characters";
		$valid = false;
	}

    //check description length
	if (strlen($description) > 254) {
		$errmsg_arr[] = "Description needs to be less then 254 characters";
		$valid = false;
	}


	//Validate Image
	if(isset($_FILES['image'])){
		if ($_FILES['image']['size'] > 0 && $_FILES['image']['size'] < 5242880  && substr($_FILES['image']['type'], 0, 5) == "image") {
			$tmpName = $_FILES['image']['tmp_name'];
			$imgType = substr($_FILES['image']['type'], 6);
    		$fp = fopen($tmpName, 'rb');
    		$img_flag = true;
		}else{
			$errmsg_arr[] = "Image Error! The file may be empty, corrupted or exceeding 5mbs";
			$vaild = false;
		}
	}

	
	//Insert data into database
	if ($valid == true) {
		try{
			//Start transaction
			$dbconn -> beginTransaction();

			//Insert the book into the database
			$sql = $dbconn->prepare('INSERT INTO `textbooks`(`UserId`, `Title`, `ISBN`, `Subject`, `Edition`, `CondId`, `Description`, `CategoryId`, `State`) VALUES
				(:userID, :title, :isbn, :subj, :edit, :cond, :des, :cat, "Active")');
			$sql->bindParam(':userID', $_SESSION['Username']);
			$sql->bindParam(':title', $title);
			$sql->bindParam(':isbn', $isbn);
			$sql->bindParam(':subj', $subject);
			$sql->bindParam(':edit', $edition);
			$sql->bindParam(':cond', $condition);
			$sql->bindParam(':des', $description);
			$sql->bindParam(':cat', $category);
			$result = $sql->execute();
			$id = $dbconn->lastInsertId();

			//Check the sql worked
			if ($result) {
				//Ref
				$ref = generateBookRef();
				$sql = $dbconn->prepare('INSERT INTO `book-ref`(`BookId`, `BookRef`) VALUES (:id, :ref)');
				$sql->bindParam(':id', $id);
				$sql->bindParam(':ref', $ref);
				$result = $sql->execute();

				if ($result) {
					//Insert image if it exists
					if ($img_flag == true) {
						$sql = $dbconn->prepare("INSERT INTO `textbook-images`(`BookId`, `picture`, `Type`) VALUES (:id, :img, :type)");
						$sql->bindParam(':img', $fp, PDO::PARAM_LOB);
						$sql->bindParam(':id', $id);
						$sql->bindParam(':type', $imgType);
						$result = $sql->execute();
					//Check if its succesful
						if ($result) {
							$dbconn->commit();
							header('location: ../myuploads.php');
						}else{
							$dbconn->rollback();
						}
					}else{
						$dbconn->commit();
						header('location: ../myuploads.php');
					}
				}else{
					$dbconn->rollback();
				}
			}else{
				$dbconn ->rollback();
			}//End if




		} catch(PDOException $e){
			echo $e->getMessage();
			$dbconn->rollback();
		}//End try&catch
	}else{
		setErrArray($errmsg_arr);
		session_write_close();
		header('location: ../uploadbookpage.php');
	}//End if
}//End if

?>