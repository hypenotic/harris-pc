<?php 
/**
* This is the base template for Product Pages
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post();
	global $post;
    $post_slug=$post->post_name;

	$heading   = rwmb_meta( 'rw_p_banner_heading' );
	$subhead   = rwmb_meta( 'rw_p_banner_subheading' );
	$gradient  = rwmb_meta( 'rw_banner_gradient' );
	
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); 

	if ( is_singular( 'product' ) && $post->post_parent ) {
	    $is_child = true;
	} else {
		$is_child = false;
	}
?>
<section class="product-header <?php if ($is_child == true) { ?>product-child<?php } ?>" id="skip-to-content" style="background-image: url(<?php if ($thumbnail) { ?><?php echo $thumbnail[0]; ?><?php } else { echo get_template_directory_uri().'/src/images/background_default.svg'; } ?>);background-size:cover;">
	<style>
		.grad-overlay::after {
			background-image: linear-gradient(to top, transparent 0%, <?php if ($gradient) { echo $gradient; } else { echo 'black'; } ?> 100%);
		}
	</style>
	<div class="grad-overlay"></div>
	<div class="darken-overlay"></div>
	<div class="wide-container">
		<h1><?php echo $heading;?></h1>
		<?php if ($subhead) { ?>
		<h2><?php echo $subhead;?></h2>
		<?php } ?>
	</div>
	<div id="modal-demo" class="modal">
		<div class="modal-footer">
	      <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
	    </div>
	    <div class="modal-content">
	    	<h3>Book a demo</h3>
	      <?php gravity_form(2, false, false, false, '', true); ?>
	    </div>
	</div>
	<div id="modal-courses" class="modal">
		<div class="modal-footer">
	      <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
	    </div>
	    <div class="modal-content">
	    <h3>Request training courses and/or user guides</h3>
	      <?php gravity_form(3, false, false, false, '', true); ?>
	    </div>
	</div>
</section>

<?php if ($is_child == true) { ?>
<?php 
$tslides = rwmb_meta( 'rw_tslider_single' );
// Group is cloneable
if ( ! empty( $tslides ) ) { ?> 

<section class="product-testimonial-slider base-padding no-lr-padding">
    <div class="container">
    	<?php if (count($tslides) === 1) { ?>
		
		<?php foreach ( $tslides as $tslide ) {
            $quote  	= $tslide['rw_tslide_content'];
		    $source  	= $tslide['rw_tslide_source'];
            ?>
            <div class="single-testimonial">
				<div><span>
					
					<svg id="slider-QS" width="28px" height="24px" viewBox="0 0 28 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					    <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.568444293">
					        <g id="Component" transform="translate(-59.000000, -771.000000)" fill="#00C185">
					            <path d="M59.4286103,771 C59.1715173,771 59,771.171152 59,771.428245 L59,782.571016 C59,782.828109 59.1715173,782.999627 59.4286103,782.999627 L66.7142547,782.999627 C66.7142547,787.346803 63.3471767,790.713881 59,790.713881 L59,794.999253 C65.6240777,794.999253 70.9996267,789.623704 70.9996267,782.999627 L70.9996267,771.428245 C70.9996267,771.171152 70.8284751,771 70.571382,771 L59.4286103,771 Z M74.856754,771 C74.599661,771 74.4285094,771.171152 74.4285094,771.428245 L74.4285094,782.571016 C74.4285094,782.828109 74.599661,782.999627 74.856754,782.999627 L82.1423984,782.999627 C82.1423984,787.346803 78.7753204,790.713881 74.4285094,790.713881 L74.4285094,794.999253 C81.0525871,794.999253 86.428136,789.623704 86.428136,782.999627 L86.428136,771.428245 C86.428136,771.171152 86.2566188,771 85.9995257,771 L74.856754,771 Z" id="Page-1" transform="translate(72.714068, 782.999627) scale(-1, -1) translate(-72.714068, -782.999627) "></path>
					        </g>
					    </g>
					</svg>

					<?php echo $quote;?>

					
					<svg id="slider-QE" width="28px" height="24px" viewBox="0 0 28 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					    <!-- Generator: Sketch 43.1 (39012) - http://www.bohemiancoding.com/sketch -->
					    <desc>Created with Sketch.</desc>
					    <defs></defs>
					    <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.568444293">
					        <g id="Component" transform="translate(-832.000000, -864.000000)" fill="#00C185">
					            <path d="M832.42861,864 C832.171517,864 832,864.171152 832,864.428245 L832,875.571016 C832,875.828109 832.171517,875.999627 832.42861,875.999627 L839.714255,875.999627 C839.714255,880.346803 836.347177,883.713881 832,883.713881 L832,887.999253 C838.624078,887.999253 843.999627,882.623704 843.999627,875.999627 L843.999627,864.428245 C843.999627,864.171152 843.828475,864 843.571382,864 L832.42861,864 Z M847.856754,864 C847.599661,864 847.428509,864.171152 847.428509,864.428245 L847.428509,875.571016 C847.428509,875.828109 847.599661,875.999627 847.856754,875.999627 L855.142398,875.999627 C855.142398,880.346803 851.77532,883.713881 847.428509,883.713881 L847.428509,887.999253 C854.052587,887.999253 859.428136,882.623704 859.428136,875.999627 L859.428136,864.428245 C859.428136,864.171152 859.256619,864 858.999526,864 L847.856754,864 Z" id="Page-1"></path>
					        </g>
					    </g>
					</svg>	
				</span></div>
				<cite><?php echo $source;?></cite>
            </div>
        <?php }?>

		<?php } else { ?>
		<!-- Swiper Slider -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                // Group is cloneable
                if ( ! empty( $slides ) ) {
                	$count = 1;
                  foreach ( $slides as $slide ) {
                    $quote  	= $slide['rw_tslide_content'];
        		    $source  	= $slide['rw_tslide_source'];
                    ?>
                    <div class="swiper-slide">
                    	<div class="swiper-content">
							<?php echo $quote;?>
							<?php echo $source;?>
                    	</div>
                    </div>
                  <?php }
                }?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
		<?php } ?>
        
    </div>
</section>
<?php } ?>
<?php } ?>

<?php if ($is_child == false) { ?>
<?php get_template_part('template-part-alliance-partner'); ?>
<?php } ?>

<?php if ($is_child == false) { ?>
<section class="product-overview base-padding no-top-padding">
	<div class="container">
		<?php the_content(); ?>
	</div>
</section>
<?php } ?>

<section class="product-features base-padding">
	<div class="non-matcss-container">
		<div class="single-product-container">
			<?php 
			// Group is cloneable
			$features = rwmb_meta( 'rw_feature_list' );
			if ( ! empty( $features ) ) {
				$count = 1;
			  foreach ( $features as $feature ) {
			    $heading  	= $feature['rw_feature_heading'];
			    $desc  		= $feature['rw_feature_desc'];
			    // $points  	= $feature['rw_feature_points'];
			    // print_r($points);
			    $img  		= $feature['rw_feature_image'];
			    ?>
			    <div class="single-product-feature">
			    	<img src="<?php echo $img;?>" alt="<?php echo $heading;?>" class="feature-icon">
			    	<div class="feature__right">
		    			<h3><?php echo $heading;?></h3>
		    			<p><?php echo $desc;?></p>
			    	</div>
			    </div>
			  <?php  $count++; }
			}?>
		</div>
	</div>
</section>


<?php 
$slides = rwmb_meta( 'rw_slider_single' );
// Group is cloneable
if ( ! empty( $slides ) ) { ?> 

<section class="product-who base-padding no-lr-padding">
    <div class="container">
    	<?php 
    		$sheading       = rwmb_meta( 'rw_slider_heading' );
    		$slides 		= rwmb_meta( 'rw_slider_single' );
    	?>
        <h3><?php echo $sheading; ?></h3>
        <div class="slider__headings">
        	<ul class="row">
        		<?php 
        		// Group is cloneable
        		if ( ! empty( $slides ) ) {
        		  foreach ( $slides as $slide ) {
        		    $stitle  	= $slide['rw_slide_heading'];
        		    ?>
        		    <li class="ta-center col s6 m6 l3"><?php echo $stitle;?></li>
        		  <?php }
        		}?>
        	</ul>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                $slides = rwmb_meta( 'rw_slider_single' );
                // Group is cloneable
                if ( ! empty( $slides ) ) {
                	$count = 1;
                  foreach ( $slides as $slide ) {
                    $stitle  	= $slide['rw_slide_heading'];
                    $scontent  	= $slide['rw_slide_content'];
                    ?>
                    <div class="swiper-slide">
                    	<div class="swiper-content">
							<?php if ($is_child == true) {?>
							<div class="slide__left child_slide">
								<?php echo $scontent; ?>
							</div><div class="slide__right child_slide">
								<p>Speak to a team member who understands your workflow.</p>
								<a href="" class="btn ghost-btn no-shadow">Book a chat</a>
							</div>

							<?php } else { ?>
							<div class="slide__left parent_slide">
								<?php echo $scontent; ?>
							</div><div class="slide__right parent_slide">
								<p>See why <?php the_title();?> is a good fit for <?php echo $stitle; ?></p>
								<a href="" class="btn ghost-btn no-shadow">Show me</a>
							</div>
							<?php } ?>
                    	</div>
                    </div>
                  <?php }
                }?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<?php } ?>

<?php 
$recogs = rwmb_meta( 'rw_recognition_list' );
// Group is cloneable
if ( ! empty( $recogs ) ) { ?> 

<section class="product-recognitions base-padding no-lr-padding">
    <div class="container">
        <h3 class="grey-text ta-center">Recognition</h3>
        <div class="recognition-container">
    		<?php 
    		// Group is cloneable
    		if ( ! empty( $recogs ) ) {
    		  foreach ( $recogs as $recog ) {
    		    $r_name  	= $recog['rw_recog_name'];
    		    $r_image  	= $recog['rw_recog_image'];
    		    ?>
    		    <div class="recog__image">
		    		<img src="<?php echo $r_image; ?>" alt="<?php echo $r_name; ?>">
		    	</div>
    		  <?php }
    		}?>
    	</div>
    </div>
</section>
<?php } ?>

<section class="product-support-resources base-padding">
	<div class="wide-container">
		<h3 class="grey-text ta-center">Make the case to your team</h3>

			<?php

			if ($is_child == false) {
				$the_term = $post_slug;
			} else {
				$parent_post = get_post($post->post_parent); 
				$parent_slug = $parent_post->post_name;
				$the_term = $parent_slug;
			}
			 // Check if there are any resources
			$args = array(
			    'post_type' => 'resource',
			    'tax_query' => array(
			        array(
			            'taxonomy' => 'products',
			            'field'    => 'slug',
			            'terms'    => $the_term,
			        ),
			    ),
			    'posts_per_page'=> '10',
			    'orderby' => 'menu_order',
			    'order' => 'ASC'
			);
			
			$loop = new WP_Query( $args );
			if ($loop->have_posts()){
			    // $count = 0;

			?>
			    <div class="support-resources-container flex-container">
			    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
			        $res_title     = rwmb_meta( 'rw_cs_banner_heading' );
			        $res_file    = rwmb_meta( 'rw_cs_file' );
			        // $count++;
			        $res_type =  wp_get_post_terms($post->ID, 'resource-type');
			        // print_r($res_type[0]->name);
			    ?>
			        <div>
			        	<p><?php echo $res_type[0]->name;?></p>
			        	<h4><?php echo $res_title;?></h4>
			        	<div class="resource_separator"></div>
			        	<div class="resource_blurb">
			        		<p><?php the_excerpt();?></p>
			        	</div>
			        	<a href="<?php echo $res_file;?>" target="_blank" class="btn no-shadow">View</a>
			        </div>
			    <?php endwhile; wp_reset_postdata(); ?>
			    </div>
			<?php } ?>
	</div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; wp_reset_postdata(); else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

