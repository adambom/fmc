<?php
class OpportunitiesVendor extends AppModel {
	var $name = 'OpportunitiesVendor';
	var $validate = array(
		'opportunity_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
		'vendor_id' => array(
			'numeric' => array('rule' => array('numeric')),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Opportunity' => array(
			'className' => 'Opportunity',
			'foreignKey' => 'opportunity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vendor' => array(
			'className' => 'Vendor',
			'foreignKey' => 'vendor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>