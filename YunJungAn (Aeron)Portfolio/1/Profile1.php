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
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="http://i.imgur.com/YDUJS8G.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>personal profile</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <label value=<?php echo '"'.$profile['Firstname'].'"';?> type="text" name="fname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$profile['Surname'].'"';?> type="text" name="sname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">University:</label>
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$profile['University'].'"';?> type="text" name="uni">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value=<?php echo '"'.$user['Email'].'"';?> type="text" name="email">
          </div>
        </div>
		
		
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
		
		
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="qut123" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Old Password:</label>
          <div class="col-md-8">
            
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
            <input class="btn btn-primary" value="Save Changes" name="submit" type="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>