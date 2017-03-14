<?php
 // Check if there are any case studies
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
    ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="case-study-container__single display-inblock">
        <div class="display-inblock case-study-container__single__content">
            <h4><?php echo $heading;?></h4>
            <p><?php the_title(); ?></p>
        </div>
    </a>
    <?php endwhile; wp_reset_postdata(); ?>
</section>
<?php } ?>