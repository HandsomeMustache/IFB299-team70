<?php
include_once 'core/retrieveMyTextbooks.php';
include_once 'core/functions/general.php';
?>

<html>
<head>
	<title>My Textbooks</title>
</head>
<h3>My textbooks</h3>
<body>
<table>
	<tr>
		<td>Id</td>
		<td>Title</td>
		<td>ISBN</td>
		<td>Subject</td>
		<td>Edition</td>
		<td>Condition</td>
		<td>Category</td>
		<td>State<td>
		<td></td>
		<?php
			for ($i=0; $i < count($result); $i++) {
				$view = generateLink("View", buildTextbookLink($result[$i]['Id'], "viewTextbook.php"));
				$remove = generateLink("Remove", buildTextbookLink($result[$i]['Id'], "core/remove.php"));
				$action = '';

				if ($result[$i]['Category'] == "Borrow") {
					if ($result[$i]['State'] == "Active") {
						$action = generateLink("Borrowed", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=borrowed");
					}elseif ($result[$i]['State'] != 'Hidden'){
						$action = generateLink("UnBorrow",buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=unborrow");
					}	
				}elseif ($result[$i]['Category'] == "Swap") {
					if ($result[$i]['State'] == "Active") {
						$action = generateLink("Swaped", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=swapped");
					}elseif ($result[$i]['State'] != 'Hidden'){
						$action = generateLink("UnSwap", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=unswap");
					}	
				}elseif ($result[$i]['Category'] == "Sale") {
					if ($result[$i]['State'] == "Active") {
						$action = generateLink("Sold", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=sold");
					}elseif ($result[$i]['State'] != 'Hidden'){
						$action = generateLink("UnSell", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=unsell");
					}
				}

				if ($result[$i]['State'] == "Active") {
					$hide = generateLink("Hide", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=hide");
				}elseif ($result[$i]['State'] == "Hidden") {
					$hide = generateLink("Activate", buildTextbookLink($result[$i]['Id'], "core/updateState.php")."&action=active");
				}else{
					$hide = "";
				}

				echo '<tr><td>'.$result[$i]['Id'].'</td><td>'.$result[$i]['Title'].'</td><td>'.$result[$i]['ISBN'].'</td><td>'.$result[$i]['Subject'].
				'</td><td>'.$result[$i]['Edition'].'</td><td>'.$result[$i]['Cond'].'</td><td>'.$result[$i]['Category'].'</td><td>'.$result[$i]['State'].'</td>
				<td>'.$view.' '.$remove.' <br></br> '.$action.' '.$hide.'</td></tr>';
			}
		?>
	</tr>
</table>
</body>
</html>