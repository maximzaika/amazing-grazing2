$(function(){
	var updateNewsFunc = function() {
		var receivedNewsData = $(this).attr("id"); /* get the id of the clicked button */
		console.log('receivedNewsData > ' + receivedNewsData);
		
		if (receivedNewsData.substr(0, 2) == "T_") {
			var length = receivedNewsData.length;
			var topicName = receivedNewsData.substr(2, length);
			document.querySelector('#drop-topic').textContent = topicName;
			var regionName = document.querySelector('#drop-region').textContent;
			
		} 
		
		if (receivedNewsData.substr(0, 2) == "R_") {
			var length = receivedNewsData.length;
			var regionName = receivedNewsData.substr(2, 2); /* Short AU, EU, etc. */
			var regionNameLong = receivedNewsData.substr(5, length); /* Long Australia, Europe. etc */
			document.querySelector('#drop-region').textContent = regionNameLong;
			var topicName = document.querySelector('#drop-topic').textContent;
		    
		}
		
		if (receivedNewsData.substr(0, 5) == "enter") {
			var topicName = document.querySelector('#drop-topic').textContent;
			var regionName = document.querySelector('#drop-region').textContent;
			
			if (regionName == "Australia") { regionName = "au" }
			if (regionName == "Canada") { regionName = "ca" }
			if (regionName == "Europe") { regionName = "eu" }
			if (regionName == "Russia") { regionName = "ru" }
			if (regionName == "United States") { regionName = "us" }
		}
		
		var startDate = document.getElementById("enter-start-date").value;
		/*var endDate = document.getElementById("enter-end-date").value;*/
		
		
		console.log("topicName  is > " + topicName);
		console.log("regionName is > " + regionName);
		console.log("startDate  is > " + startDate);
		/*console.log("endDate    is > " + endDate);*/
			
		$("#update-news").empty(); /*reset the news div*/
		
		/*$("#drop-topic").empty();*/
		/*$("#drop-region").empty(); */
		
		$.ajax({
			url: 'https://www.amazing-grazing.ml/php/gnewsAPI_POST.php', /* http://localhost/amazing-grazing2/php/gnewsAPI_POST.php */
			type: "POST",
			dataType: 'json',
			data: {receivedNewsTopic: topicName, /* receivedNewsData */
			       receivedNewsRegion: regionName,
				   receivedNewsStart: startDate
				   /*receivedNewsEnd: endDate*/},
			success: function (data) {
				console.log(data.newsHTML);
				var newsDiv = document.getElementById('update-news');
				newsDiv.innerHTML = data.newsHTML;
			},
			error: (error) => {
				console.log(JSON.stringify(error));
		    }
		});
		
		
	};
	
	$(".updateNewsJS").click(updateNewsFunc);
	$("#enter-start-date").change(updateNewsFunc);
	/* $("#enter-end-date").change(updateNewsFunc); */
});