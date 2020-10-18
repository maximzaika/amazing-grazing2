<?php   
		require_once "../server_config.php";
		
		$year = $_POST['activeYear'];
		$livestock = $_POST['activeLivestock'];
		
        $get_livestock_graph = "SELECT graph_id,
									   graph_cond,
		                               graph_year,
									   graph_div_id,
									   graph_img_src,
									   graph_o_name_val,
									   graph_o_static_url
								FROM livestock_graph;";
		$livestock_graph = $con -> query($get_livestock_graph);
		
		$graphContent = '';
		
		if ($livestock_graph->num_rows > 0) {
			while($row = $livestock_graph->fetch_assoc()) {
				$graph_id = $row['graph_id'];
				$graph_cond = $row['graph_cond'];
				$graph_year = $row['graph_year'];
				$graph_div_id = $row['graph_div_id'];
				$graph_img_src = $row['graph_img_src'];
				$graph_o_name_val = $row['graph_o_name_val'];
				$graph_o_static_url = $row['graph_o_static_url'];
				
				if (($graph_year == $year) && ($graph_cond == $livestock)) {
					$div_id = $graph_div_id;
					$img_src = $graph_img_src;
					$o_name_val = $graph_o_name_val;
					$o_static_url = $graph_o_static_url;
				}
			}
		}
		
		echo json_encode(array("div_id"=>$div_id,
		                       "img_src"=>$img_src,
							   "o_name_val"=>$o_name_val,
							   "o_static_url"=>$o_static_url,));
?>	