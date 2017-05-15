<?php get_header(); ?>
<section class="product-header" id="skip-to-content" style="background-image: url();background-size:cover;">
	<style>
		.grad-overlay::after {
			background-image: linear-gradient(to top, transparent 0%, black 100%);
		}
	</style>
	<div class="grad-overlay"></div>
	<div class="darken-overlay"></div>
	<div class="wide-container">
		<h1>Oops! Something went wrong on our end!</h1>
		<h2>Please try navigating to another page or <a href="/contact" style="color: white;text-decoration:underline;">get in contact with us.</a></h2>
	</div>
	<div id="modal-demo" class="modal">
		<div class="modal-footer">
	      <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
	    </div>
	    <div class="modal-content">
	    	<h3>Book a demo</h3>
	      <?php gravity_form(2, false, false, false, '', true); ?>
	    </div>
	</div>
	<div id="modal-courses" class="modal">
		<div class="modal-footer">
	      <a title="close" href="#!" class="modal-close waves-effect btn-flat"><i class="fa fa-times" aria-hidden="true"></i></a>
	    </div>
	    <div class="modal-content">
	    <h3>Request training courses and/or user guides</h3>
	      <?php gravity_form(3, false, false, false, '', true); ?>
	    </div>
	</div>
</section>
<?php get_footer(); ?>

