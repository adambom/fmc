<?php
/* OpportunitiesVendor Fixture generated on: 2010-11-11 23:11:43 : 1289535223 */
class OpportunitiesVendorFixture extends CakeTestFixture {
	var $name = 'OpportunitiesVendor';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'opportunity_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'vendor_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'opportunity_id' => 1,
			'vendor_id' => 1
		),
	);
}
?>