(function($){
	var responsive_menu = false;
	var $logowidth = 90;
	$(document).ready(function(){
		var window_width = $(window).width();
		$logowidth = $('a.logo img').width();
		if (window_width < 752) {
			responsive_menu = true;
		}
		else {
			responsive_menu = false;
			$('.header_nav .nav li').mouseenter(function(){
				var $count = $(this).children('ul').children('li').length;
				$(this).children('ul').stop(true, true).slideDown(70 * $count, function(){$(this).css('overflow', 'visible')});
			});
			
			$('.header_nav .nav li').mouseleave(function(){
				var $count = $(this).children('ul').children('li').length;
				$(this).children('ul').stop(true).slideUp(70 * $count);
			});
		}
	});
	$(window).resize(function(){
		var window_width = $(window).width();
		if (window_width < 752) {
			responsive_menu = true;
			if($('.header_nav').hasClass('sticky')){
				$('.header_nav').removeClass('sticky');
			}
		}
		else {
			responsive_menu = false;
		}
	});
	
	$(document).ready(function(){
		responsive_nav();
		zero_header();
		
		$('.search-trigger a').click(function(){
			if(!$(this).hasClass('search-opened')){
				var $navHeight = $(this).closest('.white-bg').outerHeight();
				var $shopHeight = $(this).closest('.header_nav').find('.dark-gray-bg').outerHeight();
				var $searchOffset = $('.search-popout-block').height();
				$(this).closest('.header_nav').find('.search-popout-block').stop(true).animate({bottom : -$searchOffset},200,function(){
					$(this).closest('.header_nav').find('.search-trigger a').addClass('search-opened');
					$(this).find('input').trigger('focus');
				});
			}
		});
		$('.header-search-form input').focusout(function(){
			$(this).parent().find('.close-search').trigger('click');
		});
		$('.header-search-form .close-search').click(function(){
				var $searchOffset = $('.search-popout-block').height();
				$(this).closest('.search-popout-block').stop(true).animate({bottom : 0}, 200,function(){
					$('.search-trigger a.search-opened').removeClass('search-opened');
				});
				
		});
		
		$('.shop-button-header').hover(function(){
			$(this).find('.items-in-cart-wrapper, .items-in-wishlist-wrap').show().stop(true, true).animate({opacity : 1, top : 50}, 200);
		},function(){
			$(this).find('.items-in-cart-wrapper, .items-in-wishlist-wrap').stop(true).animate({opacity : 0, top : 100}, 200 ,function(){
				$(this).hide();
			});
		});
	});
	var animateLogo = false;
	var animateNav = false;
	
	$(window).scroll(function(){
		zero_header();
	});
	
	function paralaxHeight(){
		var fullHeight = $(window).height();
		var headHeight = $('header').height();
		var calcHeight = fullHeight - headHeight;
		$('.sp-slideshow, .first-page-element').css({height : calcHeight});
	}
	
	function zero_header(){
		var animateNavBar = false;
		
		var $windowWidth = $(window).width();
		if($windowWidth > 975){
			var wind_scr = $(window).scrollTop();
			if(wind_scr > 50){
				animateNavBar = true;
				wind_scr = 50;
			}
			else{
				animateNavBar = true;
			}
			$('.header_nav').css({top : -wind_scr});
			if(animateNavBar == true){
				var navPadding = 29 - (wind_scr / 3.571428);
				var logoPadding = 14 - (wind_scr / 3.571428);
				var searchPadding = 23 - (wind_scr / 3.571428);
				var headerMinHeight = 132 - (wind_scr / 3.571428)*2;
				$('.navbar .nav > li > a').stop(true).animate({'padding-top': navPadding, 'padding-bottom': navPadding}, 200,function(){
					var navLinkHeight = $('.navbar .nav > li > a').outerHeight();
					$('.navbar .nav .dropdown').css({top : navLinkHeight}, 200);
					if($('.search-trigger a').hasClass('search-opened')){
						var $searchHeight = $('.search-popout-block').outerHeight();
						$('.search-popout-block').stop(true).animate({bottom : -$searchHeight},200);
					}
				});
				$('.zero-logo a').stop(true).animate({'padding-top': logoPadding, 'padding-bottom': logoPadding}, 200);
				$('.search-trigger').stop(true).animate({'padding-top': searchPadding, 'padding-bottom': searchPadding}, 200);
				$('header').stop(true).animate({'min-height' : headerMinHeight}, 200);
				animateNavBar = false;
			}
			
			if(wind_scr > 45) {
				if(animateNav == false){
					$('.paralax-image-wrapper').stop(true).animate({opacity : 0},600);
					$('.paralax-image-wrapper-blur').stop(true).animate({opacity : 1},600);
					animateNav = true;
				}
			}
			if(wind_scr < 45) {
				if(animateNav == true){
					$('.paralax-image-wrapper').stop(true).animate({opacity : 1},600);
					$('.paralax-image-wrapper-blur').stop(true).animate({opacity : 0},600);
					animateNav = false;
				}
			}
		}
	}
	
function responsive_nav() {
	var $windowWidth = $(window).width();
		var $clonedMenu = $('.header-nav-wrap nav').clone().addClass('responsive-nav');
	$('.colorpicker-wrapper').parent().append($clonedMenu);
	$('.responsive-nav').find('.navbar-inner').addClass('relative').append('<div class="menu-closing"><i></i><div class="clearfix"></div></div>');
	$('.responsive-nav').parent().append('<div class="menu-trigger"><i></i></div>');
	$('.responsive-nav ul.nav li').each(function(){
		if($(this).children('ul').length > 0){
			$(this).prepend('<a href="#" class="submenu-trigger">+</a>');
		}
	});
}
})(jQuery);