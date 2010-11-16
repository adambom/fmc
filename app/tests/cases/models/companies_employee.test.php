<?php
/* CompaniesEmployee Test cases generated on: 2010-11-11 23:11:34 : 1289535214*/
App::import('Model', 'CompaniesEmployee');

class CompaniesEmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.companies_employee', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.manufacturer', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.employee');

	function startTest() {
		$this->CompaniesEmployee =& ClassRegistry::init('CompaniesEmployee');
	}

	function endTest() {
		unset($this->CompaniesEmployee);
		ClassRegistry::flush();
	}

}
?>