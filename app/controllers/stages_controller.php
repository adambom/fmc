<?php
class StagesController extends AppController {

	var $name = 'Stages';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Stage->recursive = 0;
		$this->set('stages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Stage', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('stage', $this->Stage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Stage->create();
			if ($this->Stage->save($this->data)) {
				$this->Session->setFlash(__('The Stage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Stage could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Stage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Stage->save($this->data)) {
				$this->Session->setFlash(__('The Stage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Stage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Stage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Stage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Stage->del($id)) {
			$this->Session->setFlash(__('Stage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Stage was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>