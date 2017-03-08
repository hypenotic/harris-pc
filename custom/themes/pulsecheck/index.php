<?php get_header(); ?>

<section id="skip-to-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>


<?php get_footer(); ?>