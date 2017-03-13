<?php 
/**
* Template Name: Blog
*/
get_header(); ?>
<?php
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );
?>
<section class="blog-header" id="skip-to-content">
	<div class="container">
		<h1>The Pulse</h1>
	</div>
</section>

<section class="blog-posts">
    <div class="container">
    	<div class="row">
        <?php 
        // the query
        $args = array(
            'post_type' => array( 'post', 'case-study', 'article' ),
            'posts_per_page'=> '10',
            'order' => 'DESC'
        );
        $the_query = new WP_Query( $args ); ?>
        
        <?php if ( $the_query->have_posts() ) : ?>
        
            <!-- pagination here -->
        
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                // You might have to structure Case Studies a bit differently, and pull the $heading custom field instead of the_title...
                $the_heading         = rwmb_meta( 'rw_cs_banner_heading' );
                if ($the_heading) {
                    $the_title = $the_heading;
                } else {
                    $the_title = get_the_title();
                }
            ?>
                <div class="single-post-card col s12 m4 l3">
                    <a href="<?php the_permalink();?>"><h2><?php echo $the_title; ?></h2></a>
                    <div><?php the_excerpt();?></div>
                </div>

            <?php endwhile; ?>
            <!-- end of the loop -->
        
            <!-- pagination here -->
        
            <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

