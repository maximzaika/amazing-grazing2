$(document).ready(function(){
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