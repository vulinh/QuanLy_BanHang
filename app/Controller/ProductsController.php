<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

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
        $this->Product->recursive = 0;
        $this->set('products', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('Đã thêm sản phẩm '.$this->request->data['Product']['nameProduct'] ), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thêm được dữ liệu. Vui lòng thử lại.'), 'flash/error');
            }
        }
                $this->loadModel('Categoryproduct');
                $this->loadModel('Supplier');
                $this->loadModel('Unit');
                $this->loadModel('Exchangerate');
        $categoryproducts = $this->Categoryproduct->find('list', array('fields' => array('nameCategoryProduct')));
        $suppliers = $this->Supplier->find('list',array('fields' => array('nameSupplier')));
        $units = $this->Unit->find('list', array('fields' => array('nameUnit')));
        $exchangerates = $this->Exchangerate->find('list', array('fields' => array('nameExchangeRate')));
        $this->set(compact('categoryproducts', 'suppliers', 'units', 'exchangerates'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('Cập nhật dữ liệu thành công'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể cập nhật thông tin, vui lòng thử lại.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
        }
        $this->loadModel('Categoryproduct');
        $this->loadModel('Supplier');
        $this->loadModel('Unit');
        $this->loadModel('Exchangerate');
        $categoryproducts = $this->Categoryproduct->find('list', array('fields' => array('nameCategoryProduct')));
        $suppliers = $this->Supplier->find('list',array('fields' => array('nameSupplier')));
        $units = $this->Unit->find('list', array('fields' => array('nameUnit')));
        $exchangerates = $this->Exchangerate->find('list', array('fields' => array('nameExchangeRate')));
        $this->set(compact('categoryproducts', 'suppliers', 'units', 'exchangerates'));
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
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $data = $this->Product->find('first', $options);
        
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('Đã xóa sản phẩm '.$data['Product']['nameProduct']), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Không xóa được sản phẩm '.$data['Product']['nameProduct']), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }}
