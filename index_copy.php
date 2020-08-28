<!-- Server side files -->
<?php 
	require_once "server_config.php";
	require_once "php/gnewsAPI.php";
	
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
	function newsGenerator($data) {
		$newsMonth = array('January','February','March','April','May','June','July','August','September','October','November','December');
		
		$full_news = '';
		for ($i=0; $i<10; $i++) {
			$articleTitle = $data['articles'][$i]['title'];
			$articleDescr = $data['articles'][$i]['description'];
			$articleUrl = $data['articles'][$i]['url'];
			$articleImg = $data['articles'][$i]['image'];
			$articleTime = $data['articles'][$i]['publishedAt'];
			  $articleDD = substr($articleTime, 8, 2);
			  $articleYYYY = substr($articleTime, 0, 4);
			    $articleMM = substr($articleTime, 5, 2)+0; /* convert to int */
			  $articleMONTH = $newsMonth[$articleMM]; /* get written month */
			$sourceName = $data['articles'][$i]['source']['name'];
			$sourceUrl = $data['articles'][$i]['source']['url'];
			
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
				'</div>';
		}
		
		return $full_news;
	}
	
	$newsData = json_decode($data, true);
	echo newsGenerator($newsData);

    ?>
</html>