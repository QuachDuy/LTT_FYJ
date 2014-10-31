<?php
App::uses('AppController', 'Controller');
/**
 * EmployerQuota Controller
 *
 * @property EmployerQuotum $EmployerQuotum
 * @property PaginatorComponent $Paginator
 */
class EmployerQuotaController extends AppController {

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
		$this->EmployerQuotum->recursive = 0;
		$this->set('employerQuota', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployerQuotum->exists($id)) {
			throw new NotFoundException(__('Invalid employer quotum'));
		}
		$options = array('conditions' => array('EmployerQuotum.' . $this->EmployerQuotum->primaryKey => $id));
		$this->set('employerQuotum', $this->EmployerQuotum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployerQuotum->create();
			if ($this->EmployerQuotum->save($this->request->data)) {
				$this->Session->setFlash(__('The employer quotum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employer quotum could not be saved. Please, try again.'));
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
		if (!$this->EmployerQuotum->exists($id)) {
			throw new NotFoundException(__('Invalid employer quotum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmployerQuotum->save($this->request->data)) {
				$this->Session->setFlash(__('The employer quotum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employer quotum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployerQuotum.' . $this->EmployerQuotum->primaryKey => $id));
			$this->request->data = $this->EmployerQuotum->find('first', $options);
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
		$this->EmployerQuotum->id = $id;
		if (!$this->EmployerQuotum->exists()) {
			throw new NotFoundException(__('Invalid employer quotum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmployerQuotum->delete()) {
			$this->Session->setFlash(__('The employer quotum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employer quotum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
