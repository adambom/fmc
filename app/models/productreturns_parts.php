<?php
class ProductreturnsParts extends AppModel {
	var $name = 'ProductreturnsParts';
	var $validate = array(
		'productreturn_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'part_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Productreturn' => array(
			'className' => 'Productreturn',
			'foreignKey' => 'productreturn_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Part' => array(
			'className' => 'Part',
			'foreignKey' => 'part_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>