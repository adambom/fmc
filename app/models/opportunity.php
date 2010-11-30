<?php
class Opportunity extends AppModel {
	var $name = 'Opportunity';
	var $validate = array(
		'customer_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobcategory_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'stage_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'shortdescription' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'owner' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'leadsource' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'amount' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'expamount' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'forecastedclosedate' => array(
			'date' => array('rule' => array('date')),
		),
		'actualclosedate' => array(
			'date' => array('rule' => array('date')),
		),
		'nextstep' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'createddate' => array(
			'date' => array('rule' => array('date')),
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
		'Jobcategory' => array(
			'className' => 'Jobcategory',
			'foreignKey' => 'jobcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Stage' => array(
			'className' => 'Stage',
			'foreignKey' => 'stage_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Vendor' => array(
			'className' => 'Vendor',
			'joinTable' => 'opportunities_vendors',
			'foreignKey' => 'opportunity_id',
			'associationForeignKey' => 'vendor_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>