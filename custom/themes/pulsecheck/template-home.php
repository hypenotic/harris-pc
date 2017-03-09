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

<section class="home-alliances lblue-bg base-padding">
    <div class="container">
        <h3>Industry Alliances</h3>
        <ul class="row">
            <li class="col s4 m4 l4">
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            </li>
            <li class="col s4 m4 l4">
                <svg width="66px" height="34px" viewBox="153 165 66 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(153.000000, 165.000000)">
                        <path d="M34.5581739,0.464077482 C26.4535652,0.464077482 19.8851304,7.0493753 19.8851304,15.1726489 L19.8851304,31.7164358 L51.062,0.464077482 L34.5581739,0.464077482 Z" id="Fill-1" fill="#297FCA"></path>
                        <path d="M53.920087,21.6371332 C48.1886087,15.8917772 38.8998261,15.8917772 33.1721739,21.6371332 L21.4997391,33.334954 L65.5886957,33.334954 L53.920087,21.6371332 Z" id="Fill-2" fill="#297FCA"></path>
                        <path d="M9.53556522,23.4618015 L17.7664348,31.7126005 L17.7664348,0.538866828 L9.53556522,8.7906247 C5.49617391,12.843632 5.49617391,19.4126295 9.53556522,23.4618015 Z" id="Fill-3" fill="#297FCA"></path>
                        <path d="M0.411304348,25.7572591 C0.411304348,29.888891 3.75147826,33.2333172 7.86930435,33.2333172 L16.2608696,33.2333172 L0.411304348,17.3453753 L0.411304348,25.7572591 Z" id="Fill-4" fill="#297FCA"></path>
                    </g>
                </svg>
            </li>
            <li class="col s4 m4 l4">
                <svg width="45px" height="50px" viewBox="65 149 45 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(65.000000, 149.000000)">
                        <polygon id="Fill-1" fill="#297FCA" points="37.9939926 8.33333333 31.2991676 12.1590438 31.2991676 19.8134461 37.9939926 23.6361753 44.6910785 19.8134461 44.6910785 12.1590438"></polygon>
                        <polygon id="Fill-2" fill="#297FCA" points="5.68434189e-14 12.1560626 5.68434189e-14 19.8104648 6.69708595 23.63543 13.3919109 19.8104648 13.3919109 12.1560626 6.69407128 8.33333333"></polygon>
                        <polygon id="Fill-3" fill="#297FCA" points="15.6495838 3.82272922 15.6495838 11.4793674 22.3474234 15.3020966 29.0422484 11.4793674 29.0422484 3.82272922 22.3474234 0"></polygon>
                        <polygon id="Fill-4" fill="#297FCA" points="15.6495838 21.6798721 15.6495838 29.3372556 22.3474234 33.1599848 29.0422484 29.3372556 29.0422484 21.6798721 22.3474234 17.8571429"></polygon>
                        <polygon id="Fill-5" fill="#297FCA" points="15.6495838 38.34952 15.6495838 46.0039223 22.3474234 49.8266515 29.0422484 46.0039223 29.0422484 38.34952 22.3474234 34.5238095"></polygon>
                        <polygon id="Fill-6" fill="#297FCA" points="31.2991676 30.0132054 31.2991676 37.6676077 37.9939926 41.4925728 44.6910785 37.6676077 44.6910785 30.0132054 37.9939926 26.1904762"></polygon>
                        <polygon id="Fill-7" fill="#297FCA" points="5.68434189e-14 30.0132054 5.68434189e-14 37.6705889 6.69708595 41.4925728 13.3919109 37.6676077 13.3919109 30.0132054 6.69407128 26.1904762"></polygon>
                    </g>
                </svg>
            </li>
        </ul>
    </div>
</section>

<section class="home-products base-padding">
    <div class="container">
        <h3>PulseCheck Products</h3>
        <div class="row">
            <div class="col s6">
                <h4>ED Pulsecheck</h4>
                <p>Overview sentence about this product. List and link to the hospital types that can use this. </p>
                <a href="#" class="btn pc-blue no-shadow">Request a demo</a>
                <a href="#" class="underline">Tell me more</a>
            </div>
            <div class="col s6">
                <h4>Urgent Care Works</h4>
                <p>Overview sentence about this product. List and link to the hospital types that can use this. </p>
                <a href="#" class="btn pc-blue no-shadow">Request a demo</a>
                <a href="#" class="underline">Tell me more</a>
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

