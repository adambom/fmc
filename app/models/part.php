<?php
class Part extends AppModel {
	var $name = 'Part';
	var $displayField = 'partnumber';
	var $actAs = array ('Searchable');
	var $recursive = 2;
	var $validate = array(
		'partcategory_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'deviceid' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'partnumber' => array(
			'notempty' => array('rule' => array('notempty')),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Vendor' => array(
			'className' => 'Company',
			'foreignKey' => 'vendor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Manufacturer' => array(
			'className' => 'Company',
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
		),
		'Partsubcategory' => array(
			'className' => 'Partsubcategory',
			'foreignKey' => 'partsubcategory_id',
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