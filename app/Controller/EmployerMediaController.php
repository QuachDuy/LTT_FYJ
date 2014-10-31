<?php
App::uses('AppController', 'Controller');
/**
 * EmployerMedia Controller
 *
 * @property EmployerMedia $EmployerMedia
 * @property PaginatorComponent $Paginator
 */
class EmployerMediaController extends AppController {

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
		$this->EmployerMedia->recursive = 0;
		$this->set('employerMedia', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployerMedia->exists($id)) {
			throw new NotFoundException(__('Invalid employer media'));
		}
		$options = array('conditions' => array('EmployerMedia.' . $this->EmployerMedia->primaryKey => $id));
		$this->set('employerMedia', $this->EmployerMedia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployerMedia->create();
			if ($this->EmployerMedia->save($this->request->data)) {
				$this->Session->setFlash(__('The employer media has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employer media could not be saved. Please, try again.'));
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
		if (!$this->EmployerMedia->exists($id)) {
			throw new NotFoundException(__('Invalid employer media'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmployerMedia->save($this->request->data)) {
				$this->Session->setFlash(__('The employer media has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employer media could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployerMedia.' . $this->EmployerMedia->primaryKey => $id));
			$this->request->data = $this->EmployerMedia->find('first', $options);
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
		$this->EmployerMedia->id = $id;
		if (!$this->EmployerMedia->exists()) {
			throw new NotFoundException(__('Invalid employer media'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmployerMedia->delete()) {
			$this->Session->setFlash(__('The employer media has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employer media could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
