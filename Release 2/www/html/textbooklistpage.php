<html lang="en">
<head>
  <meta charset="utf-8">

<head>
  <title>Bookhunters</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  
<!--Start of Zopim Live Chat Script-->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3LLFC6qV3ng0HuVIaaCU7Z6QN9Z8VuPy";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<!--End of Zopim Live Chat Script-->

</head> 


<body>
<div class="main">
<?php include'components/header.php'; 
include_once 'core/retrieveSearch.php';
$_SESSION['searchArray'] = $searchArray;
$categories = retrieveCategories($dbconn);
?>


		
<div class="col-md-2">

		<form method="POST" action="core/changeCategory.php">
		<?php $_POST['searchArray'] = $searchArray;?>
          <label for="Category"> Filter Category </label>
            <div class="cat-select">
              <select id="category_id" class="form-control" name="cat">
                <option value="0"> Swap </option>
                <option value="1"> Sell </option>
                <option value="2"> Borrow </option>
              </select>
			  <button class="btn btn-info" type="submit">Filter</button>
            </div>
   
	</form>
</div>


<div class="container">	
<div class="col-md-10">
	<div class="row" id="booklist">
	

	<?php
		include_once 'core/database/connect.php';
		include_once 'core/functions/general.php';
		$userId = activeUser();
		define("BOOKSPERPAGE", 9);
		
        //Get textbooks
        $sql = $dbconn -> prepare("SELECT * FROM `textbooks` WHERE `UserID` = :userID ORDER BY `BookID`");
        $sql -> bindParam(":userID", $userId);
        $sql -> execute();
        $result = $sql -> fetchall();

		for ($i=($page - 1) * BOOKSPERPAGE; $i < $page * BOOKSPERPAGE && $i < count($results); $i++) {
		$ref = bookIdToRef($results[$i]['BookId'], $dbconn);
		$des = substr($results[$i]["Description"], 0, 50);
		echo' 
		
		<div class="col-lg-4">
		
		<div class="thumbnail">
		<img src="core/getTextbookImage.php?ref='.$ref.'" alt="Book" width="100px" height="100px">
		<div class="caption">
		
        <h3>'.$results[$i]['Title'].'</h3>
        <p>'.$des.'</p>
		
		
        <p><a href="'.buildTextbookLink($ref, "singlebook.php").'" class="btn btn-primary" role="button">View!</a><h4><p>'.$categories[$results[$i]['CategoryId']]['CategoryName'].'</p></h4></p>
    
        
		<!-- href button to individual book page-->
		</div>
		</div>
		</div>';
		}

		echo '
	
	</div>
	
	</div>
	<footer class ="footer">
	<ul class="pager">';
		if ($page > 1) {
			$ppage = $page-1;
    		echo '<li><a href="'.$link.'pg='.$ppage.'">Previous</a></li>';
		}

		echo "   ".$page."   ";

		if ($page < (count($results) / BOOKSPERPAGE)) {
			$ppage = $page+1;
    		echo '<li><a href="'.$link.'pg='.$ppage.'">Next</a></li>';
		}
	?>	
	</ul>
	</footer>
	
	</div> <!-- main div -->
	
	
		
	</div> <!-- Container div --> 

	
	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>

 
 </div>
</body>



</html>';