<?php
/* Part Test cases generated on: 2010-11-10 22:11:03 : 1289446083*/
App::import('Model', 'Part');

class PartTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.partcategory', 'app.productreturns_part');

	function startTest() {
		$this->Part =& ClassRegistry::init('Part');
	}

	function endTest() {
		unset($this->Part);
		ClassRegistry::flush();
	}

}
?>