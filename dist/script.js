(function($) {
	
	"use strict";
	

	
	//Update Header Style + Scroll Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			if (windowpos >= 1) {
				$('.main-header').addClass('fixed-top-header');
				$('.scroll-to-top').fadeIn(300);
			} else {
				$('.main-header').removeClass('fixed-top-header');
				$('.scroll-to-top').fadeOut(300);
			}
		}
	}
	
	

	
	//Schedule Box Tabs
	if($('.schedule-box').length){
		
		//Tabs
		$('.schedule-box .tab-btn').on('click', function() {
			var target = $($(this).attr('data-id'));
			$('.schedule-box .tab-btn').removeClass('active');
			$(this).addClass('active');
			$('.schedule-box .tab').fadeOut(0);
			$('.schedule-box .tab').removeClass('current');
			$(target).fadeIn(300);
			$(target).addClass('current');
			var windowWidth = $(window).width();
			if (windowWidth <= 700) {
				$('html, body').animate({
				   scrollTop: $('.tabs-box').offset().top
				 }, 1000);
			}
		});
		
		//Accordion
		$('.schedule-box .hour-box .toggle-btn').on('click', function() {
			var target = $($(this).next('.content-box'));
			$(this).toggleClass('active');
			$(target).slideToggle(300);
			$(target).parents('.hour-box').toggleClass('active-box');
		});
		
	}
	
	
	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox();
	}
	
	
	// Fact Counter
	function factCounter() {
		$('.fact-counter.animated .counter-column').each(function() {
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		});
	}
	
	
	
	// Scroll to top
	if($('.scroll-to-top').length){
		$(".scroll-to-top").on('click', function() {
		   // animate
		   $('html, body').animate({
			   scrollTop: $('html, body').offset().top
			 }, 1000);
	
		});
	}

	// gallery filter activation
    function GalleryFilter () {

    	if ($('#image-gallery-mix').length) {
    		$('.gallery-filter').find('li').each(function () {
    			$(this).addClass('filter');
    		});
    		$('#image-gallery-mix').mixItUp();
    	};
    	if($('.gallery-filter.masonary').length){
			$('.gallery-filter.masonary span').on('click', function(){
				var selector = $(this).parent().attr('data-filter');
				$('.gallery-filter.masonary span').parent().removeClass('active');
				$(this).parent().addClass('active');
				$('#image-gallery-isotope').isotope({ filter: selector });
				return false;
			});
    	}
    }
	function galleryLightBox () {
		if ($('#image-gallery-mix').length) {
			$('#image-gallery-mix').find('.fancybox').fancybox();
		};
	}
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}

/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	$(document).on('ready', function() {
		headerStyle();
		factCounter();
		GalleryFilter();
		galleryLightBox();
	});

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
		factCounter();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});
	

})(window.jQuery);