<?php
/* Manufacturers Test cases generated on: 2010-11-11 23:11:50 : 1289535230*/
App::import('Controller', 'Manufacturers');

class TestManufacturersController extends ManufacturersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ManufacturersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Manufacturers =& new TestManufacturersController();
		$this->ManufacturersController->constructClasses();
	}

	function endTest() {
		unset($this->Manufacturers);
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