<?php
/**
 *
 * @package WordPress
 * @subpackage Accrington
 * Template Name:Contact
 */
get_header(); ?>

<!--Page Content-->
		<section class="container content">
		<div class="subtitle">
			<div>
				<span>Contact Us</span>
			</div>
		</div>
		<iframe class="google-map" frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJU9fsnvuYe0gR1LFDT3Ou7nM&key=AIzaSyBgaBsPzQbt4Rrnp3-jW9YI3UdFGvYv5lw" allowfullscreen></iframe>		
		</iframe>
		<div class="container">
		<div class="row">
			<div class="divider-lg">
			</div>
			<div class="col-sm-8 col-md-8">
				<div class="subtitle">
					<div>
						<span>Contact Info</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo get_theme_file_uri( '/images/logo.gif'); ?>" alt="Accrington Tailoring" class="img-responsive">
						<div class="divider-sm">
						</div>
						<ul class="menu menu-icon">
							<li><span class="icon flaticon-home113"></span>30 Wensley Drive, Accrington, BB5 6SB</li>
							<li><span class="icon flaticon-phone163"></span>01254 301714</li>
							<li><span class="icon icon-xs flaticon-new78"></span><span class="mailme">info at accringtontailoring dot co dot uk</span></li>
						</ul>
					</div>
					<div class="col-md-6">
						<!-- Directions Meta from Post Page Extra Information-->

<?php
if ( have_posts() ) while ( have_posts() ) : the_post();

$content = get_the_content();
   $my_meta = get_post_meta($post->ID,'_my_meta',true);
   $my_meta = !empty($my_meta['header_text']) ? get_post_meta($post->ID,'_my_meta',true) : null;

endwhile; // end of the loop.

wp_reset_postdata(); 
?>
<?php echo $my_meta['header_text']; ?>

					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<div class="rect">
					<div class="animate scale icon-outer">
						<span class="icon flaticon-clock61"></span>
					</div>
					<h6><strong></strong><span class="color_mark">OPENING TIMES</span></h6>
					<p>
						Our preferred method of contact is by telephone so we can advise on estimates, timings and appointments, please feel free to call us during our opening hours below.
					</p>
					<div class="line-divider">
					</div>
					<div class="divider-xs">
					</div>
					<h6>Mon-Fri: 11am-9pm<br>
					 Sat-Sun: 12pm-8pm</h6>
				</div>
			</div>
		</div>
		<div class="divider-lg">
		</div>	
<div class="subtitle">
			<div>
				<span>Enquiry Form</span>
			</div>
		</div>
<?php if ( have_posts() ) : ?>
 

<?php  // Start the loop.
			while ( have_posts() ) : the_post(); 

//output page content
the_content();

// End the loop.
			endwhile;

				?>

<?php endif; ?>
</section>
		<!-- //end Page Content -->
		</div>
		<div class="divider-xl">
		</div>		
		</section>
<?php get_footer();