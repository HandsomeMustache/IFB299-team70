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
		</div>
	
	

	<?php
		include_once 'core/database/connect.php';
		include_once 'core/functions/general.php';
		$list = retrieveTextbooksByCategory('all', $dbconn);

		for ($i=0; $i < count($list); $i++) { 
			echo '"<div class="row">
	
		<div class="col-sm-6 col-md-4">
		
		<div class="thumbnail">
		<img src="books.png" alt="..." width="242" height="200">
		<div class="caption">
        <h3>'.$list[$i]['Title'].'</h3>
        <p>'.$list[$i]['Description'].'</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		<!-- href button to individual book page-->
		</div>
		</div>
		</div>"';
		}

	?>
	
	</div>
	
	</div>	
	
	</div> <!-- main div -->
	
	
		
	</div> <!-- Container div --> 

	
	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
 
 
 </div>
</body>



</html>';