<?php
/* Stage Test cases generated on: 2010-12-02 01:12:08 : 1291253348*/
App::import('Model', 'Stage');

class StageTestCase extends CakeTestCase {
	var $fixtures = array('app.stage', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory');

	function startTest() {
		$this->Stage =& ClassRegistry::init('Stage');
	}

	function endTest() {
		unset($this->Stage);
		ClassRegistry::flush();
	}

}
?>