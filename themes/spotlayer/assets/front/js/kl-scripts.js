/* ==========================================================================

	Kallyas JS scripts.
	Contains scripts dedicated for this template.

	Do not change nothing as it will be constantly updated and your work might
	get overwritten.

========================================================================== */

//#! Enable with "1" or disable with "0" which functionality you want to use.
var KallyasConfig = {
	// Set your own domain to enable the Google search functionality on your website.
	searchDomain: 'https://spotlayer.com',

	// Enable Chaser Menu (Chaser menu or Sticky Header, not both on the same time.)
	enableChaserMenu: 0,

	// The distance in pixels from the top of the page when to display the chaser menu
	chaserMenuOffsetDisplay: 150,

	// Enable Sticky Header
	enableStickyHeader: 1,

	// Enable Header ScrollSpy (Especially for One Page layouts that has OnePage menu (Landing Pages).)
	enableScrollSpy: 0,

	// Display the back to top button
	enableBackToTop: 1
};
//!#----------



/*
* Closure for Page Load
*/
(function($, window, document) {
	"use strict";

// Define global vars
	var $window = $(window),
		$html = $("html"),
		$body = $("body"),
		$header = $("#header");



// FIX mask for Safari Browser
	if(/^((?!chrome|android).)*safari/i.test(navigator.userAgent)){
		document.getElementsByTagName('body')[0].className+=' is-safari';
	}
// END FIX mask for Safari Browser


// PRELOADER *to deactivate erase or comment this code*
	$(window).on('load', function() {
		$('body').removeClass('preloader');
	});
// END PRELOADER


// Search panel
	var searchBtn = $('#search').children('.searchBtn'),
		searchPanel = searchBtn.next(),
		searchP = searchBtn.parent();
		searchBtn.click(function(e){
		e.preventDefault();
		var _t = $(this);
		if(!_t.hasClass('active')) {
			_t.addClass('active')
			.find('span')
			.removeClass('fa-search white-icon')
			.addClass('fa-times');
			searchPanel.show();
		} else {
			_t.removeClass('active')
			.find('span')
			.addClass('fa-search white-icon')
			.removeClass('fa-times');
			searchPanel.hide();
		}
	}); // searchBtn.click //

	$(document).click(function(){
		searchBtn.removeClass('active')
			.find('span')
			.addClass('fa-search white-icon')
			.removeClass('fa-times');
		searchPanel.hide(0);
	});

	searchP.click(function(event){
		event.stopPropagation();
	});
// END Search panel


// Header search with Google
	//@! Header Search Form
	var searchForm = $('#searchform');
	if(searchForm){
		searchForm.on('submit', function(e){
			var searchInput = $(this).find('#q');
			var searchTerm = searchInput.val().replace('SEARCH ...', '');
			var qs = 'site:'+KallyasConfig.searchDomain +' '+searchInput.val();
			$(this).find('#q').val(qs);
			window.setTimeout(function() {
				searchInput.val(searchTerm);
			}, 1000);
			return true;
		});
	}
	//@! Sidebar search form
	searchForm = $('#searchform-sidebar');
	if(searchForm){
		var searchInput = $('#s', searchForm);
		searchForm.on('submit', function(e){
			var qs = 'site:'+KallyasConfig.searchDomain +' '+searchInput.val();
			$(this).find('#sq').val(qs);
			return true;
		});
	}

// END Header search with Google


// Search from pages with Google
	var searchForms = $('.elm-searchbox__form');
	if (searchForms) {
		searchForms.on('submit', function(e) {
			var searchInput = $(this).find('.elm-searchbox__input'),
				__search = searchInput.val(),
				qs = 'site:' + KallyasConfig.searchDomain + ' ' + __search;
			searchInput.val(qs);
			window.setTimeout(function() {
				searchInput.val(__search);
			}, 1000);
			return true;
		});
	}
// end Search from pages with Google


// Add active class for menu items depending on the page loaded
	(function(){
		var pathname = window.location.pathname,
			page = pathname.split(/[/ ]+/).pop(),
			menuItems = $('#menu-main-menu a');
		menuItems.each(function(){
			var mi = $(this),
				miHrefs = mi.attr("href"),
				miParents = mi.parents('li');
			if(page == miHrefs) {
				miParents.addClass("active").siblings().removeClass('active');
			}
		});
	})();
// END Add active class for menu items depending on the page loaded


// Chaser menu
	if (window.matchMedia('(min-width: 992px)').matches) {
		if(KallyasConfig.enableChaserMenu && ! KallyasConfig.enableStickyHeader){
			var KT_Chaser = {
				// Whether or not the chaser is visible
				visible: false,

				update: function( $header, headerStyleNumber )
				{
					if(headerStyleNumber < 1){
						console.warn('[KT_Chaser::update] Error: Invalid header style number provided.');
						return;
					}

					// Clone needed elements from $header depending on the headerStyleNumber and generate chaser menu
					this._createChaserByHeaderStyle( $header, headerStyleNumber );
				},

				// Clone needed elements from $header depending on the headerStyleNumber and generate chaser menu
				_createChaserByHeaderStyle: function( $header, headerStyleNumber )
				{
					// Show top bar when headerStyleNumber = [1,2,3]
					var populateTopBar = ($.inArray(parseInt(headerStyleNumber,10), [1,2,3]));

					// Update chaser's content
					this._updateChaserHtml( $header, populateTopBar );
				},

				// Update the chaser menu's content
				_updateChaserHtml: function( $header, populateTopBar ){
					populateTopBar = (populateTopBar > -1);

					// Create new html structure
					var chaserMenu = $('body .chaser');
					if( ! chaserMenu){
						return;
					}

					// Create chaser menu
					$('#chaserMenuRow').html('')
						//.append('<div class="col-sm-2 col-md-2" id="left-container"></div>')
						.append('<div class="col-sm-12 col-md-12" id="right-container"></div>');

					// Add logo
					//$('#left-container').html($('.logo-container', $header).clone(true));

					// Add the content in the right area
					var rightContainer = $('#right-container');
					rightContainer
						// Adding top bar
						//.append('<div id="_wpk-custom-bar" class="col-sm-12 col-md-12"></div>')
						// add main menu
						.append('<div id="wpk-main-menu" class="col-sm-12 col-md-12"></div>')
						// Add cta button
						//.append('<div id="_wpk-cta-button" class="col-sm-1 col-md-1"></div>')
						;

					// Add content in the newly created sections
					// if(populateTopBar) {
					// 	if($header.attr('data-header-style') == '2'){
					// 		$('#_wpk-custom-bar').html( $('<div style="height:32px;"></div>') );
					// 	}
					// 	else if($header.attr('data-header-style') == '3'){
					// 		$('#_wpk-custom-bar').html( $('.kl-top-header').clone(true) );
					// 	}
					// 	else {
					// 		$('#_wpk-custom-bar').html( $('.kl-top-header').clone(true) );
					// 	}
					// }
					// else {
					// 	$('#_wpk-custom-bar').html( $('<div style="height:32px;"></div>') );
					// }

					//$('#_wpk-cta-button').html($('#ctabutton', $header).clone(true));

					$('#wpk-main-menu').html($('#menu-main-menu', $header).clone(true));

					//#! Remove search
					chaserMenu.find('#search.header-search').remove();
				}
			};

			if(KallyasConfig.enableChaserMenu) {
				// ON LOAD
				// the reference to the default header element
				var _header = $('#header'),
					// Default value for chaser's visibility
					forch = KallyasConfig.chaserMenuOffsetDisplay;

				// ENABLE HEADER STYLE CHANGING (the dropdown in options)
				var header_style_option = _header.attr('data-header-style') || '1';


				// Setup references
				var docMainMenu = $('#main-menu > ul');
				if(docMainMenu) {
					// Set the default style for header
					//_header.attr('data-header-style', header_style_option);

					// Create chaser menu
					$('<div id="chaserMenuRow" class="row"></div>')
						.appendTo(document.body)
						.wrap('<div class="chaser"><div class="container"></div></div>');

					// Set the chaser's visibility
					var scrolled = $(window).scrollTop(),
					// Get the reference to the chaser menu
						_chaser = $('body .chaser');
					if(scrolled > forch) {
						_chaser.addClass('visible');
						KT_Chaser.visible = true;
					}
					KT_Chaser.update( _header, _header.attr('data-header-style'));
				}
				// END if(docMainMenu)

				var _chaser = $('body .chaser')

				// OnScroll
				$(window).scroll(function(e) {

					var scrolled = $(window).scrollTop();

					if ( scrolled >= forch ) {
						_chaser.addClass('visible');
						KT_Chaser.visible = true;
					}
					else if ( scrolled < forch ) {
						_chaser.removeClass('visible');
						KT_Chaser.visible = false;

					}
					else {
						// Triggered when the chaser menu is visible but doesn't have content.
						// Only happens when the window is scrolled and then the page is refreshed.
						if(_chaser.hasClass('visible') && $('#chaserMenuRow').html().trim() == ''){
							KT_Chaser.visible = true;

						}
					}
				});
				// END onScroll
			}
		}
	}
// END Chaser menu


// Sticky Header
	if(KallyasConfig.enableStickyHeader && ! KallyasConfig.enableChaserMenu){
		var header = $('#header');

		$(window).scroll(function(){
			var scrolled = $(window).scrollTop();
			if(scrolled < 1){
				$body.removeClass('sticky-header');
			}
			else if (scrolled > 0 && scrolled <= 9) {
				$body.addClass('sticky-header');
				header.removeClass('header--is-sticked').addClass('header--no-sticked');
			}
			else if (scrolled >= 10) {
				header.addClass('header--is-sticked');
			}
			else {
				header.removeClass('header--is-sticked').addClass('header--no-sticked');
			}
		});
	}
// END Sticky Header


// Responsive Main-Menu
	var page_wrapper = $('#page_wrapper'),
		responsive_trigger = $('.zn-res-trigger'),
		zn_back_text = 'Back',
		back_text = '<li class="zn_res_menu_go_back"><span class="zn_res_back_icon fas fa-chevron-left"></span><a href="#">'+zn_back_text+'</a><a href="#" class="zn-close-menu-button"><span class="fas fa-times"></span></a></li>',
		cloned_menu = $('#main-menu > ul').clone().attr({id:"zn-res-menu", "class":""});

	var start_responsive_menu = function(){

		var responsive_menu = cloned_menu.prependTo(page_wrapper);
		var responsive_menu_overlay = $('<div class="zn-res-menu-overlay"/>').insertAfter(cloned_menu);

		var set_height = function(){
			var _menu = $('.zn-menu-visible').last(),
				height = _menu.css({height:'auto'}).outerHeight(true),
				window_height  = $(window).height(),
				adminbar_height = 0,
				admin_bar = $('#wpadminbar');

			// CHECK IF WE HAVE THE ADMIN BAR VISIBLE
			if(height < window_height) {
				height = window_height;
				if ( admin_bar.length > 0 ) {
					adminbar_height = admin_bar.outerHeight(true);
					height = height - adminbar_height;
				}
			}
			_menu.attr('style','');
			page_wrapper.css({'height':height});
		};



		// BIND OPEN MENU TRIGGER
		responsive_trigger.click(function(e){
			e.preventDefault();

			responsive_menu.addClass('zn-menu-visible');
			set_height();

		});

		// Close the menu when a link is clicked
		responsive_menu.find( 'a:not([rel*="mfp-"])' ).on('click',function(e){
			$( '.zn_res_menu_go_back' ).first().trigger( 'click' );
		});

		// ADD ARROWS TO SUBMENUS TRIGGERS
		responsive_menu.find('li:has(> ul)').addClass('zn_res_has_submenu').prepend('<span class="zn_res_submenu_trigger glyphicon glyphicon-chevron-right"></span>');
		// ADD BACK BUTTONS
		responsive_menu.find('.zn_res_has_submenu > ul').addBack().prepend(back_text);

		// REMOVE BACK BUTTON LINK
		$( '.zn_res_menu_go_back' ).click(function(e){
			e.preventDefault();
			var active_menu = $(this).closest('.zn-menu-visible');
			active_menu.removeClass('zn-menu-visible');
			set_height();
			if( active_menu.is('#zn-res-menu') ) {
				page_wrapper.css({'height':'auto'});
			}
		});

		// OPEN SUBMENU'S ON CLICK
		$('.zn_res_submenu_trigger').click(function(e){
			e.preventDefault();
			$(this).siblings('ul').addClass('zn-menu-visible');
			set_height();
		});

		var closeMenu = function(){
			cloned_menu.removeClass('zn-menu-visible');
			responsive_trigger.removeClass('is-active');
			removeHeight();
		};
	}

	// MAIN TRIGGER FOR ACTIVATING THE RESPONSIVE MENU
	var menu_activated = false,
		triggerMenu = function(){
			if ( $(window).width() < 1200 ) {
				if ( !menu_activated ){
					start_responsive_menu();
					menu_activated = true;
				}
				page_wrapper.addClass('zn_res_menu_visible');
			}
			else{
				// WE SHOULD HIDE THE MENU
				$('.zn-menu-visible').removeClass('zn-menu-visible');
				page_wrapper.css({'height':'auto'}).removeClass('zn_res_menu_visible');
			}
		};

	$(document).ready(function() {
		triggerMenu();
	});

	$( window ).on( 'load resize' , function(){
	   triggerMenu();
		var is = false;
		if ( $(window).width() < 1200 ) {
			if(is) return;
			//@wpk
			// Close button for the responsive menu
			var closeMenuSender = $('.zn-close-menu-button, .zn-res-menu-overlay');
			if(closeMenuSender){
				closeMenuSender.on('click', function(e){
					e.preventDefault();
					e.stopPropagation();
					var parent = $('#zn-res-menu');
					parent.removeClass('zn-menu-visible');
					//parent.removeClass('zn-menu-visible');
					$('.zn-menu-visible', parent).removeClass('zn-menu-visible');
					$('#page_wrapper').css({'height':'auto'});
				});
			}
			is = true;
		}
	});
// END Responsive Main-Menu


// Scroll to top
	if(KallyasConfig.enableBackToTop){
		if ($('#totop').length) {
			var scrollTrigger = 200, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#totop').addClass('show');
				} else {
					$('#totop').removeClass('show');
				}
			};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			$('#totop').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 700);
			});
		}
	}
