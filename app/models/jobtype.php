<?php
class Jobtype extends AppModel {
	var $name = 'Jobtype';
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

	var $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'jobtype_id',
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