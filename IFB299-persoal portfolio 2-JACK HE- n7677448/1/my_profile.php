<?php
  include "core/database/connect.php";
  include "core/functions/general.php";
  session_start();

  if (isset($_GET['user'])) {
    $user = retrieveUserByName($_GET['user'], $dbconn);
    $profile = retrieveProfile($user['UserId'], $dbconn);
  }else{
    include "core/validation.php";
    $profile = retrieveProfile(activeUser(), $dbconn);
    $user = retrieveUser(activeUser(), $dbconn);
  }
  $universities = retrieveUniversities($dbconn);
  $campus = retrieveCampus($dbconn);
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


      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <p class="col-md-3 control-label"><?php echo $user['Username'];?></p>
          <div class="col-md-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <p class="col-md-3 control-label"><?php echo $profile['Firstname'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <p class="col-md-3 control-label"><?php echo $profile['Surname'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">University:</label>
          <p class="col-md-3 control-label"><?php echo $universities[$profile['UniId']]['Name'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Campus:</label>
          <p class="col-md-3 control-label"><?php echo $campus[$profile['CampusId']]['Name'];?></p>
          <div class="col-md-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <p class="col-md-3 control-label"><?php echo $profile['Email'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Phone Number:</label>
          <p class="col-md-3 control-label"><?php echo $profile['PhoneNumber'];?></p>
          <div class="col-lg-8">
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
          <?php
          if ($user['UserId'] == activeUser()) {
            echo '<a class="btn btn-primary" href="edit_profile.php">Edit</a>';
            echo '<a class="btn btn-default" href="myuploads.php">My Uploads</a>';
          }
          ?>
		  
<input type="hidden" class="rating" data-filled="glyphicon glyphicon-heart" data-empty="glyphicon glyphicon-heart-empty"/>

		  
		  
          </div>
        </div>
      </form>
	  
      <div class="text-center">
  			  
    <!-- comment box -->
		<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
		<link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
		<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24MTmP51HKVbZ8QJY4.bT4Q0"+"&opts=16862&num=10&ts=1443161279817");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
	<!-- comment box -->

      </div>
	  
  </div>
	  
	  
	  
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