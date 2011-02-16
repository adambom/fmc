<?php 
	if($part){
		//$json = json_encode($part);
		//$json= preg_replace('/<!--(.|\s)*?-->/', '', $json);
		print_r($part);
	} else {
		echo json_encode(array());
	} 
?>