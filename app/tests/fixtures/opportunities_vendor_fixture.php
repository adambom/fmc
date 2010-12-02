<?php
/* OpportunitiesVendor Fixture generated on: 2010-12-02 01:12:04 : 1291253344 */
class OpportunitiesVendorFixture extends CakeTestFixture {
	var $name = 'OpportunitiesVendor';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'opportunity_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'vendor_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'primary' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL, 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'opportunity_id' => 1,
			'vendor_id' => 1,
			'primary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>