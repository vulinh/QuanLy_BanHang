<?php
App::uses('AppController', 'Controller');
/**
 * Units Controller
 *
 * @property Unit $Unit
 * @property PaginatorComponent $Paginator
 */
class UnitsController extends AppController {

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
		$this->Unit->recursive = 0;
		$this->set('units', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Unit->exists($id)) {
			throw new NotFoundException(__('Invalid unit'));
		}
		$options = array('conditions' => array('Unit.' . $this->Unit->primaryKey => $id));
		$this->set('unit', $this->Unit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Unit->create();
			if ($this->Unit->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm '. $this->request->data['Unit']['nameUnit']), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể thêm '.$this->request->data['Unit']['nameUnit'].'. Vui lòng thử lại'), 'flash/error');
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
        $this->Unit->id = $id;
		if (!$this->Unit->exists($id)) {
			throw new NotFoundException(__('Invalid unit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Unit->save($this->request->data)) {
				$this->Session->setFlash(__('Cập nhật thông tin thành công'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể cập nhật. Vui lòng thử lại'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Unit.' . $this->Unit->primaryKey => $id));
			$this->request->data = $this->Unit->find('first', $options);
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
		$this->Unit->id = $id;
		if (!$this->Unit->exists()) {
			throw new NotFoundException(__('Invalid unit'));
		}
        $options = array('conditions' => array('Unit.' . $this->Unit->primaryKey => $id));
        $data = $this->Unit->find('first', $options);
		if ($this->Unit->delete()) {
			$this->Session->setFlash(__('Đã xóa thông tin của '.$data['Unit']['nameUnit']), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa thông tin của '.$data['Unit']['nameUnit']), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
