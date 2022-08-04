/* =====================================
Template Name: LearnEdu
Author Name: iThemer
Author URI: http://ithemer.com/
Description: LearnEdu is a Education & Courses Template.
Version:	1.0
========================================*/
/*=======================================
[Start Activation Code]
=========================================
* Sticky Header JS
* Mobile Menu JS
* Slider Active JS
* Circle Progress JS
* Testimonial Slider JS
* CounterUp JS
* Faqs JS
* Video Popup JS
* Blog Slider JS
* Masonry JS
* Parallax JS
* Wow JS
* Scroll JS
* Scroll Up JS
* Preloader JS
=========================================
[End Activation Code]
=========================================*/ 
(function($) {
    "use strict";
     $(document).on('ready', function() {	
	
		/*====================================
			Sticky Header JS
		======================================*/ 
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});
		
		/*====================================
			Mobile Menu JS
		======================================*/ 	
		$('.menu').slicknav({
			prependTo:".mobile-menu",
			duration: 600,
			closeOnClick:true,
		});
		
		/*====================================
			Slider Active JS
		======================================*/ 
		$('.slider-active').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			items:1,
			smartSpeed: 600,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					nav:false,
				},
				768: {
					nav:false,
				},
				1170: {
					nav:true,
				},
			}
		});
		
		/*====================================
			Circle Progress JS
		======================================*/ 	
		$('.circle').circleProgress({
			fill: {
				color: '#00B16A'
			}
		})
		
		/*====================================
			Course Slider JS
		======================================*/ 
		$('.course-slider').owlCarousel({
			items:3,
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		/*====================================
			Testimonial Slider JS
		======================================*/ 
		$('.testimonial-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			center:false,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:2,
				},
			}
		});	

		
		/*====================================
			Events Slider JS
		======================================*/ 
		$('.event-slider').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:25,
			loop:true,
			merge:true,
			nav:true,
			dots:false,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		/*====================================
			Event Gallery JS
		======================================*/ 
		$('.event-gallery').owlCarousel({
			items:1,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			margin:0,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});	
		
		/*====================================
			CounterUp JS
		======================================*/ 
		$('.counter').counterUp({
			delay: 10,
			time: 4000
			
		});	
		
		/*====================================
			Blog Slider JS
		======================================*/ 
		$('.blog-slider').owlCarousel({
			items:2,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			margin:15,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:true,
			responsive:{
				300: {
					items:1,
					nav:false,
				},
				480: {
					items:2,
					nav:false,
				},
				768: {
					items:2,
					nav:false,
				},
				1170: {
					items:3,
				},
			}
		});	
		
		/*====================================
			Blog Slider JS
		======================================*/ 
		$('.b-gallery').owlCarousel({
			items:1,
			autoplay:false,
			autoplayTimeout:3500,
			smartSpeed: 600,
			autoplayHoverPause:true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			margin:0,
			fade:true,
			loop:true,
			merge:true,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});	
		
		
		/*====================================
			Faqs JS
		======================================*/ 
		$('.panel').on('click', function() {
            $(".panel").removeClass("active");
            $(this).addClass("active");
		});
		
		/*=====================================
			Video Popup
		======================================*/ 
		$('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
		
		/*====================================
			Masonry JS
		======================================*/ 
		$('.masonry').masonry({
		  // options
		  itemSelector: '.grid-item',
		});
		
		/*=====================================
			Parallax JS
		======================================*/ 
		$(window).stellar({
            responsive: true,
            positionProperty: 'position',
			horizontalOffset: 0,
			verticalOffset: 0,
            horizontalScrolling: false
        });
		
		/*====================================
			Wow JS
		======================================*/		
		var window_width = $(window).width();   
			if(window_width > 767){
            new WOW().init();
		}
	
		/*=====================================
			Scroll Up JS
		======================================*/ 
		$.scrollUp({
			scrollName: 'scrollUp',      // Element ID
			scrollDistance: 300,         // Distance from top/bottom before showing element (px)
			scrollFrom: 'top',           // 'top' or 'bottom'
			scrollSpeed: 1000,            // Speed back to top (ms)
			animation: 'fade',           // Fade, slide, none
			animationSpeed: 200,         // Animation speed (ms)
			scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
			scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
			easing: 'easeInOutQuart',
			scrollText: ["<i class='fa fa-angle-up'></i>"], // Text for element, can contain HTML
			scrollTitle: false,          // Set a custom <a> title if required.
			scrollImg: false,            // Set true to use image
			activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
			zIndex: 2147483647           // Z-Index for the overlay
		});
	
	});
		
		/*=====================================
			Preloader JS
		======================================*/ 
		$(window).on('load', function() {
				$('.book_preload').fadeOut('slow', function(){
				$(this).remove();
			});
		});
})(jQuery);