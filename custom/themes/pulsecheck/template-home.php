<?php 
/**
* Template Name: Home
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );
?>
<section class="hero-header" id="skip-to-content" style="background-image: url(<?php the_post_thumbnail_url();?>)">
	<div class="dark-overlay"></div>
    <div class="container">
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
                <li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> <?php echo $feature;?></li>
              <?php }
            }?>
    	</ul>
    </div>
</section>

<?php get_template_part('template-part-alliance-partner'); ?>

<section class="home-products base-padding">
    <div class="container">
        <h3>PulseCheck Products</h3>
        <div class="row">
            <?php
             // Check if there are any Parent Products
            $args = array(
                'post_type' => 'product',
                'post_parent' => 0,
                'posts_per_page'=> '10',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $loop = new WP_Query( $args );
            if ($loop->have_posts()){
            ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                    $subheading         = rwmb_meta( 'rw_p_banner_subheading' );
                ?>
                <div class="col s6">
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <p><?php echo $subheading;?></p>
                    <a href="<?php the_permalink();?>" class="underline display-block tell-me-more">Tell me more</a>
                    <a href="#" id="request-demo-trigger" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="home-team base-padding no-top-padding">
    <div class="container">
        <div class="inner-container">
            <h3>Our team speaks your language</h3>
            <p>Overview statement here. Multi-disciplinary care. Examples?consectetur adipiscing elit. Mauris cursus tortor sit amet justo rutrum.</p>
            <p>Speak to one of our physicians, nurses, medical admin or ED Directors on staff who help design the software to work how you work: </p>
        </div>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

