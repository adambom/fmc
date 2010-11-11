<?php
/* Job Test cases generated on: 2010-11-10 22:11:10 : 1289445490*/
App::import('Model', 'Job');

class JobTestCase extends CakeTestCase {
	var $fixtures = array('app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.location', 'app.jobs_location');

	function startTest() {
		$this->Job =& ClassRegistry::init('Job');
	}

	function endTest() {
		unset($this->Job);
		ClassRegistry::flush();
	}

}
?>