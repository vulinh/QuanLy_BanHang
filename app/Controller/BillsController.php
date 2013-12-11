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
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
            $this->_positionSS();
            $this->paginate = array(
                'limit' => 9,
                'order' => array(
                    'Bill.id' => 'asc',

                )
            );
            $this->set('bills', $this->paginate());
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
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
            $this->_positionSS();
            if (!$this->Bill->exists($id)) {
                throw new NotFoundException(__('Invalid bill'));
            }
            $options = array('conditions' => array('Bill.' . $this->Bill->primaryKey => $id));
            $this->set('bill', $this->Bill->find('first', $options));
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
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
		$this->_positionSS();
            if (!empty($this->request->data))
            {
                $this->Bill->create();
                if ($this->Bill->save($this->request->data)) 
                {
                    if(empty($this->request->data['Bill']['time'])){
                      $this->request->data['Bill']['time'] = $this->Bill->getDataSource()->expression('NOW()');  
                    } 
                    $this->Session->setFlash(__('Đã thêm hóa đơn'), 'flash/success');
                    if($this->request->data['Bill']['idTypeBill']==1){
                        $this->Session->write('idBillExportSS',$this->Bill->getLastInsertID());
                        $this->redirect(array('controller'=>'detailstocks','action' => 'export'));
                    }
                    else{
                        if($this->request->data['Bill']['idTypeBill']==2)
                        {
                            $this->Session->write('idBillSS',$this->Bill->getLastInsertID());
                            $this->redirect(array('controller'=>'detailstocks','action' => 'import'));
                        }
                    }

                } else 
                {
                    $this->Session->setFlash(__('Không thể thêm hóa đơn, vui lòng kiểm tra lại'), 'flash/error');
                }
            }
            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
            $this->loadModel('Typebill');
            // $this->loadModel('User');
            $typeBills = $this->Typebill->find('list', array('fields' => array('nameTypeBill')));
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
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
		$this->_positionSS();
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
            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
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
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
		$this->_positionSS();
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
            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }
        //Thoại
        public function congno() { 
     
if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
		$this->_positionSS();
            $this->loadModel('Debit');
            
            $listDebit = $this->Debit->find('all', array(
                'fields' => array('Debit.id,Debit.time,Debit.idBill,typebills.nameTypeBill,bills.status,users.name,Debit.moneyDebit'), 
                'conditions' => array(),
                'joins' => array(
                    array(
                        'table' => 'bills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        'foreignKey' => 'idBill',
                        'conditions' => array('Debit.idBill=bills.id')),
                    array(
                        'table' => 'typebills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idTypeBill=typebills.id')),
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idUser=users.id')),
                        )
                ));
                
            $this->loadModel('Debited');           
            $listDebited = $this->Debited->find('all', array(
                'fields' => array('Debited.id,Debited.time,Debited.idBill,typebills.nameTypeBill,bills.status,users.name,Debited.moneyDebit'), 
                'conditions' => array(),
                'joins' => array(
                    array(
                        'table' => 'bills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        'foreignKey' => 'idBill',
                        'conditions' => array('Debited.idBill=bills.id')),
                    array(
                        'table' => 'typebills',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idTypeBill=typebills.id')),
                   array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                   //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idUser=users.id')),
                        )
                ));      
            $this->set(compact('listDebit','listDebited'));
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
        //end
    }