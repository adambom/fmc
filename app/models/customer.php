<?php
class Customer extends AppModel {
	var $name = 'Customer';
	var $validate = array(
		'company_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'address1' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'address2' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'city' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'state' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'zip' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'country' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'phone' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'fax' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'url' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'created_date' => array(
			'date' => array('rule' => array('date')),
		),
		'updated_date' => array(
			'date' => array('rule' => array('date')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'customer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Opportunity' => array(
			'className' => 'Opportunity',
			'foreignKey' => 'customer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>