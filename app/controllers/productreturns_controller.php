<?php
class ProductreturnsController extends AppController {

	var $name = 'Productreturns';
	var $helpers = array('Html', 'Form', 'Html', 'Form', 'Ajax', 'Javascript');

	function index() {
		$this->Productreturn->recursive = 0;
		$this->set('productreturns', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Productreturn', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('productreturn', $this->Productreturn->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Productreturn->create();
			if ($this->Productreturn->save($this->data)) {
				$this->Session->setFlash(__('The Productreturn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Productreturn could not be saved. Please, try again.', true));
			}
		}
		$vendors = $this->Productreturn->Vendor->find('list', array('order' => array('Vendor.name ASC')));
		$jobs = $this->Productreturn->Job->find('list');
		$parts = $this->Productreturn->Part->find('list', array('order' => array('Part.partnumber ASC')));
		$this->set(compact('vendors', 'jobs', 'parts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Productreturn', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Productreturn->save($this->data)) {
				$this->Session->setFlash(__('The Productreturn has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Productreturn could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Productreturn->read(null, $id);
		}
		$vendors = $this->Productreturn->Vendor->find('list', array('order' => array('Vendor.name ASC')));
		$jobs = $this->Productreturn->Job->find('list');
		$parts = $this->Productreturn->Part->find('list', array(
			'order' => array('Part.partnumber DESC'),
			'fields' => array('Part.id', 'CONCAT(Part.partnumber, Part.deviceid)')
		));
		/*$partDescriptions = $this->Productreturn->Part->find('all', array(
			'order'=> array('Part.partnumber DESC'),
			'recursive'=>0,
			'fields'=>array('Part.id', 'Part.deviceid', 'Part.description')
		));*/
		$this->set(compact('vendors', 'jobs', 'parts', 'partDescriptions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Productreturn', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Productreturn->del($id)) {
			$this->Session->setFlash(__('Productreturn deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Productreturn was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>