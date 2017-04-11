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

	if ( is_singular( 'product' ) && $post->post_parent ) {
	    $is_child = true;
	} else {
		$is_child = false;
	}
?>
<section class="product-header <?php if ($is_child == true) { ?>product-child<?php } ?>" id="skip-to-content" style="background-image: url(<?php if ($thumbnail) { ?><?php echo $thumbnail[0]; ?><?php } else { echo get_template_directory_uri().'/src/images/background_default.svg'; } ?>);background-size:cover;">
	<div class="grad-overlay green-grad"></div>
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
    		    <li class="col s6 m6 l3"><?php echo $heading;?></li>
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
			    	<div class="feature__left">
			    		<div>
			    			<svg class="neg-left-image" viewBox="-124 122 463 248" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
			    		</div>
			    	</div><div class="feature__right">
			    		<div>
			    		<h3><?php echo $heading;?></h3>
			    			<p><?php echo $desc;?></p>
								<?php 
								if ( ! empty( $points ) ) {
								echo '<ul>';
								foreach ( $points as $point ) {?>
			    				<li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $point;?></li>
			    			<?php  }
			    			echo '</ul>';
			    			}?>
			    		</div>
			    	</div>
			    </div>
			  <?php  $count++; }
			}?>
</section>


<?php 
$slides = rwmb_meta( 'rw_slider_single' );
// Group is cloneable
if ( ! empty( $slides ) ) { ?> 

<section class="product-who why-section base-padding no-lr-padding">
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
        		    <li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> <?php echo $stitle;?></li>
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
                    		            <image id="logo" x="17.462963" y="5.3030303" width="125.277778" height="36.3636364" xlink:href="data:image/png;base64,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"></image>
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

<?php 
$recogs = rwmb_meta( 'rw_recognition_list' );
// Group is cloneable
if ( ! empty( $recogs ) ) { ?> 

<section class="product-recognitions base-padding no-lr-padding lblue-bg">
    <div class="container">
        <h3>Recognitions</h3>
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



<section class="product-request base-padding">
    <div class="container">
        <h3>See how it works</h3>
        <a href="#modal-demo-bottom" class="btn waves-effect pc-blue no-shadow modal-trigger-general modal-trigger-demo">Request a demo</a>
    </div>
    <div id="modal-demo-bottom" class="modal">
    	<div class="modal-footer">
          <a href="#" class="modal-close waves-effect btn-flat">Close</a>
        </div>
        <div class="modal-content">
          <?php gravity_form(2, false, false, false, '', true); ?>
        </div>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; wp_reset_postdata(); else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

