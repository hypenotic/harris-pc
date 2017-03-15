<?php 
/**
* This is the base template for Product Pages
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post();
	global $post;
    $post_slug=$post->post_name;

	$heading         = rwmb_meta( 'rw_p_banner_heading' );
	$subhead         = rwmb_meta( 'rw_p_banner_subheading' );

	if ( is_singular( 'product' ) && $post->post_parent ) {
	    $is_child = true;
	} else {
		$is_child = false;
	}
?>
<section class="product-header <?php if ($is_child == true) { ?>product-child<?php } ?>" id="skip-to-content" style="background-image: url(<?php if ($is_child == true) { ?><?php echo get_template_directory_uri().'/src/images/background_default.svg'?><?php } ?>);background-size:cover;">
	<div class="container">
		<h1><?php the_title();?></h1>
		<h2><?php echo $heading;?></h2>
		<?php if ($subhead) { ?>
		<h3><?php echo $subhead;?></h3>
		<?php } ?>
		<a href="#" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
		<?php if ($is_child == false) { ?>
		<a href="#" class="underline display-block">Need training courses & user guides?</a>
		<?php } ?>
	</div>
</section>


<?php if ($is_child == false) { ?>
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
    		    <li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> <?php echo $heading;?></li>
    		  <?php }
    		}?>
    	</ul>
    </div>
</section>
<?php } ?>

<?php if ($is_child == false) { ?>
<?php get_template_part('template-part-alliance-partner'); ?>
<?php } ?>

<section class="product-overview base-padding">
	<div class="container">
		<h3>Headline overview of major benefits</h3>
		<svg class="neg-left-image" width="464px" height="249px" viewBox="-118 353 464 249" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <defs></defs>
		    <g id="Group-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-117.000000, 354.000000)">
		        <g id="Page-1" stroke="#297FCA" stroke-width="0.5">
		            <g id="Group-4" transform="translate(0.000000, 0.245842)">
		                <path d="M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M459.460929,226.463054 L403.630247,226.463054 L403.630247,12.2553735 C403.630247,5.513 398.134461,0.0261445783 391.383614,0.0261445783 L70.6175357,0.0261445783 C63.8666883,0.0261445783 58.3739123,5.513 58.3739123,12.2553735 L58.3739123,226.463054 L2.27837338,226.463054 C1.62525974,226.463054 1.09253571,226.994235 1.09253571,227.646139 L1.09253571,237.379422 C1.09253571,237.859295 1.38147078,238.287861 1.82691234,238.471964 L1.91118506,238.520253 C8.0962013,243.168084 16.0298766,245.72741 24.252487,245.72741 L437.528951,245.72741 C445.802727,245.72741 453.76951,243.140922 459.969575,238.444801 C460.405987,238.203355 460.643756,237.807988 460.643756,237.379422 L460.643756,227.646139 C460.643756,226.994235 460.114042,226.463054 459.460929,226.463054 Z M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M460.643756,237.379422 C460.643756,237.807988 460.405987,238.203355 459.969575,238.444801 C453.76951,243.140922 445.802727,245.72741 437.528951,245.72741 L24.252487,245.72741 C16.0298766,245.72741 8.0962013,243.168084 1.91118506,238.520253 L1.82691234,238.471964 C1.38147078,238.287861 1.09253571,237.859295 1.09253571,237.379422 L1.09253571,227.646139 C1.09253571,226.994235 1.62525974,226.463054 2.27837338,226.463054 L58.3739123,226.463054 L58.3739123,12.2553735 C58.3739123,5.513 63.8666883,0.0261445783 70.6175357,0.0261445783 L391.383614,0.0261445783 C398.134461,0.0261445783 403.630247,5.513 403.630247,12.2553735 L403.630247,226.463054 L459.460929,226.463054 C460.114042,226.463054 460.643756,226.994235 460.643756,227.646139 L460.643756,237.379422 Z" id="Stroke-1"></path>
		                <path d="M0,237.378516 L461.739302,237.378516" id="Stroke-3"></path>
		            </g>
		            <path d="M48.2741269,226.708896 L423.751263,226.708896" id="Stroke-5"></path>
		        </g>
		        <g id="Page-1" transform="translate(148.000000, 35.000000)" stroke="#297FCA" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round">
		            <path d="M161.169057,145.283811 C161.169057,154.055115 154.055115,161.169057 145.283811,161.169057 L16.2161885,161.169057 C7.44488525,161.169057 0.330942623,154.055115 0.330942623,145.283811 L0.330942623,16.2161885 C0.330942623,7.44488525 7.44488525,0.330942623 16.2161885,0.330942623 L145.283811,0.330942623 C154.055115,0.330942623 161.169057,7.44488525 161.169057,16.2161885 L161.169057,145.283811 Z" id="Stroke-1"></path>
		            <path d="M1.32377049,26.1444672 L160.17623,26.1444672" id="Stroke-2"></path>
		            <path d="M13.2377049,14.2305328 L37.0655738,14.2305328" id="Stroke-3"></path>
		            <path d="M109.915311,14.2305328 C109.915311,20.6825902 100.233254,20.6825902 100.233254,14.2305328 C100.233254,7.77847541 109.915311,7.77847541 109.915311,14.2305328" id="Stroke-4"></path>
		            <path d="M129.771869,14.2305328 C129.771869,20.6825902 120.089811,20.6825902 120.089811,14.2305328 C120.089811,7.77847541 129.771869,7.77847541 129.771869,14.2305328" id="Stroke-5"></path>
		            <path d="M149.628426,14.2305328 C149.628426,20.6825902 139.946369,20.6825902 139.946369,14.2305328 C139.946369,7.77847541 149.628426,7.77847541 149.628426,14.2305328" id="Stroke-6"></path>
		            <path d="M39.7025246,127.960951 L121.797475,127.960951" id="Stroke-7"></path>
		            <polygon id="Stroke-8" points="54.2745902 90.6888689 71.4836066 90.6888689 71.4836066 115.851098 54.2745902 115.851098"></polygon>
		            <polygon id="Stroke-9" points="72.1454918 74.803623 89.3545082 74.803623 89.3545082 115.851098 72.1454918 115.851098"></polygon>
		            <polygon id="Stroke-10" points="90.0163934 58.918377 107.22541 58.918377 107.22541 115.851098 90.0163934 115.851098"></polygon>
		        </g>
		    </g>
		</svg>
	</div>
</section>

<section class="product-features base-padding no-tb-padding">
	<div class="container">
		<div class="row">
			<?php 
			// Group is cloneable
			$features = rwmb_meta( 'rw_feature_list' );
			if ( ! empty( $features ) ) {
				$count = 1;
			  foreach ( $features as $feature ) {
			    $heading  	= $feature['rw_feature_heading'];
			    $desc  		= $feature['rw_feature_desc'];
			    $points  	= $feature['rw_feature_points'];
			    // print_r($points);
			    // $img  		= $feature['rw_feature_image'];
			    ?>
			    <div class="col s12 m12 single-product-feature">
			    	<svg class="neg-left-image" width="463px" height="248px" viewBox="-124 122 463 248" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			    	    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
			    	    <desc>Created with Sketch.</desc>
			    	    <defs></defs>
			    	    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-123.000000, 123.000000)">
			    	        <g id="Group-4" transform="translate(0.000000, 0.245842)" stroke="#297FCA" stroke-width="0.5">
			    	            <path d="M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M459.460929,226.463054 L403.630247,226.463054 L403.630247,12.2553735 C403.630247,5.513 398.134461,0.0261445783 391.383614,0.0261445783 L70.6175357,0.0261445783 C63.8666883,0.0261445783 58.3739123,5.513 58.3739123,12.2553735 L58.3739123,226.463054 L2.27837338,226.463054 C1.62525974,226.463054 1.09253571,226.994235 1.09253571,227.646139 L1.09253571,237.379422 C1.09253571,237.859295 1.38147078,238.287861 1.82691234,238.471964 L1.91118506,238.520253 C8.0962013,243.168084 16.0298766,245.72741 24.252487,245.72741 L437.528951,245.72741 C445.802727,245.72741 453.76951,243.140922 459.969575,238.444801 C460.405987,238.203355 460.643756,237.807988 460.643756,237.379422 L460.643756,227.646139 C460.643756,226.994235 460.114042,226.463054 459.460929,226.463054 Z M74.9636006,212.263024 L387.037549,212.263024 L387.037549,15.8076446 L74.9636006,15.8076446 L74.9636006,212.263024 Z M460.643756,237.379422 C460.643756,237.807988 460.405987,238.203355 459.969575,238.444801 C453.76951,243.140922 445.802727,245.72741 437.528951,245.72741 L24.252487,245.72741 C16.0298766,245.72741 8.0962013,243.168084 1.91118506,238.520253 L1.82691234,238.471964 C1.38147078,238.287861 1.09253571,237.859295 1.09253571,237.379422 L1.09253571,227.646139 C1.09253571,226.994235 1.62525974,226.463054 2.27837338,226.463054 L58.3739123,226.463054 L58.3739123,12.2553735 C58.3739123,5.513 63.8666883,0.0261445783 70.6175357,0.0261445783 L391.383614,0.0261445783 C398.134461,0.0261445783 403.630247,5.513 403.630247,12.2553735 L403.630247,226.463054 L459.460929,226.463054 C460.114042,226.463054 460.643756,226.994235 460.643756,227.646139 L460.643756,237.379422 Z" id="Stroke-1"></path>
			    	            <path d="M0,237.378516 L461.739302,237.378516" id="Stroke-3"></path>
			    	        </g>
			    	        <path d="M48.2741269,226.708896 L423.751263,226.708896" id="Stroke-5" stroke="#297FCA" stroke-width="0.5"></path>
			    	        <g transform="translate(148.000000, 35.500000)" stroke="#297FCA" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round">
			    	            <path d="M160.171107,144.384221 C160.171107,153.101213 153.101213,160.171107 144.384221,160.171107 L16.1157787,160.171107 C7.39878689,160.171107 0.328893443,153.101213 0.328893443,144.384221 L0.328893443,16.1157787 C0.328893443,7.39878689 7.39878689,0.328893443 16.1157787,0.328893443 L144.384221,0.328893443 C153.101213,0.328893443 160.171107,7.39878689 160.171107,16.1157787 L160.171107,144.384221 Z" id="Stroke-1"></path>
			    	            <path d="M1.31557377,25.982582 L159.184426,25.982582" id="Stroke-2"></path>
			    	            <path d="M13.1557377,14.142418 L36.8360656,14.142418" id="Stroke-3"></path>
			    	            <path d="M109.234721,14.142418 C109.234721,20.5545246 99.6126148,20.5545246 99.6126148,14.142418 C99.6126148,7.73031148 109.234721,7.73031148 109.234721,14.142418" id="Stroke-4"></path>
			    	            <path d="M128.968328,14.142418 C128.968328,20.5545246 119.346221,20.5545246 119.346221,14.142418 C119.346221,7.73031148 128.968328,7.73031148 128.968328,14.142418" id="Stroke-5"></path>
			    	            <path d="M148.701934,14.142418 C148.701934,20.5545246 139.079828,20.5545246 139.079828,14.142418 C139.079828,7.73031148 148.701934,7.73031148 148.701934,14.142418" id="Stroke-6"></path>
			    	            <polygon id="Stroke-7" points="24.0092213 65.4497951 61.5030738 65.4497951 61.5030738 104.917008 24.0092213 104.917008"></polygon>
			    	            <path d="M24.0092213,65.4497951 L61.5030738,104.917008" id="Stroke-8"></path>
			    	            <path d="M61.5030738,65.4497951 L24.0092213,104.917008" id="Stroke-9"></path>
			    	            <path d="M23.022541,126.623975 L135.504098,126.623975" id="Stroke-10"></path>
			    	            <path d="M86.170082,97.0235656 L135.504098,97.0235656" id="Stroke-11"></path>
			    	            <path d="M86.170082,67.4231557 L135.504098,67.4231557" id="Stroke-12"></path>
			    	        </g>
			    	    </g>
			    	</svg>
			    	<h3><?php echo $heading;?></h3>
			    	<p><?php echo $desc;?></p>
			    	<ul>
						<?php 
						if ( ! empty( $points ) ) {
						  foreach ( $points as $point ) {?>
			    		<li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $point;?></li>
			    		  <?php  }
			    		}?>
			    	</ul>			
			    </div>
			  <?php  $count++; }
			}?>
		</div>
	</div>
</section>

<section class="product-who why-section">
    <div class="container">
        <h3>Designed by physicians using real workflows.<br/>Ideal for:</h3>
        <div class="">
        	<ul class="row">
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Free standing ED</li>
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Urgent Care</li>
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Canadian Hospitals</li>
        		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Hospital ED</li>
        	</ul>
        </div>

        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                	<a class="btn waves-effect pc-blue no-shadow">Convince your team</a>
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            
        </div>

        <div class="carousel carousel-slider center llblue-bg" data-indicators="true">
            <div class="carousel-fixed-item center">
              <a class="btn waves-effect pc-blue no-shadow">Convince your team</a>
            </div>
            <div class="carousel-item" href="#one!">
              <h2>First Panel</h2>
              <p class="">This is your first panel</p>
            </div>
            <div class="carousel-item" href="#two!">
              <h2>Second Panel</h2>
              <p class="">This is your second panel</p>
            </div>
            <div class="carousel-item" href="#three!">
              <h2>Third Panel</h2>
              <p class="">This is your third panel</p>
            </div>
            <div class="carousel-item" href="#four!">
              <h2>Fourth Panel</h2>
              <p class="">This is your fourth panel</p>
            </div>
          </div>
    </div>
</section>

<?php
 // Check if there are any case studies
$args = array(
    'post_type' => 'case-study',
    'tax_query' => array(
		array(
			'taxonomy' => 'products',
			'field'    => 'slug',
			'terms'    => $post_slug,
		),
	),
    'posts_per_page'=> '10',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$loop = new WP_Query( $args );
if ($loop->have_posts()){
?>
<section class="product-case-studies">
    <div class="container">
        <h3>Check out our case studies:</h3>
        <div class="case-study-container row" class="wrapper">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
    	$heading         = rwmb_meta( 'rw_cs_banner_heading' );
    ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="case-study-container__single display-inblock">
        <div class="display-inblock case-study-container__single__icon">
        	<svg viewBox="32 141 14 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        	    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
        	    <desc>Created with Sketch.</desc>
        	    <defs></defs>
        	    <path d="M41.5789474,144.684284 L46,144.684284 L46,156.473758 L32,156.473758 L32,144.684284 L36.4217895,144.684284 L36.4217895,146.157968 L33.4736842,146.157968 L33.4736842,155.000074 L44.5263158,155.000074 L44.5263158,146.157968 L41.5789474,146.157968 L41.5789474,144.684284 Z M39.0005895,153.526316 L36.4083789,150.206842 L36.9890105,149.753684 L38.6321684,151.857368 L38.6321684,141 L39.3682737,141 L39.3682737,151.857368 L41.0114316,149.753684 L41.5928,150.206842 L39.0005895,153.526316 Z" id="Icon" stroke="none" fill="#3FA2F7" fill-rule="evenodd"></path>
        	</svg>
        </div>
        <div class="display-inblock case-study-container__single__content">
        	<h4><?php echo $heading;?></h4>
        	<p><?php the_title(); ?></p>
        </div>
        </a>
    <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php } ?>



<section class="product-request base-padding">
    <div class="container">
        <h3>See how it works</h3>
        <a href="#" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; wp_reset_postdata(); else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

