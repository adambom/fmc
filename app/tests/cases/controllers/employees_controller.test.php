<?php
/* Employees Test cases generated on: 2010-12-02 01:12:21 : 1291253361*/
App::import('Controller', 'Employees');

class TestEmployeesController extends EmployeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.manufacturer', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.companies_employee');

	function startTest() {
		$this->Employees =& new TestEmployeesController();
		$this->EmployeesController->constructClasses();
	}

	function endTest() {
		unset($this->Employees);
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