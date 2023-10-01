(function ($) {
    "use strict";


	var $window = $(window),
	$document = $(document);

var qTheme = {
	isElementInViewport: function (el) {
		if (typeof jQuery === "function" && el instanceof jQuery) {
			el = el[0];
		}
		var rect = el.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.top <= (window.innerHeight || document.documentElement.clientHeight)
		);
	},
	stickyNav: function () {
		$('body.sticky-nav .navigation')
			[$window.scrollTop() ? 'addClass' : 'removeClass']
		('sticky');
	}
}

window.qTheme = qTheme;

$window.on('load', function () {
	qTheme.stickyNav();

	$window.on('scroll resize', function () {
		qTheme.stickyNav();
	});
});

$document.ready(function () {
	if ($(document.body).hasClass('sticky-nav')) {
		var navHeight = $('.navigation').outerHeight();
		qTheme.stickyNav();
	}

	$('.js-menu-toggle').on('click', function () {
		$('html').toggleClass('mobile-menu-active');
	});


	$(document.body).on('click', function (e) {
		var curr = $(e.target)
		if (curr.parents('.menu,.toggle').length === 0) {
			$('html').removeClass('mobile-menu-active');
		}

	});

	$(".navigation .menu li").each(function () {
		if ($(this.children).filter('ul').length > 0) {
			$(this).addClass('has-sub-menu')
		}
	});


	$(".has-sub-menu > a").on("click", function (e) {
		var parent = $(this).parent();
		parent.removeClass('show');
		this.removeClass('show');
		var ul = parent.children('ul');
		// console.log(ul)
		if (ul.length === 1 && matchMedia("(max-width: 1450px)").matches) {
			e.preventDefault();
			ul.slideToggle(function () {
				if (this.style.display == 'none') {
					this.style.display = '';
				}
			});
		}
	});

	$('.dropdown-toggle').dropdown()
});

	$(document).ready(function(){
		$('.ridex-body .home-feature').addClass('service-wrapper');
		$('.ridex-body .post_block_media_wrapper').addClass('blog-item-single');
	});



	/*------------------------------------------
	   Header Loto Area
	------------------------------------------*/
	$('.header-search i').on('click', function(){
		$(this).next('.search-input').slideToggle();
	});

	/*------------------------------------------
	   Blog Carousel
	------------------------------------------*/
	$('.blog-wrapper').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	/*------------------------------------------
	   Popular Product Carousel
	------------------------------------------*/
	$('.elivate-slider').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	/*------------------------------------------
	   Brand Logo Carousel
	------------------------------------------*/
	$('.brand-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	/*------------------------------------------
	   Sticky Header
	------------------------------------------*/
	var $navStick = $('.logo-area-wrapper');
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 80) {
			$navStick.addClass("stick");
		} else {
			$navStick.removeClass("stick");
			$('.logo-area-wrapper').slideDown();
		};
	});

	/*----------------------------------------
	   Canvas Nav
	------------------------------------------*/
	$('ul.canvas li.has-children span').on('click', function(){
		$(this).next('ul.submenu').slideToggle();
		$(this).toggleClass('rotate');
	});

	/*------------------------------------------
	   Collection Single Sidebar Category List
	------------------------------------------*/
	$('ul.category-menu li.has-children span').on('click', function(){
		$(this).next('ul.category-child').slideToggle();
		$(this).toggleClass('toggle');
	});

    /*------------------------------------------
	   Main Slider
	------------------------------------------*/
	$('.slider-wrapper').slick({
		'slidesToShow': 1,
		'slidesToScroll': 1,
		'type': true,
		'autoplay': false,
		'autoplaySpeed': 3000,
		'arrows': true,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		'dots': true,
		'fade': false,
		'infinite': true,
		'pauseOnHover': true,
		'speed': 300,
	});

    /*------------------------------------------
	   Deal of The Day Slider
	------------------------------------------*/
	$('.deal-game-wrapper').slick({
		'slidesToShow': 1,
		'slidesToScroll': 1,
		'type': true,
		'autoplay': false,
		'autoplaySpeed': 3000,
		'arrows': true,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		'dots': true,
		'fade': false,
		'infinite': true,
		'pauseOnHover': true,
		'speed': 300,
	});

	/*------------------------------------------
	   Top Categories Carousel
	------------------------------------------*/
	$('.cat-carousel-wrapper').slick({
		'type': true,
		'autoplay': false,
		'arrows': true,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		'dots': false,
		'fade': false,
		'infinite': true,
		'pauseOnHover': true,
		'slidesToShow': 3,
		'slidesToScroll': 1,
		'speed': 300,

		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			  }
			},
			{
			  breakpoint: 667,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		]
	});

	/*------------------------------------------
	   Testimonial Carousel
	------------------------------------------*/
	$('.testimonial-wrapper').slick({
		'type': true,
		'autoplay': false,
		'arrows': true,
		'prevArrow': '<div class="slide-arrow-left"><i class="ri-arrow-left-s-line"></i></div>',
		'nextArrow': '<div class="slide-arrow-right"><i class="ri-arrow-right-s-line"></i></div>',
		'dots': false,
		'fade': false,
		'infinite': true,
		'pauseOnHover': true,
		'slidesToShow': 2,
		'slidesToScroll': 1,
		'speed': 300,

		responsive: [
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		]
	});

	/*------------------------------------------
	   Countdown Timer
	------------------------------------------*/
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    simplyCountdown('.simply-countdown-one', {
        year: 2023, 
		month: 12, 
		day: 29,
    });

	/*------------------------------------------
	   Review Form Hide/Show
	------------------------------------------*/
	$('.review-button a').click(function(){
		$('.review-form').toggle();
	});



})(jQuery);
  