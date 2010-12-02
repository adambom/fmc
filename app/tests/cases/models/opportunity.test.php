<?php
/* Opportunity Test cases generated on: 2010-12-02 01:12:04 : 1291253344*/
App::import('Model', 'Opportunity');

class OpportunityTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.stage');

	function startTest() {
		$this->Opportunity =& ClassRegistry::init('Opportunity');
	}

	function endTest() {
		unset($this->Opportunity);
		ClassRegistry::flush();
	}

}
?>