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

<?php get_template_part('template-part-product-testimonials'); ?>

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

<?php get_template_part('template-part-product-features'); ?>

<?php get_template_part('template-part-product-slider'); ?>

<?php get_template_part('template-part-recognition'); ?>

<?php get_template_part('template-part-resources'); ?>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; wp_reset_postdata(); else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

