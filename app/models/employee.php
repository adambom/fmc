<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $displayField = array("%s, %s", "{n}.Employee.lname", "{n}.Employee.fname");
	var $actAs = array ('Searchable');
	var $order = 'Employee.lname ASC';	
	var $validate = array(
		'fname' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'lname' => array(
			'notempty' => array('rule' => array('notempty')),
		)
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