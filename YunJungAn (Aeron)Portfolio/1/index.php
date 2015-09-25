<?php include'core/functions/notice.php'; ?>

<link rel="shortcut icon" href="img/favicon.ico" type="image/favicon.ico" width="96px" height="96px">
<link rel="apple-touch-icon" href="img/small_icon.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/small_icon.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/Icon-60@3x.png" />

<link rel="icon" href="img/favicon-2.ico" type="image/favicon-2.ico">

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 


<title>BookHunters</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- BookHunters -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href='style.css' rel='stylesheet'/>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="swiper.min.css">





<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Demo styles -->
    <style>
    body {
        background: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 100px;
    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 400px;

    }
    </style>
	
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
<?php 
include'components/header.php';
printNotice();
?>


<!-- /container -->
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h3><img src="http://i.imgur.com/7v7nSj4.png" width="60%"/></h3>
        
		<div class=" text-center col-sm-15 col-lg-4 col-sm-offset-3 col-md-3 col-xs-offset-4 col-xs-5 col-lg-offset-4"> 
        	<a class="btn  btn-block btn-lg btn-success" href="signup.php" title="">Sign up</a> 
        </div>
      </div>
    </div>


<!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/gJ8O2D7.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/c6E4D0c.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/j0fZysJ.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/9EMCdf7.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/YDUJS8G.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/mG7gRCh.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/HMO05ah.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/scyuOVh.jpg)"></div>
            <div class="swiper-slide" style="background-image:url()"></div>
            <div class="swiper-slide" style="background-image:url()"></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });
    </script>  
    <!-- / CONTAINER-->

<!-- HEADER -->
<header>
  <div class="jumbotron">
    <div class="container">
      <img src="http://i.imgur.com/wKxd5YD.jpg" width="100%"  alt="main image"/>
      <div class="row"> </div>
    </div>
  </div>
</header>
<!-- / HEADER --> 


<!--  SECTION-1 -->
<section>
  
    <div class="row">
      <div class="col-lg-12 page-header text-center">
        <h2>TESTIMONIALS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-lg-6 col-md-6">
        <blockquote>
          <p>Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome.</p>
          <small>AA <cite title="Source Title"> QUT</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awesome Awsome Awsome Awesome.</p>
        <small>BB <cite title="Source Title">Sydney University</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6 col-md-6">
        <blockquote>
          <p>Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool.</p>
          <small>CC <cite title="Source Title">UQ</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool Cool.</p>
          <small>DD <cite title="Source Title">GU</cite></small> </blockquote>
      </div>
    </div>
    
    <!-- comment box -->
 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24MTmP51HKVbZ8QJY4.bT4Q0"+"&opts=16862&num=10&ts=1443161279817");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- comment box -->


    
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-lg-9 col-md-8">
          <p class="lead">Swap, sell, borrow books! One click for easy sharing!</p>
        </div>
        <div class=" text-center col-sm-6 col-lg-3 col-sm-offset-3 col-md-3 col-xs-offset-4 col-xs-5 col-lg-offset-0"> 
        	<a class="btn  btn-block btn-lg btn-success" href="signup.php" title="">Sign up now!</a> 
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 page-header text-center">
      <h2>ABOUT US</h2>
    </div>
  </div>
  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-sm-12 text-center col-md-4"> <img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="http://i.imgur.com/hcU0kRW.jpg" data-holder-rendered="true">
        <h3>Aeron An</h3>
        <p>Front end HTML/php design </p>
      </div>
      <div class="col-lg-4 col-sm-12 text-center col-md-4"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="http://i.imgur.com/9fbtvRC.jpg" data-holder-rendered="true">
        <h3>Toby Dray</h3>
        <p>Front end HTML/php design </p>
      </div>
      <div class="col-lg-4 col-sm-12 text-center col-md-4"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="http://i.imgur.com/IiEmMyx.jpg" data-holder-rendered="true">
        <h3>Max Liang</h3>
        <p>Front end HTML/php design </p>
      </div>
      <div class="col-lg-4 col-sm-12 text-center col-md-4"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="http://i.imgur.com/VlGSEKn.jpg" data-holder-rendered="true">
        <h3>Douglass Beard</h3>
        <p>Database/php</p>
      </div>
      <div class="col-lg-4 col-sm-12 text-center col-md-4"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="http://i.imgur.com/GOvVWvm.jpg" data-holder-rendered="true">
        <h3>Jack He</h3>
        <p>Database/php</p>
      </div>
      <div class="col-lg-4 col-sm-12 text-center col-md-4"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="http://i.imgur.com/N59eO5T.jpg" data-holder-rendered="true">
        <h3>Ahmed Alghamdi</h3>
        <p>Database/php</p>
      </div>
    </div>
 </div>
</section>
<div class="well"> </div>


<!-- FOOTER -->
<div class="container">
  <div class="row">
    <div class="col-lg-offset-3 col-xs-12 col-lg-6">
      <div class="jumbotron">
        <div class="row text-center">
          <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Contact us</h2>
          </div>
          <div class="text-center col-lg-12"> 
            <!-- CONTACT FORM https://github.com/jonmbake/bootstrap3-contact-form -->
            <form role="form" id="feedbackForm" class="text-center">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                <span class="help-block" style="display: none;">Please enter your name.</span></div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span></div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Message"></textarea>
                <span class="help-block" style="display: none;">Please enter a message.</span></div>
              <span class="help-block" style="display: none;">Please enter a the security code.</span>
              <button input type="submit" value="Send" onclick= "return confirm('Are you sure?')"style=" margin-top: 10px;"> Send</button>
               
          

            </form>
            <!-- END CONTACT FORM --> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 2015 BookHunters. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="swiper.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

</body>
</html>
