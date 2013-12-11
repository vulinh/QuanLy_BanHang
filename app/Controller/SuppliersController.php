<?php
App::uses('AppController', 'Controller');
/**
 * Suppliers Controller
 *
 * @property Supplier $Supplier
 * @property PaginatorComponent $Paginator
 */
class SuppliersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    
    public $theme = "Cakestrap";

/**
 * index method
 *
 * @return void
 */
	public function index() {
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
			$this->_positionSS();
			$this->Supplier->recursive = 0;
			$this->set('suppliers', $this->paginate());
		}
		else{
      		$this->redirect(array('controller'=>'users','action'=>'login'));
    	}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
			$this->_positionSS();
			if (!$this->Supplier->exists($id)) {
				throw new NotFoundException(__('Invalid supplier'));
			}
			$options = array('conditions' => array('Supplier.' . $this->Supplier->primaryKey => $id));
			$this->set('supplier', $this->Supplier->find('first', $options));
		}
		else{
      		$this->redirect(array('controller'=>'users','action'=>'login'));
    	}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
			$this->_positionSS();
			if ($this->request->is('post')) {
				$this->Supplier->create();
				if ($this->Supplier->save($this->request->data)) {
					$this->Session->setFlash(__('Đã thêm nhà cung cấp '.$this->request->data['nameSupplier']), 'flash/success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Không thể thêm nhà cung cấp này. Vui lòng kiểm tra lại.'), 'flash/error');
				}
			}
		}
		else{
      		$this->redirect(array('controller'=>'users','action'=>'login'));
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
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
			$this->_positionSS();
	        $this->Supplier->id = $id;
			if (!$this->Supplier->exists($id)) {
				throw new NotFoundException(__('Invalid supplier'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->Supplier->save($this->request->data)) {
					$this->Session->setFlash(__('Cập nhật thành công'), 'flash/success');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('Không thể cập nhật. Vui lòng thử lại.'), 'flash/error');
				}
			} else {
				$options = array('conditions' => array('Supplier.' . $this->Supplier->primaryKey => $id));
				$this->request->data = $this->Supplier->find('first', $options);
			}
		}
		else{
      		$this->redirect(array('controller'=>'users','action'=>'login'));
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
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
			$this->_positionSS();
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->Supplier->id = $id;
			if (!$this->Supplier->exists()) {
				throw new NotFoundException(__('Invalid supplier'));
			}   
	          
	        $supplier = $this->Supplier->find('first', array('conditions' => array('Supplier.' . $this->Supplier->primaryKey => $id)));
	           
			if ($this->Supplier->delete()) {
				$this->Session->setFlash(__('Đã xóa nhà cung cấp '. $supplier['Supplier']['nameSupplier']), 'flash/success');
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Không thể xóa nhà cung cấp '. $supplier['Supplier']['nameSupplier']), 'flash/error');
			$this->redirect(array('action' => 'index'));
		}
		else{
      		$this->redirect(array('controller'=>'users','action'=>'login'));
    	}
	}

	public function _positionSS(){
            if($this->Session->read('positionSS')== 1){
                   $this->layout = 'default';
                   // $this->redirect(array('controller'=>'users','action'=>'index'));
                }
                else
                {

                        if ($this->Session->read('positionSS')== 2) 
                        {
                            $this->layout = 'sale';
                            $this->redirect(array('controller'=>'detailstocks','action'=>'export'));
                        }
                        else
                        {
                            if ($this->Session->read('positionSS')== 3)
                            {
                                $this->layout = 'finance';
                                $this->redirect(array('controller'=>'bills','action'=>'index'));
                            }
                            else
                            {
                                if ($this->Session->read('positionSS')== 4)
                                {
                                    $this->layout = 'stock';
                                    // $this->redirect(array('controller'=>'stocks','action'=>'index'));
                                }
                                else
                                {
                                    if ($this->Session->read('positionSS')== 5)
                                    {
                                        $this->layout = 'human';
                                        $this->redirect(array('controller'=>'users','action'=>'index'));
                                    }
                                }
                            }
                        }
                        
                }
        }

}
