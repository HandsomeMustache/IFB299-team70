<?php
function printErrArray($erase = true, $value = NULL){
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul style="padding:0; color:red;">';
		if (isset($value)) {
			$msg = $_SESSION['ERRMSG_ARR'][$value];
			echo '<li>',$msg,'</li>';
		} else {
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
			}

			echo '</ul>';
		}


		if ($erase == true){
			unset($_SESSION['ERRMSG_ARR']);
		}
	}
}

function retrieveErrArray($erase = true){
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		$array = $_SESSION['ERRMSG_ARR'];
		if ($erase == true) {
			unset($_SESSION['ERRMSG_ARR']);
		}
		return $array;
	} else {
		return -1;
	}
}

function setErrArray($array){
	if(isset($_SESSION['ERRMSG_ARR'])){
		unset($_SESSION['ERRMSG_ARR']);
	}

	$_SESSION['ERRMSG_ARR'] = $array;
}

function handleError(Exception $e){
	echo "Server Error: ".$e-> getcode();
	$trace = $e->getTrace();
	if($trace[0]['class'] != ""){
		$class =  $trace[0]['class'];
	}
	$method = $trace[0]['function'];
	$file = $trace[0]['file'];
	$line = $trace[0]['line'];
	$Exception_Output = $e-> getMessage();
	echo "<br/ >Class & Method: ".$class."->".$method.
	"<br/ >File: ".$file."[".$line."]"; 
	return $Exception_Output;
}
?>