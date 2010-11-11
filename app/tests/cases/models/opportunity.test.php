<?php
/* Opportunity Test cases generated on: 2010-11-10 22:11:06 : 1289445366*/
App::import('Model', 'Opportunity');

class OpportunityTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.opportunities_vendor', 'app.employee', 'app.companies_employee', 'app.job', 'app.jobcategory', 'app.stage');

	function startTest() {
		$this->Opportunity =& ClassRegistry::init('Opportunity');
	}

	function endTest() {
		unset($this->Opportunity);
		ClassRegistry::flush();
	}

}
?>