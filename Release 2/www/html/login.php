<?php
session_start();
include_once 'database/connect.php';
include_once 'functions/general.php';
$errmsg_arr = array();
$errflag = false;


// new data

$user = $_POST['uname'];
$password = $_POST['pword'];

if($user == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
	echo "string";
}else{
	$errmsg_arr[] = '';
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}else{
	$errmsg_arr[] = '';
}

if(!$errflag) {
// query
	echo "query";
	try{
		$rows = retrieveUser($user);
		echo "success";

	}catch(PDOException $e){
		echo $e->getMessage();
	}

	if(count($rows) > 0 || or $rows['Active'] == 0) {
		if(password_verify($password, $rows['Password'])){
			$_SESSION['Username'] = $rows['UserId'];
			session_write_close();
			header("location: ../textbooklistpage.php");
			echo "home";
			exit();

		}else{
			echo "false";
			setNotice('Username or Password is wrong!', "alert alert-danger");
			$errflag = true;
		}
	}else{
		setNotice("Username not found! Make sure you've validated your account.", "alert alert-danger");
		$errflag = true;
	}
}

	if ($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../log_in.php");
		exit();
	}

?>