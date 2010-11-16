<?php
class Job extends AppModel {
	var $name = 'Job';
	var $validate = array(
		'customer_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobtype_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobcategory_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
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
		'Jobtype' => array(
			'className' => 'Jobtype',
			'foreignKey' => 'jobtype_id',
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
		)
	);

	var $hasAndBelongsToMany = array(
		'Location' => array(
			'className' => 'Location',
			'joinTable' => 'jobs_locations',
			'foreignKey' => 'job_id',
			'associationForeignKey' => 'location_id',
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