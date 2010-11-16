<?php
class Location extends AppModel {
	var $name = 'Location';
	var $validate = array(
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'address1' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'address2' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'city' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'state' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'zip' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'phone' => array(
			'notempty' => array('rule' => array('notempty')),
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