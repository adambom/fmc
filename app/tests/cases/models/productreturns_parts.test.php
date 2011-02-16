<?php
/* ProductreturnsParts Test cases generated on: 2011-02-16 09:02:19 : 1297849099*/
App::import('Model', 'ProductreturnsParts');

class ProductreturnsPartsTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturns_parts', 'app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.productreturns_part', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->ProductreturnsParts =& ClassRegistry::init('ProductreturnsParts');
	}

	function endTest() {
		unset($this->ProductreturnsParts);
		ClassRegistry::flush();
	}

}
?>