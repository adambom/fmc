<?php
/* Employee Test cases generated on: 2010-11-10 22:11:54 : 1289445114*/
App::import('Model', 'Employee');

class EmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.company', 'app.customer', 'app.job', 'app.opportunity', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunities_vendor', 'app.companies_employee');

	function startTest() {
		$this->Employee =& ClassRegistry::init('Employee');
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
?>