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
		<h1><?php echo $heading;?></h1>
        <h2><?php echo $subhead;?></h2>
	</div>
</section>

<section class="blog-posts">
    <div class="wide-container">
    	<div class="resources-container flex-container">
        <?php 
        // the query
        $args = array(
            'post_type' => array( 'post', 'resource', 'article' ),
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
                $res_type =  wp_get_post_terms($post->ID, 'resource-type');
                $res_title     = rwmb_meta( 'rw_cs_banner_heading' );
                $res_file    = rwmb_meta( 'rw_cs_file' );
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

