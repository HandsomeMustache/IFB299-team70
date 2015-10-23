<?php
//Displays book list button depending on wether or not the user is logged on 
if(isset($_SESSION['Username'])){
 	echo '<a href="textbooklistpage.php">View Books! <span class="glyphicon glyphicon-eye-open"></span></a>';
 }

?>