// END Scroll to top




// Kallyas Videos
// Based on easy background video plugin
// Example data setup attribute:
// data-setup='{ "position": absolute, "loop": true , "autoplay": true, "muted": true, "mp4":"", "webm":"", "ogg":""  }'
	if( typeof($('.kl-video')) !== 'undefined'){
		$('.kl-video').each(function(index, el) {
			var $video = $(el),
				_vid_controls = $video.next('.kl-video--controls'),
				_vid_playplause = _vid_controls.find('.btn-toggleplay'),
				_vid_audio = _vid_controls.find('.btn-audio'),
				_data_attribs = $video.attr("data-setup"),
				_options = typeof _data_attribs != 'undefined' ? JSON.parse(_data_attribs) : '{}';

			if(_options.height_container == true)
				$video.closest('.kl-video-container').css('height', $video.height());

			if(_options.hasOwnProperty('muted') && _options.muted == true) _vid_audio.children('i').addClass('fa-volume-off');
			if(_options.hasOwnProperty('autoplay') && _options.autoplay == false) _vid_playplause.children('i').addClass('paused');

			if(typeof video_background != 'undefined') {
				var Video_back = new video_background( $video,
					{
						//Stick within the div or fixed
						"position": _options.hasOwnProperty('position') ? _options.position : "absolute",
						//Behind everything
						"z-index": _options.hasOwnProperty('zindex') ? _options.zindex : "-1",

						//Loop when it reaches the end
						"loop": _options.hasOwnProperty('loop') ? _options.loop : true,
						//Autoplay at start
						"autoplay": _options.hasOwnProperty('autoplay') ? _options.autoplay : false,
						//Muted at start
						"muted": _options.hasOwnProperty('muted') ? _options.muted : true,

						//Path to video mp4 format
						"mp4": _options.hasOwnProperty('mp4') ? _options.mp4 : false,
						//Path to video webm format
						"webm": _options.hasOwnProperty('webm') ? _options.webm : false,
						//Path to video ogg/ogv format
						"ogg": _options.hasOwnProperty('ogg') ? _options.ogg : false,
						//Path to video flv format
						"flv": _options.hasOwnProperty('flv') ? _options.flv : false,
						//Fallback image path
						"fallback_image": _options.hasOwnProperty('poster') ? _options.poster : false,
						// Youtube Video ID
						"youtube": _options.hasOwnProperty('youtube') ? _options.youtube : false,

						// flash || html5
						"priority": _options.hasOwnProperty('priority') ? _options.priority : "html5",
						// width/height -> If none provided sizing of the video is set to adjust
						"video_ratio": _options.hasOwnProperty('video_ratio') ? _options.video_ratio : false,
						// fill || adjust
						"sizing": _options.hasOwnProperty('sizing') ? _options.sizing : "fill",
						// when to start
						"start": _options.hasOwnProperty('start') ? _options.start : 0
					});
				//Toggle play status
				_vid_playplause.on('click',function(e){
					e.preventDefault();
					Video_back.toggle_play();
					$(this).children('i').toggleClass('paused');
				});
				//Toggle mute
				_vid_audio.on('click',function(e){
					e.preventDefault();
					Video_back.toggle_mute();
					$(this).children('i').toggleClass('mute');
				});
			}
		});
	}
