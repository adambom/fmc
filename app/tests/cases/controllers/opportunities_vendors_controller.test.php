<?php
/* OpportunitiesVendors Test cases generated on: 2010-11-30 23:11:54 : 1291160634*/
App::import('Controller', 'OpportunitiesVendors');

class TestOpportunitiesVendorsController extends OpportunitiesVendorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OpportunitiesVendorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunities_vendor', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.location', 'app.jobs_location', 'app.stage');

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