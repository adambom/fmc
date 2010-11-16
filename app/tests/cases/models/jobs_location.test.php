<?php
/* JobsLocation Test cases generated on: 2010-11-11 23:11:41 : 1289535221*/
App::import('Model', 'JobsLocation');

class JobsLocationTestCase extends CakeTestCase {
	var $fixtures = array('app.jobs_location', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.location');

	function startTest() {
		$this->JobsLocation =& ClassRegistry::init('JobsLocation');
	}

	function endTest() {
		unset($this->JobsLocation);
		ClassRegistry::flush();
	}

}
?>