<?php
//Displays uploaded books button depending on wether or not the user is logged on 
if(isset($_SESSION['Username'])){
 	echo '<a href="myuploads.php">My Uploaded Books <span class="glyphicon glyphicon-floppy-open"></span> </a>';
 }

?>