<?php
/* Productreturn Fixture generated on: 2010-11-30 23:11:24 : 1291160604 */
class ProductreturnFixture extends CakeTestFixture {
	var $name = 'Productreturn';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'vendor_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'vendor_id' => 1
		),
	);
}
?>