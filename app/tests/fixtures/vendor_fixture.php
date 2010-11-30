<?php
/* Vendor Fixture generated on: 2010-11-30 23:11:26 : 1291160606 */
class VendorFixture extends CakeTestFixture {
	var $name = 'Vendor';

	var $fields = array(
		'id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_id' => array('type'=>'integer', 'type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type'=>'string', 'type' => 'string', 'null' => false, 'default' => NULL),
		'contactname' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'address' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'city' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'zip' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'state' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'phone' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'fax' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'paymentterms' => array('type'=>'string', 'type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $records = array(
		array(
			'id' => 1,
			'company_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'contactname' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'zip' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'paymentterms' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>