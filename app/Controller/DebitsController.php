<?php
    class DebitsController extends AppController{
        var $name = 'Debits';
        var  $helpers = array('Session');
        var  $components = array('Session');
        public $theme = 'Cakestrap';

        function index()
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
                $this->set('dataDebit',$this->Debit->find('all'));
                //$this->set('dataUser',$this->User->query('SELECT *FROM (users INNER JOIN areas ON users.idArea=areas.id)
                // WHERE users.id='.$id));
            }
            else
            {
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        function add()
        {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
            {
                if (!empty($this->request->data))
                {
                    if ($this->Debit->save($this->request->data))
                    {

                        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                    }
                    else
                    {
                        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
                    }
                }
            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        // function edit($id = null) 
        //    {
        //        if ($this->Session->check('userSS') && $this->Session->check('passSS')) 
        //        {
        //        	$this->Debit->id = $id;

        //            if ($this->request->is('post') || $this->request->is('put'))
        //            {
        //                if ($this->Debit->save($this->request->data)) {
        //                    $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));

        //                } 
        //                else 
        //                {
        //                    $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
        //                }
        //            } 
        //            else 
        //            {
        //                $this->request->data = $this->Debit->read(null, $id);
        //            }

        //        }
        //        else
        //        {
        //            $this->redirect(array('controller'=>'users','action'=>'login'));
        //        }
        //    }

        public function detailbill($id = null) {
            if (!$this->Debit->exists($id)) {
                throw new NotFoundException(__('Invalid bill'));
            }

            $bill = $this->Debit->find('first', array(
                'fields' => array('Debit.time, bills.*, typebills.nameTypeBill,
                    typebills.id, suppliers.nameSupplier, suppliers.id,
                users.name, users.id'), 
                'conditions' => array('Debit.' . $this->Debit->primaryKey => $id),
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
                        'table' => 'suppliers',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('Debit.idSupplier=suppliers.id')),
                    array(
                        'table' => 'users',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('bills.idUser=users.id')),
                )
            )); 

            $this->loadModel('Detailstock');           

            $detailbills = $this->Detailstock->find('all', array(
                'fields' => array('Detailstock.*, products.nameProduct, products.id, stocks.nameStock, stocks.id'), 
                'conditions' => array('Detailstock.idBill' => $bill['bills']['id']),
                'joins' => array(
                    array(
                        'table' => 'products',
                        //     'alias' => 'Sector',
                        'type' => 'left',
            //            'foreignKey' => 'idProduct',
                        'conditions' => array('Detailstock.idProduct=products.id')),
                    array(
                        'table' => 'stocks',
                        //     'alias' => 'Sector',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('Detailstock.idStock=stocks.id')),
                )
            ));
            //echo '<pre>';
//            print_r($detailbills);
//            echo '</pre>';exit;
            $this->set(compact('bill','detailbills','id'));
        }

        public function xacnhanthanhtoan($id = null) {
            $this->Debit->id = $id;
            if (!$this->Debit->exists($id)) {
                throw new NotFoundException(__('Invalid bill'));
            }

            $options = array('conditions' => array('Debit.' . $this->Debit->primaryKey => $id));
            $debit = $this->Debit->find('first', $options);

            $this->loadModel('Bill');
            if (!$this->Bill->exists($debit['Debit']['idBill'])) {
                throw new NotFoundException(__('Invalid bill'));
            }
            
            $dataSource = $this->Debit->getDataSource();
            $dataSource->begin();
            
            $data = array('Debit' => array('id' => $id, 'status' => 1));
            if (!$this->Debit->save($data)) {
                $dataSource->rollback();
                $this->Session->setFlash(__('Không thể cập nhật hóa đơn. Vui lòng kiểm tra lại'), 'flash/error');
                $this->redirect(array('controller' => 'bills','action' => 'congno'));
                exit;
            }
            
            $data = array('Bill' => array('id' => $debit['Debit']['idBill'], 'status' => 1));
            if (!$this->Bill->save($data)) {
                $dataSource->rollback();
                $this->Session->setFlash(__('Không thể cập nhật hóa đơn. Vui lòng kiểm tra lại'), 'flash/error');
                $this->redirect(array('controller' => 'bills','action' => 'congno'));
                exit;
            }

            $data = array('Expense' => array(
                    'money' => $debit['Debit']['moneyDebit'],
                    'idBill' =>$debit['Debit']['idBill'],
                    'time' =>date('Y-m-d H:i:s'),
                ));
            
            $this->loadModel('Expense');
            if ($this->Expense->save($data)) {
                $dataSource->commit();
                $this->Session->setFlash(__('Đã cập nhật hóa đơn'), 'flash/success');
                $this->redirect(array('controller' => 'bills','action' => 'congno'));
            } else {
                $dataSource->rollback();
                $this->Session->setFlash(__('Không thể cập nhật hóa đơn. Vui lòng kiểm tra lại'), 'flash/error');
                $this->redirect(array('controller' => 'bills','action' => 'congno'));
                exit;
            }
        }
    }
?>