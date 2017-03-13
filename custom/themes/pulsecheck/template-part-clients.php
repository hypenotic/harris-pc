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
<section class="product-case-studies">
    <div class="container">
        <h3>Check out our case studies:</h3>
        <div class="case-study-container row" class="wrapper">
    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
        $heading         = rwmb_meta( 'rw_cs_banner_heading' );
    ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="case-study-container__single display-inblock">
        <div class="display-inblock case-study-container__single__icon">
            <svg viewBox="32 141 14 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <path d="M41.5789474,144.684284 L46,144.684284 L46,156.473758 L32,156.473758 L32,144.684284 L36.4217895,144.684284 L36.4217895,146.157968 L33.4736842,146.157968 L33.4736842,155.000074 L44.5263158,155.000074 L44.5263158,146.157968 L41.5789474,146.157968 L41.5789474,144.684284 Z M39.0005895,153.526316 L36.4083789,150.206842 L36.9890105,149.753684 L38.6321684,151.857368 L38.6321684,141 L39.3682737,141 L39.3682737,151.857368 L41.0114316,149.753684 L41.5928,150.206842 L39.0005895,153.526316 Z" id="Icon" stroke="none" fill="#3FA2F7" fill-rule="evenodd"></path>
            </svg>
        </div>
        <div class="display-inblock case-study-container__single__content">
            <h4><?php echo $heading;?></h4>
            <p><?php the_title(); ?></p>
        </div>
        </a>
    <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php } ?>
