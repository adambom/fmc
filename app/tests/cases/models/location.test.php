<?php
/* Location Test cases generated on: 2010-11-10 22:11:39 : 1289445939*/
App::import('Model', 'Location');

class LocationTestCase extends CakeTestCase {
	var $fixtures = array('app.location', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee', 'app.jobtype', 'app.jobs_location');

	function startTest() {
		$this->Location =& ClassRegistry::init('Location');
	}

	function endTest() {
		unset($this->Location);
		ClassRegistry::flush();
	}

}
?>