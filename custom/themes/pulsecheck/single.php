<?php get_header(); ?>

<section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
    	<h1><?php the_title();?></h1>
    	<div><?php the_content();?></div>
    </div>

    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>


<?php get_footer(); ?>