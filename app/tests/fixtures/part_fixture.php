<?php
/* Part Fixture generated on: 2010-11-30 23:11:22 : 1291160602 */
class PartFixture extends CakeTestFixture {
	var $name = 'Part';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'vendor_id' => array('type'=>'integer', 'type' => 'integer', 'null' => true, 'default' => NULL),
		'manufacturer_id' => array('type'=>'integer', 'type' => 'integer', 'null' => true, 'default' => NULL),
		'partcategory_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'partsubcategory_id' => array('type'=>'integer', 'type' => 'integer', 'null' => true, 'default' => NULL),
		'deviceid' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'partnumber' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'price' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL),
		'materialcost' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL),
		'specpath' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'guidepath' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'type' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'vendor_id' => 1,
			'manufacturer_id' => 1,
			'partcategory_id' => 1,
			'partsubcategory_id' => 1,
			'deviceid' => 'Lorem ipsum dolor sit amet',
			'partnumber' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'price' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'materialcost' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'specpath' => 'Lorem ipsum dolor sit amet',
			'guidepath' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>