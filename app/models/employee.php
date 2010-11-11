<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $displayField = 'fname';
	var $validate = array(
		'fname' => array(
			'notempty' => array('rule' => array('notempty')),
			'alphanumeric' => array('rule' => array('alphanumeric')),
		),
		'lname' => array(
			'notempty' => array('rule' => array('notempty')),
			'alphanumeric' => array('rule' => array('alphanumeric')),
		),
		'phone' => array(
			'phone' => array('rule' => array('phone')),
		),
		/*'email' => array(
			'email' => array('rule' => array('email')),
		),*/
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Company' => array(
			'className' => 'Company',
			'joinTable' => 'companies_employees',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'company_id',
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