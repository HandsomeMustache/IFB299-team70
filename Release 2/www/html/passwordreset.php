<?php
	include "core/database/connect.php";
	include "core/functions/users.php";
	session_start();
	if (isset($_GET['code'])) {
		$request = getPassRequest($_GET['code'], $dbconn);
		if ($request != -1) {
			$_SESSION['request'] = $request;
		}else{
			header("location: ../index.php");
		}
	}
?>
<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">
</head> 


<body>

<?php include'components/header.php'; ?>







<div class="container">
<div class="col-sm-12">
<h1>Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-5 col-sm-offset-3">
<p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>

<form method="POST" action="core/resetPassword.php">
	<input type="password" class="input-lg form-control"  name="newPass" placeholder="New Password">
	<div class="row">
	<div class="col-sm-12">
	<span id="password" class="help-block" style=""></span>
	</div>
	<div class="col-sm-12">
	<input type="password" class="input-lg form-control" name="oldPass" placeholder="Repeat Password">
	<span id="password" class="help-block" style=""></span>
	</div>
	</div>
	<button type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" onclick="return confirm('Are you sure you want to reset your password?')" value="submit">Resest</button>
</form>


</div><!--/col-sm-6-->
</div>

</body>



</html>