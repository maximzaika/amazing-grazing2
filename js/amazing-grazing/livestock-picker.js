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
			console.log('test > ' + arr[i]);
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
				console.log('id selected 2  > ' + id);
				console.log('total active 2 > ' + $(buttons[3]).hasClass(class_on));
				
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
				
				$("#selection-error").modal(); // trigger notification
			} else { // if active buttons then proceed
				for (i = 0; i < 4; i++) {
					checkActive.push($(buttons[i]).hasClass(class_on));
				}
				
				$("#tableau-chart").empty(); // remove active chart
				
				check_active = checkActive[0] + " " + checkActive[1] + " " + checkActive[2] + " " + checkActive[3];
				console.log('check active > ' + check_active);
				
				/*
				false false false false
				 - shows error preventing the user from deselecting all the graphs


				(beef) (dairy) (sheep) (total)
				true   false   false    false
				false  true    false    false
				false  false   true     false
				true   false   true     false
				true   true    false    false
				false  true    true     false
				
				true   true    true     false 
				
				false  false   false    true
				 - No other options allowed together with total
				*/
				
				if (check_active == "true false false false") { // beef cattle - working
					var div_id = 'viz1599650978312';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ca&#47;cattlenumbers&#47;BeefCattleNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'cattlenumbers&#47;BeefCattleNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ca&#47;cattlenumbers&#47;BeefCattleNumbersinAustraliafrom1973to2016&#47;1.png';
				} else if (check_active == "false true false false") { // dairy cattle - working
					var div_id = 'viz1599661488462';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattlenumbers-greenline&#47;DairyCattleNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'dairycattlenumbers-greenline&#47;DairyCattleNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattlenumbers-greenline&#47;DairyCattleNumbersinAustraliafrom1973to2016&#47;1.png';
				} else if (check_active == "false false true false") { // sheep - working
					var div_id = 'viz1599651184552';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheepnumbers-greenline&#47;SheepNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'sheepnumbers-greenline&#47;SheepNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheepnumbers-greenline&#47;SheepNumbersinAustraliafrom1973to2016&#47;1.png';
				} else if (check_active == "true false true false") { // beef cattle & sheep - working
					var div_id = 'viz1599652366751';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep&#47;BeefCattleandSheepNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'beefcattleandsheep&#47;BeefCattleandSheepNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep&#47;BeefCattleandSheepNumbersinAustraliafrom1973to2016&#47;1.png';
				} else if (check_active == "true true false false") { // beef & dairy cattle - working
					var div_id = 'viz1599662791854';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleanddiarycattle&#47;BeefCattleandDairyCattleNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'beefcattleanddiarycattle&#47;BeefCattleandDairyCattleNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleanddiarycattle&#47;BeefCattleandDairyCattleNumbersinAustraliafrom1973to2016&#47;1.png';
				} else if (check_active == "false true true false") { // dairy cattle & sheep - working
					var div_id = 'viz1599663014296';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;di&#47;diarycattleandsheep&#47;DairyCattleandSheepNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'diarycattleandsheep&#47;DairyCattleandSheepNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;di&#47;diarycattleandsheep&#47;DairyCattleandSheepNumbersinAustraliafrom1973to2016&#47;1.png';
				} else if (check_active == "false false false true") { // total numbers - working					
					var div_id = 'viz1599651273179';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestocknumbers-greenline&#47;TotalLivestockNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'totallivestocknumbers-greenline&#47;TotalLivestockNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestocknumbers-greenline&#47;TotalLivestockNumbersinAustraliafrom1973to2016&#47;1.png';
				} else { // true true true - beef & dairy cattle, & sheep - working
					var div_id = 'viz1599652501574';
					var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;mu&#47;multiplelivestock&#47;LivestockNumbersinAustraliafrom1973to2016&#47;1_rss.png';
					var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
					var o_name_val = 'multiplelivestock&#47;LivestockNumbersinAustraliafrom1973to2016';
					var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;mu&#47;multiplelivestock&#47;LivestockNumbersinAustraliafrom1973to2016&#47;1.png';
				}
			}
			
			
			/* Add custom graph to the webpage based on user selection */
			// add div
			var div = document.createElement('div');
			div.classList.add('tableauPlaceholder');
			div.setAttribute('id', div_id);
			div.setAttribute('style', 'position: relative; width:100%;');
			
			// add noscript
			var noscript = document.createElement('noscript');
			div.appendChild(noscript); // add to element
			
				// add a href
				var noscript_a = document.createElement('a');
				noscript_a.setAttribute('href', '#');
				noscript.appendChild(noscript_a);
			
					// add img
					var noscript_img = document.createElement('img');
					noscript_img.setAttribute('alt', ' ');
					noscript_img.setAttribute('src', specialToHTML(img_src));
					noscript_img.setAttribute('style', 'border: none');
					noscript_a.appendChild(noscript_img);
			
			// add object
			var table_object = document.createElement('object');
			table_object.classList.add('tableauViz');
			table_object.setAttribute('style', 'display:none;');
			div.appendChild(table_object);
			
				// add params - host_url
				var o_host_url = document.createElement('param');
				o_host_url.setAttribute('name', 'host_url');
				o_host_url.setAttribute('value', o_h_url);
				table_object.appendChild(o_host_url);
				
				// add params - embed_code_version
				var o_embed_code_version = document.createElement('param');
				o_embed_code_version.setAttribute('name', 'embed_code_version');
				o_embed_code_version.setAttribute('value', '3');
				table_object.appendChild(o_embed_code_version);
				
				// add params - site_root
				var o_site_root = document.createElement('param');
				o_site_root.setAttribute('name', 'site_root');
				o_site_root.setAttribute('value', '');
				table_object.appendChild(o_site_root);
				
				// add params - name
				var o_name = document.createElement('param');
				o_name.setAttribute('name', 'name');
				o_name.setAttribute('value', specialToHTML(o_name_val));
				table_object.appendChild(o_name);
				
				// add params - tabs
				var o_tabs = document.createElement('param');
				o_tabs.setAttribute('name', 'tabs');
				o_tabs.setAttribute('value', 'no');
				table_object.appendChild(o_tabs);
				
				// add params - toolbar
				var o_toolbar = document.createElement('param');
				o_toolbar.setAttribute('name', 'toolbar');
				o_toolbar.setAttribute('value', 'yes');
				table_object.appendChild(o_toolbar);
				
				// add params - static_image
				var o_static_image = document.createElement('param');
				
				o_static_image.setAttribute('name', 'static_image');
				o_static_image.setAttribute('value', specialToHTML(o_static_url));
				table_object.appendChild(o_static_image);
				
				// add params - animate_transition
				var o_animate_transition = document.createElement('param');
				o_animate_transition.setAttribute('name', 'animate_transition');
				o_animate_transition.setAttribute('value', 'yes');
				table_object.appendChild(o_animate_transition);
				
				// add params - display_static_image
				var o_display_static_image = document.createElement('param');
				o_display_static_image.setAttribute('name', 'display_static_image');
				o_display_static_image.setAttribute('value', 'yes');
				table_object.appendChild(o_display_static_image);
				
				// add params - display_spinner
				var o_display_spinner = document.createElement('param');
				o_display_spinner.setAttribute('name', 'display_spinner');
				o_display_spinner.setAttribute('value', 'yes');
				table_object.appendChild(o_display_spinner);
				
				// add params - display_overlay
				var o_display_overlay = document.createElement('param');
				o_display_overlay.setAttribute('name', 'display_overlay');
				o_display_overlay.setAttribute('value', 'yes');
				table_object.appendChild(o_display_overlay);
				
				// add params - display_count
				var o_display_count = document.createElement('param');
				o_display_count.setAttribute('name', 'display_count');
				o_display_count.setAttribute('value', 'yes');
				table_object.appendChild(o_display_count);
				
				// add params - language
				var o_language = document.createElement('param');
				o_language.setAttribute('name', 'language');
				o_language.setAttribute('value', 'en');
				table_object.appendChild(o_language);
				
				// add params - filter
				var o_filter = document.createElement('param');
				o_filter.setAttribute('name', 'filter');
				o_filter.setAttribute('value', 'publish=yes');
				table_object.appendChild(o_filter);
			
			document.getElementById("tableau-chart").appendChild(div); // add to the webpage
			
			/* Trigger the year modification */ 
			var yearContent = document.getElementById("drop-year").textContent;
			var selectedYear = "#y_"+yearContent;
			console.log('selectedYear > ' + selectedYear)
			$(selectedYear).trigger("click");
			
			/* Control tableau execution */
			var divElement = document.getElementById(div_id);                    
			var vizElement = divElement.getElementsByTagName('object')[0];                    
			if (divElement.offsetWidth > 700) {
				vizElement.style.width='100%';
				vizElement.style.height=(500*0.75)+'px';
			} else {
				vizElement.style.width='100%';
				vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
			}                   
			var scriptElement = document.createElement('script');                    
			scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
			vizElement.parentNode.insertBefore(scriptElement, vizElement); 
			
			
		}
	}
	
	$(".update-livestock").click(selectLivestock);
});