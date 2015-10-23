<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  
  <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3LLFC6qV3ng0HuVIaaCU7Z6QN9Z8VuPy";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
  
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

	
	<form data-toggle="validator" id="signupForm" class="form-horizontal"  action="core/signUpScript.php" method="POST">
	
    <label for="Username" class="control-label">Username</label>
    <input type="Username" class="form-control" id="user" name="user" required="uname"  placeholder="Username">
	
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email" >
	
    <label for="inputPassword" class="control-label">Password</label>
    <input type="password" data-minlength="6" class="form-control" id="inputPassword" name="pass" required placeholder="Password">
	
	
    <label for="inputPasswordConfirm" class="control-label">Confirm Password</label>
    <input type="password" class="form-control" id="inputPasswordConfirm" name="cpass" required  data-match="#inputPassword" data-match-error="Passwords don't match fool" placeholder="Confirm Password">
    <script>
$(document).ready(function() {
    $('#signupForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            confirmPassword: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
  
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