<?php
/* Stage Test cases generated on: 2010-11-10 22:11:18 : 1289445678*/
App::import('Model', 'Stage');

class StageTestCase extends CakeTestCase {
	var $fixtures = array('app.stage', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.location', 'app.jobs_location');

	function startTest() {
		$this->Stage =& ClassRegistry::init('Stage');
	}

	function endTest() {
		unset($this->Stage);
		ClassRegistry::flush();
	}

}
?>