<?php
class VendorsController extends AppController {

	var $name = 'Vendors';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Vendor->recursive = 0;
		$this->set('vendors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Vendor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vendor', $this->Vendor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vendor->create();
			if ($this->Vendor->save($this->data)) {
				$this->Session->setFlash(__('The Vendor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Vendor could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Vendor->Company->find('list');
		$opportunities = $this->Vendor->Opportunity->find('list');
		$this->set(compact('companies', 'opportunities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Vendor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vendor->save($this->data)) {
				$this->Session->setFlash(__('The Vendor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Vendor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vendor->read(null, $id);
		}
		$companies = $this->Vendor->Company->find('list');
		$opportunities = $this->Vendor->Opportunity->find('list');
		$this->set(compact('companies', 'opportunities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Vendor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vendor->del($id)) {
			$this->Session->setFlash(__('Vendor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vendor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>