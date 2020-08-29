<!-- Server side files -->
<?php 
	require_once "server_config.php";
	#require_once "php/gnewsAPI.php";
	
	
	
	$testquery = "SELECT testID, firstpage_info FROM test";
	$test_result = $con -> query($testquery);
	
	#$final;
	if ($test_result->num_rows > 0) {
		while($row = $test_result->fetch_assoc()) {
			$post_firstpage_result = $row['firstpage_info'];
			$post_id_result = $row['testID'];

			#$final =  $final .'<h1>' . $post_firstpage_result . '</h1>';
		}
	}
	
	$con -> close();
?>

<!DOCTYPE html>
<html lang="en">
	<!--<body>
		<?php #echo htmlspecialchars_decode($final);?>
	</body>-->
	
	<?php #echo $data;
	function newsGenerator($data, $total) {
		$newsMonth = array('January','February','March','April','May','June','July','August','September','October','November','December');
		$total--;
		
		/*$maxNewsLength = 0;
		for ($i=0; $i<$total; $i++) {
			$articleTitle = $data['articles'][$i]['title'];
			$articleDescr = $data['articles'][$i]['description'];
			
			$titleLen = strlen($articleTitle);
			$descrLen = strlen($articleDescr);
			
			$titleDescrLen = $titleLen + $descrLen;
			
			echo 'title length >> ' . $titleLen . '<br>';
			echo 'descr length >> ' . $descrLen . '<br>';
			echo 'total length >> ' . $titleDescrLen . '<br>';
			
			if ($titleDescrLen > $maxNewsLength) {
				$maxNewsLength = $titleDescrLen;
			}
		}*/
		
		
		
		$full_news = '';
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
			
			/*$titleDescrLen = strlen($articleTitle) + strlen($articleDescr);
			$remainingNewsLenght = $maxNewsLength - $titleDescrLen;
			
			for ($j=0; $j>$remainingNewsLenght; $j++) {
				$articleDescr = $articleDescr . '&nbsp';
			}
			
			echo 'maximum   length >> ' . $maxNewsLength . '<br>';
			echo 'remaining length >> ' . $remainingNewsLenght . '<br>';
			echo 'final     length >> ' . strlen($articleDescr) . '<br>';*/
			
			
			
			$full_news = $full_news . 
			        $articleTitle . '<br>' .
					$articleDescr . '<br>' .
					$articleUrl . '<br>' .
					$articleImg . '<br>' .
					$articleTime . '<br>' .
					  $articleDD . '<br>' .
					  $articleYYYY . '<br>' .
					    $articleMM . '<br>' .
					  $articleMONTH . '<br>' .
					$sourceName . '<br>' .
					$sourceUrl . '<hr>';
			/*
			$full_news = $full_news . 
			    '<div class="col-md-4 d-flex ftco-animate">' .
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
				'</div>';*/
		}
		
		return $full_news;
	}
	
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, 'https://gnews.io/api/v3/search?q=grazing&max=10&country=au&image=required&mindate=2020-06-01&in=title&token=c29b556f2f1ddd7ada7f2d7b6834b2c7'); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
	$newsData = curl_exec($ch); 
	curl_close($ch); 
	/* End Gnews API code */
	
	$totalNews = 6;
	
	$newsData = json_decode($newsData, true);
	echo newsGenerator($newsData, $totalNews);

    ?>
</html>