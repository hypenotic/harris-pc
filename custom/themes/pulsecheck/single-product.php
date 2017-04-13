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

	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); 

	if ( is_singular( 'product' ) && $post->post_parent ) {
	    $is_child = true;
	} else {
		$is_child = false;
	}
?>
<section class="product-header <?php if ($is_child == true) { ?>product-child<?php } ?>" id="skip-to-content" style="background-image: url(<?php if ($thumbnail) { ?><?php echo $thumbnail[0]; ?><?php } else { echo get_template_directory_uri().'/src/images/background_default.svg'; } ?>);background-size:cover;">
	<div class="grad-overlay <?php if ($is_child == true) { echo 'red-grad'; } else { echo 'green-grad';} ?>"></div>
	<div class="container">
		<h1><?php echo $heading;?></h1>
		<?php if ($subhead) { ?>
		<h2><?php echo $subhead;?></h2>
		<?php } ?>
		<!-- <a href="#modal-demo" class="btn waves-effect pc-blue no-shadow modal-trigger-general modal-trigger-demo">Request a demo</a> -->
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

<section class="product-why why-section">
    <div class="container">
    	<ul class="row">
    		<?php 
    		// Group is cloneable
    		$features = rwmb_meta( 'rw_feature_list' );
    		if ( ! empty( $features ) ) {
    			$count = 1;
    		  foreach ( $features as $feature ) {
    		    $heading  	= $feature['rw_feature_heading'];
    		    ?>
    		    <li class="col s6 m6 l3"><?php echo $heading;?></li>
    		  <?php }
    		}?>
    	</ul>
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

