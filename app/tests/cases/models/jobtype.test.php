<?php
/* Jobtype Test cases generated on: 2010-12-02 01:12:02 : 1291253342*/
App::import('Model', 'Jobtype');

class JobtypeTestCase extends CakeTestCase {
	var $fixtures = array('app.jobtype', 'app.job', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.opportunity', 'app.jobcategory', 'app.stage', 'app.opportunities_vendor', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.location');

	function startTest() {
		$this->Jobtype =& ClassRegistry::init('Jobtype');
	}

	function endTest() {
		unset($this->Jobtype);
		ClassRegistry::flush();
	}

}
?>