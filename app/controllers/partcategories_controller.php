<?php
class PartcategoriesController extends AppController {

	var $name = 'Partcategories';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Partcategory->recursive = 0;
		$this->set('partcategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Partcategory', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('partcategory', $this->Partcategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Partcategory->create();
			if ($this->Partcategory->save($this->data)) {
				$this->Session->setFlash(__('The Partcategory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Partcategory could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Partcategory', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Partcategory->save($this->data)) {
				$this->Session->setFlash(__('The Partcategory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Partcategory could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Partcategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Partcategory', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Partcategory->del($id)) {
			$this->Session->setFlash(__('Partcategory deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Partcategory was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>