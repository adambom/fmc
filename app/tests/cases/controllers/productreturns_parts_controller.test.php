<?php
/* ProductreturnsParts Test cases generated on: 2010-11-30 23:11:54 : 1291160634*/
App::import('Controller', 'ProductreturnsParts');

class TestProductreturnsPartsController extends ProductreturnsPartsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProductreturnsPartsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturns_part', 'app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->ProductreturnsParts =& new TestProductreturnsPartsController();
		$this->ProductreturnsPartsController->constructClasses();
	}

	function endTest() {
		unset($this->ProductreturnsParts);
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