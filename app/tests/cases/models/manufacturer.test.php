<?php
/* Manufacturer Test cases generated on: 2010-12-02 01:12:04 : 1291253344*/
App::import('Model', 'Manufacturer');

class ManufacturerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Manufacturer =& ClassRegistry::init('Manufacturer');
	}

	function endTest() {
		unset($this->Manufacturer);
		ClassRegistry::flush();
	}

}
?>