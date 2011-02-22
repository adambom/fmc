<?php
class Location extends AppModel {
	var $name = 'Location';
	var $recursive = 2;
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
			'notempty' => array('rule' => array('notempty')),
		),
		'phone' => array(
			'notempty' => array('rule' => array('notempty')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'location_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => array('case when Job.jobnumber>"J5" then 1900 else 2000 end desc, Job.jobnumber ' => 'desc', 'Job.status'=>'asc', 'Job.date' => 'desc'),
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>