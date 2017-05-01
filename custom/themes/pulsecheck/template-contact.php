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

<div class="contact-body">
	<div class="inner-wrapper">
		<div class="left-panel">
			<h3>For sales and support:</h3>

			<p>Call: <a href="tel:8442409554" class="underline">844-240-9554</a>*</p>

			<p>*press 3 for sales, 1 for support</p>

			<p><a href="#" class="underline">info@picis.com</a></p>

			<div id="contact-map">
			    
			</div>

			<h3>Harris PulseCheck Head Office</h3>
			<p>
			10275 West Higgins Road, Suite 250<br/>
			Rosemont, IL. 60018</p>
		</div><div class="right-panel">
			<p>Leave a message with as much detail as you'd like and we'll have the right person respond within 48 hours.</p>
		    <?php gravity_form(1, false, false, false, '', true); ?>
		</div>
	</div>
</div>



<section class="contact-team base-padding">
<div class="container">
    <h3 class="ta-center">Talk shop with a team member who's been in your shoes</h3>
    <div class="contact-team__blurb">
    	<?php the_content();?>
    </div>
    <div class="contact-single-email-form">
    	<?php gravity_form(4, false, false, false, '', true); ?>
    </div>
    <?php
     // Check if there are any case studies
    $args = array(
        'post_type' => 'team-member',
        'posts_per_page'=> '10',
        'tax_query' => array(
            array(
                'taxonomy' => 'page-location',
                'field'    => 'slug',
                'terms'    => 'contact',
            ),
        ),
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args );
    if ($loop->have_posts()){
    	$count = 0;
    ?>
    <div class="contact-team-container">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
            $role       = rwmb_meta( 'rw_tm_role' );
            $email      = rwmb_meta( 'rw_tm_email' );
            $image 		= rwmb_meta( 'rw_tm_image' );
            $count++;
        ?>
        <div class="team-member-single">
            <div class="team__single__icon">       
                <img src="<?php echo $image;?>" alt="">
            </div>
            <div class="team__single__content">
                <p class="team__role"><?php echo $role;?></p>
                <p class="team__title"><?php the_title(); ?></p>
                <div id="modal<?php echo $count;?>" class="modal team-modal">
                    <div class="modal-footer">
                        <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="modal-content">
                        <img src="<?php echo $image;?>" alt="<?php the_title(); ?>">
                        <p class="team__role"><?php echo $role;?></p>
                        <p class="team__title"><?php the_title(); ?></p>
                        <?php the_content();?>
                    </div>
                </div>
            </div>
            <a class="modal-trigger-general modal-trigger<?php echo $count;?>" href="#modal<?php echo $count;?>">Bio <span class="team__plus">+</span></a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <?php } ?>
</div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>