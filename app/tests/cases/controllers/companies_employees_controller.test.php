<?php
/* CompaniesEmployees Test cases generated on: 2010-11-30 23:11:54 : 1291160634*/
App::import('Controller', 'CompaniesEmployees');

class TestCompaniesEmployeesController extends CompaniesEmployeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CompaniesEmployeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.companies_employee', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.manufacturer', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.employee');

	function startTest() {
		$this->CompaniesEmployees =& new TestCompaniesEmployeesController();
		$this->CompaniesEmployeesController->constructClasses();
	}

	function endTest() {
		unset($this->CompaniesEmployees);
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