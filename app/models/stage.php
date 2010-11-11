<?php
class Stage extends AppModel {
	var $name = 'Stage';
	var $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Opportunity' => array(
			'className' => 'Opportunity',
			'foreignKey' => 'stage_id',
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