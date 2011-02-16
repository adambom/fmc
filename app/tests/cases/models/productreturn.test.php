<?php
/* Productreturn Test cases generated on: 2011-02-16 09:02:41 : 1297849241*/
App::import('Model', 'Productreturn');

class ProductreturnTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Productreturn =& ClassRegistry::init('Productreturn');
	}

	function endTest() {
		unset($this->Productreturn);
		ClassRegistry::flush();
	}

}
?>