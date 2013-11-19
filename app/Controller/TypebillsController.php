<?php
App::uses('AppController', 'Controller');
/**
 * Typebills Controller
 *
 * @property Typebill $Typebill
 * @property PaginatorComponent $Paginator
 */
class TypebillsController extends AppController {

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
		$this->Typebill->recursive = 0;
		$this->set('typebills', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typebill->exists($id)) {
			throw new NotFoundException(__('Invalid typebill'));
		}
		$options = array('conditions' => array('Typebill.' . $this->Typebill->primaryKey => $id));
		$this->set('typebill', $this->Typebill->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typebill->create();
			if ($this->Typebill->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm loại hóa đơn '.$this->request->data['Typebill']['nameTypeBill']), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thêm được loại hóa đơn này. Vui lòng thử lại'), 'flash/error');
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
        $this->Typebill->id = $id;
		if (!$this->Typebill->exists($id)) {
			throw new NotFoundException(__('Invalid typebill'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Typebill->save($this->request->data)) {
				$this->Session->setFlash(__('Đã cập nhật dữ liệu'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể cập nhật dữ liệu. Vui lòng thử lại'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Typebill.' . $this->Typebill->primaryKey => $id));
			$this->request->data = $this->Typebill->find('first', $options);
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
		$this->Typebill->id = $id;
		if (!$this->Typebill->exists()) {
			throw new NotFoundException(__('Invalid typebill'));
		}
        $options = array('conditions' => array('Typebill.' . $this->Typebill->primaryKey => $id));
        $data = $this->Typebill->find('first', $options);
        
		if ($this->Typebill->delete()) {
			$this->Session->setFlash(__('Đã xóa loại hóa đơn '.$data['Typebill']['nameTypeBill']), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa loại hóa đơn '.$data['Typebill']['nameTypebill']), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
