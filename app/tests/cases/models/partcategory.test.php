<?php
/* Partcategory Test cases generated on: 2010-11-10 22:11:58 : 1289446138*/
App::import('Model', 'Partcategory');

class PartcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.partcategory', 'app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part', 'app.partsubcategory');

	function startTest() {
		$this->Partcategory =& ClassRegistry::init('Partcategory');
	}

	function endTest() {
		unset($this->Partcategory);
		ClassRegistry::flush();
	}

}
?>