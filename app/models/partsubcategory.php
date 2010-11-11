<?php
class Partsubcategory extends AppModel {
	var $name = 'Partsubcategory';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Partcategory' => array(
			'className' => 'Partcategory',
			'foreignKey' => 'partcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>