<?php
class PartsController extends AppController {

	var $name = 'Parts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Part->recursive = 0;
		$this->set('parts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Part', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('part', $this->Part->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Part->create();
			if ($this->Part->save($this->data)) {
				$this->Session->setFlash(__('The Part has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Part could not be saved. Please, try again.', true));
			}
		}
		$vendors = $this->Part->Vendor->find('list');
		$manufacturers = $this->Part->Manufacturer->find('list');
		$partcategories = $this->Part->Partcategory->find('list');
		$productreturns = $this->Part->Productreturn->find('list');
		$this->set(compact('vendors', 'manufacturers', 'partcategories', 'productreturns'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Part', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Part->save($this->data)) {
				$this->Session->setFlash(__('The Part has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Part could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Part->read(null, $id);
		}
		$vendors = $this->Part->Vendor->find('list');
		$manufacturers = $this->Part->Manufacturer->find('list');
		$partcategories = $this->Part->Partcategory->find('list');
		$productreturns = $this->Part->Productreturn->find('list');
		$this->set(compact('vendors', 'manufacturers', 'partcategories', 'productreturns'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Part', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Part->del($id)) {
			$this->Session->setFlash(__('Part deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Part was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>