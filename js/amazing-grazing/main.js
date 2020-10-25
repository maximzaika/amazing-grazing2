/*!
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Description:
 *  - contains 2 functions:
 *    * scrollToTop: called by all the pages - scrolls back to top by clicking the button on the lower right corner of the screen
 *    * smoothScroll: called by index.php - when "Learn more" button is clicked, it allows to automatically scrool to achhor smoothly
 *
 * Pre-condition:
 *  - Learn More or Scroll to top button must be clicked to execute these functions
 *
 * Post-condition:
 *  - When Learn more is clicked, it smoothly scrools to the achor (SERVICES)
 *  - When scroll to top button is clicked, it is used to scroll all the way to top by calling scrollToTop (contains class 'js-gotop')
 *
 * Return:
 *  - updates the div id "update-news" with the latest news
*/

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
			if ((this.hash !== "") && (this.hash.substring(0,5) != "#xxx_")) { // Make sure this.hash has a value before overriding default behavior
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
			
			if (this.hash.substring(0,5) == "#xxx_") {
				event.preventDefault();
			}
		});
	};
	  
	$(function(){
		scrollToTop();
		smoothScroll();
	});
}());