<?php if(!isset($_SESSION)){session_start();} ?>
<link href="../../css/bootstrap_1.css" rel="stylesheet">
	
	<div class="content row">
		<div class="col-lg-12">
			<header class="clearfix">
				<section id="branding">
				
				</section><!-- branding -->
				
				<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
					
					
					
					<li><a href="index.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
					<li><?php include "profileButton.php" ?></li>
					<li><?php include "uploadButton.php" ?></li>
					<li><?php include "loginButton.php" ?></li>
					<li><?php include "myuploadsButton.php" ?></li>
					</ul><!-- nav -->
				
					
					
					<form class="navbar-form navbar-right" role="search">
					
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
					</form>
					
					
				</div><!-- navbar -->
			</header><!-- heading -->
		</div><!-- column -->
	</div><!-- content --> 
	
	
	
	

