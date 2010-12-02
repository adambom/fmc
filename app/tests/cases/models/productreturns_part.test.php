<?php
/* ProductreturnsPart Test cases generated on: 2010-12-02 01:12:08 : 1291253348*/
App::import('Model', 'ProductreturnsPart');

class ProductreturnsPartTestCase extends CakeTestCase {
	var $fixtures = array('app.productreturns_part', 'app.productreturn', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee');

	function startTest() {
		$this->ProductreturnsPart =& ClassRegistry::init('ProductreturnsPart');
	}

	function endTest() {
		unset($this->ProductreturnsPart);
		ClassRegistry::flush();
	}

}
?>