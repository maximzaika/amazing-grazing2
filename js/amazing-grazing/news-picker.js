/*!
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Description:
 *  - requested by news.php page only if user clicks the following buttons: topic, country, sort
 *
 * Pre-condition:
 *  - user needs to press topic, country, or sort buttons. All have this class and it is listening: "updateNewsJS"
 *  - buttons must have names, for example: Australia, Grazing, Sort Newest to Oldest, for this function to work
 *
 * Post-condition:
 *  - receive the id of the clicked button. Country has "R_", topic has "T_", sort has "S_". These extensions used
 *    to identify what action needs to be taken. Actions mostly the same, but different at the same time.
 *  - Received country like "Australia" gets converted to "au" because that's what gnewsAPI understands.
 *    * list of countries need to be manually modified or short name needs to be set in database (this is not done)
 *  - Clears current news after user's click, and sends a request via .ajax() to gnewsAPI_POST.php to receive new news.
 *
 * Return:
 *  - updates the div id "update-news" with the latest news
*/

$(function(){
	var updateNewsFunc = function() {
		var receivedNewsData = $(this).attr("id"); /* get the id of the clicked button */
		
		if (receivedNewsData.substr(0, 2) == "T_") {
			var length = receivedNewsData.length; /* Get the length of the text so that we know where it ends */
			var topicName = receivedNewsData.substr(2, length);
			document.querySelector('#drop-topic').textContent = topicName; /* Rename the sort button with the selected topic */
			var regionName = document.querySelector('#drop-region').textContent; /* Get info of region name button */
			
			var startDate = document.querySelector('#drop-sort').textContent;
			if (startDate == "Sort Newest to Oldest") { startDate = "new-to-old" } 
			if (startDate == "Sort Oldest to Newest") { startDate = "old-to-new" }
		} 
		
		if (receivedNewsData.substr(0, 2) == "R_") {
			var length = receivedNewsData.length; /* Get the length of the text so that we know where it ends */
			var regionName = receivedNewsData.substr(2, 2); /* Short AU, EU, etc. */
			var regionNameLong = receivedNewsData.substr(5, length); /* Long Australia, Europe. etc */
			document.querySelector('#drop-region').textContent = regionNameLong; /* Rename the sort button with the selected region */
			var topicName = document.querySelector('#drop-topic').textContent; /* Get info of topic name button */
		    
			var startDate = document.querySelector('#drop-sort').textContent;
			if (startDate == "Sort Newest to Oldest") { startDate = "new-to-old" } 
			if (startDate == "Sort Oldest to Newest") { startDate = "old-to-new" }
		}
		
		if (receivedNewsData.substr(0, 2) == "S_") {
			var length = receivedNewsData.length; /* Get the length of the text so that we know where it ends */
			var sortName = receivedNewsData.substr(2, length); /* Select the string up to the end of length ignoring S_ */
			var startDate = sortName; /* Rename the sort button with the selected sort */
			
			/* Rename to proper name for the button */
			if (sortName == "new-to-old") { sortName = "Sort Newest to Oldest" } 
			if (sortName == "old-to-new") { sortName = "Sort Oldest to Newest" }
			document.querySelector('#drop-sort').textContent = sortName;
			
			var topicName = document.querySelector('#drop-topic').textContent; /* Get info of topic name button */
			var regionName = document.querySelector('#drop-region').textContent; /* Get info of region name button */
		}
		
		if (receivedNewsData.substr(0, 5) == "enter") {
			var topicName = document.querySelector('#drop-topic').textContent;
			var regionName = document.querySelector('#drop-region').textContent;
		}
		
		/* Country selection */
		if (regionName == "Australia") { regionName = "au" }
		if (regionName == "Canada") { regionName = "ca" }
		if (regionName == "United Kingdom") { regionName = "uk" }
		if (regionName == "New Zealand") { regionName = "nz" }
		if (regionName == "United States") { regionName = "us" }
		
		$("#update-news").empty(); /*reset the news div*/
		
		$.ajax({
			url: 'php/gnewsAPI_POST.php',
			type: "POST",
			dataType: 'json',
			data: {receivedNewsTopic: topicName,
			       receivedNewsRegion: regionName,
				   receivedNewsStart: startDate},
			success: function (data) {
				
				setTimeout(function() {
					
					var newsDiv = document.getElementById('update-news');
					newsDiv.innerHTML = data.newsHTML;
				}, 250);
			},
			error: (error) => {
				console.log(JSON.stringify(error));
		    }
		});
	};
	
	$(".updateNewsJS").click(updateNewsFunc);
});