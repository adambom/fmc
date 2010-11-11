<?php
/* Productreturn Test cases generated on: 2010-11-10 22:11:11 : 1289446211*/
App::import('Model', 'Productreturn');

class ProductreturnTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Productreturn =& ClassRegistry::init('Productreturn');
	}

	function endTest() {
		unset($this->Productreturn);
		ClassRegistry::flush();
	}

}
?>