// END Kallyas Videos


// Magnific Popup
	if(typeof($.fn.magnificPopup) != 'undefined')
	{
		$('a.kl-login-box').magnificPopup({
			type: 'inline',
			closeBtnInside:true,
			showCloseBtn: true,
			mainClass: 'mfp-fade mfp-bg-lighter'
		});

		$('a[data-lightbox="image"]:not([data-type="video"])').each(function(i,el){
			//single image popup
			if ($(el).parents('.gallery').length == 0) {
				$(el).magnificPopup({
					type:'image',
					tLoading: '',
					mainClass: 'mfp-fade'
				});
			}
		});
		$('.mfp-gallery.images').each(function(i,el) {
			$(el).magnificPopup({
				delegate: 'a',
				type: 'image',
				gallery: {enabled:true},
				tLoading: '',
				mainClass: 'mfp-fade'
			});
		});

		// Notice the .misc class, this is a gallery which contains a variatey of sources
		// links in gallery need data-mfp attributes eg: data-mfp="image"
		$('.mfp-gallery.misc').each(function(){
			$(this).magnificPopup({
				delegate: 'a[data-lightbox="mfp"]',
				mainClass: 'mfp-fade',
				type: 'image',
				gallery: {enabled:true},
				tLoading: '',
				callbacks: {
					elementParse: function(item) {
						item.type = $(item.el).attr('data-mfp');
					}
				}
			});
		});


		$('a[data-lightbox="iframe"]').magnificPopup({type: 'iframe', mainClass: 'mfp-fade', tLoading: ''});
		$('a[data-lightbox="inline"]').magnificPopup({type: 'inline', mainClass: 'mfp-fade', tLoading: ''});
		$('a[data-lightbox="ajax"]').magnificPopup({type: 'ajax', mainClass: 'mfp-fade', tLoading: ''});
		$('a[data-lightbox="youtube"], a[data-lightbox="vimeo"], a[data-lightbox="gmaps"], a[data-type="video"]').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			removalDelay: 160,
			preloader: true,
			fixedContentPos: false,
			mainClass: 'mfp-fade',
			tLoading: ''
		});

		// Enable WooCommerce lightbox
		$('.single_product_main_image .images a').magnificPopup({
			mainClass: 'mfp-fade',
			type: 'image',
			gallery: {enabled:true},
			tLoading: '',
		});
	}
