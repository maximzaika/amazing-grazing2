/* JavasScript contains feedback feature settings */

$(function() {
	
	$("#feedback-form form").on('submit', function(event) {
		event.preventDefault();
		var $form = $(this);
		
		/* Count how many stars are currently checked */
		cStars = 5;
		for (i=1; i<6; i++) {
			if ($('#rate-'+i).attr('class').includes('unchecked')) {
				cStars--;	
			}
		}
		
		var form_text = $('#form-text').val();

		$.ajax({
			type: $form.attr('method'),
			cache: false,
			url: 'php/feedback.php',
			data: {stars: cStars,
				   feedback: form_text},
			success: function(data) {
				console.log(data);
				$('#form-text').val('');
			}, 
			error: (error) => {
				console.log(JSON.stringify(error));
			}
		});
		
		
	});
  
	/* Star control */
	var list=['rate-1','rate-2','rate-3','rate-4','rate-5'];
	list.forEach(function(element) {
		document.getElementById(element).addEventListener('click', function(){
			var cls = document.getElementById(element).className;
			for (i=1; i<=5; i++) {
				if ((element == ('rate-'+i))) {
					for (j=i; j>0; j--) { // check the clicked star and everything before
						document.getElementById('rate-'+j).classList.remove('unchecked');
						document.getElementById('rate-'+j).classList.add('checked');
					}
					
					for (j=i+1; j<=5; j++) { // uncheck everything after the clicked star
						document.getElementById('rate-'+j).classList.remove('checked');
						document.getElementById('rate-'+j).classList.add('unchecked');
					}
				}
				
			}
		});
	});
});


