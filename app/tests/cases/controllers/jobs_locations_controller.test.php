<?php
/* JobsLocations Test cases generated on: 2010-11-11 23:11:50 : 1289535230*/
App::import('Controller', 'JobsLocations');

class TestJobsLocationsController extends JobsLocationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobsLocationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.jobs_location', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.location');

	function startTest() {
		$this->JobsLocations =& new TestJobsLocationsController();
		$this->JobsLocationsController->constructClasses();
	}

	function endTest() {
		unset($this->JobsLocations);
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