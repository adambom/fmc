<?php
/* OpportunitiesVendor Test cases generated on: 2010-12-02 01:12:05 : 1291253345*/
App::import('Model', 'OpportunitiesVendor');

class OpportunitiesVendorTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunities_vendor', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.location', 'app.jobtype', 'app.jobcategory', 'app.stage');

	function startTest() {
		$this->OpportunitiesVendor =& ClassRegistry::init('OpportunitiesVendor');
	}

	function endTest() {
		unset($this->OpportunitiesVendor);
		ClassRegistry::flush();
	}

}
?>