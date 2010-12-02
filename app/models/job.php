<?php
class Job extends AppModel {
	var $name = 'Job';
	var $validate = array(
		'customer_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'location_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobtype_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobcategory_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobnumber' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'date' => array(
			'date' => array('rule' => array('date')),
		),
		'customerdescription' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'ponumber' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'status' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'invoice' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'taxable' => array(
			'boolean' => array('rule' => array('boolean')),
		),
		'selected' => array(
			'boolean' => array('rule' => array('boolean')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Jobtype' => array(
			'className' => 'Jobtype',
			'foreignKey' => 'jobtype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Jobcategory' => array(
			'className' => 'Jobcategory',
			'foreignKey' => 'jobcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>