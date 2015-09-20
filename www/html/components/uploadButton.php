<?php
//Displays upload button depending on wether or not the user is logged on 
if(isset($_SESSION['Username'])){
 	echo '<a href="uploadbookpage.php">Upload Books <span class="glyphicon glyphicon-book"></span> </a>';
 }

?>