// END Magnific Popup


// Flickr Feed
	var content = $('.flickrfeed');
	if( content ){
		var elements = content.find('.flickr_feeds');
		if(elements && elements.length){
			$.each(elements, function(i, e){
				var self = $(e),
					ff_limit = (self.attr('data-limit') ? self.attr('data-limit') : 6),
					fid = self.attr('data-fid');
				if(typeof($.fn.jflickrfeed) != 'undefined') {
					self.jflickrfeed({
						limit: ff_limit,
						qstrings: { id: fid },
						itemTemplate: '<li><a href="{{image_b}}" data-lightbox="image"><img src="{{image_s}}" alt="{{title}}" /><span class="theHoverBorder"></span></a></li>'
					},
					function(data) {
						self.find(" a[data-lightbox='image']").magnificPopup({type:'image', tLoading: ''});
						self.parent().removeClass('loadingz');
					});
				}
			});
		}
	}
// END Flickr Feed


// Tonext button - Scrolls to next block (used for fullscreen slider)
	if(typeof($(".js-tonext-btn")) != 'undefined'){
		$(".js-tonext-btn").on('click',function (e) {
			e.preventDefault();
			var endof = $(this).attr('data-endof') ? $(this).attr('data-endof') : false,
				dest = 0;

			if ( endof )
				dest = $(endof).height() + $(endof).offset().top;

			//go to destination
			$('html,body').animate({scrollTop: dest}, 1000, 'easeOutExpo');
		});
	}
// END Tonext button - Scrolls to next block (used for fullscreen slider)


// Blog Isotope item
	var enable_blog_isotope = function( scope ){
	var elements = scope.find( '.hg_blog_columns, .masonry-columns' );
		if( elements.length == 0) { return; }

		if( typeof $.fn.imagesLoaded != 'undefined' && typeof $.fn.isotope != 'undefined' )
			{
				elements.imagesLoaded( function() {
					elements.isotope({
						itemSelector: ".blog-isotope-item, .item",
						animationEngine: "jquery",
						animationOptions: {
							duration: 250,
							easing: "easeOutExpo",
							queue: false
						},
						filter: '',
						sortAscending: true,
						sortBy: ''
					});
				});
			}
		};
	var blog_isotope = $('.hg_blog_archive_element, .portfolio-masonry');
	if(blog_isotope){
		enable_blog_isotope ( blog_isotope );
	}
