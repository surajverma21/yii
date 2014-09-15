<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>CSS Free Templates with jQuery Slider</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/functions.js" type="text/javascript"></script>
</head>
<body>
	<div class="shell">		
		<div id="top-navigation">
			<a title="My Account" href="#">MY ACCOUNT</a><a class="cart" title="Shopping Cart" href="#">SHOPPING CART</a><a class="checkout" title="Checkout" href="#">CHECKOUT</a><span>0 items</span><span class="sep">|</span><span>$0,00</span>
		</div>
		<div class="welcome-message">
			<p>Default welcome msg!</p>
		</div>
		<div class="cl"></div>
		<div id="wrapper-top"></div>
		<!-- Wrapper Middle -->
		<div id="wrapper-middle">
			<!-- Header -->
			<div id="header">
				<h1 id="logo"><a title="home" href="#">Furniture Store</a></h1>				
				<!-- Search -->
				<div id="search">
					<form action="" method="post">
						<input type="text" class="field" value="Search entire store here..." title="Search entire store here..." />				
						<input type="submit" value="" class="submit-button" />
					</form>				
				</div>
				<!-- END Search -->				
			</div>
			<!-- END Header -->
			<!-- Navigation -->
			<div id="navigation">
				<ul>
					<li class="first"><a title="Home" href="#">Home<span class="home">&nbsp;</span></a></li>
					<li><a title="Cabinets" href="#">Cabinets</a></li>
					<li><a title="Sofa" href="#">Sofa</a></li>
					<li><a title="Armchair" href="#">Armchair</a></li>
					<li><a title="Tables" href="#">Tables</a></li>
					<li><a title="About Us" href="#">About Us</a></li>
					<li><a title="Contacts" href="#">Contacts</a></li>
				</ul>
				<div class="cl"></div>
			</div>
			<!-- END Navigation -->
			<!-- Main -->
			<div id="main">
				<!-- Slider -->
				<div id="slider-frame">					
					<div id="slider">
						<ul>
							<li>
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>	
							</li>
							<li>
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>
							</li>
							<li>
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>
							</li>
							<li>
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>
							</li>
						</ul>
						<div class="jcarousel-control">
				    		<a title="slide 1" href="#">1</a>
				     		<a title="slide 2" href="#">2</a>
				      		<a title="slide 3" href="#">3</a>
				     		<a title="slide 4" href="#">4</a>			     		 
   						</div>
   						<div class="slider-arrows">
	   						<a title="Next Slide" id="next" href="#">next</a>
	   						<a title="Previous Slide" id="prev" href="#">prev</a>
   						</div>   						
					</div>
				</div>
				<!-- END Slider -->
				<!-- Sidebar -->
				<div id="sidebar">
					<div class="box">
						<div class="title">
							<h2>Categories</h2>
							<img class="bullet" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bullet.png" alt="small grey bullet" />
						</div>
						<ul>
							<li><a title="Cabinet" href="#">Cabinet</a></li>
							<li><a title="Sofa" href="#">Sofa</a></li>
							<li><a title="Armchair" href="#">Armchair</a></li>
							<li><a title="Tablesr" href="#">tablesr</a></li>
							<li><a title="Other" href="#">Other</a></li>							
						</ul>
					</div>
					<div class="box">
						<div class="title">
							<h2>Partners</h2>
							<img class="bullet" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bullet.png" alt="small grey bullet" />
						</div>
						<ul>
							<li><a title="Lorem ipsum dolor" href="#">Lorem ipsum dolor</a></li>
							<li><a title="Cras eu lorem id mauris" href="#">Cras eu lorem id mauris</a></li>
							<li><a title="Proin et velit ut libero" href="#">Proin et velit ut libero</a></li>
							<li><a title="Velit esse molestie conquat" href="#">Velit esse molestie conquat</a></li>
							<li><a title="Vel illum dolore eu" href="#">Vel illum dolore eu</a></li>							
						</ul>
					</div>
					<div class="box">
						<div class="title">
							<h2>Follow Us</h2>
							<img class="bullet" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bullet.png" alt="small grey bullet" />
						</div>	
						<ul class="socials">
							<li><a title="Facebook" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fb.png" alt="facebook icon" />facebook</a></li>
							<li><a title="Tweeter" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/tweet.png" alt="tweeter icon" />twitter</a></li>
							<li><a title="Behance" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/behance.png" alt="behance icon" />behance</a></li>
							<li><a title="Blogger" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/blogger.png" alt="blogger icon" />blogger</a></li>
							<li><a title="Digg" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/digg.png" alt="digg icon" />digg</a></li>
						</ul>
					</div>
				</div>
				<!-- END Sidebar -->
				<!-- Content -->
				
				<?php echo $content;?>

				<!-- End Content  -->
				<div class="cl"></div>
			</div>
			<!-- END Main -->
		</div>
		<!-- END Wrapper Middle -->
		<div id="wrapper-bottom"></div>	
		<!-- Footer  -->
		<div id="footer">
			<span class="author"><a href="http://css-free-templates.com/">Design by: CSS Free Templates</a></span>
			<p><a title="About Us" href="#">About Us</a><span>&frasl;&frasl;</span><a title="Site Map" href="#">Site Map</a><span>&frasl;&frasl;</span><a title="Advanced Search" href="#">Advanced Search</a><span>&frasl;&frasl;</span><a title="Customer Service" href="#">Customer Service</a><span>&frasl;&frasl;</span><a title="Contact Us" href="#">Contact Us</a><span>&frasl;&frasl;</span></p>
		</div>
		<!-- END Footer -->
	</div>
</body>
</html>
