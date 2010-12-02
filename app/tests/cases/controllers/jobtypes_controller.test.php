<?php
/* Jobtypes Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Jobtypes');

class TestJobtypesController extends JobtypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobtypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.jobtype', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.location');

	function startTest() {
		$this->Jobtypes =& new TestJobtypesController();
		$this->JobtypesController->constructClasses();
	}

	function endTest() {
		unset($this->Jobtypes);
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