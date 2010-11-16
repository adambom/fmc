<?php
class JobsLocationsController extends AppController {

	var $name = 'JobsLocations';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->JobsLocation->recursive = 0;
		$this->set('jobsLocations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid JobsLocation', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobsLocation', $this->JobsLocation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->JobsLocation->create();
			if ($this->JobsLocation->save($this->data)) {
				$this->Session->setFlash(__('The JobsLocation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The JobsLocation could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid JobsLocation', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobsLocation->save($this->data)) {
				$this->Session->setFlash(__('The JobsLocation has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The JobsLocation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobsLocation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for JobsLocation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobsLocation->del($id)) {
			$this->Session->setFlash(__('JobsLocation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('JobsLocation was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>