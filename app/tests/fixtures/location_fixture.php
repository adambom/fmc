<?php
/* Location Fixture generated on: 2010-11-30 23:11:19 : 1291160599 */
class LocationFixture extends CakeTestFixture {
	var $name = 'Location';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'address1' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address2' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'city' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'state' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'zip' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'phone' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 14),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'address1' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'zip' => 1,
			'phone' => 'Lorem ipsum '
		),
	);
}
?>