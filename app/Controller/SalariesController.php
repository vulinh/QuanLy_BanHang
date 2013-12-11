<?php
App::uses('AppController', 'Controller');
/**
 * Salaries Controller
 *
 * @property Salary $Salary
 * @property PaginatorComponent $Paginator
 */
class SalariesController extends AppController {

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
		if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
			$this->_positionSS();
		$this->Salary->recursive = 0;
		$this->set('salaries', $this->paginate());
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
		if (!$this->Salary->exists($id)) {
			throw new NotFoundException(__('Invalid salary'));
		}
		$options = array('conditions' => array('Salary.' . $this->Salary->primaryKey => $id));
		$this->set('salary', $this->Salary->find('first', $options));
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
			$this->Salary->create();
			if ($this->Salary->save($this->request->data)) {
				$this->Session->setFlash(__('Đã thêm bậc lương '. $this->request->data['Salary']['name']), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể thêm bậc lương này. Vui lòng thử lại.'), 'flash/error');
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
        $this->Salary->id = $id;
		if (!$this->Salary->exists($id)) {
			throw new NotFoundException(__('Invalid salary'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Salary->save($this->request->data)) {
				$this->Session->setFlash(__('Đã cập nhật bậc lương'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Không thể cập nhật bậc lương. Vui lòng thử lại'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Salary.' . $this->Salary->primaryKey => $id));
			$this->request->data = $this->Salary->find('first', $options);
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
		$this->Salary->id = $id;
		if (!$this->Salary->exists()) {
			throw new NotFoundException(__('Invalid salary'));
		}
        
        $options = array('conditions' => array('Salary.' . $this->Salary->primaryKey => $id));
        $data = $this->Salary->find('first', $options);
            
		if ($this->Salary->delete()) {
			$this->Session->setFlash(__('Đã xóa bậc lương '.$data['Salary']['name']), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa bậc lương '.$data['Salary']['name']), 'flash/error');
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
                                // $this->redirect(array('controller'=>'bills','action'=>'index'));
                            }
                            else
                            {
                                if ($this->Session->read('positionSS')== 4)
                                {
                                    $this->layout = 'stock';
                                    $this->redirect(array('controller'=>'stocks','action'=>'index'));
                                }
                                else
                                {
                                    if ($this->Session->read('positionSS')== 5)
                                    {
                                        $this->layout = 'human';
                                        // $this->redirect(array('controller'=>'users','action'=>'index'));
                                    }
                                }
                            }
                        }
                        
                }
        }

}
