<?php 
/**
* Template Name: Home
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );

    $ot_heading         = rwmb_meta( 'rw_about_team_heading' );
    $ot_overview        = rwmb_meta( 'rw_about_team_overview' );
?>
<section class="hero-header" id="skip-to-content" style="background-image: url(<?php the_post_thumbnail_url();?>)">
	<div class="grad-overlay blue-grad"></div>
    <div class="darken-overlay"></div>
    <div class="wide-container">
		<h1><?php echo $heading;?></h1>
		<h2><?php echo $subhead;?></h2>
	</div>
</section>

<section class="home-why why-section">
    <div class="container">
    	<ul class="row">
            <?php
            $features = rwmb_meta( 'rw_home_points' );
            if ( ! empty( $features ) ) {
              foreach ( $features as $feature ) {
                ?>
                <li class="col s6 m6 l3"><?php echo $feature;?></li>
              <?php }
            }?>
    	</ul>
    </div>
</section>

<?php get_template_part('template-part-alliance-partner'); ?>

<section class="home-products base-padding">
    <div class="wide-container">
        <h3 class="ta-center grey-text">Our Products</h3>
        <div class="product-container">
            <?php
             // Check if there are any Parent Products
            $args = array(
                'post_type' => 'product',
                'post_parent' => 0,
                'posts_per_page'=> '5',
                'order' => 'DESC'
            );

            $loop = new WP_Query( $args );
            if ($loop->have_posts()){
            ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                    $subheading         = rwmb_meta( 'rw_p_banner_subheading' );
                ?>
                <div class="single-home-product">
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink();?>" class="btn ghost-btn no-shadow">See details</a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="home-team base-padding no-top-padding">
    <div class="container">
        <h3 class="ta-center grey-text">Our team</h3>
        <p class="large-intro-type"><?php echo $ot_heading; ?></p>
        <div><?php echo $ot_overview; ?></div>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

