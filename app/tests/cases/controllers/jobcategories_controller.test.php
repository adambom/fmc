<?php
/* Jobcategories Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Jobcategories');

class TestJobcategoriesController extends JobcategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobcategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.jobcategory', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.location', 'app.jobtype');

	function startTest() {
		$this->Jobcategories =& new TestJobcategoriesController();
		$this->JobcategoriesController->constructClasses();
	}

	function endTest() {
		unset($this->Jobcategories);
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