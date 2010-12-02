<?php
/* Partcategories Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Partcategories');

class TestPartcategoriesController extends PartcategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PartcategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.partcategory', 'app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part', 'app.partsubcategory');

	function startTest() {
		$this->Partcategories =& new TestPartcategoriesController();
		$this->PartcategoriesController->constructClasses();
	}

	function endTest() {
		unset($this->Partcategories);
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