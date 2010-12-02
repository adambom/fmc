<?php
/* Employee Fixture generated on: 2010-12-02 01:12:00 : 1291253340 */
class EmployeeFixture extends CakeTestFixture {
	var $name = 'Employee';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fname' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'lname' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'title' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address1' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255),
		'address2' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'address3' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'city' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255),
		'state' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'zip' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'country' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'phone' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL, 'length' => 12),
		'fax' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'home_phone' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'cell' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'pager' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'type' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'email' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'url' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'misc' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'notes' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'newsletter' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL, 'length' => 1),
		'xmas' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL, 'length' => 1),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'fname' => 'Lorem ipsum dolor sit amet',
			'lname' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'address1' => 1,
			'address2' => 'Lorem ipsum dolor sit amet',
			'address3' => 'Lorem ipsum dolor sit amet',
			'city' => 1,
			'state' => 'Lorem ipsum dolor sit amet',
			'zip' => 'Lorem ipsum dolor sit amet',
			'country' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsu',
			'fax' => 'Lorem ipsum dolor sit amet',
			'home_phone' => 'Lorem ipsum dolor sit amet',
			'cell' => 'Lorem ipsum dolor sit amet',
			'pager' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet',
			'misc' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'newsletter' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'xmas' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>