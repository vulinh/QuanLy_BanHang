<?php
App::uses('AppController', 'Controller');
/**
 * Infos Controller
 *
 * @property Info $Info
 * @property PaginatorComponent $Paginator
 */
class InfosController extends AppController {

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
		$this->Info->recursive = 0;
		$this->set('infos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Info->exists($id)) {
			throw new NotFoundException(__('Invalid info'));
		}
		$options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
		$this->set('info', $this->Info->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Info->create();
			if ($this->Info->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm thông tin '.$this->request->data['Info']['name']), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể thêm thông tin này. Vui lòng thử lại'), 'flash/error');
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
        $this->Info->id = $id;
		if (!$this->Info->exists($id)) {
			throw new NotFoundException(__('Invalid info'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Info->save($this->request->data)) {
				$this->Session->setFlash(__('Đã cập nhật thông tin'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể cập nhật thông tin. Vui lòng thử lại'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
			$this->request->data = $this->Info->find('first', $options);
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
		$this->Info->id = $id;
		if (!$this->Info->exists()) {
			throw new NotFoundException(__('Invalid info'));
		}
        $options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
        $data = $this->Info->find('first', $options);
		if ($this->Info->delete()) {
			$this->Session->setFlash(__('Đã xóa thông tin '.$data['Info']['name']), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa thông tin '.$data['Info']['name']), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
