<?php
/* JobsLocation Fixture generated on: 2010-11-30 23:11:18 : 1291160598 */
class JobsLocationFixture extends CakeTestFixture {
	var $name = 'JobsLocation';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'job_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'location_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'job_id' => 1,
			'location_id' => 1
		),
	);
}
?>