// END Blog Isotope item


// Price Filter
	var priceRange = $( ".price-range-slider" );
	if(typeof(priceRange) != 'undefined') {
		$.each(priceRange, function(index, val) {
			var _t = $(this),
				priceResult = _t.parent().find(".price-result"),
				currency = priceResult.data('currency');
			if( typeof($.fn.slider) != 'undefined' ){
				_t.slider({
					range: true,
					min: 0,
					max: 500,
					values: [ 75, 300 ],
					slide: function( event, ui ) {
						priceResult.val( currency + ui.values[ 0 ] + " - "+ currency + ui.values[ 1 ] );
					}
				});
			}
			priceResult.val( currency + _t.slider( "values", 0 ) + " - " + currency + _t.slider( "values", 1 ) );
		});
	}
// END Price Filter

// Check portfolio content & Knowledgebase categories read more button
	var elements = $('.portfolio-item-more-toggle, .kb-item-more-toggle');
	if(elements){
		$.each(elements, function(a,b){
			var element = $(b);
			element.on('click', function(e){
				e.preventDefault();
				e.stopPropagation();
				var eTarget = element.parents('.portfolio-item-desc, .kb-category').first();
				eTarget.toggleClass('is-opened');
			});
		});
	}
// END Check portfolio content & Knowledgebase categories read more button


// Map toggle panel
	elements = $('.kl-contentmaps__panel-tgg');
	if(elements){
		elements.each(function(a, b){
			var element = $(b);
			element.on('click', function(e){
				e.preventDefault();
				e.stopPropagation();
				var targetElement = $(element.data('target'));
				if(targetElement){
					var toggleClass = element.data('targetClass');
					if(toggleClass){
						targetElement.toggleClass(toggleClass);
					}
				}
			});
		});
	}
// END Map toggle panel


// Stage icon boxes element - .kl-ib-point-active => activates the dot (see :hover)
	elements = $('.kl-iconbox');
	if(elements){
		$.each(elements, function(a,b){
			var element = $(b),
				target = $(element.data('targetElement')); // data-target-element="kl-ib-point-1"
			if(target){
				element.on('mouseenter', function(e){
					target.addClass('kl-ib-point-active');
				}).on('mouseleave', function(){
					target.removeClass('kl-ib-point-active');
				});
			}
		});
	}
// END Stage icon boxes element


// MailChimp working newsletter
// read more http://stackoverflow.com/a/15120409/477958
	function register($form) {
		if(! $form){
			return false;
		}
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			cache       : false,
			dataType    : 'json',
			contentType: "application/json; charset=utf-8",
			error       : function(err) {
				var themessage = $('<span class="alert alert-danger"><button type="button" class="close icon-close" data-dismiss="alert" aria-hidden="true"></button>Could not connect to server. Please try again later.</span>');
				$('#notification_container').html(themessage);
				setTimeout(function(){
					themessage.addClass('animate');
				}, 300)
			},
			success     : function(data) {
				if (data.result != "success") {
					var message = data.msg.substring(4),
					themessage = $('<span class="alert alert-warning"><button type="button" class="close icon-close" data-dismiss="alert" aria-hidden="true"></button>'+message+'</span>');
					$('#notification_container').html(themessage);
					setTimeout(function(){
						themessage.addClass('animate');
					}, 300);
				}
				else {
					var message = data.msg,
					themessage = $('<span class="success alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>'+message+'</span>');
					$('#notification_container').html(themessage);
					setTimeout(function(){
						themessage.addClass('animate');
					}, 300)
				}
			}
		});
	}

	var $form = $('#mc-embedded-subscribe-form');
	if($form){
		$('#mc-embedded-subscribe-form').on('click', function(event) {
			if(event) event.preventDefault();
			register($form);
		});
	}

	var $form_pop = $('#mc-embedded-subscribe-form-pop');
	if($form_pop){
		$('#mc-embedded-subscribe-form-pop').on('click', function(event) {
			if(event) event.preventDefault();
			register($form_pop);
		});
	}
// END MailChimp working newsletter


// Words play
	jQuery('#textplay .textplay-line').each(function(index, el) {
		var words = jQuery(el).children('.textplay-word'),
			randlast;
		setInterval(function(){
			var rand = Math.floor( (Math.random() * words.length) );
			if(rand == randlast)
				rand = Math.floor( (Math.random() * words.length) );
			words.removeClass('active');
			setTimeout(function(){
				words.eq( rand ).addClass('active');
			},300);
			randlast = rand;
		}, 3000);
	});
// END Words play


// Sub-header mask effect
	if (matchMedia('only screen and (min-width: 767px)').matches && $html.hasClass('js')){
		var scrollSvg = $('.kl-slideshow, #page_header');
		if( scrollSvg && scrollSvg.length > 0 )
		{
			var scrollSvgHeight = (parseFloat(scrollSvg.css('height')) + 20),
				svgEffect = scrollSvg.find('.screffect');
			$window.scroll(function(){
				var scrollPos = $window.scrollTop();
				if(scrollPos < scrollSvgHeight) {
					var maxSkew = 2;
					var effectPos = (maxSkew / scrollSvgHeight) * scrollPos;
					svgEffect.css({ '-webkit-transform': 'skewY(-'+ effectPos +'deg)', 'transform': 'skewY(-'+ effectPos +'deg)' });
				}
			});
		}
	}
// END Sub-header mask effect


