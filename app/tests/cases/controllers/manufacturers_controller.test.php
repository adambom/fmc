<?php
/* Manufacturers Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Manufacturers');

class TestManufacturersController extends ManufacturersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ManufacturersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee');

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