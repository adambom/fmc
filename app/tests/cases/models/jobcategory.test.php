<?php
/* Jobcategory Test cases generated on: 2010-12-02 01:12:01 : 1291253341*/
App::import('Model', 'Jobcategory');

class JobcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.jobcategory', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.location', 'app.jobtype');

	function startTest() {
		$this->Jobcategory =& ClassRegistry::init('Jobcategory');
	}

	function endTest() {
		unset($this->Jobcategory);
		ClassRegistry::flush();
	}

}
?>