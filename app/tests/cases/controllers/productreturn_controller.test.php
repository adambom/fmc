<?php
/* Productreturn Test cases generated on: 2011-02-16 09:02:53 : 1297849133*/
App::import('Controller', 'Productreturn');

class TestProductreturnController extends ProductreturnController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductreturnControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Productreturn =& new TestProductreturnController();
		$this->ProductreturnController->constructClasses();
	}

	function endTest() {
		unset($this->Productreturn);
		ClassRegistry::flush();
	}

}
?>