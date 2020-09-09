;(function () {
	
	// Function rsponsible for the functionalities of the scroll to top button
	var scrollToTop = function() {
		$('.js-gotop').on('click', function(event){ /* Detect the click of the js-gotop class */
			event.preventDefault(); /* prevents default interaction */

			$('html, body').animate({ /* scrolls animated to the top html/body container */
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			return false;
		});

		$(window).scroll(function(){ /* Hides the window if it is at the top */
			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}
		});
	};
	
	
	// Smooth Scrolling to anchor
	var smoothScroll = function() {
		$("a").on('click', function(event) { // Add smooth scrolling to all links
		if (this.hash !== "") { // Make sure this.hash has a value before overriding default behavior
			event.preventDefault(); // Prevent default anchor click behavior
	  
		
			var hash = this.hash; // Store hash

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){
				window.location.hash = hash; // Add hash (#) to URL when done scrolling (default click behavior)
			});
			}
		});
	};
	
	$(function(){
		scrollToTop();
		smoothScroll();
	});
}());