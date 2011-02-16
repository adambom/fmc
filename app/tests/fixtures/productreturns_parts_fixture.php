<?php
/* ProductreturnsParts Fixture generated on: 2011-02-16 09:02:19 : 1297849099 */
class ProductreturnsPartsFixture extends CakeTestFixture {
	var $name = 'ProductreturnsParts';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'productreturn_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'part_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'productreturn_id' => 1,
			'part_id' => 1
		),
	);
}
?>