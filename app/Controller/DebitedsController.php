<?php
    class DebitedsController extends AppController{
        var $name = 'Debiteds';
        var  $helpers = array('Session');
        var  $components = array('Session');
        public $theme = 'Cakestrap';

        public function detailbill($id = null) {
             if (!$this->Debited->exists($id)) {
                            throw new NotFoundException(__('Invalid bill'));
                        }

            $bill = $this->Debited->find('first', array(
                'fields' => array('Debited.time, bills.*, typebills.nameTypeBill,
                    typebills.id,users.name, users.id, customer.name, customer.id'), 
                'conditions' => array('Debited.' . $this->Debited->primaryKey => $id),
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
                        'alias' => 'customer',
                        'type' => 'left',
                        //     'foreignKey' => 'idBill',
                        'conditions' => array('Debited.idUser=customer.id')),
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
            
            $this->set(compact('bill','detailbills','id'));
        }
        
        public function xacnhanthanhtoan($id = null) {
            $this->Debited->id = $id;
            if (!$this->Debited->exists($id)) {
                throw new NotFoundException(__('Invalid bill'));
            }

            $options = array('conditions' => array('Debited.' . $this->Debited->primaryKey => $id));
            $debited = $this->Debited->find('first', $options);

            $this->loadModel('Bill');
            if (!$this->Bill->exists($debited['Debited']['idBill'])) {
                throw new NotFoundException(__('Invalid bill'));
            }
            
            $dataSource = $this->Debited->getDataSource();
            $dataSource->begin();
            
            $data = array('Debited' => array('id' => $id, 'status' => 1));
            if (!$this->Debited->save($data)) {
                $dataSource->rollback();
                $this->Session->setFlash(__('Không thể cập nhật hóa đơn. Vui lòng kiểm tra lại'), 'flash/error');
                $this->redirect(array('controller' => 'bills','action' => 'congno'));
                exit;
            }
            
            $data = array('Bill' => array('id' => $debited['Debited']['idBill'], 'status' => 1));
            if (!$this->Bill->save($data)) {
                $dataSource->rollback();
                $this->Session->setFlash(__('Không thể cập nhật hóa đơn. Vui lòng kiểm tra lại'), 'flash/error');
                $this->redirect(array('controller' => 'bills','action' => 'congno'));
                exit;
            }
                   
            $data = array('Receipt' =>  array(
                    'money' => $debited['Debited']['moneyDebit'],
                    'idBill' =>$debited['Debited']['idBill'],
                    'time' =>date('Y-m-d H:i:s'),
                ));
            
            $this->loadModel('Receipt');
            if ($this->Receipt->save($data)) {
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