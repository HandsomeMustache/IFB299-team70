<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <script src="passwordreset.js"></script>
</head> 


<body>

<?php include'components/header.php'; ?>







<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>Enter Username</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center">Use the form below to request your password. Your password will sent by email.</p>
<form method="post" id="requestForm" method='POST' action='core/passRequest.php'>

   <input type="username" class="input-lg form-control" name="user" id="username" placeholder="Username" autocomplete="off">
<div class="row">
<div class="col-sm-12">
<span id="username" class="help-block" style=""></span>
</div>
</div>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" href="" data-loading-text="Sent Email Confirmation" value="Submit">
</form>


</div><!--/col-sm-12-->
</div><!--/row-->
</div>


</body>



</html>