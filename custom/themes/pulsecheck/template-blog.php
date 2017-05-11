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
	<div class="blog-header-container">
		<h1><?php echo $heading;?></h1>
        <h2><?php echo $subhead;?></h2>
	</div>
</section>

<div class="control-container">
    <div class="controls">
        <h3>Filter</h3>
        <form data-filter-group data-logic="or">
            <button type="reset" class="control mixitup-control-active the-reset-button" data-filter="all">All Types</button>
            <button type="button" data-filter=".case-study" class="control single-filter">Case Study</button>
            <button type="button" data-filter=".product-sheet" class="control single-filter">Product Sheet</button>
            <button type="button" data-filter=".brochure" class="control single-filter">Brochure</button>
            <button type="button" data-filter=".white-paper" class="control single-filter">White Paper</button>
            <button type="button" data-filter=".article" class="control single-filter">Article</button>
        </form>
    </div>
</div>

<section class="blog-posts">
    <div class="wide-container">
    	<div class="resources-container flex-container">
        <div class="fail-message"><span>No items were found matching the current filters.</span></div>
        <?php 
        // the query
        $args = array(
            'post_type' => array( 'post', 'resource', 'article' ),
            'posts_per_page'=> ,
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
                
                $res_title     = rwmb_meta( 'rw_cs_banner_heading' );
                $res_file    = rwmb_meta( 'rw_cs_file' );
                $res_type =  wp_get_post_terms($post->ID, 'resource-type'); 

                if (! empty($res_title)) {
                    $title = $res_title;
                } else {
                    $title = get_the_title($post->ID);
                }

                if (! empty($res_file)) {
                    $link = $res_file;
                } else {
                    $link = get_the_permalink($post->ID);
                }

                if (! empty($res_type)) {
                    $type = $res_type[0]->name;
                    $classSlug = strtolower($res_type[0]->slug);
                } else {
                    $type = 'Article';
                    $classSlug = 'article';
                }
                
            ?>
                <div class=" mix <?php echo $classSlug; ?>">
                    <p><?php echo $type; ?></p>
                    <h4><?php echo $title;?></h4>
                    <div class="resource_separator"></div>
                    <div class="resource_blurb">
                        <p><?php the_excerpt();?></p>
                    </div>
                    <a href="<?php echo $link;?>" target="_blank" class="btn no-shadow">View</a>
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

