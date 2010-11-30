<?php
/* OpportunitiesVendor Test cases generated on: 2010-11-30 23:11:21 : 1291160601*/
App::import('Model', 'OpportunitiesVendor');

class OpportunitiesVendorTestCase extends CakeTestCase {
	var $fixtures = array('app.opportunities_vendor', 'app.opportunity', 'app.customer', 'app.company', 'app.manufacturer', 'app.part', 'app.vendor', 'app.productreturn', 'app.productreturns_part', 'app.partcategory', 'app.partsubcategory', 'app.employee', 'app.companies_employee', 'app.job', 'app.jobtype', 'app.jobcategory', 'app.location', 'app.jobs_location', 'app.stage');

	function startTest() {
		$this->OpportunitiesVendor =& ClassRegistry::init('OpportunitiesVendor');
	}

	function endTest() {
		unset($this->OpportunitiesVendor);
		ClassRegistry::flush();
	}

}
?>