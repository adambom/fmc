<?php
/* Productreturn Fixture generated on: 2011-02-16 09:02:35 : 1297849235 */
class ProductreturnFixture extends CakeTestFixture {
	var $name = 'Productreturn';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'vendor_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'fmc_return_no' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'date' => array('type'=>'date', 'type' => 'date', 'null' => false, 'default' => NULL),
		'serial' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'reason' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'rma' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'ponumber' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'job_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'credit' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10),
		'credit_received' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'product_returned' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'closed' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'comments' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'vendor_id' => 1,
			'fmc_return_no' => 1,
			'date' => '2011-02-16',
			'serial' => 'Lorem ipsum dolor sit amet',
			'reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'rma' => 'Lorem ipsum dolor sit amet',
			'ponumber' => 'Lorem ipsum dolor sit amet',
			'job_id' => 1,
			'credit' => 1,
			'credit_received' => 1,
			'product_returned' => 1,
			'closed' => 1,
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>