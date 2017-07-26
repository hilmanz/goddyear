<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="EurekaID">
   <!-- <link rel="shortcut icon" href="images/favicon.png">-->
    <title>GO GIRL</title>
    <!--Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/responsive-nav/responsive-nav.css" rel="stylesheet">
    <link href="vendor/flexslider/flexslider.css" rel="stylesheet">
    <link href="vendor/eufont/eufont.css" rel="stylesheet">
    <link href="css/gogirl.css" rel="stylesheet">
	<script src="vendor/jquery.js"></script>
    <script src="vendor/jquery-ui.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
</head>
<body>
<section id="container">
    <header id="header" class="header">
    	<div class="container">
        	<div class="row">
                <div class="topbanner banner-ads">
                    <a href="#"><img src="content/banner.jpg"/></a>
                </div>
            </div><!-- end .row -->
        	<div class="row navigation">
            	<div class="col-md-4">
                	<div class="logo">
                    	<a href="index.php"><img src="images/logo-cleanclear.png"/></a>
                    	<a href="index.php"><img src="images/logo.png"/></a>
                    </div>
                </div><!-- end .col-md-4 -->
            	<div class="col-md-8">
                    <nav class="navbar nav-collapse">
                          <ul>
                            <li class="current"><a href="index.php"><span>Home</span></a></li>
                            <li><a href="index.php?page=style"><span>Style</span></a></li>
                            <li><a href="#"><span>Events</span></a></li>
                            <li><a href="#"><span>Skin101</span></a></li>
                            <li><a href="#"><span>D.I.Y</span></a></li>
                            <li><a href="#"><span>Relations</span></a></li>
                            <li><a href="#"><span>Quiz</span></a></li>
                          </ul>
                    </nav>
                    <form class="search-form">
                    	<div class="formbox">
                    	<input type="text" placeholder="Search Here..">
                        </div>
                        <button class="btn-search"><i class="icon-search">&nbsp;</i></button>
                    </form>
                </div><!-- end .col-md-4 -->
            </div><!-- end .row -->
        </div><!-- end .container -->
    </header><!-- end #header -->
    <section id="main-content">
        <div class="container">
			<?php 
            if(@$_GET['page']=='style'){
                include("style.php");
            }else if(@$_GET['page']=='style-detail'){ 
                include("style-detail.php");
            }else if(@$_GET['page']=='contact'){ 
                include("contact.php");
            }else{ 
                include("home.php");
            }?>
            <a href="#" class="aboutlink">About Cerita Kita</a>
            <a href="#" class="copy">&copy; 2015. All rights reserved.</a>
        </div>
    </section><!-- end #main-content-->
</section><!-- end #container-->

<!--Core js-->
<script src="vendor/responsive-nav/responsive-nav.min.js"></script>
<script src="vendor/jquery.stellar.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<script src="vendor/wowanimate/wow.js"></script>
<script src="vendor/flexslider/jquery.flexslider-min.js"></script>
<script src="vendor/isotope/isotope.js"></script>

<script src="vendor/custom.js"></script>
<!--script for this page-->
</body>
</html>