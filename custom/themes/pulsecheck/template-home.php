<?php 
/**
* Template Name: Home
*/
get_header(); ?>
<?php // Loop starts
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$heading         = rwmb_meta( 'rw_banner_heading' );
	$subhead         = rwmb_meta( 'rw_banner_subheading' );
?>
<section class="hero-header" id="skip-to-content">
	<div class="container">
		<h1><?php echo $heading;?></h1>
		<h2><?php echo $subhead;?></h2>
	</div>
</section>

<section class="home-why why-section">
    <div class="container">
    	<ul class="row">
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Chart Faster</li>
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Keep your workflow</li>
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Capture ALL billing</li>
    		<li class="col s6 m6 l3"><i class="fa fa-check" aria-hidden="true"></i> Sympathetic support</li>
    	</ul>
    </div>
</section>

<?php get_template_part('template-part-alliance-partner'); ?>

<section class="home-products base-padding">
    <div class="container">
        <h3>PulseCheck Products</h3>
        <div class="row">
            <div class="col s6">
                <h4>ED Pulsecheck</h4>
                <p>Overview sentence about this product. List and link to the hospital types that can use this. </p>
                <a href="#" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
                <a href="#" class="underline display-block">Tell me more</a>
            </div>
            <div class="col s6">
                <h4>Urgent Care Works</h4>
                <p>Overview sentence about this product. List and link to the hospital types that can use this. </p>
                <a href="#" class="btn waves-effect pc-blue no-shadow">Request a demo</a>
                <a href="#" class="underline display-block">Tell me more</a>
            </div>
        </div>
    </div>
</section>

<section class="home-team base-padding">
    <div class="container">
        <h3>Our team speaks your language</h3>
        <p>Overview statement here. Multi-disciplinary care. Examples?consectetur adipiscing elit. Mauris cursus tortor sit amet justo rutrum.</p>
        <p>Speak to one of our physicians, nurses, medical admin or ED Directors on staff who help design the software to work how you work: </p>
    </div>
</section>

<?php get_template_part('template-part-newsletter'); ?>


<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

