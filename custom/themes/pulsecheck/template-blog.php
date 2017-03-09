<?php 
/**
* Template Name: Blog
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );
?>
<section class="blog-header" id="skip-to-content">
	<h1>The Pulse</h1>
</section>

<section >
    
</section>


<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