// Bubble Boxes
	$('.bubble-box').each(function(index, el) {
		var $el = $(el),
			$revealAt = $el.attr('data-reveal-at'),
			$hideAfter = $el.attr('data-hide-after'),
			defaultRevealAt = 1000; // default reveal when scrolling is at xx px
		if(typeof $revealAt == 'undefined' && $revealAt.length <= 0) $revealAt = defaultRevealAt;
		$window.smartscroll(function(event) {
			// reveal the popup
			if ($el.length > 0 && $(window).scrollTop() > $revealAt && (!$el.hasClass('bb--anim-show') && !$el.hasClass('bb--anim-hide'))){
				$el.addClass("bb--anim-show");
				// check if hide after is defined and hide the popupbox
				if(typeof $hideAfter != 'undefined' && $hideAfter.length >= 0) {
					setTimeout(function(){
						$el.removeClass('bb--anim-show').addClass('bb--anim-hide').one('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd',
							function() {
								$(this).remove();
						});
					}, $hideAfter)
				}
			}
		});
		$el.find('.bb--close').on('click', function(){
			$el.addClass('bb--anim-hide').one('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd',
				function() {
					$(this).remove();
			});
		});

	});
// END Bubble Boxes


// Popup Box
// Works with Magnific popup to open them
// data-ppbox-timeout attribute needed to specify the timeout to appear
	if(typeof($('.kl-pp-box[data-ppbox-timeout]')) != 'undefined') {
		$('.kl-pp-box[data-ppbox-timeout]').each(function(index, el) {
			var $el = $(el),
				pptimeout = $el.attr('data-ppbox-timeout'),
				timeout = (typeof pptimeout == 'undefined' && $(pptimeout).length <= 0) ? pptimeout : 8000;

			var cookieExpireAttr = $el.attr('data-cookie-expire'),
				cookieExpire = (typeof cookieExpireAttr !== 'undefined') ? cookieExpireAttr : 2;

			// Remove cookie if  you want to test
			// $.removeCookie('ppbox', { path: '/' });

			// check if cookie exists
			if(!$.cookie('ppbox')) {
				// show the popupbox
				var timer = setTimeout(function(){
					$.magnificPopup.open({
						items: {
							src: $($el.get(0))
						},
						type: 'inline',
						mainClass: 'mfp-fade mfp-bg-lighter',
						tLoading: ''
					});
				}, timeout);
			}
			// Set cookie and close popup
			$(el).find('.dontshow').on('click',function(e){
				e.preventDefault();
				// Add cookie support
				$.cookie('ppbox', 'hideit', { expires: parseInt(cookieExpire), path: '/' });
				//Close Popup
				$.magnificPopup.close();
			});
		});
	}
// END Popup Box


