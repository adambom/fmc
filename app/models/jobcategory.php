<?php
class Jobcategory extends AppModel {
	var $name = 'Jobcategory';
	var $displayField = 'name';
	var $validate = array(
		'description' => array(
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'jobcategory_id',
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
		'Opportunity' => array(
			'className' => 'Opportunity',
			'foreignKey' => 'jobcategory_id',
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