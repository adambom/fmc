<?php 
	if($part){
		echo strip_tags(json_encode($part));
	} else {
		echo json_encode(array());
	} 
?>