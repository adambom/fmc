<?php
/* Jobcategory Test cases generated on: 2010-11-30 23:11:17 : 1291160597*/
App::import('Model', 'Jobcategory');

class JobcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.jobcategory', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.location', 'app.jobs_location');

	function startTest() {
		$this->Jobcategory =& ClassRegistry::init('Jobcategory');
	}

	function endTest() {
		unset($this->Jobcategory);
		ClassRegistry::flush();
	}

}
?>