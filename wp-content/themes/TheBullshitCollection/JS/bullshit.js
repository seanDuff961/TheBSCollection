//javascript functions
(function ($, root, undefined) {
	$(function () {		
		'use strict';		
		// DOM ready, take it away		
	});
	
})(jQuery, this);

//landing page text delay
window.onload = function() {
	
//toggle Javascript
  $(".grid").isotope({
	 itemSelector: '.imageContainer',
	 layoutMode: 'fitRows'
	})	
	
  $("p").each(function(index) {
    $(this).css({
      'animation-delay': (index + 1) * .7 + 's'
    });
  });
}

//initially hide images besides color photographs
/*$(document).ready(function(){
	$(".hidden").hide();
});*/

//scroll to top functions, found here: http://plnkr.co/edit/DCnukHPNWa6Z1zOX53xp?p=preview
//scroll to top (linear)
function scrollToTop(scrollDuration) {
    var scrollStep = -window.scrollY / (scrollDuration / 15),
        scrollInterval = setInterval(function(){
        if ( window.scrollY != 0 ) {
            window.scrollBy( 0, scrollStep );
        }
        else clearInterval(scrollInterval); 
    },15);
}

//scroll to top (ease in and out)
function scrollToTop(scrollDuration) {
const   scrollHeight = window.scrollY,
        scrollStep = Math.PI / ( scrollDuration / 15 ),
        cosParameter = scrollHeight / 2;
var     scrollCount = 0,
        scrollMargin,
        scrollInterval = setInterval( function() {
            if ( window.scrollY != 0 ) {
                scrollCount = scrollCount + 1;  
                scrollMargin = cosParameter - cosParameter * Math.cos( scrollCount * scrollStep );
                window.scrollTo( 0, ( scrollHeight - scrollMargin ) );
            } 
            else clearInterval(scrollInterval); 
        }, 15 );
}
/*
//scroll down (ease in and out)
function scrollToHeader(scrollDuration) {
const   scrollHeight = window.scrollY, //distance from scoll down button to the top of the header
		scrollStep = Math.PI / ( scrollDuration / 15 ),
		cosParameter = scrollHeight / 2;
var     scrollCount = 0,
        scrollMargin,
        scrollInterval = setInterval( function() {
        	if ( window.scrollY != 0 ) {
        		scrollCount = scrollCount + 1;
        		scrollMargin = cosParameter - cosParameter * Math.cos (scrollCount * scrollStep);
        		window.scrollTo( 0, ( scrollHeight - scrollMargin ) );
        	}
        	else clearInterval(scrollInterval);
        }, 15 );	
}
*/

//scroll down
/*
(function($) {
	$('a[href*=#]').on('click', function(e) {
        console.log( $(".container").offset().top)
		e.preventDefault();
        $('html,body').animate({       
            scrollTop: $("#menu-main").offset().top - 6}, 1700);
	    //$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 900, 'linear');
	});
})(jQuery);
*/

//scroll down
jQuery(document).ready(function ($) {
	$('#section5').click(function (e) {
    	e.preventDefault();
    	$('html, body').animate({
        scrollTop: $("#menu-main").position().top
    	}, 2000);
	});
});

//sticky header
// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs
// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);
// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }
// remap jQuery to $

$(function() {
	$('a[href*=#]').on('click', function(e) {
		e.preventDefault();
			$('html, body').animate({
        scrollTop: $("#menu-main").position().top
    	}, 2000);

		//$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
	});
});

window.onload =(function($) {
    $(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#menu-main').offset().top;

        $(window).scroll(function(){
                if( $(window).scrollTop() >= stickyHeaderTop ) {
                        $('#menu-main').css({
                            position: 'fixed',
                            width: '100%',
                            top: '0px',
                            'z-index': 99999,
                            height: '60px'                        
                        });
                        /*$('#menu-main-navigation').css('margin-top', '-7px');*/
                        $('#logo').css({
                            'font-size':'40px',
                            /*'margin-top': '-20px'*/
                        });
                        $('#stickyalias').css('display', 'block');
                        $('.menu-item').css('padding-top', '18px');
                } else {
                        $('#menu-main-navigation').css('margin-top', '0');
                        $('#logo').css({
                            'font-size': '50px',
                            'margin-top': '-15px'
                        });
                        $('#menu-main').css({
                            position: '',
                            top: '',
                            'z-index': 0,
                            height: '57px'
                        });
                        $('#stickyalias').css('display', 'none');
                        $('.menu-item').css('padding-top', '15px');

                }
        });
  });
})(jQuery)

//submit form

function SubmitForm() {
	alert("Thank you for subscribing!");
}
