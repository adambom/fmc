<?php
/* Productreturn Test cases generated on: 2010-12-02 01:12:07 : 1291253347*/
App::import('Model', 'Productreturn');

class ProductreturnTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->Productreturn =& ClassRegistry::init('Productreturn');
	}

	function endTest() {
		unset($this->Productreturn);
		ClassRegistry::flush();
	}

}
?>