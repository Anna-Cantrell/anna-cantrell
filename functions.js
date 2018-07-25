/**
 * Custom JavaScript Functionality
 *
 * This document contains the custom JavaScript functionality for WordPress
 * theme. This is written using jQuery to simplify code complexity.
 *
 * @package WordPress
 * @subpackage Anna Cantrell
 * @since Anna Cantrell 1.0
 */

// jQuery
(function($) {

	$(document).ready(function() {
		// Menu toggle
		$('.menu-main-menu-container').prepend('<a href="#" class="main-menu-toggle">Menu</a>');
		$('#menu-main-menu').hide();
		$('.main-menu-toggle').click(function(e) {
			e.preventDefault();
			$(this).toggleClass('expanded');
			$('#menu-main-menu').slideToggle().toggleClass('expanded');
		});

		/*
 * Custom Scripts
 *
 * This document contains all of the custom scripts for website. This is written
 * using jQuery to simplify code complexity.
 */
var click = 0;
$('#hero, #header').click(function () {

  if (click == 0) {
    $('.geo-rhom-outer, .geo-par-1, .geo-par-2').addClass('pink');
    $('h2').addClass('pink-text');
  }
  if (click == 1) {
    $('.geo-rhom-outer, .geo-par-1, .geo-par-2').removeClass('pink').addClass('blue');
    $('h2').removeClass('pink-text').addClass('blue-text');
  }
  if (click == 2) {
    $('.geo-rhom-outer, .geo-par-1, .geo-par-2').removeClass('blue').addClass('purple');
    $('h2').removeClass('blue-text').addClass('purple-text');
  }

  click ++;
  if (click > 3) {
    $('.geo-rhom-outer, .geo-par-1, .geo-par-2').removeClass('purple');
    $('h2').removeClass('purple-text');
    click = 0;
  }
});

$('#hero, #header').mouseover(function() {
   $( document ).on( "mousemove", function( event ) {
     var strength = 50; //inverse - higher number is weaker
     var parStrength = 1.5;
     var xPos = event.pageX;
     var xCenter = window.innerWidth / 2;
     var xPush = (xCenter - xPos) / strength;
     var xPull = "-" + (xPos - xCenter) / strength;

     var yPos = event.pageY;
     var yCenter = document.getElementById('hero').clientHeight / 2;
     var yPush = (yCenter - yPos) / strength;
     var yPull = "-" + (yPos - yCenter) / strength;

     if (xPos < xCenter && yPos < yCenter) {
       $( "#rhom" ).css("transform", "translateX(" + xPush +"px) translateY(" + yPush +"px)");
       $( "#par" ).css("transform", "translateX(" + xPush * parStrength +"px) translateY(" + yPush * parStrength +"px)");
     } else if (xPos < xCenter && yPos >= yCenter) {
       $( "#rhom" ).css("transform", "translateX(" + xPush +"px) translateY(" + yPull +"px)");
       $( "#par" ).css("transform", "translateX(" + xPush * parStrength +"px) translateY(" + yPull * parStrength +"px)");
     } else if (xPos >= xCenter && yPos >= yCenter) {
       $( "#rhom" ).css("transform", "translateX(" + xPull +"px) translateY(" + yPull +"px)");
       $( "#par" ).css("transform", "translateX(" + xPull * parStrength +"px) translateY(" + yPull * parStrength +"px)");
     } else if (xPos >= xCenter && yPos < yCenter) {
       $( "#rhom" ).css("transform", "translateX(" + xPull +"px) translateY(" + yPush +"px)");
       $( "#par" ).css("transform", "translateX(" + xPull * parStrength +"px) translateY(" + yPush * parStrength +"px)");
     }
   });
 })
 .mouseout(function(){
   $( document ).on( "mousemove", function( event ) {
     var startPos = 'translateX(0px) translateY(0px)';
     $( "#rhom" ).css("transform", startPos);
     $( "#par" ).css("transform", startPos);
   });
 });

var navTop = parseInt($('#header').css('margin-top'));
var nameSize = parseInt($('#name').css('font-size'));

 function navSizing() {
        var scrollTop = window.pageYOffset;
        var newTop = parseInt($('#header').css('margin-top'));

        if (newTop >= 0) {
          $('#header').css('margin-top', (navTop - scrollTop + "px"));
        }
        if ( scrollTop > 150) {
          $('#header').css('margin-top', '0px');
          $('#header').css('background', 'linear-gradient(to bottom, rgba(41,41,41,1), 50%, rgba(41,41,41,0.0))');
          $('#name').css('font-size', '2em');
          $('#tagline').css('display', 'none');
          $('#hr').css('width', '38%');
        }
        if (scrollTop <= 150) {
          $('#header').css('background', 'transparent');
          $('#name').css('font-size', '5em');
          $('#tagline').css('display', 'block');
          $('#hr').css('width', '60%');
        }
    }


    window.addEventListener('scroll', function() {
        requestAnimationFrame(navSizing); //call our parallax function on next available screen paint
    }, false);


function open(e){
  var exitB = $('.exit-button');
  if (!exitB.is(e.target)){
    $(e.currentTarget).css('transition', 'all .3s').addClass('work-open');
    // When this function is used as an event handler: this === e.currentTarget
  }
}


var work = document.getElementsByClassName('work-col');

for(var i = 0; i < work.length; i++){
  // console: print the clicked <p> element
  work[i].addEventListener('click', open, false);
}

document.body.addEventListener('click', open, false);


$(document).mouseup(function (e) {
  var container = $(".work-col");
  var exitB = $('.exit-button');

  if (!container.is(e.target) || exitB.is(e.target)) // if the target of the click isn't the container...
      {
          $(".work-open").css('transition', 'all .0s').removeClass('work-open');
      }
});



// smooth scroll
var $root = $('html, body');

$('a[href^="#"]').click(function () {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);

    return false;
});

	});

})(jQuery);
