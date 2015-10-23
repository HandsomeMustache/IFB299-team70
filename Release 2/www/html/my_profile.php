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
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'bookhunterservicecenter';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
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