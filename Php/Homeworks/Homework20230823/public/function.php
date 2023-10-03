<?php

function scanFolder($path){
	$list = scandir($path);
	//echo '<pre>';
	//print_r($list);
	//echo '<pre>';
	
	$response=[];
	foreach($list as $item){
		if(is_file($path .'/'. $item)){
			$response[]= $item . '- is file<br/>';
		}
		
		if(is_dir($path .'/'. $item)){
			$response[]= $path . '/' . $item . '- is dir<br/>';
			if($item !== '.' && $item !== '..'){
				$response[]=array_marge($response, scanFolder($path . '/' .$item));
				}
		}
		return $response;
	}
}
