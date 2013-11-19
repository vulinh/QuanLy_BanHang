<?php
App::uses('AppController', 'Controller');
/**
 * Detailbills Controller
 *
 * @property Detailbill $Detailbill
 * @property PaginatorComponent $Paginator
 */
class DetailbillsController extends AppController {

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
		$this->Detailbill->recursive = 0;
		$this->set('detailbills', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Detailbill->exists($id)) {
			throw new NotFoundException(__('Invalid detailbill'));
		}
		$options = array('conditions' => array('Detailbill.' . $this->Detailbill->primaryKey => $id));
		$this->set('detailbill', $this->Detailbill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Detailbill->create();
			if ($this->Detailbill->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm chi tiết hóa đơn'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thêm được thông tin. Vui lòng kiểm tra lại'), 'flash/error');
			}
		}
        $this->loadModel('Product');
        $this->loadModel('Bill');
        $products = $this->Product->find('list', array('fields' => array('nameProduct')));
        $bills = $this->Bill->find('list');
		$this->set(compact('bills', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Detailbill->id = $id;
		if (!$this->Detailbill->exists($id)) {
			throw new NotFoundException(__('Invalid detailbill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Detailbill->save($this->request->data)) {
				$this->Session->setFlash(__('Đã cập nhật thông tin'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không cập nhật được thông tin. Vui lòng kiểm tra lại'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Detailbill.' . $this->Detailbill->primaryKey => $id));
			$this->request->data = $this->Detailbill->find('first', $options);
		}
		$this->loadModel('Product');
        $this->loadModel('Bill');
        $products = $this->Product->find('list', array('fields' => array('nameProduct')));
        $bills = $this->Bill->find('list');
        $this->set(compact('bills', 'products'));
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
		$this->Detailbill->id = $id;
		if (!$this->Detailbill->exists()) {
			throw new NotFoundException(__('Invalid detailbill'));
		}
		if ($this->Detailbill->delete()) {
			$this->Session->setFlash(__('Đã xóa chi tiết hóa đơn '.$id), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa chi tiết hóa đơn '.$id), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
