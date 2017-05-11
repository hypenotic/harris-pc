$ = jQuery;
// Activate Mobile Nav
function openMobileNav() {
	$(".navbar-fixed").toggleClass( "nav-menu-open" );
	$("body").toggleClass( "no-scroll" );
	$("#nav-icon").toggleClass('open');
}

$(function() {
    $(document).scroll(function () {
      var $nav = $(".navbar-fixed");
      $nav.toggleClass('scrolling', $(this).scrollTop() > $nav.height());

      $('.fixed-cta-btns').toggleClass('hiding-ctas', $(this).scrollTop() > $nav.height());

      // Show and hide CTA fixed buttons
      clearTimeout($.data(this, 'scrollTimer'));
      $.data(this, 'scrollTimer', setTimeout(function() {
          // do something
          $('.fixed-cta-btns').toggleClass('hiding-ctas');
          // console.log("Haven't scrolled in 200ms!");
      }, 200));
    });


    // Materialize modal triggers
    $('.modal-trigger-general').click(function() {
      var address = $(this).attr("href");
      $(".fullscreen-modal-overlay").toggleClass( "open-fs-overlay" );
      $(address).openModal();
    });

    $('.modal-close').click(function() {
      $(".fullscreen-modal-overlay").removeClass( "open-fs-overlay" );
      $('.modal').removeClass('open').removeAttr('style');
      $('body').removeAttr('style');
    });

    // Slider indications
    $('.product-who .swiper-button-next').click(function() {
      var order = $('.product-who .swiper-slide-active').data( "swiperSlideIndex" ); 
      console.log(order);
      var theNum = order + 2;
      console.log('Slide ' + theNum);
      if (theNum == 5) {
        $('.product-who .product-slide-heading').removeClass('active-product-slide');
        $('.product-who .product-slide-heading:first-child').addClass('active-product-slide');
      } else {
        $('.product-who .product-slide-heading').removeClass('active-product-slide');
        $('.product-who .product-slide-heading:nth-child('+ theNum +')').addClass('active-product-slide');
      }
    });

    $('.product-who .swiper-button-prev').click(function() {
      var order = $('.product-who .swiper-slide-active').data( "swiperSlideIndex" ); 
      console.log(order);
      var theNum = order;
      console.log('Slide ' + theNum);
      if (theNum == 0) {
        $('.product-who .product-slide-heading').removeClass('active-product-slide');
        $('.product-who .product-slide-heading:last-child').addClass('active-product-slide');
      } else {
        $('.product-who .product-slide-heading').removeClass('active-product-slide');
        $('.product-who .product-slide-heading:nth-child('+ theNum +')').addClass('active-product-slide');
      }
    });

    //Init WOW.js with animate.css
    new WOW().init();

    // Mixitup
    var mixer = mixitup('.resources-container');
    $( ".single-filter" ).click(function() {
      $('.the-reset-button').removeClass('mixitup-control-active');
    });

    $( ".the-reset-button" ).click(function() {
      $(this).addClass('mixitup-control-active');
      $('.single-filter').removeClass('mixitup-control-active');
    });


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

    // GOOGLE MAPS ============================================

    if ( $( "#contact-map" ).length ) {
     
      // When the window has finished loading create our google map below
      google.maps.event.addDomListener(window, 'load', init);

      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        var isDraggable = false;
      } else {
        var isDraggable = true;
      }

      function init() {

        // Basic options for a simple Google Map
       // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
       var mapOptions = {
           // How zoomed in you want the map to start at (always required)
           zoom: 15,

           scrollwheel:  false,
           draggable: isDraggable,

           // The latitude and longitude to center the map (always required)
           center: new google.maps.LatLng(41.9957846, -87.8857467), 

           // How you would like to style the map. 
           // This is where you would paste any style found on Snazzy Maps.
           styles: 
           [
             {
                 "featureType": "all",
                 "stylers": [
                     {
                         "saturation": 0
                     },
                     {
                         "hue": "#e7ecf0"
                     }
                 ]
             },
             {
                 "featureType": "road",
                 "stylers": [
                     {
                         "saturation": -70
                     }
                 ]
             },
             {
                 "featureType": "transit",
                 "stylers": [
                     {
                         "visibility": "off"
                     }
                 ]
             },
             {
                 "featureType": "poi",
                 "stylers": [
                     {
                         "visibility": "off"
                     }
                 ]
             },
             {
                 "featureType": "water",
                 "stylers": [
                     {
                         "visibility": "simplified"
                     },
                     {
                         "saturation": -60
                     }
                 ]
             }
         ]
       };

       // Determine zoon and pan amounts based on isDraggable (mobile)
       if (isDraggable == true) {
        var zoomNum = 16;
        var panNum = 80;
       } else {
        var zoomNum = 15;
        var panNum = 30;
       }
       
       // Get the HTML DOM element that will contain your map 
       // We are using a div with id="map" seen below in the <body>
       // var mapElement = document.getElementById('footer-map');
       var contactMap = document.getElementById('contact-map');
       var moveMap = document.getElementById('move-map');

       // Create the Google Map using our element and options defined above
       // var map = new google.maps.Map(mapElement, mapOptions);
       var mapC = new google.maps.Map(contactMap, mapOptions);
       //move map down
       mapC.panBy(0, 0);

       // var currentpage = window.location.href;
       // if (currentpage == "http://hypelabs.ca/dev/harris/contact/") {
       //   var theicon = '/dev/harris/custom/themes/pulsecheck/dist/images/pin-mid.png';
       // } else {
       //   var theicon = '/custom/themes/pulsecheck/dist/images/pin-mid.png'
       // }

       if(window.location.href.indexOf("hypelabs") > -1) {
          var theicon = '/dev/harris/custom/themes/pulsecheck/dist/images/pin-mid.png';
        } else {
          var theicon = '/custom/themes/pulsecheck/dist/images/pin-mid.png'
        }

      // var image = {
      //     url: '/custom/themes/pulsecheck/dist/images/pin-mid.png',
      //     // This marker is 20 pixels wide by 32 pixels high.
      //     // size: new google.maps.Size(20, 32),
      //     // The origin for this image is (0, 0).
      //     // origin: new google.maps.Point(0, 0),
      //     // // The anchor for this image is the base of the flagpole at (0, 32).
      //     // anchor: new google.maps.Point(0, 32)
      //   };

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(41.997447, -87.883521),
        map: mapC,
        icon: theicon
      });


      // var contentString = '<div id="info-window-content">'+
      //  '<h3 id="firstHeading" class="firstHeading">Drop by for an espresso!</h3>'+
      //  '<a href="https://www.google.com/maps/place/Ingenuity/@43.523322,-79.7135727,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x390b5b52408b8c40!8m2!3d43.523322!4d-79.711384?hl=en" target="_blank"><p>3800A Laird Rd. - Unit 1 </p>'+
      //  '<p>Mississauga, ON L5L 0B2</p></a>'+
      //  '<a href="tel:+1-905-569-2624" target="_blank"><p>(905) 569-2624</p></a>'+
      //  '</div>';

      // var infowindow = new google.maps.InfoWindow({
      //    content: contentString
      // });

      // google.maps.event.addListener(marker, 'click', function() {
      //    infowindow.open(mapC,marker);
      // });

      // infowindow.open(mapC,marker);

      }
     
    }
    
});
