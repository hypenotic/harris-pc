<?php get_header(); ?>
<?php
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );
?>
<section class="page-header" id="skip-to-content">
	<div class="wide-container">
		<h1><?php the_title();?></h1>
	</div>
</section>

<section class="single-page-content">
	<div class="wide-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    	$hey = get_page_template_slug( $post->ID );
    	print_r($hey);
    ?>
		<div class="page-content">
		<?php echo get_page_template_slug( $post->ID ); ?>
			<?php the_content();?>

		</div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>

