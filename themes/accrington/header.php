<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php wp_head(); ?>  
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body class="responsive">
<!-- Off Canvas Menu -->
<div class="hidden">
	<nav id="off-canvas-menu"><span class="icon icon-xl flaticon-delete30" id="off-canvas-menu-close"></span>
	<ul class="expander-list">
		<li><span class="name"><a href="<?php echo home_url(); ?>">Home</a></span></li>
		<li><span class="name"><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
		<li><span class="name"><a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy Policy</a></li>
		<li><span class="name"><a href="<?php echo get_site_url(); ?>/terms-and-conditions">Terms and Conditions</a></li>		
		<li><span class="name"><a href="<?php echo get_site_url(); ?>/cookies">Cookies</a></li>		
	</ul>
	</nav>
</div>
<!-- //end Off Canvas Menu -->
<div id="outer">
	<div id="outer-canvas">
		<!-- Navbar -->
		<header>		
		<!-- Back to top -->
		<div class="back-to-top">
			<span class="arrow-up"><img src="<?php echo get_theme_file_uri( '/images/icon-scroll-arrow.png'); ?>" alt=""></span><img src="<?php echo get_theme_file_uri( '/images/icon-scroll-mouse.png'); ?>" alt="">
		</div>
		<!-- //end Back to top -->
		<section class="navbar">
		<div class="background">
			<div class="container">
				<div class="row">
					<div class="header-left col-sm-5 col-md-8">
						<div class="row">							
							<!-- Mobile menu Button-->
							<div class="col-xs-2 visible-xs">
								<div class="expand-nav compact-hidden">
									<a href="#off-canvas-menu" id="off-canvas-menu-toggle"><span class="icon icon-xl flaticon-menu29"></span></a>
								</div>
							</div>
							<!-- //end Mobile menu Button -->
							<!-- Logo -->
							<div class="navbar-logo col-xs-10 col-sm-10 col-md-6 text-center">
								<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_file_uri( '/images/logo.gif'); ?>" alt="Accrington Tailoring"></a>
							</div>
							<!-- //end Logo -->
							<div class="clearfix visible-xs">
							</div>
						</div>
					</div>					
				</div>
			</div>
			<!-- Main menu -->
			<div class="navbar-main-menu-outer hidden-xs">
				<div class="container">
					<dl class="navbar-main-menu">
						<dt class="item"><a href="<?php echo home_url(); ?>" class="btn-main"><span class="icon icon-xl flaticon-home113"></span></a></dt>
						<dd></dd>
						<dt class="item"><a href="<?php echo get_site_url(); ?>/contact-us" class="btn-main">contact us</a></dt>
						<dd class="item-content content-small">
						<div class="megamenuClose">
						</div>						
						</dd>
						<dt class="item"><a href="<?php echo get_site_url(); ?>/privacy-policy" class="btn-main">Privacy Policy</a></dt>
						<dd class="item-content content-small">
						<div class="megamenuClose">
						</div>						
						</dd>
						<dt class="item"><a href="<?php echo get_site_url(); ?>/terms-and-conditions" class="btn-main">Terms and Conditions</a></dt>
						<dd class="item-content content-small">
						<div class="megamenuClose">
						</div>						
						</dd>						
						<dt class="item"><a href="<?php echo get_site_url(); ?>/cookies" class="btn-main">Cookies</a></dt>
						<dd class="item-content content-small">
						<div class="megamenuClose">
						</div>						
						</dd>						
					</dl>
				</div>
			</div>
			<!-- //end Main menu -->
		</div>
		</section>
		<!-- Navbar height -->
		<div class="navbar-height">
		</div>
		<!-- //end Navbar height -->
		</header>
		<!-- //end Navbar -->
		<!-- Services -->
		<section class="services-block hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<a href="#" class="item anim-icon"><span class="icon"><i class="far fa-star fa-2x"></i></span><span class="title">4.6 Star Rating on Google</span></a>
				</div>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<a href="#" class="item anim-icon"><span class="icon"><img src="<?php echo get_theme_file_uri( '/images/anim-icon-2.gif'); ?>" data-hover="<?php echo get_theme_file_uri( '/images/anim-icon-2-hover.gif'); ?>" alt=""/></span><span class="title">Best local prices</span></a>
				</div>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<a href="#" class="item anim-icon"><span class="icon"><img src="<?php echo get_theme_file_uri( '/images/anim-icon-3.gif'); ?>" data-hover="<?php echo get_theme_file_uri( '/images/anim-icon-3-hover.gif'); ?>" alt=""/></span><span class="title">01254 301714</span></a>
				</div>
			</div>
		</div>
		</section>		