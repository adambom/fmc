<?php
class Job extends AppModel {
	var $name = 'Job';
	var $actAs = array ('Searchable');
	var $order = array('Job.id' => 'desc', 'Job.status'=>'asc', 'Job.date' => 'desc');
	var $validate = array(
		'customer_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'location_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobtype_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobcategory_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'jobnumber' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'name' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'date' => array(
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
			'order' => 'Company.name ASC'
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => 'Location.name ASC'
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
}
?>