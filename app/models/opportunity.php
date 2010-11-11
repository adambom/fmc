<?php
class Opportunity extends AppModel {
	var $name = 'Opportunity';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'alphanumeric' => array('rule' => array('alphanumeric')),
			'maxlength' => array('rule' => array('maxlength')),
		),
		'description' => array(
			'maxlength' => array('rule' => array('maxlength')),
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