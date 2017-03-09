$ = jQuery;

$(function() {
    // Activate Mobile Nav
    function openMobileNav() {
    	$(".navbar-fixed").toggleClass( "nav-menu-open" );
    	$("body").toggleClass( "no-scroll" );
    	$("#nav-icon").toggleClass('open');
    }

    $('.carousel.carousel-slider').carousel({fullWidth: true,indicators: true});
});
