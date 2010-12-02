<?php
/* Location Fixture generated on: 2010-12-02 01:12:03 : 1291253343 */
class LocationFixture extends CakeTestFixture {
	var $name = 'Location';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address1' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address2' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'city' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'state' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'zip' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'phone' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'address1' => 'Lorem ipsum dolor sit amet',
			'address2' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'zip' => 'Lorem ip',
			'phone' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>