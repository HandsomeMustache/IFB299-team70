<?php
include_once 'core/retrieveMyTextbooks.php';
include_once 'core/functions/general.php';

?>
<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">

</head> 


<body>

<?php include'components/header.php'; ?>







<div class="container">
<div class="main">
	<div class="page row" id="signup">
		<div class="col-md-9">


			<table class="table">
	<tr>
		<td>BookId</td> </li>
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
				$view = generateLink("View", buildTextbookLink($result[$i]['BookId'], "singlebookpage.php"));
				$remove = generateLink("Remove", buildTextbookLink($result[$i]['BookId'], "core/remove.php"));
				$action = '';

				if ($result[$i]['CategoryId'] == "2") {
					if ($result[$i]['State'] == "Active") {
						$action = generateLink("Borrowed", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=borrowed");
					}elseif ($result[$i]['State'] != 'Hidden'){
						$action = generateLink("UnBorrow",buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=unborrow");
					}	
				}elseif ($result[$i]['CategoryId'] == "1") {
					if ($result[$i]['State'] == "Active") {
						$action = generateLink("Swaped", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=swapped");
					}elseif ($result[$i]['State'] != 'Hidden'){
						$action = generateLink("UnSwap", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=unswap");
					}	
				}elseif ($result[$i]['CategoryId'] == "0") {
					if ($result[$i]['State'] == "Active") {
						$action = generateLink("Sold", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=sold");
					}elseif ($result[$i]['State'] != 'Hidden'){
						$action = generateLink("UnSell", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=unsell");
					}
				}

				if ($result[$i]['State'] == "Active") {
					$hide = generateLink("Hide", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=hide");
				}elseif ($result[$i]['State'] == "Hidden") {
					$hide = generateLink("Activate", buildTextbookLink($result[$i]['BookId'], "core/updateState.php")."&action=active");
				}else{
					$hide = "";
				}
			
                
				echo '<tr><td>'.$result[$i]['BookId'].'</td><td>'.$result[$i]['Title'].'</td><td>'.$result[$i]['ISBN'].'</td><td>'.$result[$i]['Subject'].
				'</td><td>'.$result[$i]['Edition'].'</td><td>'.$conditions[$result[$i]['CondId']]['CondName'].'</td><td>'.$categories[$result[$i]['CategoryId']]['CategoryName'].
				'</td><td>'.$result[$i]['State'].'</td><td>'.$view.' '.$remove.''.$action.' '.$hide.'</td></tr>';
			}
		?>
	</tr>
</table>
	
	

		</div>
	
	
	<div class="col-md-3">
	

	
	
	</div>
	
	
	<div class="col-xs-9">
	

	
	</div>
	
	
		
	</div> <!-- signup page --> 
	</div> <!-- main --> 
	
	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
 
 
 </div>
</body>



</html>