<?php 
	if($part){
		$json = json_encode($part);
		$json= preg_replace('/<!--.*?-->/', '', $json);
		echo $json;
	} else {
		echo json_encode(array());
	} 
?>