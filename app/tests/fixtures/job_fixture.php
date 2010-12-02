<?php
/* Job Fixture generated on: 2010-12-02 01:12:01 : 1291253341 */
class JobFixture extends CakeTestFixture {
	var $name = 'Job';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customer_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'location_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'jobtype_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'jobcategory_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'jobnumber' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'date' => array('type'=>'date', 'type' => 'date', 'null' => false, 'default' => NULL),
		'customerdescription' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'ponumber' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'billed' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL),
		'cost' => array('type'=>'float', 'type' => 'float', 'null' => false, 'default' => NULL),
		'status' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'invoice' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'taxable' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'selected' => array('type'=>'boolean', 'type' => 'boolean', 'null' => false, 'default' => NULL),
		'comments' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'location_id' => 1,
			'jobtype_id' => 1,
			'jobcategory_id' => 1,
			'jobnumber' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'date' => '2010-12-02',
			'customerdescription' => 'Lorem ipsum dolor sit amet',
			'ponumber' => 'Lorem ipsum dolor sit amet',
			'billed' => 'Lorem ipsum dolor sit amet',
			'cost' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'invoice' => 'Lorem ipsum dolor sit amet',
			'taxable' => 1,
			'selected' => 1,
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>