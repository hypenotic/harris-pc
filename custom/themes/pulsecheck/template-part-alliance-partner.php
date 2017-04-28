<?php if ( is_page_template( 'template-about.php' ) ) { ?>
    <!-- Partners -->
    <h4 class="ta-center grey-text unbold pa-header">Partners</h4>
    <?php
     // Check if there are any Partners
    $args = array(
        'post_type' => 'client-partner',
        'tax_query' => array(
            array(
                'taxonomy' => 'type',
                'field'    => 'slug',
                'terms'    => 'partner',
            ),
        ),
        'posts_per_page'=> '10',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args );
    if ($loop->have_posts()){
        $count = 0;
    ?>
    <section class="partner-list-section">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
            $heading         = rwmb_meta( 'rw_cs_banner_heading' );
            $logo         = rwmb_meta( 'rw_cp_logo' );
            $website     = rwmb_meta( 'rw_cp_website' );
            // print_r($logo);
            $count++;
        ?>
        <div class="display-inblock partner-list__single__content">
            <?php if ($logo) { ?>
                <a href="<?php echo $website; ?>" title="<?php the_title(); ?>" class="partner-list__single display-inblock"><img src="<?php echo $logo;?>" class="display-block" alt="<?php the_title(); ?> Logo"></a>
            <?php } else { ?>
                <p style="margin-bottom: 0px;font-size: 10px;line-height: 10px;">Insert logo for:</p>   
                <p style="margin-top: 4px;margin-bottom: 15px;font-size: 10px;line-height: 10px;font-weight:bold;"><?php the_title();?></p>
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            <?php } ?>
            <div id="modal-partner<?php echo $count;?>" class="modal partner-modal">
                <div class="modal-footer">
                    <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="modal-content">
                    <h3><?php the_title(); ?></h3>
                    <div><?php the_content();?></div>
                    <p class="pa_website"><a href="<?php echo $website; ?>" target="_blank">Website</a></p> 
                </div>
            </div>
            <a class="modal-trigger-general modal-trigger-partner<?php echo $count;?> display-block" href="#modal-partner<?php echo $count;?>">+</a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <?php } ?>

    <!-- Alliances -->
    <h4 class="ta-center grey-text unbold pa-header">Alliances</h4>
    <?php
     // Check if there are any alliances
    $args = array(
        'post_type' => 'client-partner',
        'tax_query' => array(
            array(
                'taxonomy' => 'type',
                'field'    => 'slug',
                'terms'    => 'alliance',
            ),
        ),
        'posts_per_page'=> '10',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args );
    if ($loop->have_posts()){
        $count = 0;
    ?>
    <section class="alliance-list-section">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
            $heading         = rwmb_meta( 'rw_cs_banner_heading' );
            $logo         = rwmb_meta( 'rw_cp_logo' );
            $website     = rwmb_meta( 'rw_cp_website' );
            // print_r($logo);
            $count++;
        ?>
        <div class="display-inblock alliance-list__single__content">
            <?php if ($logo) { ?>
                <a href="<?php echo $website; ?>" title="<?php the_title(); ?>" class="alliance-list__single display-inblock"><img src="<?php echo $logo;?>" class="display-block" alt="<?php the_title(); ?> Logo"></a>
            <?php } else { ?>
                <p style="margin-bottom: 0px;font-size: 10px;line-height: 10px;">Insert logo for:</p>   
                <p style="margin-top: 4px;margin-bottom: 15px;font-size: 10px;line-height: 10px;font-weight:bold;"><?php the_title();?></p>
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            <?php } ?>
            <div id="modal-alliance<?php echo $count;?>" class="modal alliance-modal">
                <div class="modal-footer">
                    <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="modal-content">
                    <h3><?php the_title(); ?></h3>
                    <div><?php the_content();?></div>
                    <p class="pa_website"><a href="<?php echo $website; ?>" target="_blank">Website</a></p> 
                </div>
            </div>
            <a class="modal-trigger-general modal-trigger-alliance<?php echo $count;?> display-block" href="#modal-alliance<?php echo $count;?>">+</a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>
    <?php } ?>
    
<?php } else { ?>
<section class="home-alliances product-alliances base-padding ta-center">
    <div class="wide-container">
        <h3 class="grey-text">Industry alliances</h3>
        <ul class="row">
            <?php
             // Check if there are any alliances
            $args = array(
                'post_type' => 'client-partner',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'type',
                        'field'    => 'slug',
                        'terms'    => 'alliance',
                    ),
                ),
                'posts_per_page'=> '10',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $loop = new WP_Query( $args );
            if ($loop->have_posts()){
            ?>
            <section class="alliance-only-list-section">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                    $heading         = rwmb_meta( 'rw_cs_banner_heading' );
                    $logo         = rwmb_meta( 'rw_cp_logo' );
                    $website     = rwmb_meta( 'rw_cp_website' );
                ?>
                    <div class="display-inblock alliance-list__single__content">
                        <?php if ($logo) { ?>
                            <a href="<?php echo $website; ?>" title="<?php the_title(); ?>" class="alliance-list__single display-inblock"><img src="<?php echo $logo;?>" class="display-block" alt="<?php the_title(); ?> Logo"></a>
                        <?php } else { ?>
                            <p style="margin-bottom: 0px;font-size: 10px;line-height: 10px;">Insert logo for:</p>   
                            <p style="margin-top: 4px;margin-bottom: 15px;font-size: 10px;line-height: 10px;font-weight:bold;"><?php the_title();?></p>
                            <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                                    <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                                    <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                                    <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                                    <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                                    <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                                    <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                                    <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                                </g>
                            </svg>
                        <?php } ?>
                       <!--  <p><a href="<?php //echo $website; ?>" title="<?php //the_title(); ?>" class="alliance-list__single display-inblock"><?php //the_title(); ?></a></p> -->
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </section>
            <?php } ?>
        </ul>
    </div>
</section>
<?php } ?>
