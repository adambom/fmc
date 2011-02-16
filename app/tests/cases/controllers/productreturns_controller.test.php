<?php
/* Productreturns Test cases generated on: 2011-02-16 09:02:15 : 1297849155*/
App::import('Controller', 'Productreturns');

class TestProductreturnsController extends ProductreturnsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductreturnsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Productreturns =& new TestProductreturnsController();
		$this->ProductreturnsController->constructClasses();
	}

	function endTest() {
		unset($this->Productreturns);
		ClassRegistry::flush();
	}

}
?>