<?php
//Displays Log in or Log off button depending on wether or not the user is logged on 
if(!isset($_SESSION['Username'])){
 	echo '<a href="log_in.php">Log In <span class="glyphicon glyphicon-log-in"></span></a>';
 } else{
 	echo '<a href="core/logout.php">Log Out <span class="glyphicon glyphicon-log-out"></span> </a>';
}
?>