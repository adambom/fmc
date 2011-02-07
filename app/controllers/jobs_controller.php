<?php
class JobsController extends AppController {

	var $name = 'Jobs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Job->recursive = 0;
		$status_options = array('New' => 'New', 'Open' => 'Open', 'In Progress' => 'In Progress', 'Billed' => 'Billed', 'Closed' => 'Closed');
		$this->set('status_options', $status_options);
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
		$status_options = array('New' => 'New', 'Open' => 'Open', 'In Progress' => 'In Progress', 'Billed' => 'Billed', 'Closed' => 'Closed');
		$this->set('status_options', $status_options);
		$companies = $this->Job->Company->find('list');
		$locations = $this->Job->Location->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$jobcategories = $this->Job->Jobcategory->find('list');
		$this->set(compact('companies', 'locations', 'jobtypes', 'jobcategories'));
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
		$status_options = array('New' => 'New', 'Open' => 'Open', 'In Progress' => 'In Progress', 'Billed' => 'Billed', 'Closed' => 'Closed');
		$this->set('status_options', $status_options);
		$companies = $this->Job->Company->find('list');
		$locations = $this->Job->Location->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$jobcategories = $this->Job->Jobcategory->find('list');
		$this->set(compact('companies', 'locations', 'jobtypes', 'jobcategories'));
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
	function search() {
		$q = $this->data['Job']['q'];
		$conditions = array(
			"OR" => array (
				"Job.name LIKE" => "%".$q."%",
				"Job.jobnumber LIKE" => "%".$q."%",
				"Company.name LIKE" => "%".$q."%",
				"Location.name LIKE" => "%".$q."%",
				"Jobtype.name LIKE" => "%".$q."%",
			)
		);
		$status_options = array('New' => 'New', 'Open' => 'Open', 'In Progress' => 'In Progress', 'Billed' => 'Billed', 'Closed' => 'Closed');
		$this->set('status_options', $status_options);
		$this->set('results', $this->Job->find('all', array('conditions' => $conditions)));
	}
	function convert($opportunity_id = null, $company_id = null, $jobcategory_id = null, $name = null) {
		if (!$opportunity_id && !empty($this->data)) {
			$this->Session->setFlash(__('Invalid Opportunity', true));
			$this->redirect(array('controller' => 'opportunities', 'action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->Job->create();
			if ($this->Job->save($this->data)) {
				$this->Session->setFlash(__('The Opportunity has been converted to a Job', true));
				$this->redirect(array('controller'=>'opportunities', 'action' => 'edit', $opportunity_id));
			} else {
				$this->Session->setFlash(__('The Opportunity could not be converted to a Job. Please, try again.', true));
			}
		}
		if($company_id) {
			$this->set('company_id', $company_id);
		}
		if($jobcategory_id) {
			$this->set('jobcategory_id', $jobcategory_id);
		}
		if($name) {
			$this->set('name', $name);
		}
		$this->set('status_options', $status_options);
		$companies = $this->Job->Company->find('list');
		$locations = $this->Job->Location->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$jobcategories = $this->Job->Jobcategory->find('list');
		$this->set(compact('companies', 'locations', 'jobtypes', 'jobcategories'));	
	}
	function close($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job', true));
			$this->redirect(array('action'=>'index'));
		} else {
			$this->Job->read('status', $id);
			$this->Job->set('status', 'Closed');
			if($this->Job->save()) {
				$this->Session->setFlash(__('Job Closed', true));
			} else {
				$this->Session->setFlash(__('Job could not be closed', true));
			}
			$this->redirect(array('action' => 'index'));
		}
		
	}
	function change_status($id = null, $status) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job', true));
			$this->redirect(array('action'=>'index'));
		} else {
			$this->Job->read('status', $id);
			$this->Job->set('status', $status);
			if($this->Job->save()) {
				return true;
			} else {
				return false;
			}
		}
		
	}
}
?>