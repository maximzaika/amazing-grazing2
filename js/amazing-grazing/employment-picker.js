/*!
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Description:
 *  - requested by employment-statistics.php upon load and when user selected the employment type
 *  - contains functions:
 *    * specialToHTML(str): converts special chars "&#47" to "/" to make it a tableau URL
 *    * placeGraph(div_id,img_src,o_h_url,o_name_val,o_static_url,licence_text,licence_url): receives from selectEmploymentType()
 *                 the graph content and its license, and creates the graph in HTML format, resizes it, and insert the source
 *    * selectEmploymentType(): identifies which type of employment user selected and sends it to placeGraph()
 *    * selectEmployment: uses .ajax() that calls php/employment-card-POST.php server file to receive card content from the database
 *
 * Pre-condition:
 *  - page must be loading OR user must select different employment type
 *
 *
 * Return:
 *  - updates graph & card content
*/

$(function(){
	/* 
		Description: converts special chars "&#47" to "/" to make it a tableau URL
		Pre-condition:
          - must be called by placeGraph()
		  - must be called the .ajax() triggered by the button "SHOW GRAPH" with id "hide-graph"
		Attributes:
		  - str: string sent by the .ajax() retrieved from the database table
		Post-condition
		  - replaces "&#47" withj "/"
		Return:
		  - str.replaceAll("&#47;", "/")
	*/
	function specialToHTML(str) {
		return str.replaceAll("&#47;", "/");
	}
	
    /* 
		Description: converts special chars "&#47" to "/" to make it a tableau URL
		Pre-condition:
          - must be called by placeGraph()
		  - must be called the .ajax() triggered by the button "SHOW GRAPH" with id "hide-graph"
		Attributes:
		  - div_id: id of the tableau graph
		  - img_src: img source of the tableau graph
		  - o_h_url: URL of the tableau graph
		  - o_name_val: name value of the tableau graph
		  - o_name_val: static url of the tableau graph
		  - licence_text: text of the license that goes below the graph
		  - licence_url: url of the license that goes inside the licence_text
		Post-condition
		  - must be called by selectEmploymentType()
          - container with id "tableau-chart" where graph goes must be on the page
		Return:
		  - none, visually replaces "tableau-chart" and "reference" ids
	*/
	function placeGraph(div_id,img_src,o_h_url,o_name_val,o_static_url,licence_text,licence_url) {
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
		
		/* Licence content */
		$("#reference").empty();
		var licence_add = '<h5 class="text-center">Source: <i><u><b><a href="'+licence_url+'">'+licence_text+'</a></u></b></i></h5>'
		document.getElementById("reference").innerHTML += licence_add; // add to the webpage
		
		/* Trigger the year modification */ 
		var divElement = document.getElementById(div_id);                    
		var vizElement = divElement.getElementsByTagName('object')[0]; 
		
		if (divElement.offsetWidth > 1000) {
			vizElement.style.width='100%';
			vizElement.style.height=(divElement.offsetWidth*0.5)+'px';
		} else if (divElement.offsetWidth > 800) {
			vizElement.style.width='100%';
			vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
		} else if (divElement.offsetWidth > 500) {
			vizElement.style.width='100%';
			vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
		
		} else {
			vizElement.style.width='100%';
			vizElement.style.height=(divElement.offsetWidth*2.4)+'px';//'977'+'px';
		}
					
		var scriptElement = document.createElement('script');      
		scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';   
		vizElement.parentNode.insertBefore(scriptElement, vizElement);
	}
	
	/* 
		Description: stores the content of the tableau graph & send this content to placeGraph()
		Pre-condition:
          - must be called by placeGraph()
		  - must be called the .ajax() triggered by the button "SHOW GRAPH" with id "hide-graph"
		Attributes:
		  - active_id: currently active id
		  - e_beef: str of e-beef
		  - e_dairy: str of e-dairy
		  - e_sheep: str of e-sheep
		Post-condition
		  - compare active_id with the e_beef, e_dairy, or e_sheep to decide which employment is selected
          - sened requst with the data to placeGraph() to initiate graph creation
		Return:
		  - none
	*/
	function selectEmploymentType(active_id, e_beef, e_dairy, e_sheep) {
		if (active_id == e_beef) {
			var div_id = 'viz1600264742712';
			var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fa&#47;farmer&#47;Dashboard1&#47;1_rss.png';
			var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
			var o_name_val = 'farmer&#47;Dashboard1';
			var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fa&#47;farmer&#47;Dashboard1&#47;1.png';
			var licence_text = "The Commonwealth of Australia, Beef Cattle Farmers 2016"
			var licence_url = "https://joboutlook.gov.au/occupations/beef-cattle-farmers?occupationCode=121312"
			placeGraph(div_id,img_src,o_h_url,o_name_val,o_static_url,licence_text,licence_url);
		} else if (active_id == e_dairy) {
			var div_id = 'viz1600264972873';
			var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fa&#47;farmer&#47;Dashboard2&#47;1_rss.png';
			var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
			var o_name_val = 'farmer&#47;Dashboard2';
			var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fa&#47;farmer&#47;Dashboard2&#47;1.png';
			var licence_text = "The Commonwealth of Australia, Dairy Cattle Farmers 2016"
			var licence_url = "https://joboutlook.gov.au/occupations/dairy-cattle-farmers?occupationCode=121313"
			placeGraph(div_id,img_src,o_h_url,o_name_val,o_static_url,licence_text,licence_url);
		} else { //e-sheep
			var div_id = 'viz1600265161856';
			var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fa&#47;farmer&#47;Dashboard3&#47;1_rss.png';
			var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
			var o_name_val = 'farmer&#47;Dashboard3';
			var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;fa&#47;farmer&#47;Dashboard3&#47;1.png';
			var licence_text = "The Commonwealth of Australia, Sheep Farmers 2016"
			var licence_url = "https://joboutlook.gov.au/occupations/sheep-farmers?occupationCode=121322"
			placeGraph(div_id,img_src,o_h_url,o_name_val,o_static_url,licence_text,licence_url);
		}
	}
	
	var executeCarousel=0; // 0 execute initially, 1 execute after updating filters
	var owl = $('.carousel-services');
	
	/* 
		Description: uses .ajax() that calls php/employment-card-POST.php server file to receive card content from the database
		Pre-condition:
          - employment type with the class "select-employment" must be selected to trigger this function
	      - container with id "tableau-chart" must be on the page (this is where graph will go)
		Attributes:
		  - none
		Post-condition
		  - identifies the id of the clicked employment
          - calls a request to selectEmploymentType() to initiate graph creation with selected graph content
          - resize card containers to match the height of all the containers
          - executes/restarts owlCarousel each time user makes an upda
		Return:
		  - server error
          - card content
        Improvement can be done:
          - store the graphs in the db instead
	*/
	var selectEmployment = function() {
		var active_id = $(this).attr("id");
		
		$("#tableau-chart").empty(); // remove current graph
		
		var e_beef = 'e-beef';
		var e_dairy = 'e-dairy';
		var e_sheep = 'e_sheep';
		
		selectEmploymentType(active_id, e_beef, e_dairy, e_sheep);
		
		$.ajax({
				url: 'php/employment-card-POST.php',
				type: "POST",
				dataType: 'json',
				data: {active: active_id},
				success: function (data) {					
					$("#cards-data").empty();
					document.getElementById('cards-data').innerHTML = data.card;
					
					if (executeCarousel == 1) { // initiate carouse removal after users request to update the data
						owl.data('owl.carousel').destroy(); 
					}
					
					owl.owlCarousel({
						center: false,
						loop: false,
						rewind: true,
						items:1,
						margin: 30,
						stagePadding: 0,
						mouseDrag: false,
						nav: true,
						autoplay: false,
						navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
						responsive:{
							0:{
								items: 1,
								startPosition: 1
							},
							600:{
								items: 2,
								startPosition: 0
							},
							1000:{
								items: 2,
								startPosition: 0
							},
							1600:{
								items: 3,
								startPosition: 0
							}
						}
					});
					
					$('body').append(data.modal); // append modals which execute when user clicks 'view suggestions'
					executeCarousel=1; //checks the first carousel execution
					
					/* Enable number count */
					$('[data-toggle="counter-up"]').counterUp({
						delay: 10,
						time: 500
					});
					
					/* Resize card containers */
					var maxHeight = 0;
					$(".community-text").each(function(){
						maxHeight = Math.max(maxHeight, $(this).height());  
					});
					$(".community-text").height(maxHeight);
					
					var maxHeight = 0;
					$(".card-height").each(function(){
						maxHeight = Math.max(maxHeight, $(this).height());  
					});
					$(".card-height").height(maxHeight);
					
					
				},
				error: (error) => {
					console.log(JSON.stringify(error));
				}
		});
		
	}
	
	$(".select-employment").click(selectEmployment);
});