
<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">

  
  <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3LLuKz0zSAgFqZSsOvy7SNFPCuB9KrZu";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<script type="text/javascript">
function Remove_id(id)
{
 if(confirm('Sure To Remove This Record ?'))
 {
  window.location.href='myuploads.php?remove_id='+id;
 }
}
</script>  
  
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
		<td>State</td>
		<td></td>
		<td>Availability</td>

               
		<?php include_once 'core/retrieveMyTextbooks.php';?>
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