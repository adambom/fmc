<?php
class PartsubcategoriesController extends AppController {

	var $name = 'Partsubcategories';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Partsubcategory->recursive = 0;
		$this->set('partsubcategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Partsubcategory', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('partsubcategory', $this->Partsubcategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Partsubcategory->create();
			if ($this->Partsubcategory->save($this->data)) {
				$this->Session->setFlash(__('The Partsubcategory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Partsubcategory could not be saved. Please, try again.', true));
			}
		}
		$partcategories = $this->Partsubcategory->Partcategory->find('list');
		$this->set(compact('partcategories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Partsubcategory', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Partsubcategory->save($this->data)) {
				$this->Session->setFlash(__('The Partsubcategory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Partsubcategory could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Partsubcategory->read(null, $id);
		}
		$partcategories = $this->Partsubcategory->Partcategory->find('list');
		$this->set(compact('partcategories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Partsubcategory', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Partsubcategory->del($id)) {
			$this->Session->setFlash(__('Partsubcategory deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partsubcategory was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>