<?php
class Productreturn extends AppModel {
	var $name = 'Productreturn';
	var $displayField = 'vendor_id';
	var $validate = array(
		'vendor_id' => array(
			'numeric' => array('rule' => array('numeric')),
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