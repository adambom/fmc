<?php
class Productreturn extends AppModel {
	var $name = 'Productreturn';
	var $validate = array(
		'vendor_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'fmc_return_no' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'date' => array(
			'date' => array('rule' => array('date')),
		),
		'serial' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'rma' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'ponumber' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'job_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'credit_received' => array(
			'boolean' => array('rule' => array('boolean')),
		),
		'product_returned' => array(
			'boolean' => array('rule' => array('boolean')),
		),
		'closed' => array(
			'boolean' => array('rule' => array('boolean')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Vendor' => array(
			'className' => 'Vendor',
			'foreignKey' => 'vendor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>