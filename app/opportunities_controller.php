<?php
class OpportunitiesController extends AppController {

	var $name = 'Opportunities';
	var $helpers = array('Html', 'Form');
	var $paginate = array(
		'order' => array(
			'Opportunity.createddate' => 'desc'
		)
	);

	function index() {
		$this->Opportunity->recursive = 0;
		$stages = $this->Opportunity->Stage->find('list');
		$this->set('stages', $stages);
		$this->set('opportunities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Opportunity', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('opportunity', $this->Opportunity->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Opportunity->create();
			if ($this->Opportunity->save($this->data)) {
				$this->Session->setFlash(__('The Opportunity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Opportunity could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Opportunity->Company->find('list');
		$jobcategories = $this->Opportunity->Jobcategory->find('list');
		$stages = $this->Opportunity->Stage->find('list');
		$vendors = $this->Opportunity->Vendor->find('list', array('order'=>'Vendor.name'));
		$this->set(compact('companies', 'jobcategories', 'stages', 'vendors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Opportunity', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Opportunity->save($this->data)) {
				$this->Session->setFlash(__('The Opportunity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Opportunity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Opportunity->read(null, $id);
		}
		$companies = $this->Opportunity->Company->find('list');
		$jobcategories = $this->Opportunity->Jobcategory->find('list');
		$stages = $this->Opportunity->Stage->find('list');
		$vendors = $this->Opportunity->Vendor->find('list', array('order'=>'Vendor.name'));
		$this->set(compact('companies', 'jobcategories', 'stages', 'vendors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Opportunity', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Opportunity->del($id)) {
			$this->Session->setFlash(__('Opportunity deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Opportunity was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function search() {
		$q = $this->data['Opportunity']['q'];
		$conditions = array(
			"OR" => array (
				"Opportunity.name LIKE" => "%".$q."%",
				"Opportunity.description LIKE" => "%".$q."%",
				"Opportunity.shortdescription LIKE" => "%".$q."%"
			)
		);
		$this->set('results', $this->Opportunity->find('all', array('conditions' => $conditions)));
	}
}
?>