<?php
App::uses('AppController', 'Controller');
/**
 * Bills Controller
 *
 * @property Bill $Bill
 * @property PaginatorComponent $Paginator
 */
class BillsController extends AppController {

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
		$this->Bill->recursive = 0;
		$this->set('bills', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
		$this->set('bill', $this->Bill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bill->create();
			if ($this->Bill->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm hóa đơn'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể thêm hóa đơn, vui lòng kiểm tra lại'), 'flash/error');
			}
		}
        $this->loadModel('TypeBill');
       // $this->loadModel('User');
		$typeBills = $this->TypeBill->find('list', array('fields' => array('nameTypeBill')));
		//$users = $this->Bill->User->find('list');
		$this->set(compact('typeBills'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Bill->id = $id;
		if (!$this->Bill->exists($id)) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bill->save($this->request->data)) {
				$this->Session->setFlash(__('Đã cập nhật hóa đơn'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể cập nhật hóa đơn. Vui lòng kiểm tra lại'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
			$this->request->data = $this->Bill->find('first', $options);
		}
		$this->loadModel('TypeBill');
       // $this->loadModel('User');
        $typeBills = $this->TypeBill->find('list', array('fields' => array('nameTypeBill')));
        //$users = $this->Bill->User->find('list');
        $this->set(compact('typeBills'));
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
		$this->Bill->id = $id;
		if (!$this->Bill->exists()) {
			throw new NotFoundException(__('Invalid bill'));
		}
		if ($this->Bill->delete()) {
			$this->Session->setFlash(__('Đã xóa hóa đơn '.$id), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa hóa đơn '.$id), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
