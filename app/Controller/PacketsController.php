<?php
App::uses('AppController', 'Controller');
/**
 * Packets Controller
 *
 * @property Packet $Packet
 * @property PaginatorComponent $Paginator
 */
class PacketsController extends AppController {

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
		$this->Packet->recursive = 0;
		$this->set('packets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Packet->exists($id)) {
			throw new NotFoundException(__('Invalid packet'));
		}
		$options = array('conditions' => array('Packet.' . $this->Packet->primaryKey => $id));
		$this->set('packet', $this->Packet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Packet->create();
			if ($this->Packet->save($this->request->data)) {
				$this->Session->setFlash(__('The packet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packet could not be saved. Please, try again.'));
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
		if (!$this->Packet->exists($id)) {
			throw new NotFoundException(__('Invalid packet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Packet->save($this->request->data)) {
				$this->Session->setFlash(__('The packet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Packet.' . $this->Packet->primaryKey => $id));
			$this->request->data = $this->Packet->find('first', $options);
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
		$this->Packet->id = $id;
		if (!$this->Packet->exists()) {
			throw new NotFoundException(__('Invalid packet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Packet->delete()) {
			$this->Session->setFlash(__('The packet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The packet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
