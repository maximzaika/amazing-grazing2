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
		
		
		var content = '<div id="card-height-'+randomVal+'" style="padding-bottom:40px;" class="card-height col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3 col-xxxl-3 align-items-stretch animated fadeInLeft">'+ //col-xs-12 col-sm-12 col-md-6
							'<div class="services text-center card-height-replace" style="padding-bottom: 10px;">'+
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
								'<span onclick="removeHeight('+"'card-height-"+randomVal+"'"+')" id="'+randomVal+'-animal" class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="collapse" data-target="#'+randomVal+'" aria-expanded="false" aria-controls="'+randomVal+'"><span><i class="fa fa-plus" aria-hidden="true"></i> View suggestions</span></span>'+
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
					var preview_beef = data.preview_beef.split('~');
					var modal_beef_title = data.modal_beef_title.split('~');
					var modal_beef_text = data.modal_beef_text.split('~');
					var preview_dairy = data.preview_dairy.split('~');
					var modal_dairy_title = data.modal_dairy_title.split('~');
					var modal_dairy_text = data.modal_dairy_text.split('~');
					var preview_milk = data.preview_milk.split('~');
					var modal_milk_title = data.modal_milk_title.split('~');
					var modal_milk_text = data.modal_milk_text.split('~');
					var preview_sheep = data.preview_sheep.split('~');
					var modal_sheep_title = data.modal_sheep_title.split('~');
					var modal_sheep_text = data.modal_sheep_text.split('~');
					var preview_wool = data.preview_wool.split('~');
					var modal_wool_title = data.modal_wool_title.split('~');
					var modal_wool_text = data.modal_wool_text.split('~');
					var preview_land = data.preview_land.split('~');
					var modal_land_title = data.modal_land_title.split('~');
					var modal_land_text = data.modal_land_text.split('~');
					var preview_meat = data.preview_meat.split('~');
					var modal_meat_title = data.modal_meat_title.split('~');
					var modal_meat_text = data.modal_meat_text.split('~');
					var preview_yarn = data.preview_yarn.split('~');
					var modal_yarn_title = data.modal_yarn_title.split('~');
					var modal_yarn_text = data.modal_yarn_text.split('~');
					var preview_total = data.preview_total.split('~');
					var modal_total_title = data.modal_total_title.split('~');
					var modal_total_text = data.modal_total_text.split('~');
					
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
						var milkQTY = contentHTML(icons[1], title[3], latestRemainMilk, year, selRemainMilk, preview_milk, modal_milk_title, modal_milk_text, rotational);	 
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
					
					/* control the height of the cards 
					   make the same height when the container is not expanded */
					var maxHeight = 0;
					$(".card-height").each(function(){
						maxHeight = Math.max(maxHeight, $(this).height());     
					});
					$(".card-height-replace").height(maxHeight);
				},
				error: (error) => {
					console.log(JSON.stringify(error));
				}
			});
		}
	};
	
	$(".lvstYearPrediction").click(yearSelection);
});