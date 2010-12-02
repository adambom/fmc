<?php
/* Jobs Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Jobs');

class TestJobsController extends JobsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.location', 'app.jobtype');

	function startTest() {
		$this->Jobs =& new TestJobsController();
		$this->JobsController->constructClasses();
	}

	function endTest() {
		unset($this->Jobs);
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