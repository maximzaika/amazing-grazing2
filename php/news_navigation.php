<?php  /* This file executes the navigation that allows users to control preferred
          news search criterias.  */
	    function generateNewsNav($con, $date) {
			$getTopic = "SELECT news_topic_id, news_topic_label, news_topic_topic FROM news_topic_content";
			$topic_Data = $con -> query($getTopic);
			
			$title_date_full = '';
			$date = substr($date,8,2) . '-' . substr($date,5,2) . '-' . substr($date,0,4);
			
			if ($topic_Data->num_rows > 0) {
				$title_date_full = $title_date_full . 
									'<button id="show-filter" class="w-100 btn btn-topic btn-amazing-livestock-on hidden d-md-none" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i> Open filter</button>'.
									'<div class="collapse dont-collapse-sm" id="collapseExample">'.
									
									'<div class="row">'.
									'<div class="col-sm-12 col-md-4">' .
									  '<h5><i class="fa fa-newspaper-o" aria-hidden="true"></i> Select topic</h5>'.
									  '<button id="drop-topic" type="button" class="w-100 btn-news-topic btn btn-topic btn-primary dropdown-toggle" data-toggle="dropdown">Grazing</button>'.
									  '<div class="dropdown-news-topic dropdown-menu">';
									
				while($row = $topic_Data->fetch_assoc()) {
					$post_topicId = $row['news_topic_id'];
					$post_topicLabl = $row['news_topic_label'];
					$post_topicTopic = $row['news_topic_topic'];
					
					$title_date_full = $title_date_full . 
									  '<a id="'.$post_topicLabl.'" class="dropdown-item updateNews updateNewsJS">'.$post_topicTopic.'</a>';
				}
				
				$title_date_full = $title_date_full . 
									  '</div>'.
									'</div>';
			}
			
			$getRegion = "SELECT news_reg_id, news_reg_label, news_reg_topic FROM news_region_content";
			$region_Data = $con -> query($getRegion);
			if ($region_Data->num_rows > 0) {
				$title_date_full = $title_date_full . 
									'<div class="col-sm-12 col-md-4">' .
									  '<h5><i class="fa fa-globe" aria-hidden="true"></i> Select country</h5>'.
									  '<button id="drop-region" type="button" class="w-100 btn-news-topic btn btn-topic btn-primary dropdown-toggle" data-toggle="dropdown">Australia</button>'.
									  '<div class="dropdown-news-topic dropdown-menu">';
				while($row = $region_Data->fetch_assoc()) {
					$post_regionId = $row['news_reg_id'];
					$post_regionLabl = $row['news_reg_label'];
					$post_regionTopic = $row['news_reg_topic'];
					
					$title_date_full = $title_date_full . 
									  '<a id="'.$post_regionLabl.'" class="dropdown-item updateNews updateNewsJS">'.$post_regionTopic.'</a>';
				}
				$title_date_full = $title_date_full . 
									  '</div>'.
									'</div>';
			}

			/* Sort */
			
			$title_date_full = $title_date_full .
			                     '<div class="col-sm-12 col-md-4">'.
								   '<h5><i class="fa fa-sort" aria-hidden="true"></i> Sort by date</h5>'.
								   '<button id="drop-sort" type="button" class="w-100 btn-news-topic btn btn-topic btn-primary dropdown-toggle" data-toggle="dropdown">Sort Newest to Oldest</button>'.
								   '<div class="dropdown-news-topic dropdown-menu">'.
								     '<a id="S_new-to-old" class="dropdown-item updateNews updateNewsJS">Sort Newest to Oldest</a>'.
									 '<a id="S_old-to-new" class="dropdown-item updateNews updateNewsJS">Sort Oldest to Newest</a>'.
								   '</div>'.
								 '</div>'.
								 '</div>'.
								 '</div>';
			
			/* End Sort */
			
			/* Date  */			
			/*$title_date_full = $title_date_full . 
								'<div class="col-sm-12 col-md-4 col-lg-4 .col-xl-4">'.
								  '<h5>Select date</h5>'.
								  '<div class="input-group mb-3">'.
									'<input id="enter-start-date" class="form-control border-right-0" id="start-date" name="start-date" placeholder="Select Date" value="'.$date.'" type="text"/>'.
									'<div class="input-group-prepend">'.
									  '<div class="input-group-prepend input-focus-start">'.
										'<div class="border-left-0 input-group-text bg-transparent"><i class="fa fa-calendar"></i></div>'.
									  '</div>'.
									'</div>'.
								  '</div>'.
								'</div>';*/
								
			
			/* End Date */
			
			return $title_date_full;
		}
		
?>