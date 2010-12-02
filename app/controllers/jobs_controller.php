<?php
class JobsController extends AppController {

	var $name = 'Jobs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Job->recursive = 0;
		$this->set('jobs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Job->create();
			if ($this->Job->save($this->data)) {
				$this->Session->setFlash(__('The Job has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
			}
		}
		$customers = $this->Job->Customer->find('list');
		$locations = $this->Job->Location->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$jobcategories = $this->Job->Jobcategory->find('list');
		$this->set(compact('customers', 'locations', 'jobtypes', 'jobcategories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Job', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data)) {
				$this->Session->setFlash(__('The Job has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Job->read(null, $id);
		}
		$customers = $this->Job->Customer->find('list');
		$locations = $this->Job->Location->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$jobcategories = $this->Job->Jobcategory->find('list');
		$this->set(compact('customers', 'locations', 'jobtypes', 'jobcategories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Job->del($id)) {
			$this->Session->setFlash(__('Job deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>