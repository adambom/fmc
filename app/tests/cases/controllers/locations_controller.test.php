<?php
/* Locations Test cases generated on: 2010-11-30 23:11:54 : 1291160634*/
App::import('Controller', 'Locations');

class TestLocationsController extends LocationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LocationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.location', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.jobs_location');

	function startTest() {
		$this->Locations =& new TestLocationsController();
		$this->LocationsController->constructClasses();
	}

	function endTest() {
		unset($this->Locations);
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