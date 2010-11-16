<?php
class ProductreturnsPartsController extends AppController {

	var $name = 'ProductreturnsParts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ProductreturnsPart->recursive = 0;
		$this->set('productreturnsParts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductreturnsPart', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('productreturnsPart', $this->ProductreturnsPart->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductreturnsPart->create();
			if ($this->ProductreturnsPart->save($this->data)) {
				$this->Session->setFlash(__('The ProductreturnsPart has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ProductreturnsPart could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductreturnsPart', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductreturnsPart->save($this->data)) {
				$this->Session->setFlash(__('The ProductreturnsPart has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ProductreturnsPart could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductreturnsPart->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductreturnsPart', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductreturnsPart->del($id)) {
			$this->Session->setFlash(__('ProductreturnsPart deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('ProductreturnsPart was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>