// Login pop-up element & Contact form pop-up element
	if(typeof($('.popup-with-form, .kl-cta-ribbon')) != 'undefined') {
		$('.popup-with-form, .kl-cta-ribbon').magnificPopup({
			closeBtnInside: true,
			type: 'inline',
			preloader: false,
			focus: '#name',
			// When elemened is focused, some mobile browsers in some cases zoom in
			// It looks not nice, so we disable it:
			callbacks: {
				beforeOpen: function() {
					if ($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
				}
			}
		});
	}
// END Login pop-up element & Contact form pop-up element


// Tooltips
// ** for more details how to use tooltips, you can check bootstrap documentation: http://getbootstrap.com/javascript/#tooltips
	if(typeof($.fn.tooltip) != 'undefined' && typeof($('[data-toggle="tooltip"]')) != 'undefined') {
		$('[data-toggle="tooltip"]').tooltip();
	}
// END Tooltips


//  Hover buttons icons in action bar
	jQuery(".cms-hov-icon").each(function(index, el) {
		var $el = jQuery(el),
			hovIcon = $el.attr('data-hovicon');
		$el.on('mouseover', function(){
			jQuery("#"+ hovIcon).addClass('hovered');
			jQuery("#cms-icon-github-circled").removeClass('hovered');
		}).on('mouseout', function(){
			jQuery("#"+ hovIcon).removeClass('hovered');
			jQuery("#cms-icon-github-circled").addClass('hovered');
		});
	});
//  END Hover buttons icons in action bar


// Appear Events
	if($.fn.appear != 'undefined') {
		$('[data-animated], .appear').appear({force_process: true});

		$('[data-animated="fade"]').on('appear', function() {
			$(this).each(function(i,el){ $(el).addClass('fade-animation') });
		});
		$('[data-animated="execute"]').on('appear', function() {
			$(this).each(function(i,el){ $(el).addClass('started') });
		});
	}
// end Appear Events


// // Tweets in Footer
// /* ### HOW TO CREATE A VALID ID: ###
// * Go to www.twitter.com and sign in as normal, go to your settings page.
// * Go to Widgets on the left hand side.
// * Create a new widget for what you need eg user timeline or search etc.
// * Feel free to check exclude replies if you dont want replies in results.
// * Now go back to settings page, and then go back to widgets page, you should
// * see the widget you just created. Click edit.
// * Now look at the URL in your web browser, you will see a long number like this:
// * 345735908357048478
// * Use this as your ID below instead!
	var twFeed = $('#twitterFeed');
	if(twFeed.length > 0 && typeof(twitterFetcher) != 'undefined') {
		var handleTweets = function(tweets) {
			var x = tweets.length,
				element = document.getElementById('twitterFeed'),
				n = 0,
				html = '<ul>';
			while(n < x) {
			  html += '<li>' + tweets[n] + '</li>';
			  n++;
			}
			html += '</ul>';
			element.innerHTML = html;
		}
		var twitter_config = {
			"id": '435730856443797504',
			"domId": '',
			"maxTweets": 1,
			"enableLinks": true,
			"showUser": false,
			"showTime": true,
			"dateFunction": '',
			"showRetweet": false,
			"customCallback": handleTweets,
			"showInteraction": false
		};
		twitterFetcher.fetch(twitter_config);
	}
// END Tweets in Footer


/**** Initialize carousels based on CarouFredSel
	* .caroufredsel class mandatory
	* data-setup attribute needed (please find examples within the site)
	* */
	var initCarouFredSels = function(dom){
		// check if dom param is added, if not use $body
		dom = typeof dom !== 'undefined' ? dom : $body;
		// start carousel trigger with options
		var cfs_container = $(dom).find(".caroufredsel:not(.custom)");
		// check if element exists so it can begin the job
		if (!cfs_container.length) return;
		// iterate through finds
		$.each( cfs_container, function(index, el) {
			var _el = $(el),
				_data_attribs = _el.attr("data-setup"),
				_options = typeof _data_attribs != 'undefined' ? JSON.parse(_data_attribs) : '{}',
				_nav = $('<div class="cfs--navigation"><a href="#" class="cfs--prev"></a><a href="#" class="cfs--next"></a></div>'),
				_pag = $('<div class="cfs--pagination"></div>'),
				_cfParent = _el.closest('.caroufredsel').parent();

			if(_options.navigation)
				( _options.appendToParent  ? _cfParent : _el ).append(_nav);

			if(_options.pagination)
				( _options.appendToParent ? _cfParent : _el ).append(_pag);

			if(_options.swipe_touch || _options.swipe_mouse)
				_el.addClass('stl-swiper');

			var doCarouFredSels = function(){
				_el.children('ul.slides').carouFredSel({
					responsive: _options.hasOwnProperty('responsive') ? _options.responsive : true,
					width: _options.hasOwnProperty('width') ? _options.width : null,
					height: _options.hasOwnProperty('height') ? _options.height : null,
					align: _options.hasOwnProperty('align') ? _options.align : 'left',
					scroll: {
						items: _options.hasOwnProperty('scroll') ? _options.scroll : 1,
						fx : _options.hasOwnProperty('fx') ? _options.fx : "scroll"
					},
					items: {
						visible: _options.hasOwnProperty('items') ? _options.items : 1,
						minimum: _options.hasOwnProperty('items_minimum') ? _options.items_minimum : 1,
						start: _options.hasOwnProperty('items_start') ? _options.items_start : 0,
						width:_options.hasOwnProperty('items_width') ? _options.items_width : null,
						height: _options.hasOwnProperty('items_height') ? _options.items_height : null
					},
					auto: {
						play: _options.hasOwnProperty('autoplay') ? _options.autoplay : true,
						timeoutDuration: _options.hasOwnProperty('auto_duration') ? _options.auto_duration : 10000
					},
					prev : {
						button  : ( _options.appendToParent ? _cfParent : _el.closest('.caroufredsel') ).find('.cfs--prev'),
						key     : "left"
					},
					next : {
						button  : ( _options.appendToParent ? _cfParent : _el.closest('.caroufredsel') ).find('.cfs--next'),
						key     : "right"
					},
					pagination: {
						container: ( _options.appendToParent ? _cfParent : _el.closest('.caroufredsel') ).find('.cfs--pagination'),
						anchorBuilder: function(nr, item) {
							return '<a href="#'+nr+'"></a>';
						}
					},
					swipe: {
						onTouch: _options.hasOwnProperty('swipe_touch') || Modernizr.touch ? _options.swipe_touch : false,
						onMouse: _options.hasOwnProperty('swipe_mouse') || Modernizr.touch ? _options.swipe_mouse : false
					}
				});
			};

			cfs_container.imagesLoaded(doCarouFredSels);

		});
	};
// end Initialize carousels based on CarouFredSel


/* Photo Gallery Alternative - Caroufredsel */
	if($.fn.carouFredSel != 'undefined') {

	/* Caroufredsel Trigger with options */
		initCarouFredSels();

		/**
		 * PhotoGallery Widget */


		$('.photogallery-widget .caroufredsel').each(function(index, el) {

			var _cfs_main = $(el),
			_cfs_main_slides = _cfs_main.children('ul.slides');

			_cfs_main_slides.children('li').slice(10).remove();

			var updPhotoGalWdgtCounter = function(c) {
					var cfscounter = c.closest('.caroufredsel').find('.cfs-counter'),
						current = c.triggerHandler( 'currentPosition' );
					cfscounter.html( ( current+1 ) +" of "+ c.children().length );
				},
				doPhotoGalWdgt = function (){
					_cfs_main_slides.carouFredSel({
						responsive: true,
						width: 850,
						items: 1,
						auto: 10000,
						prev : {
							button  : _cfs_main.find('.cfs--prev'),
							key     : "left"
						},
						next : {
							button  : _cfs_main.find('.cfs--next'),
							key     : "right"
						},
						scroll: {
							fx: 'crossfade',
							onBefore: function( data ) {
								updPhotoGalWdgtCounter( _cfs_main_slides );
							}
						},
						onCreate: function( data ) {
							updPhotoGalWdgtCounter( _cfs_main_slides );
						},
						pagination: {
							container: _cfs_main.next('.cfs--pagination'),
							anchorBuilder: function(nr, item) {
								var th = _cfs_main.height()/5,
									ths = _cfs_main_slides.children('li'),
									thbg = ths.eq(nr-1).attr('data-thumb'),
									thdesc = ths.eq(nr-1).find('.pg-caption'),
									thdesc_html = thdesc.length > 0 ? thdesc.get(0).outerHTML : '';
								return '<div class="pg-thumb" style="height: '+th+'px"><a href="#'+nr+'" style="background-image:url('+thbg+');"></a>'+ thdesc_html +'</div>';
							}
						},
						swipe: {
							onTouch: Modernizr.touch ? true : false,
							onMouse: Modernizr.touch ? true : false
						}
					});
				}
			// append pagination
			_cfs_main.after('<div class="cfs--pagination"></div>');
			// Load Carousel after images are loaded
			_cfs_main.imagesLoaded(doPhotoGalWdgt);

		});

	} // end checking if carouFredSel is loaded
/* end Photo Gallery Alternative - Caroufredsel */


// Chart animation based on easyPieChart jQuery plugin
	if($.fn.appear != 'undefined' && $.fn.easyPieChart != 'undefined') {
		var chart = $(".fundedperc .chart");
		chart.appear();
		$(document.body).on('appear', '.fundedperc .chart', function() {
			jQuery('.chart').easyPieChart({
				animate: 2000,
				barColor : typeof chart.attr('data-color') != 'undefined' ? chart.attr('data-color') : '#CD2122',
				trackColor: false,
				lineWidth: 16,
				size: 300,
				lineCap: 'square',
				scaleLength: 0,
				onStep: function(from, to, percent) {
					$(this.el).find('.percent span').text( Math.round(percent));
				}
			});
		});
	}
// end Chart animation based on easyPieChart jQuery plugin


// Process items: make the line behind the elements
	var selectors = $(".processitems li");
	if( selectors && selectors.length > 0)
	{
		$(".processitems li").each(function(i,el) {
			$(el).on({
			'mouseenter':function(){
				$(this).prevAll().each(function() {
					$(this).addClass("lined");
				});
			},
			'mouseleave':function(){
				$(this).siblings().each(function() {
					$(this).removeClass("lined");
				});
			}});
		});
	}
// end Process items: make the line behind the elements


// Circular carousel element more buttom function
	var selectors = $('.ca-container .ca-wrapper');
	if( selectors && selectors.length > 0)
	{
		selectors.each(function(i, el){

		var self = $(el);

			// Open wrapper panel
			var opened = false;
			self.find('.js-ca-more').on('click', function(e){
				e.preventDefault();
				var th = $(this).closest('.ca-item'),
					thpos = th.position().left;

				if(!opened){
					self.slick('slickPause');
					self.closest('.ca-container').addClass('ca--is-rolling');
					th.addClass('ca--opened');

					var activeItems = self.find('.ca-item.slick-active'),
						openedIndex = activeItems.index( th ),
						moveTo = (self.width() / activeItems.length) * openedIndex;

					th.css({
						"-webkit-transform":"translateX(-"+ moveTo +"px)",
						"-ms-transform":"translateX(-"+ moveTo +"px)",
						"transform":"translateX(-"+ moveTo +"px)"
					});
					opened = true;

				} else if(opened){

					if($(this).hasClass('js-ca-more-close')){

						self.slick('slickPlay', true);
						self.closest('.ca-container').removeClass('ca--is-rolling');
						th.removeClass('ca--opened');
						th.css({
							"-webkit-transform":"translateX(0)",
							"-ms-transform":"translateX(0)",
							"transform":"translateX(0)"
						});
						opened = false;
					}
				}
			});
			// Close wrapper panel
			self.find('.js-ca-close').on('click', function(e){
				e.preventDefault();
				var th = $(this).closest('.ca-item');
				if(opened){
					self.slick('slickPlay', true);
					self.closest('.ca-container').removeClass('ca--is-rolling');
					th.removeClass('ca--opened');
					th.css({
						"-webkit-transform":"translateX(0)",
						"-ms-transform":"translateX(0)",
						"transform":"translateX(0)"
					});
				}
				opened = false;
			});
		});
	}
// end Circular carousel element more buttom function


})(window.jQuery, window, document);


