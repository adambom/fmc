<?php
/* Vendors Test cases generated on: 2010-11-11 23:11:51 : 1289535231*/
App::import('Controller', 'Vendors');

class TestVendorsController extends VendorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VendorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Vendors =& new TestVendorsController();
		$this->VendorsController->constructClasses();
	}

	function endTest() {
		unset($this->Vendors);
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