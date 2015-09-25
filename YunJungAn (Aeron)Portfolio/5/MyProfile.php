<?php
  include "core/database/connect.php";
  include "core/functions/general.php";
  session_start();

  if (isset($_GET['id'])) {
    $profile = retrieveProfile($_GET['id'], $dbconn);
    $user = retrieveUser(activeUser(), $dbconn);
  }else{
    $profile = retrieveProfile(activeUser(), $dbconn);
    $user = retrieveUser(activeUser(), $dbconn);
    include "core/validation.php";
  }
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
<?php 
include'components/header.php';
printNotice();
?>


<div class="container" style="padding-top: 5px;">
  <h2 class="page-header">My Profile</h2>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="http://i.imgur.com/YDUJS8G.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <p><?php echo $user['Username'];?></p>
          <div class="col-md-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <p><?php echo $profile['Firstname'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <p><?php echo $profile['Surname'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">University:</label>
          <p><?php echo $profile['UniId'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Campus:</label>
          <p><?php echo $profile['CampusId'];?></p>
          <div class="col-md-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <p><?php echo $profile['Email'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
          <?php
          if ($user['UserId'] == activeUser()) {
            echo '<a class="btn btn-primary" href="edit_profile.php">Edit</a>';	
          }
          ?>
		  
		
		  <a class="btn btn-default" href="myuploads.php">My Uploads</a>
		  
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>

	
        <!--div class="form-group">
          <label class="col-lg-3 control-label">Time Zone:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control">
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                <option value="Arizona">(GMT-07:00) Arizona</option>
                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                <option value="Indiana (East)">(GMT+8:00) Australia Wesstern</option>
                <option value="Indiana (East)">(GMT+10:00) Australia Eastern</option>
                <option value="Indiana (East)">(GMT+12:00) New Zealand</option>
              </select>
            </div>
          </div>
        /div -->