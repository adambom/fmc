<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $validate = array(
		'fname' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'lname' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'title' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'address1' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'address2' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'address3' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'city' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'state' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'zip' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'country' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'phone' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'fax' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'home_phone' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'cell' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'pager' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'type' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'email' => array(
			'email' => array('rule' => array('email')),
		),
		'url' => array(
			'notempty' => array('rule' => array('notempty')),
		),
		'misc' => array(
			'notempty' => array('rule' => array('notempty')),
		),
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