<?php
/* OpportunitiesVendors Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'OpportunitiesVendors');

class TestOpportunitiesVendorsController extends OpportunitiesVendorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OpportunitiesVendorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunities_vendor', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.stage');

	function startTest() {
		$this->OpportunitiesVendors =& new TestOpportunitiesVendorsController();
		$this->OpportunitiesVendorsController->constructClasses();
	}

	function endTest() {
		unset($this->OpportunitiesVendors);
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