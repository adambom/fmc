<?php
/* Partsubcategories Test cases generated on: 2010-11-30 23:11:54 : 1291160634*/
App::import('Controller', 'Partsubcategories');

class TestPartsubcategoriesController extends PartsubcategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PartsubcategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.partsubcategory', 'app.partcategory', 'app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part');

	function startTest() {
		$this->Partsubcategories =& new TestPartsubcategoriesController();
		$this->PartsubcategoriesController->constructClasses();
	}

	function endTest() {
		unset($this->Partsubcategories);
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