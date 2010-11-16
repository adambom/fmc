<?php
/* Stages Test cases generated on: 2010-11-11 23:11:51 : 1289535231*/
App::import('Controller', 'Stages');

class TestStagesController extends StagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.stage', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.location', 'app.jobs_location');

	function startTest() {
		$this->Stages =& new TestStagesController();
		$this->StagesController->constructClasses();
	}

	function endTest() {
		unset($this->Stages);
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