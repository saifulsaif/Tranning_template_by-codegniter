/**
  * Init_header
  * Retina Logos
  * Gallery Isotope
  * Simple Slider
  * Responsive Menu
  * OrAnimation
  * Effect Gallery
  * Go Top
  * Ajax ContactForm
  * Count To
  * Testimonial Carousel
  * Google Map
  * Popup Gallery
  * Fullscreen Background
  * Count Down
  * Setup Skillbar
*/

;(function($) {

   'use strict'

	var init_header = function() {
	  var largeScreen = matchMedia('only screen and (min-width: 992px)').matches;
	  if ( largeScreen ) {
		 if ( $().sticky ) {
			$('header.header-sticky').sticky();
		 }
	  }
	};

	var retinaLogos = function() {

	};

	var galleryIsotope = function() {
	  if ( $().isotope ) {
		 var $container = $('.gallery-wrap');

		 $container.imagesLoaded(function(){
			$container.isotope({
			   itemSelector: '.gallery-item',
			   transitionDuration: '1s'
			}); // end isotope
		 });

		 $('.gallery-filter li').on('click',function() {
			$('.gallery-filter li').removeClass('active');
			$(this).addClass('active');
			var selector = $(this).find("a").attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
		 }); // end filter
	  };
	};

	var simpleSlider = function() {
		if ( $().flexslider ) {
			$('.roll-slider').each(function() {
				var $this = $(this);
				var easing = ( $this.data('effect') == 'fade' ) ? 'linear' : 'easeInOutExpo';
				$this.find('.flexslider').flexslider({
					animation      :  $this.data('effect'),
					direction      :  $this.data('direction'), // vertical
					pauseOnHover   :  true,
					useCSS         :  false,
					easing         :  easing,
					animationSpeed :  500,
					slideshowSpeed :  5000,
					controlNav     :  true,
					directionNav   :  false,
					smoothHeight   :  true,
					slideshow      :  true,
					prevText    :  '<i class="fa fa-angle-left"></i>',
					nextText    :  '<i class="fa fa-angle-right"></i>'
				}); // end flexslider
			}); // end roll-slider
		}
	};

	var ResponsiveMenu =  {

	  menuType: 'desktop',

	  initial: function(winWidth) {
		 ResponsiveMenu.menuWidthDetect(winWidth);
		 ResponsiveMenu.menuBtnClick();
		 ResponsiveMenu.parentMenuClick();
	  },

	  menuWidthDetect: function(winWidth) {
		 var currMenuType = 'desktop';

		 if (matchMedia('only screen and (max-width: 991px)').matches) {
			currMenuType = 'mobile';
		 } // change menu type

		 if ( currMenuType !== ResponsiveMenu.menuType ) {
			ResponsiveMenu.menuType = currMenuType;

			if ( currMenuType === 'mobile' ) {
			   var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
			   $('#header').find('.header-wrap').after($mobileMenu);
			   var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');
			   hasChildMenu.children('ul').hide();
			   hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
			   $('.btn-menu').removeClass('active');
			 } else {
			   var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');
			   $desktopMenu.find('.sub-menu').removeAttr('style');
			   $('#header').find('.btn-menu').after($desktopMenu);
			   $('.btn-submenu').remove();
			 }
		 } // clone and insert menu
	  },

	  menuBtnClick: function() {
		 $('.btn-menu').on('click', function() {
			$('#mainnav-mobi').slideToggle(300);
			$(this).toggleClass('active');
		 });
	  }, // click on moblie button

	  parentMenuClick: function() {
		 $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
			if ( $(this).has('ul') ) {
			   e.stopImmediatePropagation()
			   $(this).next('ul').slideToggle(300);
			   $(this).toggleClass('active');
			}
		 });
	  } // click on sub-menu button
	};

	var orAnimation = function() {
	  $('.orches-animation').each( function() {
	  var orElement = $(this),
		 orAnimationClass = orElement.data('animation'),
		 orAnimationDelay = orElement.data('animation-delay'),
		 orAnimationOffset = orElement.data('animation-offset');

		 orElement.css({
			'-webkit-animation-delay':  orAnimationDelay,
			'-moz-animation-delay':     orAnimationDelay,
			'animation-delay':          orAnimationDelay
		 });
		
		 orElement.waypoint(function() {
			orElement.addClass('animated').addClass(orAnimationClass);
			},{
			   triggerOnce: true,
			   offset: orAnimationOffset
		 });
	  });
	};

	var effectGallery = function() {
		if( $().waypoint ) {
			var effect = $('.gallery-wrap').data('portfolio-effect');
		  	$('.gallery-item').children('.item-wrap').addClass('orches-animation');

		  	$('.gallery-wrap').waypoint(function(direction) {
			 	$('.gallery-item').children('.item-wrap').each(function(idx, ele) {
					setTimeout(function() {
				   		$(ele).addClass('animated ' + effect);
					}, idx * 150);
			 	});
		  	}, {
			 offset: '75%'
		  	});
		}
	};

	var goTop = function() {
	  $(window).scroll(function() {
		 if ( $(this).scrollTop() > 800 ) {
			$('.go-top').addClass('show');
		 } else {
			$('.go-top').removeClass('show');
		 }
	  }); 
	  
	  $('.go-top').on('click', function() {
		 $("html, body").animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
		 return false;
	  });
	};

	var ajaxContactForm = function() {
        $('.roll-contact-form').each(function() {
            $(this).validate({
                submitHandler: function( form ) {
                    var $form = $(form),
                        str = $form.serialize(),
                        loading = $('<div />', { 'class': 'loading' });

                    $.ajax({
                        type: "POST",
                        url:  $form.attr('action'),
                        data: str,
                        beforeSend: function () {
                            $form.find('.send-wrap').append(loading);
                        },
                        success: function( msg ) {
                            var result, cls;

                            if ( msg == 'Success' ) {
                                result = 'Your message has been sent. Thank you!';
                                cls = 'msg-success';
                            } else {
                                result = 'Error sending email.';
                                cls = 'msg-error';
                            }

                            $form.prepend(
                                $('<div />', {
                                    'class': 'roll-alert ' + cls,
                                    'text' : result
                                }).append(
                                    $('<a class="close" href="#"><i class="fa fa-close"></i></a>')
                                )
                            );

                            $form.find(':input').not('.submit').val('');
                        },
                        complete: function (xhr, status, error_thrown) {
                            $form.find('.loading').remove();
                        }
                    });
                }
            });
        });
    };

	var countTo = function(){
		if ( $().waypoint ) {
			$('.about-singlepage').waypoint(function() {
				if ( $().countTo ) {
					$('.timer').countTo();
				}
			});
		}
	};

	var testiCarousel = function(){
		if ( $().owlCarousel ) {
			$(".roll-testimonials").owlCarousel({
				navigation : false,
				pagination: false,
				responsive: true,
				items: 1,
				itemsDesktop: [3000,1],
				itemsDesktopSmall: [1400,1],
				itemsTablet:[970,1],
				itemsTabletSmall: [600,1],
				itemsMobile: [360,1],
				touchDrag: true,
				mouseDrag: true,
				autoHeight: true,
				autoPlay: false
			}); // end owlCarousel
		} // end if
	};

    var googleMap = function() {
        if ( $().gmap3 ) {
            $("#map").gmap3({
                map:{
                    options:{
                        zoom: 14,
                        mapTypeId: 'brainstorm_style',
                        mapTypeControlOptions: {
                            mapTypeIds: ['brainstorm_style', google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID]
                        },
                        scrollwheel: false
                    }
                },
                getlatlng:{
                    address:  "Cosford Lane, Newbold, Rugby CV21 1QN, England",
                    callback: function(results) {
                        if ( !results ) return;
                        $(this).gmap3('get').setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
                        $(this).gmap3({
                            marker:{
                                latLng:results[0].geometry.location,
                                options:{
                                	icon: 'images/maker.png'
                                }
                            }
                        });
                    }
                },
                styledmaptype:{
                    id: "brainstorm_style",
                    options:{
                        name: "Brainstorm Map"
                    },
                },
            });
        }
    };

    var popupGallery = function() {
        if( $().magnificPopup ) {
            $('.popup-gallery').magnificPopup({
                delegate: 'a.popup',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                }
            });
        }
    };

    var countdown = function() {
    	if( $().countdown ) {
	    	$(".count-down").countdown("2016/01/01", function(event) {
	            $(this).html(
	                event.strftime('<div class=\"col-md-2 col-sm-6 col-md-offset-2\"><p class=\"days-number\">%D </p><p class=\"days\">days</p></div><div class=\"col-md-2 col-sm-6\"><p class=\"hours-number\">%H </p><p class=\"hours\">hours</p></div><div class=\"col-md-2 col-sm-6\"><p class=\"minutes-number\">%M </p><p class=\"minutes\">minutes</p></div><div class=\"col-md-2 col-sm-6\"><p class=\"seconds-number\">%S </p><p class=\"seconds\">seconds</p></div> ')
	            );
	       	});
    	}
    };

    var setupSkillbar = function() {
    	jQuery('.skillbar').each(function() {
			jQuery(this).appear(function() {
				jQuery(this).find('.count-bar').animate({
					width:jQuery(this).attr('data-percent')
				},3000);
				var percent = jQuery(this).attr('data-percent');
				jQuery(this).find('.count').html('<span>' + percent + '</span>');
			});
		});	
    };

    var removePreloader = function() {
        $('.preloader').css('opacity', 0);
        setTimeout(function() {
            $('.preloader').hide();}, 600
        );   
    };

    var parallax = function() {
    	if($().parallax){
			$('.find-training').parallax("50%", 0.5);
			$('.about').parallax("50%", 0.5);
			$('.find-training-single').parallax("50%", 0.3);
			$('.achievements').parallax("50%", 0.5);
    	}
    };

    var fullscreenbg = function() {
    	$(window).on('load resize', function() {
	        if( $('.full-screen').length ) {
	            var windowHeight = $(document).height();
	            $('.full-screen').css('height',windowHeight);
	        }
	    });
    };

	// Dom Ready
	$(function() {
		init_header();
		simpleSlider();
		countdown();
		retinaLogos();
		galleryIsotope();
		popupGallery();
		orAnimation();
		effectGallery();
		goTop();
		ajaxContactForm();
		countTo();
		setupSkillbar();
		parallax();
		fullscreenbg();

		// Initialize responsive menu
		ResponsiveMenu.initial($(window).width());
		$(window).resize(function() {
		 ResponsiveMenu.menuWidthDetect($(this).width());
		});
		removePreloader();
		// Detect elements into viewport
		$('[data-waypoint-active="yes"]').waypoint(function() {
		 	$(this).trigger('on-appear');
		}, { offset: '90%' });

		$(window).on('load', function() {
		 setTimeout(function() {
			$.waypoints('refresh');
		 }, 100);
		});

		$(window).load(function(){
			googleMap();	
			testiCarousel();	
		})

   	});

})(jQuery);