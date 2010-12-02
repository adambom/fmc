<?php
/* CompaniesEmployee Test cases generated on: 2010-12-02 01:12:59 : 1291253339*/
App::import('Model', 'CompaniesEmployee');

class CompaniesEmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.companies_employee', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.vendor', 'app.part', 'app.manufacturer', 'app.partcategory', 'app.partsubcategory', 'app.productreturn', 'app.productreturns_part', 'app.opportunities_vendor', 'app.employee');

	function startTest() {
		$this->CompaniesEmployee =& ClassRegistry::init('CompaniesEmployee');
	}

	function endTest() {
		unset($this->CompaniesEmployee);
		ClassRegistry::flush();
	}

}
?>