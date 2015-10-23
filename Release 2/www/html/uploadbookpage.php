<?php 
require_once "core/validation.php";
include_once "core/functions/errors.php";
printErrArray();
?>

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
$.src="//v2.zopim.com/?3LLFC6qV3ng0HuVIaaCU7Z6QN9Z8VuPy";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
  
</head> 


<body>

<?php include'components/header.php'; ?>


<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
		  
		<form action="core/uploadTextbook.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="title"> Title </label>
			<textarea rows="1" cols="1" class="form-control" id="title" name="title" placeholder="Input book title here" required></textarea>  
		</div>
		
		    
                <div class="form-group">
			    <label for="file">Please Upload Image:</label>
			    <input type="file" name="image" id="image">		   
		        </div>	
            
		<div class="form-group">
                <label for="description">Description</label>
                <textarea rows="10" cols="50" class="form-control" id="description" name="description" placeholder="Please specify price / length of borrow time / book wanted to swap and book description" required></textarea>
		</div>

		
		<div class="form-group">
			<label for="ISBN"> ISBN </label>
			<textarea rows="1" cols="1" class="form-control" id="ISBN" name="isbn" placeholder="Input book ISBN here" required></textarea>  
		</div>
		
		<div class="form-group">
			<label for="edition"> Edition </label>
			<textarea rows="1" cols="1" class="form-control" id="edition" name="edition" placeholder="Input book edition here" required></textarea>  
		</div>
		
		<div class="form-group">
			<label for="edition"> Subject </label>
			<textarea rows="1" cols="1" class="form-control" id="subject" name="subject" placeholder="Input related subject here" required ></textarea>  
		</div>
		
		<div class="form-group">
			<label for="condition"> Condition </label>
	
              <select id="condition" class="form-control" name="condition">
                <option value="0"> New </option>
                <option value="1"> Very Good </option>
                <option value="2"> Okay </option>
				<option value="3"> Meh </option>
             
              </select>
			</div>


			
		
		
		<div class="form-group">
			<label for="category"> Borrow Swap or Sell </label>
		<select id="category" class="form-control" name="category">
                <option value="0"> Sell </option>
                <option value="1"> Swap </option>
                <option value="2"> Borrow </option>
				
             
              </select>
			</div>
	
		
		</div class="form-group">
			  <label for="Date"> Availability </label>
			</div>

                <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Available Books</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
			


	        </select> 
			</div>




		
		<button input type="submit" value = "upload" onclick="return confirm('Do you want to upload this book?')"id="submitBook" class="btn btn-primary btn-lg" style=" margin-top: 10px;" name="submit"> Upload </button>
		
		</form>
<div class="container">


</div> 

		

   
	
	

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="js/scripts.js"></script>
 
 </div>
 </div>
 </div>
 </div>
 
</body>



</html>