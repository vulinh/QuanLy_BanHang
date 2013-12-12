<?php
App::uses('AppController', 'Controller');
/**
 * Typenews Controller
 *
 * @property Typenews $Typenews
 * @property PaginatorComponent $Paginator
 */
class TypenewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    public $theme = 'Cakestrap';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Typenews->recursive = 0;
		$this->set('typenews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typenews->exists($id)) {
			throw new NotFoundException(__('Invalid typenews'));
		}
		$options = array('conditions' => array('Typenews.' . $this->Typenews->primaryKey => $id));
		$this->set('typenews', $this->Typenews->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typenews->create();
			if ($this->Typenews->save($this->request->data)) {
				$this->Session->setFlash(__('The typenews has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typenews could not be saved. Please, try again.'), 'flash/error');
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
        $this->Typenews->id = $id;
		if (!$this->Typenews->exists($id)) {
			throw new NotFoundException(__('Invalid typenews'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Typenews->save($this->request->data)) {
				$this->Session->setFlash(__('The typenews has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typenews could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Typenews.' . $this->Typenews->primaryKey => $id));
			$this->request->data = $this->Typenews->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Typenews->id = $id;
		if (!$this->Typenews->exists()) {
			throw new NotFoundException(__('Invalid typenews'));
		}
		if ($this->Typenews->delete()) {
			$this->Session->setFlash(__('Typenews deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Typenews was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
