<?php
/* Manufacturer Fixture generated on: 2010-11-10 22:11:05 : 1289444945 */
class ManufacturerFixture extends CakeTestFixture {
	var $name = 'Manufacturer';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'company_id' => 1
		),
	);
}
?>