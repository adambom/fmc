<?php
class EmployeesController extends AppController {

	var $name = 'Employees';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Employee->recursive = 1;
		$companies = $this->Employee->Company->find('list');
		$this->set(compact('companies'));
		$this->set('employees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Employee', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Employee->create();
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The Employee has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Employee could not be saved. Please, try again.', true));
			}
		}
		$companies = $this->Employee->Company->find('list');
		$this->set(compact('companies'));
	}

	function edit($id = null, $q = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Employee', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(__('The Employee has been saved', true));
				if($this->data['Employee']['q']) {
					$this->redirect(array('action' => 'search', $this->data['Employee']['q']));
				} else {
					$this->redirect(array('action' => 'index'));
				}
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Employee could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			if($q) {
				$this->set('q', $q);
			} else {
				$this->set('q', null);
			}
			$this->data = $this->Employee->read(null, $id);
		}
		$companies = $this->Employee->Company->find('list');
		$this->set(compact('companies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Employee', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employee->del($id)) {
			$this->Session->setFlash(__('Employee deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function search($q = null) {
		if(!$q) {
			$q = $this->data['Employee']['q'];
		}
		$conditions = array(
			"OR" => array (
				"Employee.fname LIKE" => "%".$q."%",
				"Employee.lname LIKE" => "%".$q."%",
				"Employee.email LIKE" => "%".$q."%",
			)
		);
		$this->set('q', $q);
		$this->set('results', $this->paginate('Employee', $conditions));
		//$this->set('results', $this->Employee->find('all', array('conditions' => $conditions)));
	}
}
?>