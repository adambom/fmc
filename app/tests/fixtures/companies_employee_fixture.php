<?php
/* CompaniesEmployee Fixture generated on: 2010-12-02 01:12:58 : 1291253338 */
class CompaniesEmployeeFixture extends CakeTestFixture {
	var $name = 'CompaniesEmployee';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'employee_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'employee_id' => 1
		),
	);
}
?>