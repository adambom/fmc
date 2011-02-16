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

	function edit($id = null, $q = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Opportunity', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Opportunity->save($this->data)) {
				$this->Session->setFlash(__('The Opportunity has been saved', true));
				if($this->data['Opportunity']['q']) {
					$this->redirect(array('action' => 'search', $this->data['Opportunity']['q']));
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The Opportunity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			if($q) {
				$this->set('q',$q);
			} else {
				$this->set('q',null);
			}
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
	function search($q = null) {
		if(!$q) {
			$q = $this->data['Opportunity']['q'];
		}
		$conditions = array(
			"OR" => array (
				"Opportunity.name LIKE" => "%".$q."%",
				"Opportunity.description LIKE" => "%".$q."%",
				"Opportunity.shortdescription LIKE" => "%".$q."%"
			)
		);
		$this->set('q', $q);
		$stages = $this->Opportunity->Stage->find('list');
		$this->set('stages', $stages);
		$this->set('results', $this->paginate('Opportunity', $conditions));
		//$this->set('results', $this->Opportunity->find('all', array('conditions' => $conditions)));
	}
	function change_stage($id = null, $stage_id) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Opportunity', true));
			$this->redirect(array('action'=>'index'));
		} else {
			$this->Opportunity->read('stage_id', $id);
			$this->Opportunity->set('stage_id', $stage_id);
			if($this->Opportunity->save()) {
				return true;
			} else {
				return false;
			}
		}
		
	}
	function close($id = null, $company_id = null, $jobcategory_id = null, $name = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Opportunity', true));
			$this->redirect(array('action'=>'index'));
		} else {
			$this->Opportunity->read('stage_id', $id);
			$this->Opportunity->set('stage_id', 9);
			if($this->Opportunity->save()) {
				$this->Session->setFlash(__('Opportunity stage set to "Closed Won". Edit details for new job below:', true));
				$this->redirect(array('controller'=>'jobs', 'action'=>'convert', $id, $company_id, $jobcategory_id, $name));
			} else {
				$this->Session->setFlash(__('There was an error saving this opportunity. Opportunity not closed.', true));
				$this->redirect(array('action'=>'index'));
			}
		}
	}
}
?>