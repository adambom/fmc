<?php
class OpportunitiesVendorsController extends AppController {

	var $name = 'OpportunitiesVendors';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->OpportunitiesVendor->recursive = 0;
		$this->set('opportunitiesVendors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid OpportunitiesVendor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('opportunitiesVendor', $this->OpportunitiesVendor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->OpportunitiesVendor->create();
			if ($this->OpportunitiesVendor->save($this->data)) {
				$this->Session->setFlash(__('The OpportunitiesVendor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The OpportunitiesVendor could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid OpportunitiesVendor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OpportunitiesVendor->save($this->data)) {
				$this->Session->setFlash(__('The OpportunitiesVendor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The OpportunitiesVendor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OpportunitiesVendor->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for OpportunitiesVendor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OpportunitiesVendor->del($id)) {
			$this->Session->setFlash(__('OpportunitiesVendor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('OpportunitiesVendor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>