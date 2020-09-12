$(function(){
	/* This function rounds large values and added bil, mil, etc. 
	   based on the value */
	function readNumber(nStr, title) {
		if (title.includes("QTY")) {
			word = "";
		} else if (title.includes("Beef") || title.includes("Wool")) {
			word = " KG";
		} else if (title.includes("Milk")) {
			word = ' L';
		} else if (title.includes("Yarn")) {
			word = ' KM';
		} else {
			word = ' M<sup>2</sup>';
		}
		
		if (nStr > 1000000000000) {
			nStr = Math.round(nStr/1000000000000 * 100)/100;
			return [nStr, ' tril' + word];
		} else if (nStr > 1000000000) {
			nStr = Math.round(nStr/1000000000 * 100)/100;
			return [nStr, ' bil' + word];
		} else if (nStr > 1000000) {
			nStr = Math.round(nStr/1000000 * 100)/100;
			return [nStr, ' mil' + word];
		} else if (nStr > 1000) {
			nStr = Math.round(nStr/1000 * 100)/100;
			return [nStr, ' thousand' + word];
		} else {
			nStr = 0;
			return [nStr, ''];
		}
	}
	
	/* This function decides what content needs to be sent to the client */
	function contentHTML(icon, title, curVal, year, remainVal){
		icon_same = "fa-dot-circle-o";
		icon_good = "fa-arrow-circle-up";
		icon_bad = "fa-arrow-circle-down";

		selectIcon = ""
		if (title.includes("Sheep") || title.includes("Livestock") || title.includes("Wool") || title.includes("Yarn") || title.includes("Beef") || title.includes("Dairy") || title.includes("Milk") || title.includes("Meat")) {
			if (readNumber(remainVal, title)[0] < readNumber(curVal, title)[0]) {
				selectIcon = icon_bad;
			} else if (readNumber(remainVal, title)[0] == readNumber(curVal, title)[0]) {
				selectIcon = icon_same;
			} else { // good
				selectIcon = icon_good;
			}
		}
		
		if (title.includes("Land")) {
			if (readNumber(remainVal, title)[0] > readNumber(curVal, title)[0]) {
				selectIcon = icon_bad;
			} else if (readNumber(remainVal, title)[0] == readNumber(curVal, title)[0]) {
				selectIcon = icon_same;
			} else { // good
				selectIcon = icon_good;
			}
		}
		
		
		var content =   '<div id="animate-in" style="padding-bottom:40px;" class="col-xs-12 col-sm-12 col-md-6 d-flex align-items-stretch animated fadeInLeft">'+
							'<div class="services text-center" style="padding-bottom: 10px;">'+
								'<div class="icon d-flex justify-content-center align-items-center">'+
									'<span class="'+icon+'"></span>'+
								'</div>'+
								
								'<div class="text">'+
									'<h4><b>'+title+'</b></h4>'+
									'<hr>'+
									'<div class="container">'+
										'<div class="row">'+
											'<div class="col-sm-12 col-md-6">'+
												'<h4><b>2020</b></h4>'+
												'<h5><i class="fa '+icon_same+'" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">'+ readNumber(curVal, title)[0] +'</span>'+readNumber(curVal, title)[1]+'</h5>'+
											'</div>'+
											'<div class="col-sm-12 col-md-6">'+
												'<h4><b>' + year + '</b></h4>'+
												'<h5><i class="fa '+selectIcon+'" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">'+ readNumber(remainVal, title)[0] +'</span>'+readNumber(remainVal, title)[1]+'</h5>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>'+
							'</div>'+
						 '</div>';
		return content;
	}
	
	/* This function 1) changes the value of the year selection button, 
	                 2) retrieves the right data from the database 
					 3) calculates facts based on the formulas
					 4) decides what cards to show based on the filter selection */
	var yearSelection = function() {
		var year_id = $(this).attr("id");
		var prefix_id = year_id.substr(0,2); // get the y_ prefix
		
		var len = year_id.length; // get the length of the received id
		var year = year_id.substr(2, len); // year selected
		
		if (prefix_id == "y_") { // check whether clicked button is related to the year
			document.querySelector('#drop-year').textContent = year;
			
			/* Check active filters */
			var class_on  = 'btn-amazing-livestock-on';
			var checkActive = [];
			var buttons = ['#livestock_beef', '#livestock_dairy', '#livestock_sheep', '#livestock_total'];
			
			for (i = 0; i < 4; i++) {
				checkActive.push($(buttons[i]).hasClass(class_on));
				console.log($(buttons[i]).hasClass(class_on));
			}
			
			check_active = checkActive[0] + " " + checkActive[1] + " " + checkActive[2] + " " + checkActive[3];

			$('#prediction-data').addClass('animated fadeOutRight');  // add fade out animation class
			$('#prediction-data').removeClass('animated fadeOutRight');  // remove fade out animation class
			$("#prediction-data").empty(); // clear the div container
			
			//var insertInDIV = document.getElementById("prediction-data").innerHTML;
			$.ajax({
				url: 'php/prediction_POST.php',
				type: "POST",
				dataType: 'json',
				data: {selectedYear: year},
				success: function (data) {
					var current_beef_qty = data.current_beef_qty;
					var current_dairy_qty = data.current_dairy_qty;
					var current_sheep_qty = data.current_sheep_qty;
					var current_total_qty = data.current_total_qty;
					
					var selected_beef_qty = data.selected_beef_qty;
					var selected_dairy_qty = data.selected_dairy_qty;
					var selected_sheep_qty = data.selected_sheep_qty;
					var selected_total_qty = data.selected_total_qty;
					
					
					/* QTY */
					var latestYr = data.latestYr * 1000000; // latest livestock number - qty
					var selYr = data.selYr * 1000000; // selected livestock number - qty
					
					/* icons */
					var icons = ['flaticon-livestock', 'flaticon-milk', 'flaticon-meat', 'flaticon-sheep', 'flaticon-region', 'flaticon-sheep-1', 'flaticon-wool'];
					var title = ['Beef cattle QTY in', 'Dairy cattle QTY in', 'Sheep QTY in', 'Milk produced in', 'Beef produced in', 'Land used in', 'Wool produced in', 'Yarn produced in', 'Livestock QTY in'];
					
					/* HTML content */				 
					if (check_active == "true false false false") {
						var latestYr = current_beef_qty * 1000000; // latest livestock number - qty
						var selYr = selected_beef_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMeat = latestYr * (544.3 * 0.417); //latest year meat - in kg
						var selRemainMeat = selYr * (544.3 * 0.417); // selected year meat - in kg
						
						var latestLandBeef = latestYr * 326.21; //latest year meat - in m^2
						var remainLandBeef = selYr * 326.21; //latest year meat - in m^2
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr, year, selYr);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var beefLandUse = contentHTML(icons[4], title[5], latestLandBeef, year, remainLandBeef);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY + beefLandUse;
					} else if (check_active == "false true false false") {
						var latestYr = current_dairy_qty * 1000000; // latest livestock number - qty
						var selYr = selected_dairy_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMilk = latestYr * 28 * (10 * (30*10)); //latest year milk - in ltr
						var selRemainMilk = selYr * 28 * (10 * (30*10)); // selected year milk - in ltr
						
						var latestDairyBeef = latestYr * 43.24; //latest year meat - in m^2
						var remainDairyBeef = selYr * 43.24; //latest year meat - in m^2
						
						var dairyQTY = contentHTML(icons[0], title[1], latestYr, year, selYr); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var dairyLandUse = contentHTML(icons[4], title[5], latestDairyBeef, year, remainDairyBeef);
						document.getElementById("prediction-data").innerHTML = dairyQTY + milkQTY + dairyLandUse;
					} else if (check_active == "false false true false") {
						var latestYr = current_sheep_qty * 1000000; //current year sheep - qty
						var selYr = selected_sheep_qty * 1000000; //selected year sheep - qty
						
						var latestWoolProduction = latestYr * 11.3; //current year wool production - in kg
						var selWoolProduction = selYr * 11.3; //selected year wool production - in kg
						
						var latestYarnProduction = latestYr * 11.3 * 16; //current year yarn production - in km
						var selYarnProduction = selYr * 11.3 * 16; //selected year yern production - in km
						
						var latestLandSheep = latestYr * 369.81; //current year land - in m^2
						var remainLandSheep = selYr * 369.81; //selected year sheep - in m^2
						
						var sheepQTY = contentHTML(icons[3], title[2], latestYr, year, selYr); 			 
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction);
						var sheepLandUse = contentHTML(icons[4], title[5], latestLandSheep, year, remainLandSheep);
						document.getElementById("prediction-data").innerHTML = sheepQTY + woolProduction + yarnProduction + sheepLandUse;
					} else if (check_active == "true false true false") {
						var latestYr_beef = current_beef_qty * 1000000; // latest livestock number - qty
						var selYr_beef = selected_beef_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMeat = latestYr_beef * (544.3 * 0.417); //latest year meat - in kg
						var selRemainMeat = selYr_beef * (544.3 * 0.417); // selected year meat - in kg
						
						var latestYr_sheep = current_sheep_qty * 1000000; // latest livestock number - qty
						var selYr_sheep = selected_sheep_qty * 1000000; // selected livestock number - qty
						
						var latestWoolProduction = latestYr_sheep * 11.3; //current year wool production - in kg
						var selWoolProduction = selYr_sheep * 11.3; //selected year wool production - in kg
						
						var latestYarnProduction = latestYr_sheep * 11.3 * 16; //current year yarn production - in km
						var selYarnProduction = selYr_sheep * 11.3 * 16; //selected year yern production - in km
						
						var totalLatestLand = (latestYr_beef * 326.21) + (latestYr_sheep * 369.81);
						var totalRemainLand = (selYr_beef * 326.21) + (selYr_sheep * 369.81);
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr_beef, year, selYr_beef);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr_sheep, year, selYr_sheep);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				sheepQTY + woolProduction +
																				yarnProduction + totalLAndUse;
					} else if (check_active == "true true false false") {
						var latestYr_beef = current_beef_qty * 1000000; // latest livestock number - qty
						var selYr_beef = selected_beef_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMeat = latestYr_beef * (544.3 * 0.417); //latest year meat - in kg
						var selRemainMeat = selYr_beef * (544.3 * 0.417); // selected year meat - in kg
						
						var latestYr_dairy = current_dairy_qty * 1000000; // latest livestock number - qty
						var selYr_dairy = selected_dairy_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMilk = latestYr_dairy * 28 * (10 * (30*10)); //latest year milk - in ltr
						var selRemainMilk = selYr_dairy * 28 * (10 * (30*10)); // selected year milk - in ltr
						
						var totalLatestLand = (latestYr_beef * 326.21)+(latestYr_dairy * 43.24);
						var totalRemainLand = (selYr_beef * 326.21)+(selYr_dairy * 43.24);
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr_beef, year, selYr_beef);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var dairyQTY = contentHTML(icons[0], title[1], latestYr_dairy, year, selYr_dairy); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				dairyQTY + milkQTY +
																				totalLAndUse;
					} else if (check_active == "false true true false") { 
						var latestYr_dairy = current_dairy_qty * 1000000; // latest livestock number - qty
						var selYr_dairy = selected_dairy_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMilk = latestYr_dairy * 28 * (10 * (30*10)); //latest year milk - in ltr
						var selRemainMilk = selYr_dairy * 28 * (10 * (30*10)); // selected year milk - in ltr
						
						var latestYr_sheep = current_sheep_qty * 1000000; // latest livestock number - qty
						var selYr_sheep = selected_sheep_qty * 1000000; // selected livestock number - qty
						
						var latestWoolProduction = latestYr_sheep * 11.3; //current year wool production - in kg
						var selWoolProduction = selYr_sheep * 11.3; //selected year wool production - in kg
						
						var latestYarnProduction = latestYr_sheep * 11.3 * 16; //current year yarn production - in km
						var selYarnProduction = selYr_sheep * 11.3 * 16; //selected year yern production - in km
						
						var totalLatestLand = (latestYr_dairy * 43.24)+(latestYr_sheep * 369.81);
						var totalRemainLand = (selYr_dairy * 43.24)+(selYr_sheep * 369.81);
						
						var dairyQTY = contentHTML(icons[0], title[1], latestYr_dairy, year, selYr_dairy); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr_sheep, year, selYr_sheep);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction);
						document.getElementById("prediction-data").innerHTML =  dairyQTY + milkQTY +
																				sheepQTY + woolProduction +
																				yarnProduction + totalLAndUse;
					} else if (check_active == "false false false true") {
						var latestYr = current_total_qty * 1000000; // latest livestock number - qty
						var selYr = selected_total_qty * 1000000; // selected livestock number - qty
						
						var latestYr_beef = current_beef_qty * 1000000; // latest livestock number - qty
						var selYr_beef = selected_beef_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMeat = latestYr_beef * (544.3 * 0.417); //latest year meat - in kg
						var selRemainMeat = selYr_beef * (544.3 * 0.417); // selected year meat - in kg
						
						var latestYr_sheep = current_sheep_qty * 1000000; // latest livestock number - qty
						var selYr_sheep = selected_sheep_qty * 1000000; // selected livestock number - qty
						
						var latestYr_dairy = current_dairy_qty * 1000000; // latest livestock number - qty
						var selYr_dairy = selected_dairy_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMilk = latestYr_dairy * 28 * (10 * (30*10)); //latest year milk - in ltr
						var selRemainMilk = selYr_dairy * 28 * (10 * (30*10)); // selected year milk - in ltr
						
						var latestWoolProduction = latestYr_sheep * 11.3; //current year wool production - in kg
						var selWoolProduction = selYr_sheep * 11.3; //selected year wool production - in kg
						
						var latestYarnProduction = latestYr_sheep * 11.3 * 16; //current year yarn production - in km
						var selYarnProduction = selYr_sheep * 11.3 * 16; //selected year yern production - in km
						
						var totalLatestLand = (latestYr_beef * 326.21)+(latestYr_dairy * 43.24)+(latestYr_sheep * 369.81);
						var totalRemainLand = (selYr_beef * 326.21)+(selYr_dairy * 43.24)+(selYr_sheep * 369.81);
						
						var totalQTY = contentHTML(icons[0], title[8], latestYr, year, selYr); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						 			 
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction);
						document.getElementById("prediction-data").innerHTML = totalQTY + milkQTY +
																				 beefMeatQTY + woolProduction +
																				yarnProduction + totalLAndUse;
						
					} else { // true true true false
						var latestYr_beef = current_beef_qty * 1000000; // latest livestock number - qty
						var selYr_beef = selected_beef_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMeat = latestYr_beef * (544.3 * 0.417); //latest year meat - in kg
						var selRemainMeat = selYr_beef * (544.3 * 0.417); // selected year meat - in kg
						
						var latestYr_sheep = current_sheep_qty * 1000000; // latest livestock number - qty
						var selYr_sheep = selected_sheep_qty * 1000000; // selected livestock number - qty
						
						var latestYr_dairy = current_dairy_qty * 1000000; // latest livestock number - qty
						var selYr_dairy = selected_dairy_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMilk = latestYr_dairy * 28 * (10 * (30*10)); //latest year milk - in ltr
						var selRemainMilk = selYr_dairy * 28 * (10 * (30*10)); // selected year milk - in ltr
						
						var latestWoolProduction = latestYr_sheep * 11.3; //current year wool production - in kg
						var selWoolProduction = selYr_sheep * 11.3; //selected year wool production - in kg
						
						var latestYarnProduction = latestYr_sheep * 11.3 * 16; //current year yarn production - in km
						var selYarnProduction = selYr_sheep * 11.3 * 16; //selected year yern production - in km
						
						var totalLatestLand = (latestYr_beef * 326.21)+(latestYr_dairy * 43.24)+(latestYr_sheep * 369.81);
						var totalRemainLand = (selYr_beef * 326.21)+(selYr_dairy * 43.24)+(selYr_sheep * 369.81);
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr_beef, year, selYr_beef);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var dairyQTY = contentHTML(icons[0], title[1], latestYr_dairy, year, selYr_dairy); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr_sheep, year, selYr_sheep); 			 
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				dairyQTY + milkQTY +
																				sheepQTY + woolProduction +
																				yarnProduction + totalLAndUse;
					}
					
					/* Enable number count */
					$('[data-toggle="counter-up"]').counterUp({
						delay: 10,
						time: 500
					});
				},
				error: (error) => {
					console.log(JSON.stringify(error));
				}
			});
		}
	};
	
	$(".lvstYearPrediction").click(yearSelection);
});