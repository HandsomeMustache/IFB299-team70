<?php include "core/retrieveTextbook.php" ?>

<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

</head> 


<body>

<?php include'components/header.php'; ?>




<div class="container">
<div class="main">
	<div class="page row" id="signup">
		<div class="col-md-9">

	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
		      <div class="text-center">
		        <img src="core/getTextbookImage.php?ref=<?php echo $ref;?>" alt="book" width="200" height="300">
		      </div>
		    </div>
	    
	     
	    
        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="col-md-4 col-sm-6 col-xs-12 book-info">
	        <div class="featurette" id="about">
	            <?php
	            if (isset($results)) {
	               	echo '<h2 class="featurette-heading">'.$results["Title"].'</h2>';
	                if ($results['ISBN'] != "") {
	                    echo '<h3>ISBN: '.$results['ISBN'].'</h3>';
	                }
	                if ($results['Edition'] != ""){
	
	                } 
	                if ($results['Subject'] != "") {
	                    echo '<h3>Subject: '.$results['Subject'].'</h3>';
	                } 
	                if ($results['CondId'] != "") {
	                    echo '<h3>Condition: '.$results['CondId'].'</h3>';
	                } 
	                if ($results['CategoryId'] != "") {
	                    echo '<h3>Looking to: '.$results['CategoryId'].'</h3>';
	                } 
	                if ($results['Description'] != "") {
	                    echo '<h3>Description:</h3>';
	                    echo'<p class="lead">'.$results['Description'].'</p>';
	                }
	
	                if ($currentUser == true) {
	                    echo '<a href="editTextbook.php?ref='.$ref.'" class="btn btn-default">Edit</a>';
	                }else{
	                    echo '<a href="my_profile.php?user='.$user['Username'].'" class="btn btn-default">Contact Me</a>';
	                }
	            }
	            
	            ?>
	         
	        </div>
		</div>
	</div>
		
		<!--<button> <type="submit" class="btn btn-default">Borrow</button>-->

        <hr class="featurette-divider">
		
			
	</div>
	    
	<div class="col-md-3">
	</div>
	
	
	<div class="col-xs-9">
	</div>
	
	
		
	</div> <!-- signup page --> 
	</div> <!-- main --> 
	
	<!-- comment box -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24MTmP51HKVbZ8QJY4.bT4Q0"+"&opts=16862&num=10&ts=1443161279817");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- comment box-->
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
 
 
 </div>
</body>



</html>