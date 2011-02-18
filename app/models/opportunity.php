<?php
class Opportunity extends AppModel {
	var $name = 'Opportunity';
	var $order = array("Opportunity.id" => 'DESC');
	var $actAs = array ('Searchable');
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
		'createddate' => array(
			'date' => array('rule' => array('date')),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
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
			'order' => 'Stage.id ASC'
		)
	);

	var $hasAndBelongsToMany = array(
		'Vendor' => array(
			'className' => 'Company',
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