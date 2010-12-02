<?php
/* Part Test cases generated on: 2010-12-02 01:12:06 : 1291253346*/
App::import('Model', 'Part');

class PartTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory');

	function startTest() {
		$this->Part =& ClassRegistry::init('Part');
	}

	function endTest() {
		unset($this->Part);
		ClassRegistry::flush();
	}

}
?>