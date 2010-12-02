<?php
/* Opportunities Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Opportunities');

class TestOpportunitiesController extends OpportunitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OpportunitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.stage');

	function startTest() {
		$this->Opportunities =& new TestOpportunitiesController();
		$this->OpportunitiesController->constructClasses();
	}

	function endTest() {
		unset($this->Opportunities);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>