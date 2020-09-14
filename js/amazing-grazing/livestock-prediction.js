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
			return [nStr, ' trillion' + word];
		} else if (nStr > 1000000000) {
			nStr = Math.round(nStr/1000000000 * 100)/100;
			return [nStr, ' billion' + word];
		} else if (nStr > 1000000) {
			nStr = Math.round(nStr/1000000 * 100)/100;
			return [nStr, ' million' + word];
		} else if (nStr > 1000) {
			nStr = Math.round(nStr/1000 * 100)/100;
			return [nStr, ' thousand' + word];
		} else {
			nStr = 0;
			return [nStr, word];
		}
	}
	
	/* Converts special characters into HTML readable format 
	   Returns: converted string */
	function specialToHTML(str) {
		return str.replaceAll("&#47;", "/");
	}
	
	/* Kind of redundant use of this function because it is partially a copy of selectLivestock()
	   function from livestock-picker.js; Originall plan was not make it work this way, but it
	   had to be done and due to time constraint, there is no time to rework another function.
	   This way is literally 5 min compared to another long way.
	   Returns: triggers graph when year is selected */
	function triggerGraph(check_active) {
		$("#tableau-chart").empty(); // remove active chart
		
		var yearContent = document.getElementById("drop-year").textContent; // Currently active year
		
		if (check_active == "true false false false") { // beef cattle - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912357011';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599895069661';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599898084840';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2040&#47;BeefCattleNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattle1973-2040&#47;BeefCattleNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2040&#47;BeefCattleNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903442274';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2050&#47;BeefCattleNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattle1973-2050&#47;BeefCattleNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2050&#47;BeefCattleNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906080745';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2060&#47;BeefCattleNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattle1973-2060&#47;BeefCattleNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2060&#47;BeefCattleNumbersfrom1973to2060&#47;1.png';
			}
		} else if (check_active == "false true false false") { // dairy cattle - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912454818';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2016&#47;DairyCattleNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattle1973-2016&#47;DairyCattleNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2016&#47;DairyCattleNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599895311682';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2030&#47;DairyCattleNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattle1973-2030&#47;DairyCattleNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2030&#47;DairyCattleNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599898453024';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2040&#47;DairyCattleNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattle1973-2040&#47;DairyCattleNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2040&#47;DairyCattleNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903542905';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2050&#47;DairyCattleNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattle1973-2050&#47;DairyCattleNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2050&#47;DairyCattleNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906250101';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2060&#47;DairyCattleNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattle1973-2060&#47;DairyCattleNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattle1973-2060&#47;DairyCattleNumbersfrom1973to2060&#47;1.png';
			}
			
		} else if (check_active == "false false true false") { // sheep - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912662152';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2016&#47;SheepNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'sheep1973-2016&#47;SheepNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2016&#47;SheepNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599895574623';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2030&#47;SheepNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'sheep1973-2030&#47;SheepNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2030&#47;SheepNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599898757146';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2040&#47;SheepNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'sheep1973-2040&#47;SheepNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2040&#47;SheepNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903601515';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheepcattle1973-2050&#47;SheepNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'sheepcattle1973-2050&#47;SheepNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheepcattle1973-2050&#47;SheepNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906317523';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2060&#47;SheepNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'sheep1973-2060&#47;SheepNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2060&#47;SheepNumbersfrom1973to2060&#47;1.png';
			}
		} else if (check_active == "true false true false") { // beef cattle & sheep - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912689002';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2016&#47;BeefCattleandSheepNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattleandsheep1973-2016&#47;BeefCattleandSheepNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2016&#47;BeefCattleandSheepNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599896086683';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2030&#47;BeefCattleandSheepNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattleandsheep1973-2030&#47;BeefCattleandSheepNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2030&#47;BeefCattleandSheepNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599899316416';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2040&#47;BeefCattleandSheepNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattleandsheep1973-2040&#47;BeefCattleandSheepNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2040&#47;BeefCattleandSheepNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903797750';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2050&#47;BeefCattleandSheepNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattleandsheep1973-2050&#47;BeefCattleandSheepNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2050&#47;BeefCattleandSheepNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906486538';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2060&#47;BeefCattleandSheepNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefcattleandsheep1973-2060&#47;BeefCattleandSheepNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattleandsheep1973-2060&#47;BeefCattleandSheepNumbersfrom1973to2060&#47;1.png';
			}
		} else if (check_active == "true true false false") { // beef & dairy cattle - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912787502';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2016&#47;BeefandDairyCattleNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefanddairycattle1973-2016&#47;BeefandDairyCattleNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2016&#47;BeefandDairyCattleNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599896367479';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2030&#47;BeefandDairyCattleNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefanddairycattle1973-2030&#47;BeefandDairyCattleNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2030&#47;BeefandDairyCattleNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599899424475';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2040&#47;BeefandDairyCattleNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefanddairycattle1973-2040&#47;BeefandDairyCattleNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2040&#47;BeefandDairyCattleNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903878806';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2050&#47;BeefandDairyCattleNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefanddairycattle1973-2050&#47;BeefandDairyCattleNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2050&#47;BeefandDairyCattleNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906558615';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2060&#47;BeefandDairyCattleNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'beefanddairycattle1973-2060&#47;BeefandDairyCattleNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefanddairycattle1973-2060&#47;BeefandDairyCattleNumbersfrom1973to2060&#47;1.png';
			}
		} else if (check_active == "false true true false") { // dairy cattle & sheep - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912840034';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2016&#47;DairyCattleandSheepNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattleandsheep1973-2016&#47;DairyCattleandSheepNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2016&#47;DairyCattleandSheepNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599896654921';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2030&#47;DairyCattleandSheepNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattleandsheep1973-2030&#47;DairyCattleandSheepNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2030&#47;DairyCattleandSheepNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599899518417';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2040&#47;DairyCattleandSheepNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattleandsheep1973-2040&#47;DairyCattleandSheepNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2040&#47;DairyCattleandSheepNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903962332';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2050&#47;DairyCattleandSheepNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattleandsheep1973-2050&#47;DairyCattleandSheepNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2050&#47;DairyCattleandSheepNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906664057';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2060&#47;DairyCattleandSheepNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'dairycattleandsheep1973-2060&#47;DairyCattleandSheepNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;da&#47;dairycattleandsheep1973-2060&#47;DairyCattleandSheepNumbersfrom1973to2060&#47;1.png';
			}
		} else if (check_active == "false false false true") { // total numbers - working					
			if (yearContent == '2016') {
				var div_id = 'viz1599912676914';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2016&#47;TotalLivestockNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'totallivestock1973-2016&#47;TotalLivestockNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2016&#47;TotalLivestockNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599895762335';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2030&#47;TotalLivestockNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'totallivestock1973-2030&#47;TotalLivestockNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2030&#47;TotalLivestockNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599898921840';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2040&#47;TotalLivestockNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'totallivestock1973-2040&#47;TotalLivestockNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2040&#47;TotalLivestockNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599903730048';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2050&#47;TotalLivestockNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'totallivestock1973-2050&#47;TotalLivestockNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2050&#47;TotalLivestockNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906379873';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2060&#47;TotalLivestockNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'totallivestock1973-2060&#47;TotalLivestockNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;to&#47;totallivestock1973-2060&#47;TotalLivestockNumbersfrom1973to2060&#47;1.png';
			}
		} else { // true true true false - beef & dairy cattle, & sheep - working
			if (yearContent == '2016') {
				var div_id = 'viz1599912890804';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;li&#47;livestock1973-2016&#47;LivestockNumbersfrom1973to2016&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = 'livestock1973-2016&#47;LivestockNumbersfrom1973to2016';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;li&#47;livestock1973-2016&#47;LivestockNumbersfrom1973to2016&#47;1.png';
			} else if (yearContent == '2020') {
				
			} else if (yearContent == '2030') {
				var div_id = 'viz1599896886527';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2030&#47;LivestockNumbersfrom1973to2030&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = '3livestock1973-2030&#47;LivestockNumbersfrom1973to2030';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2030&#47;LivestockNumbersfrom1973to2030&#47;1.png';
			} else if (yearContent == '2040') {
				var div_id = 'viz1599899633958';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2040&#47;LivestockNumbersfrom1973to2040&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = '3livestock1973-2040&#47;LivestockNumbersfrom1973to2040';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2040&#47;LivestockNumbersfrom1973to2040&#47;1.png';
			} else if (yearContent == '2050') {
				var div_id = 'viz1599904032692';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2050&#47;LivestockNumbersfrom1973to2050&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = '3livestock1973-2050&#47;LivestockNumbersfrom1973to2050';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2050&#47;LivestockNumbersfrom1973to2050&#47;1.png';
			} else { // 2060
				var div_id = 'viz1599906762820';
				var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2060&#47;LivestockNumbersfrom1973to2060&#47;1_rss.png';
				var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
				var o_name_val = '3livestock1973-2060&#47;LivestockNumbersfrom1973to2060';
				var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;3l&#47;3livestock1973-2060&#47;LivestockNumbersfrom1973to2060&#47;1.png';
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
		var divElement = document.getElementById(div_id);                    
		var vizElement = divElement.getElementsByTagName('object')[0]; 
		
		if (divElement.offsetWidth > 700) {
			vizElement.style.width='100%';
			vizElement.style.height=(500*0.75)+'px';
		} else if (divElement.offsetWidth > 320) {
			vizElement.style.width='100%';
			vizElement.style.height=(500)+'px';
		} else {
			vizElement.style.width='100%';
			vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
		}
					
		var scriptElement = document.createElement('script');      
		scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';   
		vizElement.parentNode.insertBefore(scriptElement, vizElement);
	}
	
	/* This function decides what content needs to be sent to the client */
	function contentHTML(icon, title, curVal, year, remainVal, preview, modalTitle, modalText, URL){
		icon_same = "fa-dot-circle-o";
		icon_good = "fa-arrow-circle-up";
		icon_bad = "fa-arrow-circle-down";
		
		icon_reduced = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
		icon_improved = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
		icon_unchanged = '<i class="fa fa-dot-circle-o" aria-hidden="true"></i>';

		selectIcon = ""
		if (title.includes("Sheep") || title.includes("Livestock") || title.includes("Wool") || title.includes("Yarn") || title.includes("Beef") || title.includes("Dairy") || title.includes("Milk") || title.includes("Meat")) {
			if (remainVal < curVal) {
				var changeVal = curVal - remainVal;
				var changeText = icon_reduced + ' Decreased by&nbsp<span data-toggle="counter-up">' + readNumber(changeVal, title)[0] + "</span>" + readNumber(changeVal, title)[1];
				selectIcon = icon_bad;
			} else if (remainVal == curVal, title) {
				selectIcon = icon_same;
				var changeText = icon_unchanged + ' Unchanged';
			} else { // good
				selectIcon = icon_good;
				var changeVal = curVal - remainVal;
				var changeText = icon_improved + ' Improved by&nbsp<span data-toggle="counter-up">' + readNumber(changeVal, title)[0] + "</span>" + readNumber(changeVal, title)[1];
			}
		}
		
		if (title.includes("Land")) {
			if (remainVal > curVal) {
				selectIcon = icon_bad;
				var changeVal = remainVal - curVal;
				var changeText = icon_reduced + ' Reduced by&nbsp<span data-toggle="counter-up">' + readNumber(changeVal, title)[0] + "</span>" + readNumber(changeVal, title)[1];
			} else if (remainVal == curVal) {
				selectIcon = icon_same;
				var changeText = icon_unchanged + ' Unchanged';
			} else { // good
				selectIcon = icon_good;
				var changeVal = curVal - remainVal;
				var changeText = icon_improved + ' Improved by&nbsp<span data-toggle="counter-up">' + readNumber(changeVal, title)[0] + "</span>" + readNumber(changeVal, title)[1];
			}
		}
		
		var randomVal = 'random'+Math.floor(Math.random() * 1000);
		var openModal = randomVal+'_modal';
		/* Added modal to expand the text */
		
		
		var content = '<div style="padding-bottom:40px;" class="col-xs-12 col-sm-12 col-md-6 align-items-stretch animated fadeInLeft">'+
							'<div class="services text-center" style="padding-bottom: 10px;">'+
								'<div class="icon justify-content-center align-items-center">'+
									'<span class="'+icon+'"></span>'+
								'</div>'+
								
								'<div class="text" style="padding-bottom:60px;">'+
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
									'<hr>'+
									'<h5 class="text-center">'+changeText+'</h5>'+
									'<hr>'+
									'<div class="container">'+
										
										'<div class="row">'+		
											'<ul style="margin-bottom:0px;">'; 	
		
		randomArray = [];
		for (i=0;i<modalTitle.length;i++) {
			var randomVal_ = 'random'+Math.floor(Math.random() * 1000);
			var openModal = randomVal_+'_modal';
			randomArray.push(openModal);
			if (i == 0) { // first small preview
				var content = content + '<li><h5 class="text-justify">'+preview[i]+'</h5></li>';
			} 
			
			if (i == 1) { // grazing technique suggestion
				if (URL.includes("techniques.php")) {
					var content = content + '<li><h5 class="text-justify">'+preview[i]+" <a type='button' style='color:#4e9525;cursor:pointer;' href='"+URL+"'><u><b><i>Show techniques</i></b></u></a>"+'</h5></li>';
				} else {
					var content = content + '<li><h5 class="text-justify">'+preview[i]+" <a type='button' style='color:#4e9525;cursor:pointer;' href='"+URL+"'><u><b><i>Show technique</i></b></u></a>"+'</h5></li>';
				}
			}
			
			if (modalTitle[i] != '') {
				$('body').append('<div class="modal fade" id="'+randomArray[i]+'" tabindex="-1" role="dialog" aria-labelledby="'+randomArray[i]+'Label" aria-hidden="true">'+
							'<div class="modal-dialog modal-dialog-centered" role="document">'+
								'<div class="modal-content">'+
									'<div class="modal-header">'+
										'<h5 class="modal-title" id="'+randomArray[i]+'Label"><b>'+modalTitle[i]+'</b></h5>'+
										'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
											'<span aria-hidden="true">&times;</span>'+
										'</button>'+
									'</div>'+
									'<div class="modal-body">'+
										modalText[i] +
									'</div>'+
									'<div class="modal-footer">'+
										'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>');
			}
		}
		
		var content = content + '</ul>'+
					             '<div class="collapse" id="'+randomVal+'">'+
									'<ul>';
									
		for (i=0;i<modalTitle.length;i++) {
			if (modalTitle[i] != '') { // other large expanded previews
				var content = content + '<li><h5 class="text-justify">'+preview[i]+" <a type='button' style='color:#4e9525;cursor:pointer;' data-toggle='modal' data-target='#"+randomArray[i]+"'><u><b><i>Learn more</i></b></u></a>"+'</h5></li>';
			}
		}
		
		var content = content + 				'</ul>'+
											'</div>'+		
										'</div>'+
									'</div>'+
								'</div>'+
								'<a id="'+randomVal+'-animal" class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="collapse" data-target="#'+randomVal+'" aria-expanded="false" aria-controls="'+randomVal+'"><span><i class="fa fa-plus" aria-hidden="true"></i> View suggestions</span></a>'+
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
			}
			
			check_active = checkActive[0] + " " + checkActive[1] + " " + checkActive[2] + " " + checkActive[3];

			$('#prediction-data').addClass('animated fadeOutRight');  // add fade out animation class
			$('#prediction-data').removeClass('animated fadeOutRight');  // remove fade out animation class
			$("#prediction-data").empty(); // clear the div container
			
			$.ajax({
				url: 'php/prediction_POST.php',
				type: "POST",
				dataType: 'json',
				data: {selectedYear: year},
				success: function (data) {
					/* Data retrieved from the DB - predicted data */
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
					
					var patch_burn = "patch-burn.php";
					var rotational = "rotational.php";
					var seasonal = "seasonal.php";
					var techniques = "techniques.php"
					
					/* Data related to each card */
					var preview_beef = ['Maintain balance between protecting grasslands and keeping your beef cattle numbers high.',
									    "Patch-burn grazing technique is adviced to be used.",
										'Burn grassland not only for the beef cattle. Grasslands require planned burning.',
										'Droughts and too much humid negatively affect grasslands and beef cattle.',
										'Just like grasslands, beef cattle is involved in the whole biomass and generates numerous by-products.'];
					var modal_beef_title = ['', 
									   '',
									   'Burn grasslands and increase livestocks',
									   'Keep grasslands fresh',
									   'Beef cattle provides hundreds by-products'];
					var modal_beef_text = ['',
									  '',
									  '<img style="width: 100%;" src="images/livestock_stats/beef-card-1.jpeg" alt="Burn grasslands and increase livestocks"><h5 class="text-justify">Conduct controlled dry season burning to stimulate fresh plant growth to restore calcium to the soil that builds up in the dry grasses. Some species of native plants need occasional fire to thrive, while blazes can also help remove invasive species.</h5><p></p><h5 class="text-justify">Fire is important for grasslands’ existence. They prevent woody plants from spreading and enable the grass to re-grow, becoming thicker, more resilient and healthier. How do grasses survive these fires? They have developed extensive underground systems during the course of evolution, which allow them to burst back to life, stronger than ever before, fairly quickly after a fire.</h5>',
									  '<img style="width: 100%;" src="images/livestock_stats/beef-card-2.jpeg" alt="Keep grasslands fresh"><h5 class="text-justify">All grasslands get a specific amount of yearly rainfall, depending on their exact location in the world. What you didn not know is that if grasslands receive much less rain than ordinarily, it would become a desert, and if it got much more rain than usually, it would eventually turn into a forest. That is also the reason why grasslands are often located between deserts and forests – these nearby areas get less or more rain, and have thus developed into something else.</h5><p><p><h5>provide solution perhaps?</h5>',
									  '<img style="width: 100%;" src="images/livestock_stats/beef-card-3.jpg" alt="Beef cattle provides hundreds by-products"><h5 class="text-justify">Over 98% of the beef animal is used when it is processed. Besides meat and milk, beef cattle provide us with hundreds of important by-products. About 45% of the animal is used for meat and the rest is used for other by-products including leather, china, glue, film, soap, pharmaceuticals, insulin, gelatines, etc. Almost the entire beef animal can be used in some way. From a typical 454-kilogram steer, slightly over 40% of the animal is used for retail beef and the remaining 60% is processed into by-products.</h5>'];
					
					var preview_dairy =    ['Protecting grasslands is important but lack of dairy cattle will lead to lack of milk supply.',
											"Rotational grazing technique is adviced to be used.",
									        'Kangaroos negatively affect grasslands development and dairy cattle.',
											'Just like grasslands, dairy cattle need rest in their life cycle.',
											'Make sure the right grazing technique is used to provide enough food.'];
					var modal_dairy_title = ['',
									        '',
											'Keep kangaroos away from grasslands',
											'Provide enough rest for dairy cattle',
											'Keep dairy cattle fed'];
					var modal_dairy_text =  ['',
									        '',
											"<img style='width: 100%;' src='images/livestock_stats/dairy-card-1.jpeg' alt='Keep kangaroos away from grasslands'><h5 class='text-justify'>Kangaroo numbers need to be controlled due to threatening one of Australia's last remaining original grasslands and endangered livestock. Australian Department of Defence is currently culling hundreds of kangaroos on the outskirts of the capital Canberra that have produced heated discussions and hit international headlines. Australia's iconic animal has multiplied so much over recent years that Canberra has three times as many kangaroos as inhabitants. The situation is particularly critical at two enclosed military sites on the outskirts of the city, which form an ideal refuge for the eastern grey kangaroo (Macropus giganteus)</h5>",
											'<img style="width: 100%;" src="images/livestock_stats/dairy-card-2.jpeg" alt="Provide enough rest for dairy cattle"><h5 class="text-justify">Generally, a cow can produce milk in 9-10 months each year according to pregnancy. Many ranchers run cow-calf operations. The cows are bred to calve in the spring or fall that keeps a herd of cows to produce calves. The natural life expectancy of a cow is twenty years. Some get up to 25 years old. Cows, like our grassland that need certain time to rest and regrowth for healing and better productivity. Therefore, we recommend you take sustainable techniques like rotational grazing and patch-burn to rest the land.</h5>',
											'<img style="width: 100%;" src="images/livestock_stats/dairy-card-3.jpeg" alt="Keep dairy cattle fed"><h5 class="text-justify">A cow, that is milking, eats about 45 kilograms of feed each day. Cows drink a whole bathtub of water in just one day. That’s why cows are considered as the competitive eater and ultimate recyclers. The feed is typically a combination of grass, grain, and a mixture of other ingredients like citrus pulp, almond hulls and cotton seeds. These are items that may otherwise be thrown away. The ingredients, that we cannot eat, can often be nutritious for them. Farmers employ professional animal nutritionists to develop scientifically formulated, balanced, and nutritious diets for their cows.</h5>'];
					
					var preview_milk =    ['Reduction of dairy livestock leads to extreme reduction of milk quantity.',
					                       "Rotational grazing technique is adviced to be used.",
										   'Ensure that suitable grasslands are selected and appropriate grazing techniques are used.',
										   'Two-way effects! Estimate the value of environmental impacts of dairy farming.'];
					var modal_milk_title = ['',
									        '',
											'Maintain grasslands well',
											'Estimate the value of environmental impacts of dairy farming'];
					var modal_milk_text =  ['',
									        '',
											'<img style="width: 100%;" src="images/livestock_stats/milk-card-1.jpeg" alt="Maintain grasslands well"><h5 class="text-justify">Although grass is without a doubt the most important feature of grasslands, it doesn’t grow all the time, at least not in temperate grasslands that are most common in Earth’s mid-latitude, such as America’s prairies and Europe’s steppes.</h5><p></p><h5 class="text-justify">Life in temperate grasslands is forced to survive in two very different seasons: the growing season and the dormant season. While the growing season allows the flora of the grasslands to thrive, the climate is too cold during the dormant season.</h5>',
											'<img style="width: 100%;" src="images/livestock_stats/milk-card-2.jpeg" alt="Estimate the value of environmental impacts of dairy farming"><h5 class="text-justify">The intensification and expansion of dairy farms have contributed to many environmental problems such as the contamination of ground and surface water, insufficient water for irrigation during droughts, excess nutrient losses from farms, larger emissions of greenhouse gases. Permanent grassland farms can generally keep up with fodder-crop farms, even in an intensive production setting. However, extensively operating farms, especially those on permanent grassland, significantly lag behind in productivity.</h5>'];
					
					var preview_sheep =    ['Sheep are the most dominate livestock in Australia and its reduction will negatively affect Australian economy.',
											"Seasonal grazing technique is adviced to be used.",
											'Rabbits can be a cause of decreasing number of sheep.',
											'Sheep are light eaters compared to cattle, but their density is much higher.'];
					var modal_sheep_title = ['',
									        '',
											'Beware of rabbits',
											'High density of sheeps negatively affect grassland'];
					var modal_sheep_text =  ['',
									        '',
											'<img style="width: 100%;" src="images/livestock_stats/sheep-card-1.jpeg" alt="Beware of rabbits"><h5 class="text-justify">Rabbits compete with native animals and domestic livestock for food and shelter, increasing grazing pressure and lowering the land’s carrying capacity.</h5><p></p><h5 class="text-justify">Rabbits act as a food source for introduced predators, which can lead to increased lamb losses and disease prevalence.</h5>',
											'<img style="width: 100%;" src="images/livestock_stats/sheep-card-2.jpeg" alt="High density of sheeps negative affect grassland"><h5 class="text-justify">Large density causes lots of damage to the grass and the plants in the area. Though, sheep are herbivores, which means their diet does not include meat. They typically eat seeds, grass and plants. Some sheep do not need much water. The desert bighorn sheep, for example, gets most of its water from eating plants. Like all ruminants, they have multi-chambered stomachs that are adapted to ferment cellulose before digestion. To completely digest their food, sheep will regurgitate their food into their mouths, rechew and swallow. This regurgitated food is called cud.</h5>'];
					
					var preview_wool =    ['Rapid increase in reduction of wool will eventually lead to depletion, loss of income, and reduction of cloths.',
										   "Seasonal grazing technique is adviced to be used.",
										   'Ensure that grasslands gets enough water to provide nutrients to sheeps.',
										   'Wool is a treasure in Australia because it helps us to win Guinness World Record.'];
					var modal_wool_title = ['',
									        '',
											'Keep grasslands moist',
											'Aussie won the Guinness World Record'];
					var modal_wool_text =  ['',
									        '',
											'<img style="width: 100%;" src="images/livestock_stats/wool-card-1.jpeg" alt="Keep grasslands moist"><h5 class="text-justify">Where there are plants, there also must be moisture in the soil, and grasslands with their various kinds of grasses, shrubbery and even occasional trees are no different. But the relationship of grasslands and rain is a complicated one. All types of grasslands need a certain amount of rain, but then again not too much rain, since that will cause them to transform into something else.</h5><p></p><h5 class="text-justify">How much rain is too much rain? How much is too little? That depends on the type of grassland and its location, but grasslands in general get around 50 to 90 centimetres of annual rainfall. Some grasslands also exist in areas where the annual rainfall exceeds 120 centimetres annually, and some exist in areas where there is as little as 25 centimetres of annual rainfall.</h5>',
											'<img style="width: 100%;" src="images/livestock_stats/wool-card-2.jpeg" alt="Aussie won the Guinness World Record"><h5 class="text-justify">Hilton Barrett who from Australian holds the Guinness World Record for the fastest time to shear a single mature sheep at an amazing 39.31 seconds. The record was set at the Wellington Show 2010 in Wellington, New South Wales on 1 May 2010. Wool fibres are very durable and flexible. Wool fibre can withstand being bent 20,000 times without breaking. In comparison, cotton breaks after 3,000 bends and silk after 2,000 bends. Also, Sheep wool has an incredible, natural UV protection built right in, which helps to keep sheep and lambs from getting sunburnt.</h5>'];
					
					var preview_land =    ['The less land is used - the better it is for Australian grasslands, though it negatively affects people.',
										   "Grazing techniques are adviced to be used.",
										   'Animals, just like humans, are involved in overgrazing the grasslands.',
										   'The right balanced is needed to preserve australian grasslands.'];
					var modal_land_title = ['',
									        '',
											'Animals, just like humans, are cause of overgrazing',
											'Maintain balance in the use of the land'];
					var modal_land_text =  ['',
									        '',
											'<img style="width: 100%;" src="images/livestock_stats/land-card-1.jpeg" alt="Animals, just like humans, are cause of overgrazing"><h5 class="text-justify">Rabbit can cause overgrazing native and sown pastures, leading to loss of plant biodiversity and reduced crop yields. Because they are too much and eat too fast, they are preventing or inhibiting the regeneration of native shrubs and trees by grazing.</h5><p></p><h5 class="text-justify">Moreover, they build warrens and it causes land degradation and erosion, also increasing and spreading invasive weeds. they cause huge damage to our land; numbers need to be controlled.</h5>',
											'<img style="width: 100%;" src="images/livestock_stats/land-card-2.jpeg" alt="Maintain balance in the use of the land"><h5 class="text-justify">Australia has unique land, water, vegetation and biodiversity resources. Australia’s 7.7 million square kilometres support a wide range of agricultural and forestry industries. Production from natural resources earns over $38 billion a year in exports from agriculture, fisheries and forestry. Competitive pressures drive the need for improved productivity, which includes increased diversification and intensification. These trends are occurring against a background of increased climate variability.</h5><p></p><h5 class="text-justify">The way in which land is used has a profound effect on Australia’s social and ecological systems. There is a strong link between changes in land use and environmental, economic and social conditions. Information on land use and management is fundamental to understanding landscapes, agricultural production and the management of natural resources.</h5>'];
					
					var preview_meat =    ['Reduction of beef cattle negatively affects the quantity of the beef produced and will have a negative impact in a long run.',
										   "Patch-burn grazing technique is adviced to be used.",
										   'Grass fed or grain fed beef? The differences and impacts are significant.',
										   'People in the industry. The major group to make the changes!'];
					var modal_meat_title = ['',
									        '',
											'Grass fed or grain fed beef?',
											'People make a difference'];
					var modal_meat_text =  ['',
									        '',
											'<img style="width: 100%;" src="images/livestock_stats/meat-card-1.jpeg" alt="Grass fed or grain fed beef?"><h5 class="text-justify">Grass fed beef meat comes from cattle that have only grazed on grass. They feed on a range of different types of grasses, depending on climate and region. In Australia, cattle are predominantly grass fed and account for around 2/3 of whole beef production on average. Grain fed beef comes from cattle which are fed grass for most of their lives and then transition to grain-based diets for the remainder of their lives. The number of days during which they are fed a grain-based diet varies.</h5><p></p><h5 class="text-justify">Livestock are fed grain for several reasons, including to maintain a consistent meat supply, improve eating quality, meet specific needs for niche markets (e.g. for highly marbled meat), meet the energy needs of animals when pasture is limited (such as in drought conditions) and increase animal size.</h5>',
											'<img style="width: 100%;" src="images/livestock_stats/meat-card-2.jpeg" alt="People make a difference"><h5 class="text-justify">There are 41,800 agricultural businesses maintained in the cattle industry and 26.4 million head of cattle in Australia as of 2017-2018. Around 172,000 people are employed in the red meat industry, including on-farm production, processing and retail. In 2018-2019, Australia produced approximately 2.35 million tonnes carcase weight (cwt) of beef and veal. In 2018-2019, 3.14 million grain fed cattle were marketed 38% of all adult cattle slaughtered. On the other hand, the gross value of Australian cattle and calf production (including live cattle exports) in 2018-19 is estimated at A$10.9 billion. Cattle contributed 18% of the total farm value of A$61.4 billion in 2018-2019.</h5>'];
					
					var preview_yarn =    ['Reduction of sheep negatively affects the production of wool, which at the end negatively affect production of yarn.',
										   "Seasonal grazing technique is adviced to be used.",
										   'Reduction of yarn will cause reduction of cloths.',
										   'Few other reasons behind yarn decline.'];
					var modal_yarn_title = ['',
									        '',
											'Production of cloths is affected',
											'Reasons behind yarn reduction'];
					var modal_yarn_text =  ['',
									        '',
											'<img style="width: 100%;" src="images/livestock_stats/yarn-card-1.jpg" alt=""><h5 class="text-justify">Even though wool represents only 1.2% of the virgin fibre supply, it represents about 5% of clothing donated to charity. Wool-made yarn is also one of the most sought after recycled textiles for converting into new long-lasting products, such as garments, mattresses and upholstery. In contrast to synthetics, wool-made yarn can absorb moisture vapour which means less sweat on your body.  Wool-made yarn even absorbs the odour molecules from sweat, which are only released upon washing. Wool-made yarn inherent chemical structure makes wool naturally flame resistant. It is a highly trusted natural fibre in public areas such as hotels, aircraft, hospitals and theatres.</h5>',
											"<img style='width: 100%;' src='images/livestock_stats/yarn-card-2.jpg' alt=''><h5 class='text-justify'>The best wool goes to make suits and clothing, not yarn. There were several factors that contributed to the yarn industry decline.  Firstly, the Australian government began reducing the tariff protection in the footwear, clothing and textile industries in the 1970s, which opened the way for cheap imports to increasingly flood the Australian market. Now we all know that this affected all sectors of manufacturing. Prior to the removal of the tariffs, many larger towns in Australia had mills - it's important to remember not all of these mills made yarn for the hand knitter, again this was a small proportion of the mills - many made fabrics, carpets, and yarns specifically for the manufacturing sector. It was the tariff reductions coupled with the changing directions worldwide of trends, that put our yarn industry into serious damage control.  In the 1980s people began to turn their back on handicrafts viewing them as old fashioned; a bit daggy. Pattern and yarn sales slumped, and many local yarn stores closed. You could also, for the first time, buy a machine-knitted jumper for cheaper than you could knit one.</h5>"]
					
					var preview_total =     ['Beef and dairy cattle, and sheep livestock is reducing yearly and will eventually reach zero.',
											 "Grazing techniques are adviced to be used.",,
											 'Burn grassland not only for the beef cattle. Grasslands require planned burning.',
											 'Droughts and too much humid negatively affect grasslands and beef cattle.',
										     'Just like grasslands, beef cattle is involved in the whole biomass and generates numerous by-products.',
											 'Kangaroos negatively affect grasslands development and dairy cattle.',
											 'Just like grasslands, dairy cattle need rest in their life cycle.',
											 'Make sure the right grazing technique is used to provide enough food.',
											 'Rabbits can be a cause of decreasing number of sheep.',
											 'Sheep are light eaters compared to cattle, but their density is much higher.']
					
					var modal_total_title = ['',
											 '',
											 'Burn grasslands and increase livestocks',
									         'Keep grasslands fresh',
									         'Beef cattle provides hundreds by-products',
									         'Keep kangaroos away from grasslands',
										  	 'Provide enough rest for dairy cattle',
										     'Keep dairy cattle fed',
											 'Beware of rabbits',
											 'High density of sheeps negative affect grassland']
					
					var modal_total_text =  ['',
											 '',
											 '<img style="width: 100%;" src="images/livestock_stats/beef-card-1.jpeg" alt="Burn grasslands and increase livestocks"><h5 class="text-justify"><h5 class="text-justify">Conduct controlled dry season burning to stimulate fresh plant growth to restore calcium to the soil that builds up in the dry grasses. Some species of native plants need occasional fire to thrive, while blazes can also help remove invasive species.</h5><p></p><h5 class="text-justify">Fire is important for grasslands’ existence. They prevent woody plants from spreading and enable the grass to re-grow, becoming thicker, more resilient and healthier. How do grasses survive these fires? They have developed extensive underground systems during the course of evolution, which allow them to burst back to life, stronger than ever before, fairly quickly after a fire.</h5>',
									         '<img style="width: 100%;" src="images/livestock_stats/beef-card-2.jpeg" alt="Keep grasslands fresh"><h5 class="text-justify"><h5 class="text-justify">All grasslands get a specific amount of yearly rainfall, depending on their exact location in the world. What you didn not know is that if grasslands receive much less rain than ordinarily, it would become a desert, and if it got much more rain than usually, it would eventually turn into a forest. That is also the reason why grasslands are often located between deserts and forests – these nearby areas get less or more rain, and have thus developed into something else.</h5>',
									         '<img style="width: 100%;" src="images/livestock_stats/beef-card-3.jpg" alt="Beef cattle provides hundreds by-products"><h5 class="text-justify"><h5 class="text-justify">Over 98% of the beef animal is used when it is processed. Besides meat and milk, beef cattle provide us with hundreds of important by-products. About 45% of the animal is used for meat and the rest is used for other by-products including leather, china, glue, film, soap, pharmaceuticals, insulin, gelatines, etc. Almost the entire beef animal can be used in some way. From a typical 454-kilogram steer, slightly over 40% of the animal is used for retail beef and the remaining 60% is processed into by-products.</h5>',
									         "<img style='width: 100%;' src='images/livestock_stats/dairy-card-1.jpeg' alt='Keep kangaroos away from grasslands'><h5 class='text-justify'><h5 class='text-justify'>Kangaroo numbers need to be controlled due to threatening one of Australia's last remaining original grasslands and endangered livestock. Australian Department of Defence is currently culling hundreds of kangaroos on the outskirts of the capital Canberra that have produced heated discussions and hit international headlines. Australia's iconic animal has multiplied so much over recent years that Canberra has three times as many kangaroos as inhabitants. The situation is particularly critical at two enclosed military sites on the outskirts of the city, which form an ideal refuge for the eastern grey kangaroo (Macropus giganteus)</h5>",
											 '<img style="width: 100%;" src="images/livestock_stats/dairy-card-2.jpeg" alt="Provide enough rest for dairy cattle"><h5 class="text-justify"><h5 class="text-justify">Generally, a cow can produce milk in 9-10 months each year according to pregnancy. Many ranchers run cow-calf operations. The cows are bred to calve in the spring or fall that keeps a herd of cows to produce calves. The natural life expectancy of a cow is twenty years. Some get up to 25 years old. Cows, like our grassland that need certain time to rest and regrowth for healing and better productivity. Therefore, we recommend you take sustainable techniques like rotational grazing and patch-burn to rest the land.</h5>',
											 '<img style="width: 100%;" src="images/livestock_stats/dairy-card-3.jpeg" alt="Keep dairy cattle fed"><h5 class="text-justify"><h5 class="text-justify">A cow, that is milking, eats about 45 kilograms of feed each day. Cows drink a whole bathtub of water in just one day. That’s why cows are considered as the competitive eater and ultimate recyclers. The feed is typically a combination of grass, grain, and a mixture of other ingredients like citrus pulp, almond hulls and cotton seeds. These are items that may otherwise be thrown away. The ingredients, that we cannot eat, can often be nutritious for them. Farmers employ professional animal nutritionists to develop scientifically formulated, balanced, and nutritious diets for their cows.</h5>',
											 '<img style="width: 100%;" src="images/livestock_stats/sheep-card-1.jpeg" alt="Beware of rabbits"><h5 class="text-justify"><h5 class="text-justify">Rabbits compete with native animals and domestic livestock for food and shelter, increasing grazing pressure and lowering the land’s carrying capacity.</h5><p></p><h5 class="text-justify">Rabbits act as a food source for introduced predators, which can lead to increased lamb losses and disease prevalence.</h5>',
											 '<img style="width: 100%;" src="images/livestock_stats/sheep-card-2.jpeg" alt="High density of sheeps negative affect grassland"><h5 class="text-justify"><h5 class="text-justify">Large density causes lots of damage to the grass and the plants in the area. Though, sheep are herbivores, which means their diet does not include meat. They typically eat seeds, grass and plants. Some sheep do not need much water. The desert bighorn sheep, for example, gets most of its water from eating plants. Like all ruminants, they have multi-chambered stomachs that are adapted to ferment cellulose before digestion. To completely digest their food, sheep will regurgitate their food into their mouths, rechew and swallow. This regurgitated food is called cud.</h5>']
					
					/* HTML content */				 
					if (check_active == "true false false false") {
						triggerGraph(check_active);
						var latestYr = current_beef_qty * 1000000; // latest livestock number - qty
						var selYr = selected_beef_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMeat = latestYr * (544.3 * 0.417); //latest year meat - in kg
						var selRemainMeat = selYr * (544.3 * 0.417); // selected year meat - in kg
						
						var latestLandBeef = latestYr * 326.21; //latest year meat - in m^2
						var remainLandBeef = selYr * 326.21; //latest year meat - in m^2
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr, year, selYr, preview_beef, modal_beef_title, modal_beef_text, patch_burn);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat, preview_meat, modal_meat_title, modal_meat_text, patch_burn);
						var beefLandUse = contentHTML(icons[4], title[5], latestLandBeef, year, remainLandBeef, preview_land, modal_land_title, modal_land_text, techniques);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY + beefLandUse;
					} else if (check_active == "false true false false") {
						triggerGraph(check_active);
						var latestYr = current_dairy_qty * 1000000; // latest livestock number - qty
						var selYr = selected_dairy_qty * 1000000; // selected livestock number - qty
						
						var latestRemainMilk = latestYr * 28 * (10 * (30*10)); //latest year milk - in ltr
						var selRemainMilk = selYr * 28 * (10 * (30*10)); // selected year milk - in ltr
						
						var latestDairyBeef = latestYr * 43.24; //latest year meat - in m^2
						var remainDairyBeef = selYr * 43.24; //latest year meat - in m^2
						
						var dairyQTY = contentHTML(icons[0], title[1], latestYr, year, selYr, preview_dairy, modal_dairy_title, modal_dairy_text, rotational); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk, preview_milk, modal_milk_title, modal_milk_text, rotational);
						var dairyLandUse = contentHTML(icons[4], title[5], latestDairyBeef, year, remainDairyBeef, preview_land, modal_land_title, modal_land_text, techniques);
						document.getElementById("prediction-data").innerHTML = dairyQTY + milkQTY + dairyLandUse;
					} else if (check_active == "false false true false") {
						triggerGraph(check_active);
						var latestYr = current_sheep_qty * 1000000; //current year sheep - qty
						var selYr = selected_sheep_qty * 1000000; //selected year sheep - qty
						
						var latestWoolProduction = latestYr * 11.3; //current year wool production - in kg
						var selWoolProduction = selYr * 11.3; //selected year wool production - in kg
						
						var latestYarnProduction = latestYr * 11.3 * 16; //current year yarn production - in km
						var selYarnProduction = selYr * 11.3 * 16; //selected year yern production - in km
						
						var latestLandSheep = latestYr * 369.81; //current year land - in m^2
						var remainLandSheep = selYr * 369.81; //selected year sheep - in m^2
						
						var sheepQTY = contentHTML(icons[3], title[2], latestYr, year, selYr, preview_sheep, modal_sheep_title, modal_sheep_text, seasonal); 			 
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction, preview_wool, modal_wool_title, modal_wool_text, seasonal);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction, preview_yarn, modal_yarn_title, modal_yarn_text, seasonal);
						var sheepLandUse = contentHTML(icons[4], title[5], latestLandSheep, year, remainLandSheep, preview_land, modal_land_title, modal_land_text, techniques);
						document.getElementById("prediction-data").innerHTML = sheepQTY + woolProduction + yarnProduction + sheepLandUse;
					} else if (check_active == "true false true false") {
						triggerGraph(check_active);
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
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr_beef, year, selYr_beef, preview_beef, modal_beef_title, modal_beef_text, patch_burn);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat, preview_meat, modal_meat_title, modal_meat_text, patch_burn);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr_sheep, year, selYr_sheep, preview_sheep, modal_sheep_title, modal_sheep_text, seasonal);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction, preview_wool, modal_wool_title, modal_wool_text, seasonal);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction, preview_yarn, modal_yarn_title, modal_yarn_text, seasonal);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand, preview_land, modal_land_title, modal_land_text, techniques);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				sheepQTY + woolProduction +
																				yarnProduction + totalLAndUse;
					} else if (check_active == "true true false false") {
						triggerGraph(check_active);
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
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr_beef, year, selYr_beef, preview_beef, modal_beef_title, modal_beef_text, patch_burn);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat, preview_meat, modal_meat_title, modal_meat_text, patch_burn);
						var dairyQTY = contentHTML(icons[0], title[1], latestYr_dairy, year, selYr_dairy, preview_dairy, modal_dairy_title, modal_dairy_text, rotational); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk, preview_milk, modal_milk_title, modal_milk_text, rotational);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand, preview_land, modal_land_title, modal_land_text, techniques);
						document.getElementById("prediction-data").innerHTML = beefQTY + beefMeatQTY +
																				dairyQTY + milkQTY +
																				totalLAndUse;
					} else if (check_active == "false true true false") { 
						triggerGraph(check_active);
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
						
						var dairyQTY = contentHTML(icons[0], title[1], latestYr_dairy, year, selYr_dairy, preview_dairy, modal_dairy_title, modal_dairy_text, rotational); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk, preview_milk, modal_milk_title, modal_milk_text, rotational);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr_sheep, year, selYr_sheep, preview_sheep, modal_sheep_title, modal_sheep_text, seasonal);
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand, preview_land, modal_land_title, modal_land_text, techniques);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction, preview_wool, modal_wool_title, modal_wool_text, seasonal);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction, preview_yarn, modal_yarn_title, modal_yarn_text, seasonal);
						document.getElementById("prediction-data").innerHTML =  dairyQTY + milkQTY +
																				sheepQTY + woolProduction +
																				yarnProduction + totalLAndUse;
					} else if (check_active == "false false false true") {
						triggerGraph(check_active);
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
						
						var totalQTY = contentHTML(icons[0], title[8], latestYr, year, selYr, preview_total, modal_total_title, modal_total_text, techniques); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk, preview_milk, modal_milk_title, modal_milk_text);	 
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand, preview_land, modal_land_title, modal_land_text, techniques);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat, preview_meat, modal_meat_title, modal_meat_text, patch_burn);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction, preview_wool, modal_wool_title, modal_wool_text, seasonal);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction, preview_yarn, modal_yarn_title, modal_yarn_text, seasonal);
						document.getElementById("prediction-data").innerHTML = totalQTY + milkQTY +
																				beefMeatQTY + woolProduction +
																				yarnProduction + totalLAndUse;
						
					} else { // true true true false
						triggerGraph(check_active);
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
						
						var beefQTY = contentHTML(icons[0], title[0], latestYr_beef, year, selYr_beef, preview_beef, modal_beef_title, modal_beef_text, patch_burn);
						var beefMeatQTY = contentHTML(icons[2], title[4], latestRemainMeat, year, selRemainMeat, preview_meat, modal_meat_title, modal_meat_text, patch_burn);
						var dairyQTY = contentHTML(icons[0], title[1], latestYr_dairy, year, selYr_dairy, preview_dairy, modal_dairy_title, modal_dairy_text, rotational); 
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk, preview_milk, modal_milk_title, modal_milk_text, rotational);
						var sheepQTY = contentHTML(icons[3], title[2], latestYr_sheep, year, selYr_sheep, preview_sheep, modal_sheep_title, modal_sheep_text, seasonal); 			 
						var totalLAndUse = contentHTML(icons[4], title[5], totalLatestLand, year, totalRemainLand, preview_land, modal_land_title, modal_land_text, techniques);
						var woolProduction = contentHTML(icons[5], title[6], latestWoolProduction, year, selWoolProduction, preview_wool, modal_wool_title, modal_wool_text, seasonal);
						var yarnProduction = contentHTML(icons[6], title[7], latestYarnProduction, year, selYarnProduction, preview_yarn, modal_yarn_title, modal_yarn_text, seasonal);
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