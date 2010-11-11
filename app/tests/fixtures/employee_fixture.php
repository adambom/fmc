<?php
/* Employee Fixture generated on: 2010-11-10 22:11:54 : 1289445114 */
class EmployeeFixture extends CakeTestFixture {
	var $name = 'Employee';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fname' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'lname' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'phone' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 12),
		'email' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'fname' => 'Lorem ipsum dolor sit amet',
			'lname' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsu',
			'email' => 1
		),
	);
}
?>