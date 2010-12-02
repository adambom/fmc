<?php
/* ProductreturnsPart Fixture generated on: 2010-12-02 01:12:07 : 1291253347 */
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