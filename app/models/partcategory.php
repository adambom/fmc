<?php
class Partcategory extends AppModel {
	var $name = 'Partcategory';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
			'alphanumeric' => array('rule' => array('alphanumeric')),
			'maxlength' => array('rule' => array('maxlength')),
		),
		'description' => array(
			'maxlength' => array('rule' => array('maxlength')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Part' => array(
			'className' => 'Part',
			'foreignKey' => 'partcategory_id',
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
		'Partsubcategory' => array(
			'className' => 'Partsubcategory',
			'foreignKey' => 'partcategory_id',
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