<?php
    /* Reads in the array converted from json. 
	   Identifies the data of each news.
	   Identifies the right month.
	   Loops to create html for all the news */
	function newsGenerator($data, $total) {
		$newsMonth = array('January','February','March','April','May','June','July','August','September','October','November','December');
		$total--;
		
		$full_news = '';
		
		if ($data['articleCount'] != 0) {
			for ($i=$total; $i>-1; $i--) {
				$articleTitle = $data['articles'][$i]['title'];
				$articleDescr = $data['articles'][$i]['description'];
				$articleUrl = $data['articles'][$i]['url'];
				$articleImg = $data['articles'][$i]['image'];
				$articleTime = $data['articles'][$i]['publishedAt'];
				  $articleDD = substr($articleTime, 8, 2);
				  $articleYYYY = substr($articleTime, 0, 4);
					$articleMM = substr($articleTime, 5, 2)+0; /* convert to int */
				  $articleMONTH = $newsMonth[$articleMM-1]; /* get written month */
				$sourceName = $data['articles'][$i]['source']['name'];
				$sourceUrl = $data['articles'][$i]['source']['url'];
				
				$full_news = $full_news . 
					'<div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">' .
					  '<div class="blog-entry justify-content-end">' .
						'<a href="'.$articleUrl.'" class="block-20" style="background-image: url('."'".$articleImg."'". ');"></a>'.
						'<div class="text p-4 float-right d-block">' .
						  '<div class="topper d-flex align-items-center">' .
							'<div class="one py-2 pl-3 pr-1 align-self-stretch">' .
							  '<span class="day">'.$articleDD.'</span>' . 
							'</div>'.
							
							'<div class="two pl-0 pr-3 py-2 align-self-stretch">'.
							  '<span class="yr">'.$articleYYYY.'</span>'. 
							  '<span class="mos">'.$articleMONTH.'</span>'.
							'</div>'.
						  '</div>'.
						  
						  '<h3 class="heading mb-0"><a href="'.$articleUrl.'">'.$articleTitle.'</a></h3>'.
						  '<p>'.$articleDescr.'</p>'.
						  '<p><a href="'.$articleUrl.'" class="btn btn-primary">Read more</a></p>'.
						'</div>'.
					  '</div>'.
					'</div>';
			}
		} else {
			$full_news = "There are no news available based on your search criteria. Please, select another date.";
		}
		
		return $full_news;
	}
	
	$totalNews = 6;
	$topicName = $_POST['receivedNewsTopic'];
	$regionName = $_POST['receivedNewsRegion'];
	$startDateWrong = $_POST['receivedNewsStart'];
	  $startDate = substr($startDateWrong,6,4) . '-' . substr($startDateWrong,3,2) . '-' . substr($startDateWrong,0,2);
	
	/* Gnews API code 
	     token 1 (100 per day max) = 2f43dc9d754f3008f68a7f50b670c208
	     token 2 (100 per day max) = c29b556f2f1ddd7ada7f2d7b6834b2c7 */
		 
	$newsToken = '2f43dc9d754f3008f68a7f50b670c208';
	
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, 'https://gnews.io/api/v3/search?q='.$topicName.'&max='.$totalNews.'&country='.$regionName.'&image=required&mindate='.$startDate.'&in=title&token='.$newsToken); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
	$newsData = curl_exec($ch); 
	curl_close($ch); 
    
	$newsData = json_decode($newsData, true);
	$newsHTML = newsGenerator($newsData, $totalNews);
	echo json_encode(array("newsHTML"=>$newsHTML));
?>