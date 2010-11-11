<?php
/* Company Test cases generated on: 2010-11-10 22:11:33 : 1289444793*/
App::import('Model', 'Company');

class CompanyTestCase extends CakeTestCase {
	var $fixtures = array('app.company', 'app.customer', 'app.manufacturer', 'app.vendor', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Company =& ClassRegistry::init('Company');
	}

	function endTest() {
		unset($this->Company);
		ClassRegistry::flush();
	}

}
?>