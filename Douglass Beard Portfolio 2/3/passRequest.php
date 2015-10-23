<?php
include 'database/connect.php';
include 'functions/general.php';
include "/lib/PHPMailer/PHPMailerAutoload.php";
session_start();

if (isset($_POST['user'])) {
	$user = trim($_POST['user']);
	$user = retrieveUserByName($user, $dbconn);
	if ($user != -1) {
		$profile = retrieveProfile($user['UserId'], $dbconn);
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
    	$mail->AddAddress($profile['Email']);                      //where the mail should be sent to
    	$mail->Subject    = "Password Reset";         //subject of the mail

    	//how the link should look in the mail the "url" should point to the verification.php file
    	$link = "http://45.55.56.22/passwordreset.php".'?code='.urlencode($user_activation_hash);

    //the message in the mail with the above link
    	$mail->Body = "Please click on this link to reset:".' '.$link;

    	if(!$mail->Send()) {
    		echo "there was an error sending the mail" . ' ' . $mail->ErrorInfo;

        //if there is an error sending the mail then I delete it here

    		return false;

    	} else {
        //here I update the user with the new random created string
    		$sql = "INSERT INTO `pass-request` (`UserId`, `Code`, `Email`) VALUES (:userid, :code, :email)";
    		$stmt = $dbconn->prepare($sql);
    		$stmt->bindParam(':userid', $user['UserId'], PDO::PARAM_STR);
    		$stmt->bindParam(':code', $user_activation_hash, PDO::PARAM_STR);
    		$stmt->bindParam(':email', $profile['Email'], PDO::PARAM_STR);
    		$stmt->execute();

    		setNotice("You have been sent a link to change your password!");
    		header("location: ../log_in.php");
    	}
    }
}


?>