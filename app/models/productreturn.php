<?php
class Productreturn extends AppModel {
	var $name = 'Productreturn';
	var $displayField = 'comments';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Vendor' => array(
			'className' => 'Company',
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

	var $hasAndBelongsToMany = array(
		'Part' => array(
			'className' => 'Part',
			'joinTable' => 'productreturns_parts',
			'foreignKey' => 'productreturn_id',
			'associationForeignKey' => 'part_id',
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