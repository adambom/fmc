<?php
class PartsController extends AppController {

	var $name = 'Parts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Part->recursive = 0;
		$this->set('parts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Part', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('part', $this->Part->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Part->create();
			if ($this->Part->save($this->data)) {
				$this->Session->setFlash(__('The Part has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Part could not be saved. Please, try again.', true));
			}
		}
		$vendors = $this->Part->Vendor->find('list', array('order' => array('Vendor.name ASC')));
		$manufacturers = $this->Part->Manufacturer->find('list', array('order' => array('Manufacturer.name ASC')));
		$partcategories = $this->Part->Partcategory->find('list');
		$partsubcategories = $this->Part->Partsubcategory->find('list');
		$productreturns = $this->Part->Productreturn->find('list');
		$this->set(compact('vendors', 'manufacturers', 'partcategories', 'partsubcategories', 'productreturns'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Part', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Part->save($this->data)) {
				$this->Session->setFlash(__('The Part has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Part could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Part->read(null, $id);
		}
		$vendors = $this->Part->Vendor->find('list', array('order' => array('Vendor.name ASC')));
		$manufacturers = $this->Part->Manufacturer->find('list', array('order' => array('Manufacturer.name ASC')));
		$partcategories = $this->Part->Partcategory->find('list');
		$partsubcategories = $this->Part->Partsubcategory->find('list');
		$productreturns = $this->Part->Productreturn->find('list');
		$this->set(compact('vendors', 'manufacturers', 'partcategories', 'partsubcategories', 'productreturns'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Part', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Part->del($id)) {
			$this->Session->setFlash(__('Part deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Part was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function search() {
		$q = $this->data['Part']['q'];
		$conditions = array(
			"OR" => array (
				"Part.description LIKE" => "%".$q."%",
				"Part.partnumber LIKE" => "%".$q."%",
				"Part.deviceid LIKE" => "%".$q."%",
				"Vendor.name LIKE" => "%".$q."%",
				"Manufacturer.name LIKE" => "%".$q."%"
			)
		);
		$this->set('results', $this->Part->find('all', array('conditions' => $conditions)));
	}
}
?>