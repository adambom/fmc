<?php
/* Vendor Test cases generated on: 2010-12-02 01:12:09 : 1291253349*/
App::import('Model', 'Vendor');

class VendorTestCase extends CakeTestCase {
	var $fixtures = array('app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Vendor =& ClassRegistry::init('Vendor');
	}

	function endTest() {
		unset($this->Vendor);
		ClassRegistry::flush();
	}

}
?>