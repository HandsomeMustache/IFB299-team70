<?php
	/*
		setNotice()
	
		sets a session varible 'notice'  a msg and a class 
	
		Input: Message, Class
		Output: $_SESSION['notice'] is set
	
	*/
function setNotice($msg, $class = "alert alert-info"){
	if (isset($msg)) {
		$_SESSION['notice']['msg'] = $msg;
		$_SESSION['notice']['class'] = $class;
	}else{
		return -1;
	}
}

/*
	printNotice()

	prints the message

	Input: n/a
	Output: echos the notice in html

*/
function printNotice(){
	if (isset($_SESSION['notice'])){
		echo '<div class="'.$_SESSION['notice']['class'].'">'.
		$_SESSION['notice']['msg'].'</div>';
		unset($_SESSION['notice']);
	}
}
?>