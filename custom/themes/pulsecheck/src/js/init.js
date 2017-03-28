$ = jQuery;
// Activate Mobile Nav
function openMobileNav() {
	$(".navbar-fixed").toggleClass( "nav-menu-open" );
	$("body").toggleClass( "no-scroll" );
	$("#nav-icon").toggleClass('open');
}

$(function() {
    // Materialize modal triggers
    $('.modal-trigger-general').click(function() {
      var address = $(this).attr("href");
      $(".fullscreen-modal-overlay").toggleClass( "open-fs-overlay" );
      $(address).openModal();
    });

    $('.modal-close').click(function() {
      $(".fullscreen-modal-overlay").removeClass( "open-fs-overlay" );
    });

    //Init WOW.js with animate.css
    new WOW().init();

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
                   "stylers": [
                       {
                           "hue": "#2c3e50"
                       },
                       {
                           "saturation": 250
                       }
                   ]
               },
               {
                   "featureType": "road",
                   "elementType": "geometry",
                   "stylers": [
                       {
                           "lightness": 50
                       },
                       {
                           "visibility": "simplified"
                       }
                   ]
               },
               {
                   "featureType": "road",
                   "elementType": "labels",
                   "stylers": [
                       {
                           "visibility": "off"
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
        position: new google.maps.LatLng(41.9957846, -87.8857467),
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
