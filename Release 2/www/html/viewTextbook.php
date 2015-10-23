<?php
include_once 'core/retrieveTextbook.php';	
if (isset($results) && $results != '') {
	echo "

<html>
<head>
	<title>".$results['Title']."</title>
</head>
<body>
	<h2>".$results['Title']."</h2>
	<h4>ISBN: ".$results['ISBN']."</h4>
	<h4>Edition: ".$results['Edition']."</h4>
	<h4>Subject: ".$results['Subject']."</h4>
	<h4>Condition: ".$results['Cond']."</h4>
	<h4>Looking to: ".$results['Category']."</h4>
	<h4>Description</h4>
	<table>
		<td>".$results['Description']."</td>
	</table>

</body>
</html>
";
}else{
	echo "Page not found";
}
?>
