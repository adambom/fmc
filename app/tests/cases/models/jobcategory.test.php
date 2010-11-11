<?php
/* Jobcategory Test cases generated on: 2010-11-10 22:11:26 : 1289445746*/
App::import('Model', 'Jobcategory');

class JobcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.jobcategory', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.location', 'app.jobs_location');

	function startTest() {
		$this->Jobcategory =& ClassRegistry::init('Jobcategory');
	}

	function endTest() {
		unset($this->Jobcategory);
		ClassRegistry::flush();
	}

}
?>