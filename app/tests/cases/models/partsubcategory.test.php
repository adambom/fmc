<?php
/* Partsubcategory Test cases generated on: 2010-12-02 01:12:07 : 1291253347*/
App::import('Model', 'Partsubcategory');

class PartsubcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.partsubcategory', 'app.partcategory', 'app.part', 'app.vendor', 'app.company', 'app.customer', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.opportunity', 'app.stage', 'app.opportunities_vendor', 'app.manufacturer', 'app.employee', 'app.companies_employee', 'app.productreturn', 'app.productreturns_part');

	function startTest() {
		$this->Partsubcategory =& ClassRegistry::init('Partsubcategory');
	}

	function endTest() {
		unset($this->Partsubcategory);
		ClassRegistry::flush();
	}

}
?>