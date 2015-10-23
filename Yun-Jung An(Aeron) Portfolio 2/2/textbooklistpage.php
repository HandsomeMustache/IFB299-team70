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

</head> 


<body>

<?php include'components/header.php'; ?>


		
<div class="col-sm-12"
          <label for="Category"> Filter Category </label>
            <div class="cat-select">
              <select id="category_id" class="form-control" name="cat">
                <option value="0"> Sell </option>
                <option value="1"> Swap </option>
                <option value="2"> Borrow </option>
              </select>
            </div>
	<a class="btn btn-info" type="submit" href="">Search</a>
</div>


<div class="container">

	
<div class="jumbltron">
	<div class="page row" id="signup">
		<div class="col-sml-5 col-lg-4">
		</div>
	
	

	<?php
		include_once 'core/database/connect.php';
		include_once 'core/functions/general.php';
		include_once 'core/retrieveSearch.php';
		$categories = retrieveCategories($dbconn);
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
		
		<div class="col-sm-4 col-lg-4">
		
		<div class="thumbnail">
		<img src="core/getTextbookImage.php?ref='.$ref.'" alt="book" width="150" height="120">
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
	<ul class="pager">';
		if ($page > 1) {
			$ppage = $page-1;
    		echo '<li><a href="'.$link.'pg='.$ppage.'">Previous</a></li>';
		}

		echo $page;

		if ($page < (count($results) / BOOKSPERPAGE)) {
			$ppage = $page+1;
    		echo '<li><a href="'.$link.'pg='.$ppage.'">Next</a></li>';
		}

	?>	
	</ul>
	
	</div> <!-- main div -->
	
	
		
	</div> <!-- Container div --> 

	
	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>

 
 </div>
</body>



</html>';