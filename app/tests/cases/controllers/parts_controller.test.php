<?php
/* Parts Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Parts');

class TestPartsController extends PartsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PartsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory');

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