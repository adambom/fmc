<?php
/* Manufacturer Test cases generated on: 2010-11-11 23:11:42 : 1289535222*/
App::import('Model', 'Manufacturer');

class ManufacturerTestCase extends CakeTestCase {
	var $fixtures = array('app.manufacturer', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Manufacturer =& ClassRegistry::init('Manufacturer');
	}

	function endTest() {
		unset($this->Manufacturer);
		ClassRegistry::flush();
	}

}
?>