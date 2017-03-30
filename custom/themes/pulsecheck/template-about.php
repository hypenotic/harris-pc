<?php 
/**
* Template Name: About
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	// Banner
    $heading            = rwmb_meta( 'rw_banner_heading' );
	$subhead            = rwmb_meta( 'rw_banner_subheading' );
    // Our Story
    $os_heading         = rwmb_meta( 'rw_about_os_heading' );
    $os_overview        = rwmb_meta( 'rw_about_os_overview' );
    // Timeline
    $tl_heading         = rwmb_meta( 'rw_timeline_heading' );
    // Our Team
    $ot_heading         = rwmb_meta( 'rw_about_team_heading' );
    $ot_overview        = rwmb_meta( 'rw_about_team_overview' );
    // Our Clients
    $oc_heading         = rwmb_meta( 'rw_about_client_heading' );
    $oc_overview        = rwmb_meta( 'rw_about_client_overview' );
    // Our Alliances & Partners
    $ap_heading         = rwmb_meta( 'rw_about_ap_heading' );
    $ap_overview        = rwmb_meta( 'rw_about_ap_overview' );
?>
<section class="about-header llblue-bg" id="skip-to-content" style="background-image: url(<?php echo get_template_directory_uri().'/src/images/background_default.svg'?>);">
	<div class="container">
		<h1><?php echo $heading;?></h1>
		<h2><?php echo $subhead;?></h2>
	</div>
</section>

<section class="about-overview base-padding">
    <div class="container">
    	<div>
         <?php the_content(); ?>   
        </div>
    </div>
</section>

<section class="about-story base-padding">
    <div class="container">
        <h3><?php echo $os_heading; ?></h3>
        <div>
            <?php echo $os_overview; ?>
        </div>
    </div>
</section>

<?php $points = rwmb_meta( 'rw_TL_points' ); 
    if ( ! empty( $points ) ) { ?>

    <section id="cd-timeline" class="cd-container">

    <?php foreach ( $points as $point ) {
    // Get custom meta and assign to variables per post
    $date  = $point['rw_TL_date'];
    $desc     = $point['rw_TL_desc'];
    ?>
  
        <div class="cd-timeline-block wow fadeIn">
            <div class="cd-timeline-img cd-text" style="background: white">
                <div class="timeline-icon">
                <?php //if($icon) : ?>
                    <!-- <i class="fa <?php //echo $icon; ?> fa-2x"></i> -->
                <?php //endif ?>
                </div>
            </div>
            
            <div class="cd-timeline-content">
                <div><?php echo $desc;?></div>
                <span class="cd-date"><?php echo $date; ?></span>
            </div>
        </div>
      <?php } ?>
    </section> 
<?php }?>


<section class="about-team base-padding">
    <div class="container">
        <div class="inner-container">
            <h3><?php echo $ot_heading; ?></h3>
            <div>
                <?php echo $ot_overview; ?>
            </div>
            <?php
             // Check if there are any team members
            $args = array(
                'post_type' => 'team-member',
                'posts_per_page'=> '10',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            
            $loop = new WP_Query( $args );
            if ($loop->have_posts()){
                $count = 0;

            ?>
                <div class="team-members-container row" class="wrapper">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                    $role     = rwmb_meta( 'rw_tm_role' );
                    $email    = rwmb_meta( 'rw_tm_email' );
                    $image    = rwmb_meta( 'rw_tm_image' );
                    $count++;
                ?>
                    <div class="team-member-single col s12 m6">
                        <div class="display-inblock team__single__icon">       
                            <img src="<?php echo $image;?>" alt="">
                        </div>
                        <div class="display-inblock team__single__content">
                            <p><?php the_title(); ?></p>
                            <p class="team__role"><?php echo $role;?></p>
                            <a href="mailto:<?php echo $email;?>" class="underline"><?php echo $email;?></a><br/>
                            <a class="modal-trigger-general modal-trigger<?php echo $count;?> btn pc-blue no-shadow" href="#modal<?php echo $count;?>" >Bio</a>
                            <div id="modal<?php echo $count;?>" class="modal team-modal">
                                <div class="modal-content">
                                  <?php the_content();?>
                                </div>
                                <div class="modal-footer">
                                  <a href="#!" class=" modal-close waves-effect btn-flat">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="about-clients base-padding mblue-bg white-text">
    <div class="container">
        <div class="inner-container">
            <h3><?php echo $oc_heading; ?></h3>
            <div class="about-clients-overview">
                <?php echo $oc_overview; ?>
            </div>
            <?php get_template_part('template-part-clients'); ?>
        </div>
    </div>
</section>

<section class="about-alliances-partners base-padding">
    <div class="container">
        <div class="inner-container">
            <h3><?php echo $ap_heading; ?></h3> 
            <div>
                <?php echo $ap_overview; ?>
            </div>
            <?php get_template_part('template-part-alliance-partner'); ?>
        </div>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

