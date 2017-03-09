<?php 
/**
* Template Name: Contact
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );
?>
<section class="hero-header">
	<h1><?php echo $heading;?></h1>
	<h2><?php echo $subhead;?></h2>
</section>

<section id="skip-to-content">
    
</section>


<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

