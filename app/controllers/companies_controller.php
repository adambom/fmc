<?php
class CompaniesController extends AppController {

	var $name = 'Companies';
	var $helpers = array('Html', 'Form','Ajax','Javascript');
	var $paginate = array(
		'order' => array(
			'Company.name' => 'asc'
		)
	);

	function index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Company', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('company', $this->Company->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Company->create();
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The Company has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Company could not be saved. Please, try again.', true));
			}
		}
		$employees = $this->Company->Employee->find('list');
		$this->set(compact('employees'));
	}

	function edit($id = null, $q = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Company', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The Company has been saved', true));
				if($this->data['Company']['q']) {
					$this->redirect(array('action' => 'search', $this->data['Company']['q']));
				} else {
					$this->redirect(array('action' => 'index'));
				}
			} else {
				$this->Session->setFlash(__('The Company could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			if($q) {
				$this->set('q',$q);
			} else {
				$this->set('q',null);
			}
			$this->data = $this->Company->read(null, $id);
		}
		$employees = $this->Company->Employee->find('list');
		$this->set(compact('employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Company', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Company->del($id)) {
			$this->Session->setFlash(__('Company deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function search($q = null) {
		if(!$q) {
			$q = $this->data['Company']['q'];
		}
		$this->set('q', $q);
		$conditions = array("Company.name LIKE" => "%".$q."%");
		$this->set('results', $this->paginate('Company', $conditions));
		//$this->set('results', $this->Company->find('all', array('conditions' => $conditions)));
	}
	function autoComplete($q = null) {
		if(strlen($q)>2) {
			$conditions = array("Company.name LIKE" => "%".$q."%");
			$this->set('results', $this->Company->find('list', array('conditions'=>$conditions)));
			$this->layout = 'ajax';
		}
	}
}
?>
