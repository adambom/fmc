<?php
/* Opportunity Fixture generated on: 2010-11-10 22:11:06 : 1289445366 */
class OpportunityFixture extends CakeTestFixture {
	var $name = 'Opportunity';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customer_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'jobcategory_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'stage_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'description' => array('type'=>'text', 'type' => 'text', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'jobcategory_id' => 1,
			'stage_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
?>