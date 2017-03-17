<?php
 // Check if there are any CAPs
$args = array(
    'post_type' => 'client-partner',
    'tax_query' => array(
        array(
            'taxonomy' => 'type',
            'field'    => 'slug',
            'terms'    => 'client',
        ),
    ),
    'posts_per_page'=> '10',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$loop = new WP_Query( $args );
if ($loop->have_posts()){
?>
<section class="client-list-section row">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
        $heading         = rwmb_meta( 'rw_cs_banner_heading' );
        $logo         = rwmb_meta( 'rw_cp_logo' );
        // print_r($logo);

    ?>
        <div class="client-list__single col s12 m4">
            <?php if ($logo) { ?>
                <img src="<?php echo $logo;?>" class="display-block" alt="<?php the_title(); ?> Logo">
            <?php } else { ?>
                <p style="margin-bottom: 3px;">insert logo here</p>   
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#FFFFFF" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#FFFFFF" points="0 12.1560626 0 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#FFFFFF" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#FFFFFF" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#FFFFFF" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#FFFFFF" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#FFFFFF" points="0 30.0132054 0 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            <?php } ?>
            <!-- <p><?php //the_title(); ?></p> -->
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</section>
<?php } ?>