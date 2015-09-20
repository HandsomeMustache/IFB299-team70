<?php
include "core/database/connect.php";
include "core/functions/general.php";
session_start();

if(!empty($_GET['verification_code']) && isset($_GET['verification_code'])){
    $verificationCode = $_GET['verification_code'];

//check the database for the verification code from the link
    $sql = 'SELECT `UserId`, `Code` FROM `confirmation` WHERE `Code` = :verification';
    $stmt = $dbconn->prepare($sql);
    $stmt->bindParam(':verification', $verificationCode, PDO::PARAM_STR);
    $stmt->execute();
    $row = $stmt->fetch();

    $Id = $row['UserId'];
    $user = retrieveUser($Id, $dbconn);
    if (empty($row)){
        setNotice("The account was not found", "alert alert-danger");
    }elseif ($user['Active'] == 1) {
        setNotice("You have already been validated!", "alert alert-danger");
    }else{
            //if they match. make the user active in db
        $sql = 'UPDATE `users` SET Active = 1 WHERE UserId=:Id';
        $stmt = $dbconn->prepare($sql);
        $stmt->bindParam(':Id', $Id, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        setNotice("Succesfully Registered!", "alert alert-success");
    }

}
header("location: index.php");
?>