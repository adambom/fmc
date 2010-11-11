<?php
class JobtypesController extends AppController {

	var $name = 'Jobtypes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Jobtype->recursive = 0;
		$this->set('jobtypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Jobtype', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobtype', $this->Jobtype->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Jobtype->create();
			if ($this->Jobtype->save($this->data)) {
				$this->Session->setFlash(__('The Jobtype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Jobtype could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Jobtype', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Jobtype->save($this->data)) {
				$this->Session->setFlash(__('The Jobtype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Jobtype could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Jobtype->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Jobtype', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Jobtype->del($id)) {
			$this->Session->setFlash(__('Jobtype deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Jobtype was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>