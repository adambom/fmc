<?php
class Part extends AppModel {
	var $name = 'Part';
	var $validate = array(
		'vendor_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'manufacturer_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'partcategory_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
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
		'Manufacturer' => array(
			'className' => 'Manufacturer',
			'foreignKey' => 'manufacturer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Partcategory' => array(
			'className' => 'Partcategory',
			'foreignKey' => 'partcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Productreturn' => array(
			'className' => 'Productreturn',
			'joinTable' => 'productreturns_parts',
			'foreignKey' => 'part_id',
			'associationForeignKey' => 'productreturn_id',
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