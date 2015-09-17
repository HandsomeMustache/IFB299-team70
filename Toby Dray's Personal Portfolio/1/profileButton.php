<?php
//Displays Profile button depending on wether or not the user is logged on 
if(isset($_SESSION['Username'])){
 	echo '<a href="Profile.php">Profile <span class="glyphicon glyphicon-user"></span></a>';
 }

?>