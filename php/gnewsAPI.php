<?php
    /* This file runs once only upon the load of the page.
	   HTML calls the function in this .php file.
	
	   Reads in the array converted from json. 
	   Identifies the data of each news.
	   Identifies the right month.
	   Loops to create html for all the news */
	function newsGenerator($data, $total) {
		$newsMonth = array('January','February','March','April','May','June','July','August','September','October','November','December');
		$total--;
		
		$full_news = '';
		/* Skip searching through the loop if there are no news for the criteria selected */
		if ((isset($data['articleCount']) == 1) && ($data['articleCount'] != 0)) {
			/* Loop through the number of articles available */
			for ($i=$data['articleCount']-1; $i>-1; $i--) {
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
				
				/* Create HTML readable code for the page */
				$full_news = $full_news . 
					'<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex ftco-animate fadeInUp ftco-animated">' .
					  '<div class="blog-entry justify-content-end">' .
						'<a href="'.$articleUrl.'" class="block-20" style="background-image: url('."'".$articleImg."'". ');"></a>'.
						'<div class="text p-4 float-right d-block" style="height: 100%;">' .
						  '<div class="topper d-flex align-items-center">' .
							'<div class="one py-2 pl-3 pr-1 align-self-stretch">' .
							  '<span class="day">'.$articleDD.'</span>' . 
							'</div>'.
							
							'<div class="two pl-0 pr-3 py-2 align-self-stretch">'.
							  '<span class="yr">'.$articleYYYY.'</span>'. 
							  '<span class="mos">'.$articleMONTH.'</span>'.
							'</div>'.
						  '</div>'.
						  
						  '<div style="padding-bottom:55px;">'.
						    '<h3 class="heading mb-0"><a href="'.$articleUrl.'">'.$articleTitle.'</a></h3>'.
						    '<p class="text-justify">'.$articleDescr.'</p>'.
						    '<p><a href="'.$articleUrl.'" class="btn btn-primary" style="position: absolute; bottom: 300px;">Read article</a></p>'.
						  '</div>'.
						'</div>'.
					  '</div>'.
					'</div>';
			}
		} else {
			if (($data['articleCount'] = 0)) {
				$full_news = "There are no news available based on your search criteria. Please, select another date.";
			}
			
			if (isset($data['articleCount']) == 0) {
				$full_news = "Server Error: You ran out of free news requests for today";
			}	
		}
		
		return $full_news;
	}
	
	/* Get the Token from the DB */
	$get_newsAPI_1 = "SELECT g_news_id, g_news_count, g_news_token FROM g_news_api";
	$apiData_1 = $con -> query($get_newsAPI_1);
	
	$post_apiToken_1 = '';
	if ($apiData_1->num_rows > 0) {
		
		while($row = $apiData_1->fetch_assoc()) {
			if ($row['g_news_count'] < 100) { /* if count < 100 then not used all */
				$post_apiID_1 = $row['g_news_id'];
			    $post_apiCount_1 = $row['g_news_count'];
			    $post_apiToken_1 = $row['g_news_token'];
				
				$incrCount = $post_apiCount_1+1;
				
				$updateTokenCount = 'UPDATE g_news_api '. /* query to update the database with latest count */
				                    'SET g_news_count='.$incrCount.' '.
									'WHERE g_news_id='.$post_apiID_1;
				$con->query($updateTokenCount); /* update database */
				break;
			} else { /* if not 100 then it is not all used */
				continue;
			}
		}
	}
	
	/* ADD: store the date on the server */
	$totalNews = 10;
	
	$days_ago = date('Y-m-d', strtotime('-3 days', strtotime(date('Y-m-d'))));
	$startDate = $days_ago;
	
	$googleAPIurl = 'https://gnews.io/api/v3/search?q=grazing&max='.$totalNews.'&country=au&image=required&mindate='.$startDate.'&in=title&token='.$post_apiToken_1;

	/* Gnews API code 
	     token 1 (100 per day max) = 2f43dc9d754f3008f68a7f50b670c208
	     token 2 (100 per day max) = c29b556f2f1ddd7ada7f2d7b6834b2c7 
		 token 3 (100 per day max) = c3fae1827597a016ef41d4fb9c4f95fe 
		 token 4 (100 per day max) = 9e0677170130c646c24d9d907974166c */
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $googleAPIurl); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
	$newsData = curl_exec($ch); 
	curl_close($ch); 
	/* End Gnews API code */
    
	$newsData = json_decode($newsData, true); /* Decode the son format into a readable table */
?>