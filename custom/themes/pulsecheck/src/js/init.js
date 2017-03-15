$ = jQuery;
// Activate Mobile Nav
function openMobileNav() {
	$(".navbar-fixed").toggleClass( "nav-menu-open" );
	$("body").toggleClass( "no-scroll" );
	$("#nav-icon").toggleClass('open');
}

$(function() {
    $('.carousel.carousel-slider').carousel({fullWidth: true,indicators: true});

    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        loop: true,
        
        // If we need pagination
        pagination: '.swiper-pagination',
        
        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
     });      
});
