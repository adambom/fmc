<?php
/* Job Test cases generated on: 2010-12-02 01:12:02 : 1291253342*/
App::import('Model', 'Job');

class JobTestCase extends CakeTestCase {
	var $fixtures = array('app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.location', 'app.jobtype');

	function startTest() {
		$this->Job =& ClassRegistry::init('Job');
	}

	function endTest() {
		unset($this->Job);
		ClassRegistry::flush();
	}

}
?>