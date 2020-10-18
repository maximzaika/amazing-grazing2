$(function(){
	/* Converts special characters into HTML readable format 
	   Returns: converted string */
	function specialToHTML(str) {
		return str.replaceAll("&#47;", "/");
	}
	
	/* Counts active / intective buttons. 
	   Returns: number of active buttons */
	function checkActiveBtn(arr, fnc) {
		var countActive = 0;
		for (i = 0; i < 4; i++) {
			if ($(arr[i]).hasClass(fnc)) { // increment the count to know active only
				countActive++;
			}
			
		}
		
		return countActive;
	}
	
	/* Identifies active and inactive buttons.
	   Returns: none instead pushes to HTML */
	var selectLivestock = function() {
		var livestock_id = $(this).attr("id"); /* get the id of the clicked button */
		var id = "#" + livestock_id;
		
		var class_on  = 'btn-amazing-livestock-on';
		var class_off = 'btn-amazing-livestock-off';
		
		//var txtContent = document.querySelector(id).textContent;
		
		if (livestock_id.substr(0,10) == "livestock_") { // check whether clicked button is reletated to livestock
			var checkActive = [];
			var buttons = ['#livestock_beef', '#livestock_dairy', '#livestock_sheep', '#livestock_total'];

			var length = livestock_id.length; // get length of the livestock
			var select_stock = id.substr(11, length); // display name only eg: beef, dairy, sheep, total
			
			// if total is selected, then others cannot be selected
			if (select_stock == 'total') { 
				$(buttons[0]).removeClass(class_on);
				$(buttons[1]).removeClass(class_on);
				$(buttons[2]).removeClass(class_on);
				
				$(buttons[0]).addClass(class_off);
				$(buttons[1]).addClass(class_off);
				$(buttons[2]).addClass(class_off);
			}
			
			/* Identify whether the selected id is active or not. If it is active
			   then need to deactivate it, otherwise it needs to be reactivated.
			   
			   Note: total cannot be active at the same time with others */
			if ($(id).hasClass(class_on)) { // Change active to inactive class		
				// if others selected, then total cannot be selected
				if ((id != buttons[3]) && $(buttons[3]).hasClass(class_on)) { 
					$(buttons[3]).removeClass(class_on);
					$(buttons[3]).addClass(class_off);
				}

				// Change active to inactive class 
				$(id).removeClass(class_on);
				$(id).addClass(class_off);
				
				// Check how many buttons are currently active
				countActive = checkActiveBtn(buttons, class_on);
			} else { // Change inactive to active class 
				// if others are selected, then total cannot be selected
				if ((id != buttons[3]) && $(buttons[3]).hasClass(class_on)) {
					$(buttons[3]).removeClass(class_on);
					$(buttons[3]).addClass(class_off);
				}
				
				// Change active to inactive class 
				$(id).removeClass(class_off);
				$(id).addClass(class_on);
				
				// Check how many buttons are currently active
				countActive = checkActiveBtn(buttons, class_on);
			}
			
			/* Checks whether at least 1 button is active. If user tries to deselect 
			   all the buttons, then the system needs to trigger error */
			if (countActive == 0) { // if no active buttons, then activate the button back and trigger notification
				$(id).removeClass(class_off);
				$(id).addClass(class_on);
				
				//$("#selection-error").modal(); // trigger notification
				var x = document.getElementById("update-notification-bad");
				x.className = "show";
				setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
			} else { // if active buttons then proceed
				var yearContent = document.getElementById("drop-year").textContent; // Currently active year
				var selectedYear = "#y_"+yearContent;
				$(selectedYear).trigger("click"); 
			}
		}
	}
	
	$(".update-livestock").click(selectLivestock);
});