// ScollSpy One page Menu
if(KallyasConfig.enableScrollSpy){
			//#! [Configure ScrollSpy] Set the attribute on body
	$(window).on('load scroll resize', function(){
		var bodyScrollSpy = $('body[data-spy="scroll"]');
		if(KallyasConfig.enableChaserMenu && $(window).scrollTop() > KallyasConfig.chaserMenuOffsetDisplay ) {
			bodyScrollSpy.attr('data-target', '#wpk-main-menu');
		}
		else {
			bodyScrollSpy.attr('data-target', '#main-menu');
		}
	});

	jQuery(function($){
		var bodyScrollSpy = $('body')
			bodyScrollSpy
				.css('position', 'relative')
				.attr('data-spy', 'scroll')
				.attr('data-offset', '5');

		// OnLoad
		var hash = window.location.hash;
		if(hash){
			// check the main menu first
			var targets = $('#menu-main-menu > li > a');
			$.each(targets, function(a,b){
				if( hash == $(b).attr('href')){
					$(b).parents('ul').first().find('*').removeClass('active');
					$(b).addClass('active');
					$(hash).attr('tabindex', '-1');
					$(hash).focus();
				}
			});
		}
		// Menu item OnClick
		$('#menu-main-menu > li > a, .chaser li a').on('click',function(e) {
			var item = $(this);
			if(! item.hasClass('active')) {
				item.parents('ul').find('*').removeClass('active');
			    item.addClass('active');
			}
		});
	});
}
// end ScollSpy One page Menu
