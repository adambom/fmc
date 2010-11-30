<?php
/* Opportunity Test cases generated on: 2010-11-30 23:11:21 : 1291160601*/
App::import('Model', 'Opportunity');

class OpportunityTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.location', 'app.jobs_location', 'app.stage');

	function startTest() {
		$this->Opportunity =& ClassRegistry::init('Opportunity');
	}

	function endTest() {
		unset($this->Opportunity);
		ClassRegistry::flush();
	}

}
?>