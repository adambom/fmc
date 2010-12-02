<?php
/* Manufacturer Fixture generated on: 2010-12-02 01:12:03 : 1291253343 */
class ManufacturerFixture extends CakeTestFixture {
	var $name = 'Manufacturer';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'type' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>