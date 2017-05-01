<?php

global $post;
$post_slug=$post->post_name;

if ( is_singular( 'product' ) && $post->post_parent ) {
    $is_child = true;
} else {
    $is_child = false;
}

if ($is_child == false) {
    $the_terms = $post_slug;
} else {
    // $parent_post = get_post($post->post_parent); 
    // $parent_slug = $parent_post->post_name;
    // $the_terms = $parent_slug;
    $the_terms = $post_slug;
}
 // Check if there are any resources
$args = array(
    'post_type' => 'resource',
    'tax_query' => array(
        array(
            'taxonomy' => 'products',
            'field'    => 'slug',
            'terms'    => $the_terms,
        ),
    ),
    'posts_per_page'=> '10',
    'orderby' => 'menu_order',
    'order' => 'ASC'
);

$loop = new WP_Query( $args );
if ($loop->have_posts()){
    // $count = 0;

?>
<section class="product-support-resources base-padding">
    <div class="wide-container">
        <h3 class="grey-text ta-center">Make the case to your team</h3>

        <div class="support-resources-container flex-container">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
            $res_title     = rwmb_meta( 'rw_cs_banner_heading' );
            $res_file    = rwmb_meta( 'rw_cs_file' );
            // $count++;
            $res_type =  wp_get_post_terms($post->ID, 'resource-type');
            // print_r($res_type[0]->name);
        ?>
            <div>
                <p><?php echo $res_type[0]->name;?></p>
                <h4><?php echo $res_title;?></h4>
                <div class="resource_separator"></div>
                <div class="resource_blurb">
                    <p><?php the_excerpt();?></p>
                </div>
                <a href="<?php echo $res_file;?>" target="_blank" class="btn no-shadow">View</a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        </div>

    </div>
</section>
<?php } ?>