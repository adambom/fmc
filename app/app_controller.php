<?php
class AppController extends Controller {
	function beforeFilter() 
	{ 
	   $this->pageTitle = 'A list of all orders';
	   return true; 
	}
}
?>

