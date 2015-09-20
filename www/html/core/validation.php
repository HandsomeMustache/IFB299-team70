<?php
//Validation.php
//
//Checks if the users is logged on, if not sends them to the index page.
//Should be used on every page that requires users to be logged on
//before any other php is run

include_once 'functions/general.php';
if(!isset($_SESSION)){session_start();}


if (!checkLoggedOn()) {
	header('location: ../log_in.php');
}