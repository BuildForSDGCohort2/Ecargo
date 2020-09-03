/*
 * Initialization script for Slick Slider
 */
jQuery(function($){
	"use strict";

	$(document).ready(function(){
		function IsJsonString(a) {
			try {
				JSON.parse(a);
			} catch (e) {
				return false;
			}
			return true;
		}

		var slickSliders = $('.js-slick');

		if( slickSliders.length && typeof($.fn.slick) != 'undefined' ){
			slickSliders.each(function(i, el){
				var $el = $(el),
					$attr = IsJsonString( $el.attr("data-slick") ) ? JSON.parse( $el.attr("data-slick") ) : {};

					// console.log($attr);

				$el.imagesLoaded(function(){
					$el.slick({
						"prevArrow" : '<span class="hgSlickNav-arr hgSlickNav-prev"><svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="184,16 72,128 184,240"></polyline></svg></span>',
						"nextArrow" : '<span class="hgSlickNav-arr hgSlickNav-next"><svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="72,16 184,128 72,240"></polyline></svg></span>',
						customPaging: function(slider, i) {
							return $('<button type="button" class="slickBtn" data-role="none" role="button" tabindex="0" />').text(i + 1);
						},
						rtl: ($('html').is('[dir]') && $('html').attr('dir') == 'rtl') ? true : false ,


						// appendDots: $('.navigation'),
						// arrows: false,
						// dots: true,
						// dotsClass: 'hgSlickDots',
						// infinite: true,
						// speed: 500,
						// fade: true,
						cssEase: 'linear',
					});
				});

				// Add thumbnails
				if( typeof $attr.thumbs != 'undefined' && $attr.thumbs ){
					$el.on('init', function(event, slick){
						$($attr.appendDots).find('li').each(function(index, el) {
							var assocSlide = slick.$slides[index],
								thumbImg = $(assocSlide).find('.hg_simple_slider-itemimg').attr('src');
							$(el).children('button').attr( 'style', 'background-image:url(' + thumbImg + ')' );
						});
					});
				}

				// Fancy Slider
				var isFancy = typeof $attr.fancy != 'undefined' && $attr.fancy;
				// Callback function for fancy slider
				function slideCompleteFancy(e, slick, slide) {
					var slideshow =  $(slick.$slider).closest('.kl-slideshow'),
						color = $(slick.$slides[slide]).attr('data-color');
					// appendFancy is defined
					if(typeof $attr.appendFancy != 'undefined' && $attr.appendFancy !== ''){
						slideshow = $($attr.appendFancy);
					}
					slideshow.css({backgroundColor: color});
				}

				// Apply active index on container or custom defined container
				var activeIndex = typeof $attr.activeIndex != 'undefined' && $attr.activeIndex !== '';
				function slideActiveIndex(slide) {
					$($attr.activeIndex).attr('data-active-slide', slide);
				}

				function activateClass(slick){
					$(slick.$slider).addClass('slickSlider--activated');
					setTimeout(function(){
						$(slick.$slider).removeClass('slickSlider--activated');
					}, (parseInt(slick.defaults.autoplaySpeed) * 2) - 500 );
				}

			});
		};
	});
})
