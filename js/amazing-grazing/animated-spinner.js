/*!
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Usage:
 *  - controls the Animated Spinner that containes 5 items
 *
 * Description:
 *  - controls classes "itemDot" and "dotCircle"
 *  - sets up the size on page load
 *  - initiates spinning every 7 seconds
 *  - controls the animations
 *
 * This file is called by the following web pages:
 *  - livestock-statistics.php
 *  - invasive-species.php
*/

$(document).ready(function(){
	let i=2;
	var radius = 200;
	var fields = $('.itemDot');
	var container = $('.dotCircle');
	var width = container.width();
	radius = width/2.5;
	var height = container.height();
	var angle = 0, step = (2*Math.PI) / fields.length;
	
	/* 
		Description: resizes each item in the spinner using math equation
		Pre-condition:
		  - "itemDot" class must be available on the client side in the HTML
		Post-condition
		  - resize each item
		Return:
		  - none, but resizes visually
	*/
	fields.each(function() {
		var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
		var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);

		$(this).css({
			left: x + 'px',
			top: y + 'px'
		});
		
		angle += step;
	});
	
	/* 
		Description: spins the spinner when the class "itemDot" is clicked
		Pre-condition:
		  - "itemDot" class must be available on the client side in the HTML
		Post-condition
		  - enable spin using mathematical equation based on the degrees.
          - Spins left or right, and also spins each item to align it horizontally
		Return:
		  - none, but visually moves/rotates items
	*/
	$('.itemDot').click(function(){
		var dataTab = $(this).data("tab");
		$('.itemDot').removeClass('active');
		$(this).addClass('active');
		$('.CirItem').removeClass('active');
		$( '.CirItem'+ dataTab).addClass('active');
		i = dataTab;
		
		$('.dotCircle').css({ // controls the rotations of the spinning circle
			"transform":"rotate("+((i-1)*36)+"deg)",
			"transition":"2s"
		});
		
		$('.itemDot').css({ // controls the rotations of the boxes. Must be opposite of the spinning circle
			"transform":"rotate("+((-1)*(i-1)*36)+"deg)",
			"transition":"1s"
		});
	});
	
	/* 
		Description: same as above but does it automatically, no click needed
		Pre-condition:
		  - "itemDot" class must be available on the client side in the HTML
		Post-condition
          - enable spinnign every 7 seconds (7000 miliseconds)
		  - enable spin using mathematical equation based on the degrees.
          - Spins left or right, and also spins each item to align it horizontally
		Return:
		  - none, but visually moves/rotates items
	*/
	setInterval (function() { // Function that auto executes every 5 seconds to enable auto spin
		var dataTab = $('.itemDot.active').data("tab");
		
		if (dataTab>5 || i>5) {
			dataTab=1;
			i=1;
		};
		
		$('.itemDot').removeClass('active');
		$('[data-tab="'+i+'"]').addClass('active');
		$('.CirItem').removeClass('active');
		$( '.CirItem'+i).addClass('active');
		i++;
		
		$('.dotCircle').css({ // controls the rotations of the spinning circle
			"transform":"rotate("+((i-2)*36)+"deg)",
			"transition":"2s"
		});
		
		$('.itemDot').css({ // controls the rotations of the boxes. Must be opposite of the spinning circle
			"transform":"rotate("+((-1)*(i-2)*36)+"deg)",
			"transition":"1s"
		});
	}, 7000); 
});