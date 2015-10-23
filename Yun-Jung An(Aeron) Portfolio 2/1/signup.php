<!doctype html>
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

 <h1> Welcome to Bookhunter! </h1>
        <p>Sign up today and enjoy quick and easy textbook listings!</p>
	
	

		</div>
	
	
	
	<div class="col-xs-6">
	
<p> <h2> Sign Up </h2> </p>

	
	<form id="signupForm" onsubmit="FormValidation.js" action="core/signUpScript.php" method="POST">
	
    <label for="Username">Username</label>
    <input type="Username" class="form-control" id="user" name="user" required="uname"  placeholder="Username">
	
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email" >
	
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="inputPassword" name="pass" required placeholder="Confirm Password">
	
	
    <label for="inputPasswordConfirm">Confirm Password</label>
    <input type="password" class="form-control" id="inputPasswordConfirm" name="cpass" required  data-match="#inputPassword" data-match-error="Passwords dont match fool" placeholder="Confirm">
  
          <label for= "University"> University </label>

            <div class="ui-select">
              <select id="user_campus" class="form-control" name="uni">
                <option value="0"> Queensland University of Technology </option>
               
                <option value="1"> University of Queensland </option>
                <option value="2"> Griffith </option>
             
              </select>
			</div>
  
		

          <label for= "Campus"> Campus </label>

            <div class="ui-select">
              <select id="user_campus" class="form-control" name="campus">
                <option value="0"> Gardens Point </option>
                <option value="1"> Kelvin Grove </option>
                <option value="2"> Caboolture </option>
				<option value="3"> Mt Gravatt </option>
				<option value="4"> St. Lucia </option>
              </select>
            </div>
	
	<div class="checkbox">
    <label>
      <input type="checkbox"> Remeber Me!
    </label>
	</div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
	
	</div>
	</div>
	
 </div> <!-- Sign Up -->

  
	</div> <!-- signup page --> 
	</div> <!-- main --> 
	
	

	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
 
 
 </div>
</body>



</html>