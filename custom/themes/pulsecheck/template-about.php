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

<section class="about-timeline base-padding">
    <div class="container">
        <h3><?php echo $tl_heading;?></h3>
        <div class="row">
        <?php 
        // Group is cloneable
        $points = rwmb_meta( 'rw_TL_points' );
        if ( ! empty( $points ) ) {
          foreach ( $points as $point ) {
            $date  = $point['rw_TL_date'];
            $desc     = $point['rw_TL_desc'];
            ?>
            <div class="about-TL__single">
              <div class="about-TL__single--left display-inblock">
                  <h4><?php echo $date;?></h4>
              </div>
              <div class="about-TL__single--right display-inblock">
                  <p><?php echo $desc;?></p>
              </div>
            </div>
          <?php  }
        }?>
        </div>
    </div>
</section>

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
                    $role         = rwmb_meta( 'rw_tm_role' );
                    $email         = rwmb_meta( 'rw_tm_email' );
                    $count++;
                    // print_r($count);
                ?>
                    <div class="team-member-single col s12 m6">
                        <div class="display-inblock team__single__icon">       
                            <svg width="37px" height="37px" viewBox="0 0 37 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                                <desc>Created with Sketch.</desc>
                                <defs>
                                    <path d="M37,18.5 C37,28.7173444 28.7173444,37 18.5,37 C8.28265556,37 0,28.7173444 0,18.5 C0,8.28265556 8.28265556,0 18.5,0 C28.7173444,0 37,8.28265556 37,18.5" id="path-1"></path>
                                </defs>
                                <g id="Userpic-/-Userpic-90px" stroke="none" fill="none" stroke-width="1" fill-rule="evenodd">
                                    <g id="Userpic">
                                        <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                        </mask>
                                        <use id="Mask" fill="#E4F1FD" xlink:href="#path-1"></use>
                                        <path d="M18.4597401,21.9113597 C15.8471407,21.9113597 12.73303,20.5304466 12.73303,13.9517375 L12.73303,12.5157674 C12.73303,9.46478956 15.3018954,6.98232708 18.4597401,6.98232708 C21.6179936,6.98232708 24.186859,9.46478956 24.186859,12.5157674 L24.186859,13.9517375 C24.186859,20.8771023 20.598622,21.9113597 18.4597401,21.9113597 L18.4597401,21.9113597 Z M32.0749312,29.7225317 C31.4475313,28.5247344 30.3881042,27.5916188 29.0895703,27.0952895 L23.2443286,24.8607878 C22.7301468,24.6642136 22.3978496,24.1988793 22.3978496,23.6756332 L22.3978496,21.3807726 C24.0850853,19.9468416 25.0043182,17.4080985 25.0043182,13.9517375 L25.0043182,12.5157674 C25.0043182,9.01495284 22.0684136,6.16666667 18.4597401,6.16666667 C14.8514754,6.16666667 11.9155708,9.01495284 11.9155708,12.5157674 L11.9155708,13.9517375 C11.9155708,17.4794688 12.8196807,20.0182119 14.5220394,21.4309357 L14.5220394,23.6756332 C14.5220394,24.1988793 14.1897422,24.6642136 13.6751517,24.8607878 L7.83031868,27.0952895 C6.53137607,27.5920267 5.47154027,28.5247344 4.84168799,29.7298726 L3.08333333,33.2629057 L3.81536801,33.6258746 L5.5700441,30.0997746 C6.10425366,29.0789756 7.01040714,28.2824832 8.12256033,27.8571163 L13.9673933,25.6226146 C14.8012017,25.3040992 15.3394985,24.5398254 15.3394985,23.6756332 L15.3394985,21.977836 C16.2223544,22.4672323 17.2617537,22.7270201 18.4597401,22.7270201 C19.6524131,22.7270201 20.693856,22.4554052 21.5803905,21.9488801 L21.5803905,23.6756332 C21.5803905,24.5398254 22.1186873,25.3036914 22.952087,25.6226146 L28.7973287,27.8571163 C29.9090731,28.2820754 30.8152266,29.0785678 31.3478013,30.0956963 L33.1879018,33.7111111 L33.9166667,33.3416169 L32.0749312,29.7225317 Z" id="Icon" fill="#297FCA" mask="url(#mask-2)"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="display-inblock team__single__content">
                            <p><?php the_title(); ?> (<?php echo $role;?>)</p>
                            <a href="mailto:<?php echo $email;?>" class="underline"><?php echo $email;?></a><br/><br/>
                            <a class="modal-trigger<?php echo $count;?> btn pc-blue no-shadow" href="#modal<?php echo $count;?>" >Bio</a>
                            <div id="modal<?php echo $count;?>" class="modal">
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

<section class="about-clients base-padding">
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

