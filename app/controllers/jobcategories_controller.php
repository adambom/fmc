<?php
class JobcategoriesController extends AppController {

	var $name = 'Jobcategories';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Jobcategory->recursive = 0;
		$this->set('jobcategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Jobcategory', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobcategory', $this->Jobcategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Jobcategory->create();
			if ($this->Jobcategory->save($this->data)) {
				$this->Session->setFlash(__('The Jobcategory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Jobcategory could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Jobcategory', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Jobcategory->save($this->data)) {
				$this->Session->setFlash(__('The Jobcategory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Jobcategory could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Jobcategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Jobcategory', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Jobcategory->del($id)) {
			$this->Session->setFlash(__('Jobcategory deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Jobcategory was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>