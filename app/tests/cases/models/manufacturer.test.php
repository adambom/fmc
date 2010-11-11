<?php
/* Manufacturer Test cases generated on: 2010-11-10 22:11:05 : 1289444945*/
App::import('Model', 'Manufacturer');

class ManufacturerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.company', 'app.customer', 'app.job', 'app.opportunity', 'app.vendor', 'app.employee', 'app.companies_employee', 'app.part');

	function startTest() {
		$this->Manufacturer =& ClassRegistry::init('Manufacturer');
	}

	function endTest() {
		unset($this->Manufacturer);
		ClassRegistry::flush();
	}

}
?>