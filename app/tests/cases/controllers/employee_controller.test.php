<?php
/* Employee Test cases generated on: 2010-11-30 23:11:31 : 1291160731*/
App::import('Controller', 'Employee');

class TestEmployeeController extends EmployeeController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EmployeeControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.employee');

	function startTest() {
		$this->Employee =& new TestEmployeeController();
		$this->EmployeeController->constructClasses();
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
?>