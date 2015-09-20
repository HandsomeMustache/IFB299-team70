<?php
function Sign_Up($uname,$umail,$upass,$ucpass, $db_con) {
	include_once "general.php";
	include_once "validation.php";
	
	//check Data for entry
	$noUserErrors = validateUser($uname, $upass, $ucpass);
	$noDetailErrors = validateUserDetails('', '', $umail);
	if ($noUserErrors == true && $noDetailErrors == true){
		try{
		//encrypt password
			$upass = password_hash($upass, PASSWORD_DEFAULT);

		//Sql Query
			$dbconn->beginTransaction()
			$sql ="INSERT INTO `users` (`Username`, `Password`, `Active`) VALUES (:uname, :upass, 0)";
			$query = $db_con->prepare($sql);
			$query->bindParam(':uname', $uname);
			$query->bindParam(':upass', $upass);
			$result = $query->execute();
			if($result){
				$userid = $query->getInsertId();
				$sql ="INSERT INTO `users-details` (`UserId`, `Email`) VALUES (:uname)";
				$query = $db_con->prepare($sql);
				$query->bindParam(':uname', $uname);
				$result = $query->execute();
				if ($result) {
					$dbconn->commit();
					header('location: ../index.html');
				}else{
					$dbconn->rollback();
				}
			}
		} catch(PDOException $e){
			$dbconn->rollback();
			handleError($e);
	}//End if]
}
?>