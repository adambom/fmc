<?php
class CompaniesEmployeesController extends AppController {

	var $name = 'CompaniesEmployees';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->CompaniesEmployee->recursive = 0;
		$this->set('companiesEmployees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid CompaniesEmployee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('companiesEmployee', $this->CompaniesEmployee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CompaniesEmployee->create();
			if ($this->CompaniesEmployee->save($this->data)) {
				$this->Session->setFlash(__('The CompaniesEmployee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The CompaniesEmployee could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid CompaniesEmployee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CompaniesEmployee->save($this->data)) {
				$this->Session->setFlash(__('The CompaniesEmployee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The CompaniesEmployee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CompaniesEmployee->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for CompaniesEmployee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CompaniesEmployee->del($id)) {
			$this->Session->setFlash(__('CompaniesEmployee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('CompaniesEmployee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>