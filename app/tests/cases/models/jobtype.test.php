<?php
/* Jobtype Test cases generated on: 2010-11-10 22:11:04 : 1289445784*/
App::import('Model', 'Jobtype');

class JobtypeTestCase extends CakeTestCase {
	var $fixtures = array('app.jobtype', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee', 'app.location', 'app.jobs_location');

	function startTest() {
		$this->Jobtype =& ClassRegistry::init('Jobtype');
	}

	function endTest() {
		unset($this->Jobtype);
		ClassRegistry::flush();
	}

}
?>