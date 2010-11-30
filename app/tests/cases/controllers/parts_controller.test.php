<?php
/* Parts Test cases generated on: 2010-11-30 23:11:54 : 1291160634*/
App::import('Controller', 'Parts');

class TestPartsController extends PartsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PartsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory');

	function startTest() {
		$this->Parts =& new TestPartsController();
		$this->PartsController->constructClasses();
	}

	function endTest() {
		unset($this->Parts);
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