<section class="product-features base-padding no-tb-padding">
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
        <div class="">
        	<ul class="row">
        		<?php 
        		// Group is cloneable
        		if ( ! empty( $slides ) ) {
        		  foreach ( $slides as $slide ) {
        		    $stitle  	= $slide['rw_slide_heading'];
        		    ?>
        		    <li class="col s6 m6 l3"><?php echo $stitle;?></li>
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
                    ?>
                    <div class="swiper-slide">
                    	<div class="swiper-content">
							<?php if ($is_child == true) {?>
							<p>Summary of why audience will love the product. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores maxime error inventore reprehenderit, saepe illo.</p>
							<ul>
								<li>Reason 1</li>
								<li>Reason 2</li>
								<li>Reason 3</li>
							</ul>
							<?php } else { ?>
								<svg width="16px" height="14px" viewBox="178 322 16 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <defs></defs>
							    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(178.000000, 322.000000)">
							        <g id="Group-2" fill="#297FCA">
							            <path d="M5.66664389,0 L0.647419136,0 C0.290043773,0 0,0.299053967 0,0.66802822 L0,5.84858707 C0,6.21733865 0.290043773,6.51661529 0.647419136,6.51661529 L4.02025703,6.51661529 C3.99414445,8.46324952 2.6932636,10.0968012 0.941563229,10.5666477 C0.82351714,10.5978224 0.58159819,10.6456977 0.58159819,10.6456977 L0.583324641,10.6492605 C0.256377978,10.6822166 0,10.9659059 0,11.3119445 L0,12.3297969 C0,12.6985484 0.290043773,12.9978251 0.647419136,12.9978251 C0.647419136,12.9978251 0.784024573,13.0020559 0.829559719,12.9987158 C1.0317703,12.9811244 1.09500156,12.9541806 1.22578023,12.9263461 C4.11046409,12.3010716 6.286224,9.66881779 6.31406302,6.51572459 L6.31578947,6.51572459 L6.31406302,0.667137516 C6.31406302,0.299053967 6.02401925,0 5.66664389,0 Z" id="Fill-1"></path>
							            <path d="M14.9982735,0.667997587 C14.9982735,0.299040253 14.7082298,0 14.3508544,0 L9.33162966,0 C8.9742543,0 8.68421053,0.299040253 8.68421053,0.667997587 L8.68421053,5.84831887 C8.68421053,6.21705354 8.9742543,6.51631646 9.33162966,6.51631646 L12.7044676,6.51631646 C12.678355,8.46286143 11.3776899,10.0963382 9.62598956,10.5661632 C9.50794347,10.5973364 9.26602452,10.6452095 9.26602452,10.6452095 L9.26775097,10.6487722 C8.9405885,10.6817267 8.68421053,10.9654031 8.68421053,11.3123165 L8.68421053,12.3301221 C8.68421053,12.6988568 8.9742543,12.9981197 9.33162966,12.9981197 C9.33162966,12.9981197 9.4682351,13.0023504 9.51377025,12.9981197 C9.71619663,12.9805291 9.7794279,12.9535865 9.90999076,12.9257533 C12.7946746,12.3013982 14.9704345,9.66926507 14.9982735,6.5154258 L15,6.5154258 L14.9982735,0.667997587 Z" id="Fill-2"></path>
							        </g>
							    </g>
							</svg>
							<p><strong>Name, <em>Title</em></strong></p>

                    		<p>Great quote from a client. Consectetur adipiscing elit. Mauris cursus tortor sit amet justo rutrum condi men tum. consectetur adipiscing elit.</p>

                    		<svg width="164px" height="50px" viewBox="106 448 164 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    		    <defs></defs>
                    		    <g id="Group-4" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(106.000000, 448.000000)">
                    		        <g id="Group-3">
                    		            <rect id="Rectangle-2" fill="#FFFFFF" x="0" y="0" width="164" height="50"></rect>
                    		            <image id="logo" x="17.462963" y="5.3030303" width="125.277778" height="36.3636364" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATUAAABZCAYAAABfXrORAAAABGdBTUEAA1teXP8meAAAM+lJREFUeAHtXQd8FUX3vem9kUIIJCSBQOi9d5UmIKAgoFhAUFH5FLv+sRcsnyKKHfmwF0BBQBBEAaX3Jh1CIKSQ3tvL+5+zeft4L4UUUl6SvfmdzOzM7OzM3Z2zd8rOs5I6Kvqjr9ug6K2ADkA4EAw0B/wBb8ALsAdUyYEnG0gGMoEIA87CPQcctGr37Gm4mmga0DRQhzVgVVfKDhIjQfUHrgf6Ar0AJ6AqJQGZ7QZ2AhuBbSA6HVxNNA1oGqgjGrBoUgORuUKPY4DJwA2AM1CTkoiL/QasAlaD4GjhaaJpQNOABWvA4kgNRMYyDQLuASYAjoAlSBoK8S2wCOS21xIKpJVB04CmgeIasBhSA5k5oHhTgTlAu+JFtaiQAyjNfOB7EFyeRZVMK4ymgQaugVonNcNY2b24D/8HcJC/LskFFPZ1YDHILbcuFVwrq6aB+qqBWiM1QzeTY2VvAEF1XMFnUP6nQGzL63g9tOJrGqjzGqgVUgOhdYTmPgH61HkNmldgEw4fALkdMw/WjjQNaBqoKQ3UKKkZxs1eQOWeAGxrqpI1fB12Q18DXge55dfwtbXLaRpo8BqoMVIDoXHw/zuAVlpDEM6QTgGxnWoIldXqqGnAUjRgXRMFAaFNx3XYyBsKoVGt3YD9qPvtPNBE04CmgZrRQLVaamjQ/ArgQ2BGzVTHYq+yACV7vLq6o7p13h7If0gZtc9APBcTR9qMSLhcRlotWtNAndVAtZEaCI3fXv4CcCGtJiK/Qwm3gthSq1oZILXOyHN/BfI9j7QrgHdAcFyWoommgXqjgWohNRBaM2joD6B1vdFU1VTkILIZCmKrUkupEqSm1Eans8lKzXQd6zPx7IaqqV7t5wJdeKIUjxQpSTLI+70iYdphPdVAlY+pgdBaQld/AxqhFX9oOiFou4H0i8fWcIiNjc4pX2fz24OjPqhP1jRJjTPsRuTrbJ+cNfLDzkBVb4BQw3dMu1x5NFClpIbG2gIX3QQEA5qUrAFFRzVBbB+vnCpvfPeAvPPTTPny9wkSFV/8gw1fz0RbP8+EVWjwJIN6KbBGm6Bi7J5rL9p6eYfNK1Vla8UMjZTjRk3NL6EdlaABEttG6Kx/VXdFTa8Vk+gnCameKxF24Fx0oFyKbxz6zO0f3mGahn4353S3mETfm+FdjO5bAFxO8JhKDLpv2YgbgMAuAHcr2YAwjs2ZCdK4I4DbQrGO3GWFa/USgEMEztHDNROc0wgBPM9UEpFWGX805Elrkl+e8Bvhc8AmxCfBNQrSBeOAQx9mYm1VIN7uydIh9HjAwoe9mW+kWQLtoF5poEpIDY2TD+QagA+yJuXTQCskWwPdDQaxVeeWRis+XvvgEhYJjZ73uxippWe5MDqM/yDcaondZFOZhHPvR8AQNTA3z34nrLv+yJukxbwbw3kTmAIUJUUEKXIG6R4DqZBoTeV5HDxsGgD/HKTlS3IucCtg9qzqxSoT8U8iL86uq0KyKyaerqny0rR3Gc5nNAWot1YpK9nQ5Zq7n2iUNlDiUqBjQ1dmJerfA+d8DR1Wy4RNCeW5p2hYfEojiUnwZXB20Tj1OE9n+wP8RkJj+P7TbWmNxXCcCuQSDD/XId4FlEZoiFJeeit2vT/4cR5cTWKTfN7S662OIs1tgBmh8Twr0XNvvYVrXxlPIi23ZOc6uKHMEUDbcp+kJaxTGrhmUkNt+VANq1O1tqzC3ozivFgdRZpy/Up54a4F/wHprAQO4Br83tYoOXn28vWG8QKrh2FbjRFFPHY2+cVINynNg6kcYKllwf0aMBt2iIpvLD//PUIOny0+jNXMN/ptkAoJsFRp7BVvZ2WlL3bdoic0bxzFSYDphvCUvHw7xXI0Tcf6ZeU4quAz3xy4Gvmanq7565gGir0BK1J+WBgTkf6xipyjpS1RA89Bl9vRDV1XYmwlA8ODuHmIMgbGcTCjXErwk38jWsnmg73EQE7s5m00JijBk5tvJ1uQPiKmmYQ0uSCXk72ZKhJkySEHT5AJx8287WzzBNaQfPDz3cJu7eYDvba/PvPtHi6OmcZnDYQlvp4JH4CMfgUpmo2LMVNTOXkxRA6dCZfcfHu5rss28W9kvhomJCBSMGb2OvL6ymbEg56vTH1h/bNTFw41zYN1fH7xo6ZBmr8ea8D4oFW0jmiEfNt9XtHztPQlaoAWCbuhHUBsMSWmqMLAAO84gfUlsIQy/j7U8/P4FK+nQS760i6RnO4uC3+5SzCZwCQxB063XQOXllkBxrTInB1AKofhetsiX3sQW2aOsnrihYVr/vPygtnemxE3EDBKI/dkNxDjKAR8Yww08aRlusq3f4yTI+daMZRl25mY6pn00PgvR5okU67l5JDdOCPbmcS9u23wyf/CNSM1k/Qz4T9tOFZdk2jNWx80UClSQ+OjCc8uh9IHqQ+KsIA6+KAM/wPMGu21lItkVKAvHGHADKdCZGp+WMoh13fd6jKg4667QCCffLxWTqhxRd3vN96kEtqXiJtl6HIKiExhOUP66+A26t76cHj7kBODfDySOgX4xA7HbONshLNuZuJgp+yp2c4s0ORg/Z4BKqGREHnNY7AKSf46gK5RHO1zBaTWEgG7x/Vff9IYUdyzB/mwG15MUBeO0d0IMJ80YAvSkqjrvaDuvVFJgvIx6p1T6K2b/ytFaqjqg8CAullliy71CLww7oa1tqQqSjl/6Qwu6VCy4rKGji2Oy9Shv4ij/ZVnFlaVF8hvHx7sbniYj5d0XXY9IauBaUhjtOjgV/qCIBsw5/PXI/4RgBMI5RWlD3uVxPsRdz2uQyITWIV6XCsV3pJeplzqUSlB3fvhxJ8BP9MMEL4A12ad6rsMRgWfNlSSL9Yc1H0EXH8gETr41RBXJ5zC13gFiopGF4jkr1fgFC1pxTTwLnRs1rgqdnqx1E8gJAQWW0t0G3vvPdm+6HIKCQ2IdMaY1694kK/2kjuDh9tIaOpVQDIu8LM7+j1gRmhY9iFno4OEFmMpUtZgfapKaKWcf83BqDPX0qmExq4/u6grDBk/jPjxBn+9daDjNwBPA1IMFSXJkeBermsVv9pDXFpdOGbBB0GT6tGAF7LlS2NGFWUfj4c1wpDXGXQH34N/rGneWB4hHq5pYejC0dqqqHD2m291o6RkuMnSTaOUmU9dgY3cO+Y74Vqx2hKO811FJiBOfYm8Al0tApEtR9hNAF/6k4FfEEZz9X6AJNcM4KzvIeB9nLMbLrvj38Ihyf8N8KJq3jz+P+BegPnSqlwLPAvQWv0MoPC6nC7mEIQjsBTguPWTwHUATexFuN4nuBaP/wNQ5iDsHD0IVwl5FQ5/AFgmCq0tXmscwGGD7cAjOC8J57COBOV24B6gPQ8gIYY858HfERjFQMibOHc74jrD/yIDIB8hbH2ht/b+V4jUYEH0R1Fvrb3iNpgrT4euP0Q3lN2vqhazAXs1cy55gKgPshpcHveuoomWrJ0op6KCGfwP8H544Fk2kuEMqA1xccjiDKlxfLFIGbqZHG+j39DQSS4ZQBLDIMsAEhLlAEBiYyO/DQ17pKExs8Gza2z20sBxK6YDnABVOsBzGKCO1PSqq6Z5AZ6nAOXmGAK74Xpb4efXFWr6Fw1xdNSwCPhJkuqx6iJIkTD8p1VGYgwH1Hg7+Jm3K0BhmUlcHgCv+ynAMc0kgMRIAlbPfQz+Whe+iSoi/61IYi1tpTXAh+atSp9tODE86LSMH/B7V3QRxwHTgS8QxYZiJmmZLkLrCkLrotyC/Pjgqw+/8Tx8JE//CmDgwoefX21vl+tujKx+z+Wil8CH+9Km+WkGu6PMzgBfzqooFTccJKuBIKnTQDSQDRLpi3CV0BYirAuOSVRxANvQa4CpsMHz5W/6AiFB0sq7AVClq+oxuKfgDgbuNxzTOQuwvCQfVXj9isp5nDAGYLnjDScXvb4SjPo9Ds8OQ5p/cRwMrAf+RdhKQ/jN0AvJdpDheB/izxj8teqUm9RgOYxASc3GTGq15PX/4jdA56aNosI1nnL9r5zhnI0TfwFIaNOBYvf878M9paBACVZaPtKUSzBwn46ECUUTzxzzvTw26XN/EBqJLQroUzRNdR2jTCSPo0XznzZyqTx35/u0MkgSn6JBqkSbaZKWM6CKIN5T9cPtbOL/gX40YBLXFkO4aTyDuP5uKcBuJ8tDWYNjfrK2Ef5cJaT4vWD3bTPi/jDE0/kcYbSQTMOK3UOT9KV5lyCf1QCJU9VPsRdSaSebhL9i8FN/JPrehuPlBrfWnYoo5/laL23DK8Cz1V3l3cc7ybqdyss2FtfaUInrfVz0HHcsHwnxv8CHnQ+9V9F4HnMtWzXKu0Xz5owvFv2GI7wx0LaJd1wkiMsD/uMmaRnPcSlbOIzPB0jM+Qw3CONUsTN4TOPVONUtKS5LjSzF1ZUQXvQcvUkaRxN/VXsVs1vNFKS4D/7fDcdPwqUOKT8XOrX/3/QGlVoaWAz9EFljb9tSC9LwIoZD920xtkazv8okPctZTl4IFSy8Vce+2GDuxAObi4mEil7nRcxw9gKJDcVi3mLncqwuDl8f4HMms7g+7fbJnhMdzcJMDwL9LpkeVsgPa23x2S879g/0jZ5mbV1Q7Fx+8YBdOzwGd94xr2vYEd9DZ8MLEtM8rddsv24uSIwkdzPgZjiRFhItLlUezP3Nr0tmtuOgY5HLR0fGNpVNB3pvUiNr0OVLSJX7Ue4AHNylBlSBS0uUEoy8+VD44/lQLTxaaxwj7QZQjiDO9OVQGFpL/8tFaijbnFoqn+VfVp8n+hw0wDwM5eQnY+274cVsjZenradY2TeBWeKHenCYrFLyAM56qIwzTyN+CD5NWl2gt3IpKS02SpTcPDuMnbnj8yVjL4vmEi2Rl0we2BlYbPsQiMjYQC5eRh1KERCIbtbIl0f4eSV8B2Kb5INFvVxYm5HtJFE478SFEBznSVOfmEx0h519PBKVnJwxeA/pYMh24e+7BsUP77lZ7doIduVlVElW3ugl6ybOTclwNU48pGYU70WF3nVo+stTX0gJ8rv0iFom1vtiXBOFyPFZl/QMP3ADvkYI69XmgLLXHEitC6551NkxSzqGHhdXp4yDY/puzLSx1sU+tODlVxE3F5h47HzL8VhgbNsz/KA4O2Tng9TYpaxp2Y0LsmvL+817RahEBO81y3rkMA6gcuOByyC3JnhOdMBW+NlNHgRQfil0LON/maQGS8EfRR1rGcW1oFLkRos+bZ/os8AnKpGVUDw9w2xcxMq5rVi5dYbfvYRUVw26E/fgGVhraaWlMoxtbZo1MpQNr6yuCIkMDKx8LrQTD6g65qNkj7z2zBrZfQkOIpSAK/92XPGa+5AHzaHJeNA/gXsrQBOMjSEHOA0CWXviQug6fBd6BMeNAcnOc6DTFefY4ZvN07NGXr/MlNRyCuObMpGpoHz/zBrZgdcpWp4Dpunof/6bl+Yg/5/gvQPoBJAAWCZaFRs6hJ7oAzcMMJXfaCVikfKNCOQ5X8CijIH7NvA7MA6kNxmuUja8RNiGSHb/Bd4AHAHTslwtbAfSJgMvARQeU8oKOwCdJ6Bug5F2BuAJHAYWAbMACvPKBtS8N8GvyhJ4NgExAGWT8r/wH8+hfALwzTMA4BtmN8C6ql1j6kIltaXwW4yUaT6gQT2F0r5hMSWu7YLkp4g++U+Q2dmKl8TKGsTWXazc0ZaUtlDuLGaB1PiQ1WnBrCMbO4lCsZYWLJvOAXfjM4h45R3A+E0H+siyzSPPIz6Yx4hjurZAG8AeiAR2g+Ry4BYTpA9EIK/lA5AkjiLtKbhGQZr3cPAwA7gr8LxvHxAQa9CYPhtpQa5hOIU7CGMh8SsPT1j8KvLIxXkrEDyWcei6ymerbkvBpAiv1xugWX4B+Adpzfq+OM8T4bj5ynox9se3lVR+pPNHHLt2LDtfZseQ7hhcoyBNsPGg0JIiYQ8GSFRbkF7RJdJ547gH4AtQD3sQFw23wgISteYLDC7vxVaAddmLsO4VzqwaTyDzliVTy0rQUOL1mSdEn/g7LDMaO5UQfYHoU3eBEM+Itc9NeO81Km8mtH7qPKmVt7JF06FhsvF8BrQ3jcOWQnGIexCNdJkabmjEi3EMBZsL4tiluhXpU8xjrhxd12U7n/fXr4TA9Bn7DQ+fA34GDvBAFSdMQEwc/Jsjjkkmzmo49oLbj+sNxrVSGQb/A3DeAkg+iqD8sQifjDSbGAA/x/F4n6cARrKHn3EkkfFIe5nHkHOFjvJ/Jf7fACh5r9w61FO3bgMf0veAaYBpOy9AXl8ibDbyMrPSEcZJkiA4IUA2cBCERVeV2xE/AwckWt4TCq1Ui5Krzn7CSgtHac0eJIsqfQ0WRp+2V/QJqytPaKZlzUuQgtjvMLFf7hfmINwLWgD1RrzwhcGQLtvZWB9RUVLlENca4XiTFD6H2Kctc/+pdkpSfAnhB2JYuuW/w582Ofdb+BVCw4RA3o5/uxQYvl1lkmH4VAzdV2XW0+SUK169XnKQp1lj575zyEv/5vez1uDcR66kRt+12TkZ1GkH+9JGQmM8Jk26YKum3UjvizoMR9CHgEI6mdlOihWF8jdG3n/Mv/exkTwHQkK7DbDivnA7j3XWGRZFM67f8cgWO5gfD4oIrUYlb+5usmHPgCRst7QRYTMBW1iZ1EOeYS0i2/w0WKb83pflVgT+ZsA/ODgPbAJ2ANEImwhXlQB42gKjAFrKd4D01sEtU5CPP8Afv+lcZuJrTHBVUkPe468x/3pxuj7jMLqcm6q2LgU5UnAZL/68xPLky/ukNNTyJK4LaThhcMvAtSzqfBOUVPRnEKjMRHLrIxCL8xe/TdJvP9o1k4n5iRdmVuehsdwG8nBF0D7smrsKxKf/bPUUu282jLfeerg7x4YUwVIOvqS/MRwWc57+7OnFe090oGVsFG4M8PjH/2d1Ia4JG7WnMcLgOR0VLLiW7qOVdygbUarxvl4JreD/AJijhnErpRe/fMRK3T0Fkyo22NFkxTMT57HLezYh1Wv5vlPtCxavnWj79fqbbTbu66fUk+djsiUUDq0yM4FVKNzV5O0f78XGnMOluf9FKy+3lN5qos9XT6Ye7D5acUeyGoa8WrUJOs0Bf1tD2EK4/QAdQHI9DrCuXyONP1wOFfDTKJIqu6HNgVL1yPRF5H4c7zegSFTVHqoVKi1X9Q1SWnyNhesKrOToaY8au556ISfrSxLqsNG8L6BGXqtbkC1Z0WvkTPb9UiB2peamL9DnJqXaTnj1oR/zS01U+xG/zl04qVwMzaKyUefk2puVGjORZseGg6FqILcex6yjtAk68xaWhOQinF1CwU66/LZ0IWYoV6KhPYvZ2IUIi2zZ9Lx3v/Z7k7u1OswuIC0M/MhMBp3RaKgYr3qe/mLSKvDs5WKBhRMBtALZzWSjV4Sfg72/bBp3D+aLZ0Vckk9rkArH/QSbBNAZA5AoFOESEFhquojoZp9hKcxkWGpe0Ql+9vjo/yF0B+9D2V/nGjpYgN53Dl+e2SP8EK/XiScbyt4HZQdZXin7mh3Xybpdg5gk7nxMs89vHbyGlpRiEVHPDtiaCfo6iPBXcPwpPhnjOJuEBZ7rdiyy5V3wfgG0YxgkAXgYIIEPBgoAPa75OFy+NHj8GoBZb+X704HwUz4G+HzOAFoCvD+/4H78gXS94R8MKILjF+HZgbh1DMBxRzjscjcB2LXleX/CZdxgOASFep8M8AXAcn4I8Dp3A3yBsEu+sFRSQ3fHHQn6AhYheXnWsmqjci9qrDz8XnDagE/FysH4TFb5tR2s4iQlaqdsOj72anmz9bMLQ1iqdEHByk1qZy4FCScKTAWD7aaHqr+x6iGhEZCn1DDVxU663EJpJKy1LDR4tvDmhjg2RKPQsjMIx41KFCweLmnQNAoN7QBPMF3Lx+4hCI3pByN+G+I+gl8hNZvCNXJm3dKsXEdmcThs+v4HZo2cEQs/bzxJV4eyD0HZh8EfDFDcAGP9lZDCf8EmfnUXFDbovihDDMrAOiukxmd4xqgfmJzEuIweVXwLl9dwDJGktgMgGfkBB4GXgK+QH0mM5MLwJ+iHbAc2AI8CJFC+BN4BqJ9QgETsBaCOH06D6wnwnqjyAjwLgHWIvxsur28NRAKBwEMIn4trkzwHA0xPmQ00UnyF/0iEHgD1pEqPUkkNKfoAymIhNXVtunZ2im6NRdBj8CM7I1cKdHpxdLEXG1vqpGqlfbNd4ud+sWozLSG3HqF/yt6IQZKWzXtfZyW9kiUnGaqyX/WYuGzwbCDy7/kw2XeyvUnUFS+tuEGddo5HyG1q6L8RYUkb9/f1CsX246N6Ky9+NYqui+nBNfozSWiGPGg5FBVaMEpb43bnkBQQ2C0gsIPwE0cBNlbmoTzI6NImo0vp4e912ermgYpBgyijmBGlIfQQCc3gp7WjCD9/+24jebO4JBVuCUUriUKCIqn1BsKB74HnQS4zke9W+OcDJBVHgB/xb4SrGj2/wM8bEwpQ3gJ4L4OBYwbQ/zBACQFSkQfzeg9gnZkHdKLs6/Y63JcQ/w1cU4nEAfN4BqDl3QzYDbwPzAVaA8MUBcJTkvQrKbC2wmys9cql0RWT6HOJcmDLOTl//LJcgv/ojkg5fSha8vN0VVq8XqF8GVW/2FrnSfeQTdV/oeq9QnZlskeD4ZorBaWcz0avCAkBA96JwJcXL/sv93BN/Qcfy/+FyA0YV/qhf4fdQYakyuaYGOPyOhHZItvJPnuPGl5OlyRkFC+3ZPptQERXay/G9EU9IJbjahh+OFpQD+bzA8CG/AsWGrMxk4yV/NE9lQXLp3mClPPtbPN3IryiYtQZv6jAWCD19hv1hgXFW7DweTO2Y/oT5VqJjFcxc9wDWlsDgPuBGIBCi/NPkEt7xEfD/wUDISxvF8CLBxDWg3VUFAX3XYBpad3tx7l8MalxvFYEQKueROgBUDyB+UAHHkBoUN2g+K78G47zSHQstyrcIYVhawwB9rZqTAlu9xLCajUoPztbju+LFSdXe2nR3l/sHG3F2tpK7B3tJCE6VY7tuiDh3ZuJncPVqlW+Kvh7RIqPG+9jzUj7pjtl/YFRqEe65GTnoV7W4tbISTx9qtKgqNa6lLvrWcFSfIz0g3lOWNMIuanvH86YNf0NxPAigpRuHgjtDGYbx+OYjaI/IJxdHd1no3RqcWwVxqgGMqwCchZpaVLZ8RxsES4DOu5mV2coMIJhFRHMnP6EBbuKidmt1RGWjYSgPKQc83r1m4fmoU4xAzvuUrLlFw28ZouA82uC/S9Wph2uQb6X0PUMYIaTr1vFzTpPYnMDJxwadYHxvFudx0QvVS6KfyAHkjk/9v8a7gfAdMAemAzMBWiB3Quwu6d2CZPg34hz83Ae82aXcSQQCrwJdAMmAUZBOhukpwWi6NcQ4Q032OBXSYtEGGgIo6NawarLMOZDSSt0zNevqGGqq5ql6nGtuehpyqrVejm0/aIEhHqLtY21XL6UKokxacJuKLufoe0ai1+gp5w7Giutuja95rK28GOPoGaE3c41B++Q3NRYsbV3B2zEBnXMQff6NOoZ2s4fdbaqmcJU7irZmCTIrNypVz8Lg+c/Xfq+9Q34DGsmx8OG9djiiDN+VM+CxSaL1kxpgR+PSYel9iwGw3NhndjTQhnRczOTTVTT0oXlg0kfPcfBTIPN/Lgmfyj5HQQ+zQj++hXAxqnHr1V9XKD/CO/SAkaVS37aNPqz8QPW3eLhktaJ1mbroDOu6okr/hmm/DLX3pMdVvVvv+c2lFt5i4GAmGScmk51YZlyIbB6WKKL8meh/KOxpdQOTC7Y89e/gEfUxPgdV/1Pf422wgzyT7NGKmNpwxG3BSDpbQNIZr8aXDiFvwkLIuJH/iQ8xo9hBIQ7kpDQSFAkOE4o3AesBToBNwAUtGKjBCJ9LI5OAgznzdiGfGYhPAT+QUA2cABQLTd4yyclmjSYJPDC6dfODOUrw1VTJeL9//4HBRITq5ce/X3k7Jk8yUrPldTEK22IY2sn9kVJy04BkhSXLhkp2eLiwWe/8tLE83zlTy7nmTl5TgqZpWZ5SYjvcTnr2EpOHYsXJ5B0AbrZeTk6kHgjdLPjJASkbcESVc6yvb3tSLc7ohP9hpeyxfccjCPdg7VW7fmNpioBU07c+/59cwqa+0fd5weCsbXWSTK+YT2Fn887ei5M3fxx/u1vLZnX1GfkX+nZzpsxCG7PpQ78/dETF1pIS1h5qtASwi6/PPwFXTw3zABON/xKvZqEv4fwzJqXb/ZF2nvcnDIkFeu/kNYqJsnnfiwReRW7fugi4wLGcSyviBTLc8+JDjmdWvzbDT/3tw+/5NWR109JdxMs3VB+chDnXzoT1Xwuvk54l+vH/DzjnazQzKOxhOXoudbKWjj1Gi4410BqRl3xZwuLCsq//63pMwfgen/isy8XzsTyQ35+OYEt3a24ng1yCpgIMuH4Fq1TWrutgFGAWrF4+JcAqsyD5y5AHW9fbojgDWN+ZFxaWv4AZXehI/sMLp1NAMm7NbAImAnMQBl4UwYDQQCfqcpYqWYrjZGHUUKNvlr07Nihl4UfFUjPnlbSr6+1/LYhQzLQO09PzipWKl1+gUJozm4OEheVIiHXSGqNXOKKXaOqAvJ19rLu8BSJSw2QUL9/JSo5RHafGywenhfEzdNFMtNzBB8fwAK1U8YPvQPcJQ11dvPki9QihQ2iTEFD+3bWyLF2SFjiGwfx780aOdQH8QmGzGLUTP/z6XzuREHrgVZAV8ANYPdkD/ApGuYGuDL4ybVcoNoP3ueBnoADEIFxJTa+/oB6bQ9cbyWWULD70gJQJV/1rN5+PRvbEWAa0Bzgm3Tbj3+NXgX3IMCXPyW90EFLH5GwuaQ8u8/egiUQk3oh3RMArUcyEbtM64GXUf44/KJXHMrOMr8I9AXYyC/AGiVJtAVUomHZi+qK5TSTJxe/sQv5gTi6PY4IWky8Jut3BlgBcMNLtexTcUzLdCzAdLynfwOvIs1FuIrAj+90P6Q1NwBAa1TKz64rrbgROH4K6ADQalsKvAhQVgNzAdadhLYdoP4eAE4AtwK00FiehcDryDMGeUbAvxmgsOyUCKDUMLwPigsstQkIZYFqRXLRY170RYFs3aaX+2Zay7HjermM98WFizYSE63WC5pxd0D3E09aWo5STnZL/YM8JQPHrToHYOVQidUrV51mD31GXB1SypW2vIk4fvLHvxPkUmKoNPM+LccvdcWP9DpKK/+D4mSXge8hg2TDWiwE0hVgRbqV2KEbyvFBv2Yekg7r04KttU/R/by/vHpQ093U6hUf+G1/PfmckbzUOM21TA2AZPhSoBVFgv0fiIddUYsS21JKE1BKeLUHR0bq5b/v6CUU787nn7OWTz/VS2MYsgyPjb1CaO17NZc7Hh0i63/cLxt/PqiUi2SQha4ol3ewe+phIYPsugJb+ev4OIlJDhR/j4uSijG0w9hDsUvzf6SRS4zsOz9YopODFHIu0J1X6sKxwtycfEyKOMhlWJ6usNJ4bF8FkyDVcBOPVCRPkFk40s8Bb/tMfmjgPb/OrsjZWtra0ADI7FHDdWlJktDYGN80hFmUUxqp+dZGKTds0Mvmv/VyL4aE09Nhf84rkNAQK9m/Xy9ZJj3OsXf3gtXiL2t/3CuhrdWue2GJuayDpJaScG2klp3rfM2WGsnsz2M3S3xaE/FwSoCLMb9MP+nbcp00co2VzcfGyvbUYUZVswtdVHQ6nWRn5ol/sJdcvpgiTVt4F01iCceHylMIkFkQ0r0K3Nx3ePiiJ9+7JRnWdJMps69M95cnHy1NrWiAlniY4coZcLl+jd1Gi5PSSK1GW04mRio4uxkGlc191loWLymQLVv04umJD/lAaKo4YynHzOeGSSwa97YNx5Rgv6YearTicpKAXTZHJ3yEnJGnjEuZJSjnQXKWd6WXdHAC4O9TN0pKpo8yyxaVFIKFtR4ytutiCfCMUCYHNhzl0IJ599jVzVEefGWUXDh9WX79cpdS0vTkbGnU2E3SkrIUcqMFx66pBQmZ2HQQWEBeuHPK71n8ha5lruH4WYTNdvdyXrfg15lLGvm5sQvzHuqSB1cTy9cAx8kwPqd8KsWFvjA7LFNKIzUOUFa7cDzs2DG9ZMIKGzfWSuliznlUJ5eiCy9tap3dNClIJs3sKJvXnZKzJ64QnaOznbL8QYeuJ4WzhsoiXLT7tKRMycP3hW5eFR9gvwQiaulXoV4VrDBf2X56GMbJnBQSi0kJlGZe5+Su/m+Ji0MaJgcmy4+7HsQ4oHVhBQ3/be1sZODwFuLgaCOb1p5RrE9Xd0dJT81WUnA5RzyWdgSG+UhibLp4+7uZnV/LBwcxnqY84CAvDls8DLQE5gLOCCOZPQKcffqDCW/2GRbONO+AzM7B1aSOaAAkxoHrclnktV2l0kjNvNVVQynjLmNnu3i9BAdbgZREvvu+QNauw74vhWP+xis29reR5+b3l8AAMF/iWvF1Z3eekyaFcuFsvPS8vpVsX39cCaAVo86E2gV6YNIgu1KkFhHfWga25iRX2RKB3/M4E9dWUrN85FJSc8nVOUjHwO0yofsnsidiiCzdPQtWW8nGb4twHxlynb24X54r85dNVQjvzLEYGTGlmyz7dKty8QyQG8fWSNgp0WmWRmp/g7gCUdD/AzhozJm114BJAMks5/pbOn0w+9XRTdHV3IP7sxphmmgaqDYNlEZqS3DFP6vtqsjYD6N2fr5W8s23BR3X/Ka/jdfKz1c+lXAwXFc/akLIrmlPXZdvl7pjjSQeV+w3V+c8Tm0/YUgjJw5GyYBRbY2kZo+vDHKy8pQuGr8LxSImiY5IkiYYk6qIRCWFSmKGHwby40o8jeNlJ2I6y4WEMGWQPz7dH93VWLmh3TJJyWokByL7y+6z1yndz5IyaOTrIsNGukuww09iFfmD8u2nasFlZ+VKQEgjfCmB3xXIzlfW5bH8MeeTlDE1Wm0+WOZR25KHiQusD2yOcpwEMIigrDinWfwJYN88zPfzt5dOt3dwsmPcLBBakVcWQjXRNFDFGqi1wRm83TGCpnzWEgIXZpjxl2nE2dXh+Js/3L0rKMyX5u4CNIYr054IwBY8tAZCAUWGjOkgX8z7A120FOWzKQd0Sa3w54wlH+6NnJXxKK5fa4zlHhWRbsGbZVj7H42nkHSORvWQU3EdsZDRUaJTgsXeJls6Bm0XN8cU2X++P9aeNYO1VbpaUTcZeqOPtPLbKbYXPwCT86sIzPJuekGSMsD0BnH3dBY3jLH98sUOJYQzubp8nWBMSiHtwFa+Cump6WvSzcHEBb+55adpsB4zcO2fAdjbyq8wOULXKxb8eu9ZvwAPLsR8A/eP42eaaBqoEQ2UZqlV28VBZup4y1Bc5B+AS5tpfVHyb57RZ/nUOUPSMIP5GhpDhBJa/N9yBBmttd2bT8mkB/rLh3PXKF00Jue4mqOzvUJoHt7OylhUekqWKGRQzmURJKnW/vvlZGxnOXc5HBaYt+gKbDArmiotGx+R1k0OytGLPWUHxtFouV1N7Oyt5YYRjaQtfinc/hKGmSJijckPRPYzIzRGpCZnSrtuQViL54gFx9mSEp+hlD3qTLy07BggEcdiJRTfv3I8rqYkMy0XRJYicZiooRXs6uEYjUXBu3D9yYCdo5Pdrpf+d/uO8C7NOEbwFe5f4Vqbmiqgdh1NA9BA6SZFFasHZNYHWT4GjAS4+psPPlclK4KuyqEXvrjtmHdjt2VoDMvU8JJcWGq9Eb7dNK5b/xaycfkhOYnuKIUWGhflNmvprSxcJbHl5eoUK4eLdNElEhdYb7TqCrctskJXL0+Jz83KV4gkG91YNFwJbuUmXuiGhvoeUzR2JradJKC7ycW0ZQnXlXXuEyx9OhwX59j56KSZj4/zE6kvtszFryux12YunMHlkpUlb/2hRHAxrn9zL6U7HdrBX1niEdjKRyFv8zOv7YgvBC72pf7YxeTnWlkZOUo3mAua3ZWJFytJSczQoX9tg3Kdn/P2uD/6jWjDqehFuH+/X1sJtLM1DVReA9VKaiAytvpxAK2qXsBKIBu4BbAD2NXMePTtcVu6D265Ew2Gs2JlThWD1Fjus0AwoAgb26CR7eT9Z1Zj6UOuEkYi4xovLomwscMH4vBzgS5JjRYOV0boYHFwOyOuB1NmTdlxRThJj+m4C0iHsAuSbt0Gs5oOhquV7cBqka79gqWpf4Y0TntD3HSF3UjTM/N1dvLN9kcxJsdhqZKleUs/ZVul/f+wxw2zFotwWS+OrwWH+ynkY+dgo3zMX1mrjeN2/AwrHctGSGbUpS0sy7wsnTLRwutSFyR4LinhZ2qcucaYX/KMZ4dtHDqhiwNmaD/BvVvDtJpoGqhNDZAcqlxAZuyL3QpwWr8VwDEXjpuNApRpQC5TuGVm3z1j7up10KOR86toEBGIK7eA2J5G4nmmJ3C8qn235vLR8+iGcpIAwoZoAwLLwveUHFxnw+csIgmODZRWGgfk7bALE9e3cZIhB6TIj+b5uRUtFUq7nv7i4ln24DzHvLr385dAnyhpkvaSWOVEKucX/UdCW77nPjl7We15F01x5bhL71BZsXgH1uclK4FcotIIyzounopXZnZZL5KRoUuojCWSlLnTh6mwvjmwQkn6Wagb65cP65XpSPokd353yrqrQt1wPDI/r8D4zS2saZnyn4FRQ8Z23At9LkLa1bh/hQpXT9RcTQO1pIEqJTWQGVv93cCjgC/ANzdnvm40HMPBhk6j213E5zGHmoZ4z0Nj4LhahQWkxvwvAhyMNooHSKVFmyay6LX1BssLVgYsDw60K2vYctmo8xQiw7UVUtOhweYhnN1TWikU7memx1flKjkyLLR9YxCj+WJfhrMT3yLcV7r2dBd/h13iGv8+dn7CmpVSJD3HQ37eM1M4w1pe6TEgTH748G9JiElVTiHZBLX2leTLGRjnSkMX1E4hOlpt/Bie9WH9VCmsB3fSx2+PIpgWKy3TjJQcyUTXkl3dggLoAV1Nkh+JkyRPUufCX0qL9k3wIuqDfd6cOSt7Z49BYV+r+WuupgFL0cCVp/4aSgQy64vTZwK0zmKAbQDNhLGAC6BIjyFhSRPv738ouLXffAzisyt6TQJi+woZ3FE0ExfMGrbp3EyWfrwV+66lmEXTMuPWPmzZOjRqxbzAP2XxLhozLRI26tLEy9dVOJ7FfNw9HaV7Hy9pGZwh3nkwRmNXYXeoqy+QPxLVU/44OkGycjk/Un4hMXcHsa37fq+cPhJtPNG7ibs0xj5ynExIxmQCu4Zcp8f03JdNJTbWj1YZhdYqrS/uQ0dyY3oSV2H3G+MCIDP6abnR4sM6M+kxOEwyYMUd3HGOY2n/YMGtcTzUWBjNo2nAAjRQaVIDkQWg/FOBuwE/YD1Aq6wdwIF8RWgV9BvZNh7fa56BZfYRZvO+QUMrXP6vJqqkC1LrglP3lXQ6u1ThILbEmHT57dvdihVWUrqKhjVu5klLUzr08JEgt53ikfIROtaRV80mv8BOTkR3kZ1nr5dYfGVQWaEV2R4zoqn4rnXl/3YqH7iredGy8gThsrvNrj2tUlpnJC2SE49JXiRsWqqZIMGMVGxxVAKBW9uCQAeG4b61QZ4ucvLQJTn9b7SSj+F6N4HUwOCaaBqwPA1UiNRAZDQvxgAkM/bDdgIcPQ8BggEO+pDsvDFQ7jb6zp4nB45pH9e4qccCWGbLQWalm0A4qTICYluH84aXdq6bh5O06tBU2Wtt2+/HJPJU6d3CkvIgWXTuFyrtewQppMGttk8eipI4gwXoivVpIT7HpbHHBeWjdQc7dNWwTi0TlhjXnV3CXmnn8fOPFZlkKKkcpmE+/u7SqVeI7PnrlGxedcSM3EzTkQRJaOURTkBgska6oK5cRnIxIgEW4aWS8j6A/LqC1MqXcXkurqXRNFCFGiiT1EBkHLsaCIQBngCtLM5cOhtcjmnxY8ROQAssmI3FlkCRrTs3i8QEwAcgss0IrzYBqXVH5rvLuoADxqCaBvtgI8bCxavsSnGxbiq+D83B7B9/94CD/B7eLkJrjMs9aPFYWVnLxXPxEnnmsjKJUNZ1ajI+MNRHmof5KQP/+zafkYPbzylbL5VVBnYpcZ8ktK2/tMBuJ5xg4QbXF88mCD87U7uhpeQzDoR2zUMHpeStBWsauGYNlEpqIDMunCJh9ARogXFAJhjg7CWts45AV8DOr6nngVtn9bvcfUiYjZePK9cufAoyu3qfDImqSkBs3yOvyRXJj91TNmaOv3EMyQYExuUdmfhWNA2LdLl3WV0RroULbOEjAUGNlImAHHxmBf0rn1iRwFgX1s8WM7y2mOXkTG/i5TTF2uSMahkkZqoGbSzNVBua3yI1UGwZPMiMFlgIMBjoBpDAggGOlSlTf+zWtO7U9NKQsR2OdB3YIh2kdhhxJJat1dHFRL5lCZd3cFKi+ArWUs7kwDnJi6jrQtI682+MgmqsC7ubD1dj/lrWmgaqRANWT9/2ZUe85W/ds/m0DZYL0Aoj0gBaZmkYC0tu0zWwoEv/UGd+/uIf6OmD8RcdLJ2jiOd41i4QWZUM/COvSgusNe4S8WqlM9BOLEsDn6HbeV9ZibR4TQO1rQHbed/eeRqF2AO0Avg2TgJonVF4zLVnUcARA05bAomhLEXlLQRMAWhRalK1GriE7J6o2iy13DQNVI8GSh1Tq57LVW+uhkmD7bhKsW519V653uc+Blba6npfS62C9UID1vWiFoZKoOHR4nyhPtXJAurysUZoFnAXtCKUWwP1itQMtX4T7sZya0BLeDUNcALosasl0OI0DViaBupV91NVLrqh/MJhL9BMDdPcCmuAy3h6wErjmKsmmgbqjAbqo6UmaIhxuANc4lH312vUzqPE2ewpGqHVjvK1q16bBuolqVElaJD8JpSzobW+3ITlqWMyC/rjch1NNA3UOQ3UW1LjnUDD5Oc82tqqij2Wr0Bvn1XsFC21pgHL0UC9JjWqGQ10EZw5lqNyiy7J29DX8xZdQq1wmgbK0EC9JzXWHw31PTjcuFKT0jXAWeOnSo/WYjQN1A0N1MvZz9JUj1nRexDHrlWDIPPS9FBC+FwQ/2slhGtBmgbqnAYaFKnx7oDYboTzE+DC4wYu3KZ3BgjtqwauB6369UgDDY7UeO9AbNw2aQUQwuMGKlz2MhGEtqWB1l+rdj3VQIPshqEhH8L95F5xa+rpfS2rWvw+lrvXaoRWlqa0+DqngQZJarxLaNCJcLg1OScQcoCGIFyzx+2ZBqL+3HlFE00D9U4DDbL7WfQuojvaBmFfAbTe6qscQ8Wmg8yK/6pyfa2xVq8GqYEGa6mZ3m00dDb43sBsINU0rh74s1EH7lzSRSO0enA3tSqUqQHNUiuiIlht/Bj+JWAmYFMkuq4d/oACPwUyi6xrBdfKq2mgshrQSK0UzYHcWiKK5DYJqGvkxs/DXgKZ7YeriaaBBqUBjdTKuN0gtxZIwj3FpgL8KUBLFa45+xZ4F2TGfdA00TTQIDWgkVo5bzvIjYt1JwP8KqFPOU+riWQncZHPga9AZlx7pommgQatAY3UKnH7QXCcLR0PjAY4wVDTejyBa3Lx8FIQGTfD1ETTgKYBgwZqujHWO8WD4PgL9vz0qi/QC2gPVPUY3DnkuQ34G/gdRBYBVxNNA5oGStCARmolKOVagkByzji/KxAOBJsgAH4nAzzgmgqXkcQDCQB/jo4kdhbg2NhhkBjDNdE0oGmgHBr4f3Z+/YMymCDbAAAAAElFTkSuQmCC"></image>
                    		        </g>
                    		        <rect id="Rectangle" fill="#297FCA" style="mix-blend-mode: overlay;" x="14.4259259" y="3.78787879" width="133.62963" height="38.6363636"></rect>
                    		    </g>
                    		</svg>
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

<section class="product-support-resources base-padding">
	<div class="wide-container">
		<h3>Supporting resources (don’t take our word for it)</h3>
		<div class="support-resources-container flex-container flex-space-between">
			<div>
				<div class="resource__image" style="background-image: url(http://hypelabs.ca/dev/picis/custom/uploads/2017/04/placeholder_1.png);">
				</div>
				<div class="resource__content">
					<div>
						<h4>Perioperative Suite</h4>
						<p>Brochure</p>
					</div>
					<a href="#" class="btn ghost-btn no-shadow">View PDF</a>
				</div>
			</div>
			<div>
				<div class="resource__image" style="background-image: url(http://hypelabs.ca/dev/picis/custom/uploads/2017/04/placeholder_2.png);">
				</div>
				<div class="resource__content">
					<div>
						<h4>Streamlining Processes, Realizing Cost Savings…</h4>
						<p>Case Study</p>
					</div>
					<a href="#" class="btn ghost-btn no-shadow">View PDF</a>
				</div>
			</div>
			<div>
				<div class="resource__image" style="background-image: url(http://hypelabs.ca/dev/picis/custom/uploads/2017/04/placeholder_2.png);">
				</div>
				<div class="resource__content">
					<div>
						<h4>Streamlining Processes, Realizing Cost Savings…</h4>
						<p>Case Study</p>
					</div>
					<a href="#" class="btn ghost-btn no-shadow">View PDF</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
$recogs = rwmb_meta( 'rw_recognition_list' );
// Group is cloneable
if ( ! empty( $recogs ) ) { ?> 

<section class="product-recognitions base-padding no-lr-padding">
    <div class="container">
        <h3 class="grey-text ta-center">Recognition</h3>
        <div class="">
        	<ul class="row">
    		<?php 
    		// Group is cloneable
    		if ( ! empty( $recogs ) ) {
    		  foreach ( $recogs as $recog ) {
    		    $r_name  	= $recog['rw_recog_name'];
    		    $r_image  	= $recog['rw_recog_image'];
    		    ?>
    		    <li class="col s6 m6 l3">
    		    	<div class="recog__image">
    		    		<svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    		    		    <defs></defs>
    		    		    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
    		    		        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
    		    		        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
    		    		        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
    		    		        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
    		    		        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
    		    		        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
    		    		        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
    		    		    </g>
    		    		</svg>
    		    	</div>
    		    	<div class="recog__name">
    		    		<?php echo $r_name; ?>
    		    	</div>
    		    </li>
    		  <?php }
    		}?>
    		</ul>
    	</div>
    </div>
</section>

<?php } ?>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; wp_reset_postdata(); else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

