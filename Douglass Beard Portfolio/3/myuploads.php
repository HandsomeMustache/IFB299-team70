
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
<div class="main">
	<div class="page row" id="signup">
		<div class="col-md-9">


			<table class="table">
	<tr>
		<td>BookId</td> </li>
		<td>Title</td>
		<td>ISBN</td>
		<td>Subject</td>
		<td>Edition</td>
		<td>Condition</td>
		<td>Category</td>
		<td>State<td>
		<td></td>
		<?php include_once 'core/retrieveMyTextbooks.php';?>
	</tr>
</table>
	
	

		</div>
	
	
	<div class="col-md-3">
	

	
	
	</div>
	
	
	<div class="col-xs-9">
	

	
	</div>
	
	
		
	</div> <!-- signup page --> 
	</div> <!-- main --> 
	
	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
 
 
 </div>
</body>



</html>