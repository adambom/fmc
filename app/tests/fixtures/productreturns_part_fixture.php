<?php
/* ProductreturnsPart Fixture generated on: 2010-11-30 23:11:25 : 1291160605 */
class ProductreturnsPartFixture extends CakeTestFixture {
	var $name = 'ProductreturnsPart';

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