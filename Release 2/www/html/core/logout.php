<?php
session_start();
session_destroy();
session_start();
include "functions/general.php";
setNotice('You have been succesfully logged out!', 'alert alert-success');
header('location: ../index.php');
?>
