<?php
/* ProductreturnsPart Test cases generated on: 2010-11-11 23:11:45 : 1289535225*/
App::import('Model', 'ProductreturnsPart');

class ProductreturnsPartTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturns_part', 'app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.location', 'app.jobs_location', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->ProductreturnsPart =& ClassRegistry::init('ProductreturnsPart');
	}

	function endTest() {
		unset($this->ProductreturnsPart);
		ClassRegistry::flush();
	}

}
?>