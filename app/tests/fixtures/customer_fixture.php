<?php
/* Customer Fixture generated on: 2010-11-30 23:11:15 : 1291160595 */
class CustomerFixture extends CakeTestFixture {
	var $name = 'Customer';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address1' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address2' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'city' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'state' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'zip' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'country' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'phone' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'fax' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20),
		'url' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'short_description' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'created_date' => array('type'=>'datetime', 'type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated_date' => array('type'=>'datetime', 'type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'address1' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'zip' => 1,
			'country' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor ',
			'fax' => 'Lorem ipsum dolor ',
			'url' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'short_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created_date' => '2010-11-30 23:43:15',
			'updated_date' => '2010-11-30 23:43:15'
		),
	);
}
?>