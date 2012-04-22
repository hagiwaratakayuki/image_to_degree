<?php
function image_to_degree($format,$file_url,$min_color,$max_color,$ne_lat,$ne_lng,$sw_lat,$sw_lng,$x_step = 1, $y_step = 1) {
	$ret = array();
	$img = false;
	if($format == 'png'){ 
		
		$img = imagecreatefrompng($file_url);
	
	}
	if($format == 'jpg'){
		$img = imagecreatefromjpeg($file_url);
	}
	if($format == 'gif'){
		
		$img = imagecreatefromgif($file_url);
	
	}
	$lat_diff = $ne_lat - $sw_lat;
	$lng_diff = $ne_lng - $sw_lng;
	$width    = imagesx($img);
	$height   = imagesy($img);
	$lat_step = $height / $lat_diff;
	$lng_step = $width  / $ng_diff;
	$r_range  = abs($max_color['r'] - $min_color['r']);
	$g_range  = abs($max_color['g'] - $min_color['g']);
	$b_range  = abs($max_color['b'] - $min_color['b']);
	$total_range = $r_range + $g_range + $b_range;
	foreach (range(0, $width - 1,$x_step) as $x){
		foreach (range(0 , $height -1 ,$y_step) as $value) {
			$lat = $ne_lat - $lat_diff * $y;
			$lng = $sw_lng + $lng_diff * $x;
			$rgb = imagecolorat($img, $x, $y);
			$r = ($rgb >> 16) & 0xFF;
			$g = ($rgb >> 8) & 0xFF;
			$b = $rgb & 0xFF;
			
			$r_diff = abs($r - $min_color['r']);
			$g_diff = abs($g - $min_color['g']);
			$b_diff = abs($g - $min_color['b']);
			$diff = $r_diff + $g_diff + $b_diff;
			$degree = $diff / $total_range;
			$ret[]  = array('lat' => $lat,'lng' => $lng , 'degree'=> $degree);
		}
		
	} 
	return $ret;
}