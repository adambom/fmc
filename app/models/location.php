<?php
class Location extends AppModel {
	var $name = 'Location';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'alphanumeric' => array('rule' => array('alphanumeric')),
			'maxlength' => array('rule' => array('maxlength')),
		),
		'description' => array(
			'maxlength' => array('rule' => array('maxlength')),
		),
		'address1' => array(
			'alphanumeric' => array('rule' => array('alphanumeric')),
			'maxlength' => array('rule' => array('maxlength')),
			'notempty' => array('rule' => array('notempty')),
		),
		'address2' => array(
			'alphanumeric' => array('rule' => array('alphanumeric')),
			'maxlength' => array('rule' => array('maxlength')),
		),
		'city' => array(
			'alphanumeric' => array('rule' => array('alphanumeric')),
			'maxlength' => array('rule' => array('maxlength')),
		),
		'state' => array(
			'alphanumeric' => array('rule' => array('alphanumeric')),
		),
		'zip' => array(
			'postal' => array('rule' => array('postal')),
		),
		'phone' => array(
			'phone' => array('rule' => array('phone')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Job' => array(
			'className' => 'Job',
			'joinTable' => 'jobs_locations',
			'foreignKey' => 'location_id',
			'associationForeignKey' => 'job_id',
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