$(function(){
	/* This function rounds large values and added bil, mil, etc. 
	   based on the value */
	function readNumber(nStr) {
		if (nStr > 1000000000000) {
			nStr = Math.round(nStr/1000000000000 * 100)/100;
			//console.log('proper number > ' + nStr);
			return [nStr, ' tril'];
		} else if (nStr > 1000000000) {
			nStr = Math.round(nStr/1000000000 * 100)/100;
			return [nStr, ' bil'];
		} else if (nStr > 1000000) {
			nStr = Math.round(nStr/1000000 * 100)/100;
			return [nStr, ' mil'];
		} else if (nStr > 1000) {
			nStr = Math.round(nStr/1000 * 100)/100;
			return [nStr, ' thousand'];
		}
	}
	
	/* This function decides what content needs to be sent to the client */
	function contentHTML(icon, title, curVal, year, remainVal){
		icon_same = "fa-dot-circle-o";
		icon_good = "fa-arrow-circle-up";
		icon_bad = "fa-arrow-circle-down";
		
		selectIcon = ""
		if (title.includes("Sheep") || title.includes("Wool") || title.includes("Beef") || title.includes("Dairy") || title.includes("Milk") || title.includes("Meat")) {
			if (readNumber(remainVal)[0] < readNumber(curVal)[0]) {
				selectIcon = icon_bad;
			} else if (readNumber(remainVal)[0] == readNumber(curVal)[0]) {
				selectIcon = icon_same;
			} else { // good
				selectIcon = icon_good;
			}
		}
		
		if (title.includes("Land")) {
			if (readNumber(remainVal)[0] > readNumber(curVal)[0]) {
				selectIcon = icon_bad;
			} else if (readNumber(remainVal)[0] == readNumber(curVal)[0]) {
				selectIcon = icon_same;
			} else { // good
				selectIcon = icon_good;
			}
		}
		
		
		var content =   '<div id="animate-in" style="padding-bottom:40px;" class="col-xs-6 col-sm-6 col-md-4 d-flex align-items-stretch animated fadeInLeft">'+
							'<div class="services text-center" style="padding-bottom: 10px;">'+
								'<div class="icon d-flex justify-content-center align-items-center">'+
									'<span class="'+icon+'"></span>'+
								'</div>'+
								
								'<div class="text">'+
									'<h4><b>'+title+'</b></h4>'+
									'<hr>'+
									'<div class="container">'+
										'<div class="row">'+
											'<div class="col-md-12">'+
												'<h4><b>2016</b></h4>'+
												'<h5><i class="fa '+icon_same+'" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">'+ readNumber(curVal)[0] +'</span>'+readNumber(curVal)[1]+'</h5>'+
											'</div>'+
											'<div class="col-md-12">'+
												'<h4><b>' + year + '</b></h4>'+
												'<h5><i class="fa '+selectIcon+'" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">'+ readNumber(remainVal)[0] +'</span>'+readNumber(remainVal)[1]+'</h5>'+
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
				data: {receivedYear: year},
				success: function (data) {
					/* QTY */
					var latestYr = data.latestYr * 1000000; // latest livestock number - qty
					var selYr = data.selYr * 1000000; // selected livestock number - qty
					
					/* Dairy milk */
					var latestRemainMilk = latestYr * 28 * (10 * (30*10)); //latest year milk - in ltr
					var selRemainMilk = selYr * 28 * (10 * (30*10)); // selected year milk - in ltr
					
					/* Cattle beef */
					var latestRemainMeat = latestYr * (544.3 * 0.417); //latest year meat - in kg
					var selRemainMeat = selYr * (544.3 * 0.417); // selected year meat - in kg
					
					/* land use */
					var latestLandBeef = latestYr * 326.21; //latest year meat - in m^2
					var remainLandBeef = selYr * 326.21; //latest year meat - in m^2
					
					var latestDairyBeef = latestYr * 43.24; //latest year meat - in m^2
					var remainDairyBeef = selYr * 43.24; //latest year meat - in m^2
					
					var latestLandSheep = latestYr * 369.81; //latest year meat - in m^2
					var remainLandSheep = selYr * 369.81; //latest year meat - in m^2
					
					/* icons */
					var icons = ['flaticon-livestock', 'flaticon-milk', 'flaticon-meat', 'flaticon-sheep', 'flaticon-region'];
					var title = ['Beef in', 'Dairy in', 'Sheeps in', 'Milk in', 'Meat in', 'Land use in'];
					
					/* HTML content */				 
					
					if (check_active == "true false false false") {
						var beefQTY = contentHTML(icons[0], title[0], latestYr, year, selYr);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var beefLandUse = contentHTML(icons[4], title[5], latestLandBeef, year, remainLandBeef);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY + beefLandUse;
					} else if (check_active == "false true false false") {
						var dairyQTY = contentHTML(icons[0], title[1], latestYr, year, selYr); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var dairyLandUse = contentHTML(icons[4], title[5], latestDairyBeef, year, remainDairyBeef);
						document.getElementById("prediction-data").innerHTML = dairyQTY + milkQTY + dairyLandUse;
					} else if (check_active == "false false true false") {
						var sheepQTY = contentHTML(icons[3], title[2], latestYr, year, selYr); 			 
						var sheepLandUse = contentHTML(icons[4], title[5], latestLandSheep, year, remainLandSheep);
						document.getElementById("prediction-data").innerHTML = sheepQTY + sheepLandUse;
					} else if (check_active == "true false true false") {
						var totalLatestLand = latestLandBeef+latestLandSheep;
						var totalRemainLand = remainLandBeef+remainLandSheep;
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr, year, selYr);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr, year, selYr);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				sheepQTY + totalLAndUse;
					} else if (check_active == "true true false false") {
						var totalLatestLand = latestLandBeef+latestDairyBeef;
						var totalRemainLand = remainLandBeef+remainDairyBeef;
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr, year, selYr);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var dairyQTY = contentHTML(icons[0], title[1], latestYr, year, selYr); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				dairyQTY + milkQTY +
																				totalLAndUse;
					} else if (check_active == "false true true false") { 
						var totalLatestLand = latestLandBeef+latestLandSheep;
						var totalRemainLand = remainLandBeef+remainLandSheep;
						
						var dairyQTY = contentHTML(icons[0], title[1], latestYr, year, selYr); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr, year, selYr);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						document.getElementById("prediction-data").innerHTML =  dairyQTY + milkQTY +
																				sheepQTY + totalLAndUse;
					} else if (check_active == "false false false true") {
						
					} else { // true true true false
						var totalLatestLand = latestLandBeef+latestDairyBeef+latestLandSheep;
						var totalRemainLand = remainLandBeef+remainDairyBeef+remainLandSheep;
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr, year, selYr);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat);
						var dairyQTY = contentHTML(icons[0], title[1], latestYr, year, selYr); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr, year, selYr); 			 
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				dairyQTY + milkQTY +
																				sheepQTY + totalLAndUse;
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