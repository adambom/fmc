<?php
class Company extends AppModel {
	var $name = 'Company';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'company_id',
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
		'Manufacturer' => array(
			'className' => 'Manufacturer',
			'foreignKey' => 'company_id',
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
		'Vendor' => array(
			'className' => 'Vendor',
			'foreignKey' => 'company_id',
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


	var $hasAndBelongsToMany = array(
		'Employee' => array(
			'className' => 'Employee',
			'joinTable' => 'companies_employees',
			'foreignKey' => 'company_id',
			'associationForeignKey' => 'employee_id',
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