<?php
App::uses('AppController', 'Controller');
/**
 * Oders Controller
 *
 * @property Oder $Oder
 * @property PaginatorComponent $Paginator
 */
class OdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Oder->recursive = 0;
		$this->set('oders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Oder->exists($id)) {
			throw new NotFoundException(__('Invalid oder'));
		}
		$options = array('conditions' => array('Oder.' . $this->Oder->primaryKey => $id));
		$this->set('oder', $this->Oder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Oder->create();
			if ($this->Oder->save($this->request->data)) {
				$this->Session->setFlash(__('The oder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oder could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Oder->exists($id)) {
			throw new NotFoundException(__('Invalid oder'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Oder->save($this->request->data)) {
				$this->Session->setFlash(__('The oder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oder could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Oder.' . $this->Oder->primaryKey => $id));
			$this->request->data = $this->Oder->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Oder->id = $id;
		if (!$this->Oder->exists()) {
			throw new NotFoundException(__('Invalid oder'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Oder->delete()) {
			$this->Session->setFlash(__('The oder has been deleted.'));
		} else {
			$this->Session->setFlash(__('The oder could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
