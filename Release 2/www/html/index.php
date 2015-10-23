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
    <!-- Swiper styles -->
    <style>
    html, body {
        position: relative;
        height: 75%;
    }
    body {
        background: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100px;
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 400px;
        
        
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;

    }
    </style>
	
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
    <!-- / CONTAINER-->


<body>
    <!-- Swiper autoplay -->
    <div class="swiper-container1">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/36CeboX.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/6cubUCw.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/36CeboX.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/6cubUCw.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/36CeboX.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(http://i.imgur.com/6cubUCw.jpg)"></div>
        </div>
        
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper1 = new Swiper('.swiper-container1', {
    	loop: true,
        pagination1: '.swiper-pagination1',
        paginationHide :false,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 110,
        centeredSlides: true,
        autoplay: 2000,
        autoplayDisableOnInteraction: false
    });
    var w = window.innerWidth
	|| document.documentElement.clientWidth
	|| document.body.clientWidth;
    </script>   

<!-- Swiper -->

    <div class="swiper-container2">
        <div class="swiper-wrapper">
        	<a class="swiper-slide" style="background-image:url(http://i.imgur.com/Kllg9Kz.jpg)" href="http://45.55.56.22/singlebook.php?ref=0oebCYM"></a>
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/gJ8O2D7.jpg)" href="http://45.55.56.22/singlebook.php?ref=Dr9ZNIw"></a>          
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/c6E4D0c.jpg)" href="http://45.55.56.22/singlebook.php?ref=0CyZ9Pi"></a>
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/YDUJS8G.jpg)" href="http://45.55.56.22/singlebook.php?ref=068y9J0"></a>
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/oAKfA4Q.jpg)" href="http://45.55.56.22/singlebook.php?ref=XGLxXLT"></a>
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/HMO05ah.jpg)" href="http://45.55.56.22/singlebook.php?ref=0jqh9Id"></a>
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/scyuOVh.jpg)" href="http://45.55.56.22/singlebook.php?ref=AoKgF1B"></a>
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/ZGPXZan.jpg)" href="http://45.55.56.22/singlebook.php?ref=pnErd3R"></a>       
            <a class="swiper-slide" style="background-image:url(http://i.imgur.com/9EMCdf7.jpg)" href="http://45.55.56.22/singlebook.php?ref=rbFCMom"></a>
            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper2 = new Swiper('.swiper-container2', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        preventClicks : true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });
    var w = window.innerWidth
	|| document.documentElement.clientWidth
	|| document.body.clientWidth;
    </script>
   

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
          <p>Really love this website, easy to swap my textbooks.</p>
          <small>Aeron <cite title="Source Title"> QUT</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>Bookhunters is a great way to sell books online!.</p>
        <small>Edward <cite title="Source Title">Sydney University</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6 col-md-6">
        <blockquote>
          <p>so many great books for sale!</p>
          <small>John <cite title="Source Title">UQ</cite></small> </blockquote>
      </div>
      <div class="col-6 col-lg-6">
        <blockquote>
          <p>I've sold so many books using this website... Thanks guys!</p>
          <small>DD <cite title="Source Title">GU</cite></small> </blockquote>
      </div>
    </div>
    
    

<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'bookhunterservicecenter';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    
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
        <p>... </p>
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
              <span class="help-block" style="display: none;">Please enter a security code.</span>
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

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'bookhunterservicecenter';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="swiper.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

</body>
</html>
