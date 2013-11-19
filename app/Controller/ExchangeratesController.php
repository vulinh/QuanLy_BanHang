<?php
App::uses('AppController', 'Controller');
/**
 * Exchangerates Controller
 *
 * @property Exchangerate $Exchangerate
 * @property PaginatorComponent $Paginator
 */
class ExchangeratesController extends AppController {

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
		$this->Exchangerate->recursive = 0;
		$this->set('exchangerates', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Exchangerate->exists($id)) {
			throw new NotFoundException(__('Invalid exchangerate'));
		}
		$options = array('conditions' => array('Exchangerate.' . $this->Exchangerate->primaryKey => $id));
		$this->set('exchangerate', $this->Exchangerate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Exchangerate->create();
			if ($this->Exchangerate->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm '. $this->request->data['Exchangerate']['nameExchangeRate']), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể thêm '.$this->request->data['Exchangerate']['nameExchangeRate'].'. Vui lòng thử lại' ), 'flash/error');
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
        $this->Exchangerate->id = $id;
		if (!$this->Exchangerate->exists($id)) {
			throw new NotFoundException(__('Invalid exchangerate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Exchangerate->save($this->request->data)) {
				$this->Session->setFlash(__('Cập nhật dữ liệu thành công'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể cập nhật dữ liêu. Vui lòng thử lại.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Exchangerate.' . $this->Exchangerate->primaryKey => $id));
			$this->request->data = $this->Exchangerate->find('first', $options);
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
		$this->Exchangerate->id = $id;
		if (!$this->Exchangerate->exists()) {
			throw new NotFoundException(__('Invalid exchangerate'));
		}
        
        $options = array('conditions' => array('Exchangerate.' . $this->Exchangerate->primaryKey => $id));
        $data = $this->Exchangerate->find('first', $options);
        
		if ($this->Exchangerate->delete()) {
			$this->Session->setFlash(__('Đã xóa thông tin '.$data['Exchangerate']['nameExchangeRate']), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa thông tin '.$data['Exchangerate']['nameExchangeRate']), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
