$(document).ready(function(){
  
  
	// Smooth Scrolling
	$(document).ready(function(){
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
	});
	

	/* Focus on the input when the date button is clicked */
  $('.input-focus-start').on('click', function() {
	$('#enter-start-date').focus();
  });
  
  $('.input-focus-end').on('click', function() {
	$('#enter-end-date').focus();
  });
  
  /* Start datepicker for start-date */
  var date_input=$('input[name="start-date"]'); /* Search for the execution of input start-date */
  var options={
		format: 'dd/mm/yyyy',
		multidate: false,
		keyboardNavigation: false,
		forceParse: false,
		daysOfWeekHighlighted: "0,6",
		autoclose: true,
		todayHighlight: true
  };
  date_input.datepicker(options);
  /* End datepicker for start-date */
})