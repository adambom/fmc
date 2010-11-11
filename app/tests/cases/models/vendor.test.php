<?php
/* Vendor Test cases generated on: 2010-11-10 22:11:03 : 1289445003*/
App::import('Model', 'Vendor');

class VendorTestCase extends CakeTestCase {
	var $fixtures = array('app.vendor', 'app.company', 'app.customer', 'app.job', 'app.opportunity', 'app.manufacturer', 'app.part', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.opportunities_vendor');

	function startTest() {
		$this->Vendor =& ClassRegistry::init('Vendor');
	}

	function endTest() {
		unset($this->Vendor);
		ClassRegistry::flush();
	}

}
?>