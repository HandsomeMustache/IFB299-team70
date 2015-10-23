<?php
/*
	checkLoggedOn()
	
	Checks if a user is currently logged on

	inputs: N/A
	outputs: True or False
*/
function checkLoggedOn(){
	if(isset($_SESSION['Username'])){
		return true;
	}else{
		return false;
	}
}

/*
	isActiveUser

	Checks to see if it is the current user

	Input: username
	Output: true or false

*/
function isActiveUser($user){
	if ($user == activeUser()) {
		return true;
	}else{
		return false;
	}
}

/*
	activeUser

	gets the current user

	Input: N/A
	Output: the active username

*/
function activeUser()
{
	if (checkLoggedOn()) {
		return $_SESSION['Username'];
	}else{
		return -1;
	}
}

/*
	retrieveUserId

	retrieves the user id using the username

	Input: username and database connection
	Output: userid

*/
function retrieveUserbyName($username, $dbconn){
	$sql = $dbconn->prepare('SELECT * FROM `users` WHERE `Username` = :user');
	$sql->bindParam(':user', $username);
	$sql->execute();
	$results = $sql->fetchall();

	if (count($results) == 1) {
		return $results[0];
	}else{
		return -1;
	}	
}

/*
	retrieveUser

	retrieves the users account details

	Input: Username
	Output: the results of the sql query or -1 for an error

*/
function retrieveUser($user, $dbconn){
	if (isset($user) && isset($dbconn)) {
		$sql = $dbconn->prepare("SELECT * FROM `users` WHERE `UserId` = :user");
		$sql->bindParam(':user', $user);
		$sql->execute();
		$results = $sql->fetch(PDO::FETCH_ASSOC);
		return $results;
	}else{
		return -1;
	}
}

/*
	retrieveProfile

	retrieves the users profile

	Input: the UserId and database connection
	Output: the results of the sql query or -1 for an error

*/
function retrieveProfile($user, $dbconn){
	if (isset($user) && isset($user, $dbconn)){
		$sql = $dbconn->prepare("SELECT * FROM `user-details` WHERE `UserId` = :user");
		$sql->bindParam(':user', $user);
		$sql->execute();
		$results = $sql->fetch(PDO::FETCH_ASSOC);
		return $results;
	}else{
		return -1;
	}
}

//retrieveProfileImg()
//
//Retrieves an uploaded image from the database.
//input: User id
//output: Array containg all the images found matching that id

function retrieveProfileImg($id, $dbconn){
	if (isset($id) && isset($dbconn)) {
		$sql = $dbconn -> prepare("SELECT * FROM `profile-images` WHERE `UserId` = :id");
		$sql -> bindParam(':id', $id);
		$sql -> execute();
		$results = $sql -> fetchall();
		return $results;
	} else {
		return -1;
	}
}

/*
	retrieveUniversities()

	retrieve all the universities

	Input: n/a
	Output: array of universities

*/
function retrieveUniversities($dbconn){
	$sql = $dbconn -> prepare("SELECT * FROM `universities`");
	$sql -> execute();
	$results = $sql -> fetchall();
	return $results;
}

/*
	retrieveCampus()

	retrieves the name of a campus

	Input: campusId and database connection
	Output: array of campus's

*/
function retrieveCampus($dbconn){
	$sql = $dbconn -> prepare("SELECT * FROM `campus`");
	$sql -> execute();
	$results = $sql -> fetchall();
	return $results;
}


function sendConfirmation($userId, $email, $dbconn)
{
include "/lib/PHPMailer/PHPMailerAutoload.php";
$user_activation_hash = sha1(uniqid(mt_rand(), true)); //creating ramdom string<!---->

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->SMPTSecure = 'tls';

    $mail->Host       = "smtp.mandrillapp.com";         // SMTP server
    $mail->Username   = "bookhuntersnoreply@gmail.com"; // SMTP account username
    $mail->Password   = "BYXmAIrbpDKaCmA5J4PzUA";                 // SMTP account password
    $mail->SMTPAuth   = true;                       // enable SMTP authentication
    $mail->Port       = 587;                       // set the SMTP port for the server

    $mail->From       = "bookhuntersnoreply@gmail.com"; //the email the mail comes from
    $mail->FromName   = "BookHunters";                 //what name should be shown at the email
    $mail->AddAddress($email);                      //where the mail should be sent to
    $mail->Subject    = "Email Validation";         //subject of the mail

    //how the link should look in the mail the "url" should point to the verification.php file
    $link = "http://45.55.56.22/verification.php".'?verification_code='.urlencode($user_activation_hash);

    //the message in the mail with the above link
    $mail->Body = "Please click on this link to activate your account:".' '.$link;

    if(!$mail->Send()) {
        echo "there was an error sending the mail" . ' ' . $mail->ErrorInfo;

        //if there is an error sending the mail then I delete it here

        return false;

    } else {
        //here I update the user with the new random created string
        $sql = "INSERT INTO `confirmation` (`UserId`, `Code`, `Email`) VALUES (:userid, :code, :email)";
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(':userid', $userId, PDO::PARAM_STR);
        $stmt->bindParam(':code', $user_activation_hash, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return true;
    }
}

/*
	getPassRequest()
	
	gets the pass request

	Input: the validation code
	Output: array containing the details of the validation

*/

function getPassRequest($code, $dbconn)
{
	$sql = $dbconn->prepare("SELECT * FROM `pass-request` WHERE `Code` = :code");
	$sql->bindParam(':code', $code);
	$sql->execute();
	$results = $sql->fetchall();
	if (count($results) > 0) {
		return $results[0];
	}else{
		return -1;
	}
}
?>