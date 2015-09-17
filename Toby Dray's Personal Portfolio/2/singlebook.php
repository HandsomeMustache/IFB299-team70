<?php include "core/retrieveTextbook.php" ?>

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

	
	<div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <?php
            echo '<img class="featurette-image img-circle img-responsive pull-right" scr="'.$img[0]['picture'].'">'; 
            echo '<h2 class="featurette-heading">'.$results["Title"].'</h2>';
            if ($results['ISBN'] != "") {
            	echo '<h3>ISBN: '.$results['ISBN'].'</h3>';
            }
            if ($results['Edition'] != ""){

            } 
            if ($results['Subject'] != "") {
            	echo '<h3>Subject: '.$results['Subject'].'</h3>';
            } 
            if ($results['Condition'] != "") {
            	echo '<h3>Condition: '.$results['Condition'].'</h3>';
            } 
            if ($results['Category'] != "") {
            	echo '<h3>Looking to: '.$results['Category'].'</h3>';
            } 
            if ($results['Description'] != "") {
            	echo '<h3>Description:</h3>';
            	echo'<p class="lead">'.$results['Description'].'</p>';
            }

            ?>
        </div>
		
		<button> <type="submit" class="btn btn-default">Borrow</button>

        <hr class="featurette-divider">

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