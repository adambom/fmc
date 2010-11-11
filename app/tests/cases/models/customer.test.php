<?php
/* Customer Test cases generated on: 2010-11-10 22:11:10 : 1289444890*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer', 'app.company', 'app.manufacturer', 'app.vendor', 'app.employee', 'app.companies_employee', 'app.job', 'app.opportunity');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function endTest() {
		unset($this->Customer);
		ClassRegistry::flush();
	}

}
?>