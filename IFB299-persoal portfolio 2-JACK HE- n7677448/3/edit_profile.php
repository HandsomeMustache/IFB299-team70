<?php
  include "core/database/connect.php";
  include "core/functions/general.php";
  include "core/validation.php";
  $profile = retrieveProfile(activeUser(), $dbconn);
  $user = retrieveUser(activeUser(), $dbconn);
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BookHunters</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- BookHunters -->
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<?php include'components/header.php'; ?>


<div class="container" style="padding-top: 5px;">
  <h2 class="page-header">Edit Profile</h2>
  <div class="row">
    <form action="core/updateProfile.php" method="POST" enctype="multipart/form-data">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <?php
		include_once 'core/database/connect.php';
		include_once 'core/functions/general.php';
		include_once 'core/retrieveSearch.php';
		$categories = retrieveCategories($dbconn);
		$userId = activeUser();
		
		//Get profile image
        $sql = $dbconn -> prepare("SELECT * FROM `profile-images` WHERE `UserID` = :userID");
        $sql -> bindParam(":userID", $user['UserId']);
        $sql -> execute();
        $result = $sql -> fetchall();
        
		
		
        echo' <img src="core/getProfileImage.php?user='.$user['Username'].'" class="avatar img-circle img-thumbnail" alt="avatar">'
		
	    ?>	
        <!-- upload image-->
        <h6>Upload a different photo...</h6>
        <input type="file" name="image" id="image" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$profile['Firstname'].'"';?> type="text" name="fname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$profile['Surname'].'"';?> type="text" name="sname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Phone:</label>
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$profile['PhoneNumber'].'"';?> type="text" name="phone">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">University:</label>
          <div class="col-lg-8">
            <select id="user_campus" class="form-control" name="uni">
                <option value="0"> Queensland University of Technology </option>
                <option value="1"> University of Queensland </option>
                <option value="2"> Griffith </option>
             
              </select>
          </div>

            
              
			
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Campus:</label>
          <div class="col-lg-8">
            <select id="user_campus" class="form-control" name="campus">
                <option value="0"> Gardens Point </option>
                <option value="1"> Kelvin Grove </option>
                <option value="2"> Caboolture </option>
				<option value="3"> Mt Gravatt </option>
				<option value="4"> St. Lucia </option>
              </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$profile['Email'].'"';?> type="text" name="email">
          </div>
        </div>
		
		
        
		
		
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value=<?php echo '"'.$user['Username'].'"' ?> type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Old Password:</label>
          <div class="col-md-8">
            <input class="form-control" placeholder="Old Password" type="password" name="opass">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" placeholder="New Password" type="password" name="npass">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" placeholder="Confirm Password" type="password" name="cpass">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" name="update" type="submit" id="update">
            <span></span>
            <a class="btn btn-default" href="my_profile.php">Cancel</a>
          </div>
        </div>
      
    </div>
    </form>
  </div>
</div>
</body>