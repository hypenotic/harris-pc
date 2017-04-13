<?php
/**
* Template Name: Contact
*/
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();

$heading         = rwmb_meta( 'rw_banner_heading' );
$subhead         = rwmb_meta( 'rw_banner_subheading' );
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' );  

?>

<section class="contact-header" id="skip-to-content">
    <div class="wide-container">
        <h1><?php echo $heading;?></h1>
        
    </div>
</section>



<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>