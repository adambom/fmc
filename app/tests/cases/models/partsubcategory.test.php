<?php
/* Partsubcategory Test cases generated on: 2010-11-10 22:11:27 : 1289446167*/
App::import('Model', 'Partsubcategory');

class PartsubcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.partsubcategory', 'app.partcategory', 'app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part');

	function startTest() {
		$this->Partsubcategory =& ClassRegistry::init('Partsubcategory');
	}

	function endTest() {
		unset($this->Partsubcategory);
		ClassRegistry::flush();
	}

}
?>