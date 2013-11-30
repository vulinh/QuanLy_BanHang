<?php
    App::uses('AppController', 'Controller');
    /**
    * Mails Controller
    *
    * @property Mail $Mail
    * @property PaginatorComponent $Paginator
    */
    class MailsController extends AppController {  

        /**
        * Components
        *
        * @var array
        */
        public $components = array('Paginator','RequestHandler');
        public $theme = 'Cakestrap';

        /**
        * index method
        *
        * @return void
        */
        public function index() {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {    
                $this->Mail->recursive = 0;
                $whitelist = array($this->Mail->getDataSource()->expression('Mail.idUserReceipt = '.$this->Session->read('idSS').' Order by Mail.date desc'));        
                $this->set('mails', $this->paginate($whitelist)); 
            }else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        /**
        * Create by thoại
        * view method
        *
        * @throws NotFoundException
        * @param string $id
        * @return void
        */

        public function viewreceipt($id = null) {
            if (!$this->Mail->exists($id)) {
                throw new NotFoundException(__('Invalid mail'));
            }
            $options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
            $this->set('mail', $this->Mail->find('first', $options));
            $this->updateStatus($id);
        }

        public function viewsent($id = null) {
            if (!$this->Mail->exists($id)) {
                throw new NotFoundException(__('Invalid mail'));
            }
            $options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
            $this->set('mail', $this->Mail->find('first', $options));
        }

        public function send() {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                if ($this->request->is('post')) {
                    $this->request->data['Mail']['date'] = $this->Mail->getDataSource()->expression('NOW()');
                    $this->request->data['Mail']['status'] = 0;
                    $this->Mail->create();
                    if ($this->Mail->save($this->request->data)) {
                        $this->Session->setFlash(__('The mail has been saved'), 'flash/success');
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('The mail could not be saved. Please, try again.'), 'flash/error');
                    }
                }
                $this->loadModel('Users');
                $idUser = $this->Session->read('idSS');
                $idUserRceipts = $this->Users->find('list', array('fields' => array('name'), 'conditions' => array('Users`.id != '.$idUser)));
                $this->set(compact('idUserRceipts','idUser'));
            }else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        public function listsent() {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                $this->Mail->recursive = 0;
                $whitelist = array($this->Mail->getDataSource()->expression('Mail.idUserSent = '.$this->Session->read('idSS').' Order by Mail.date desc'));  
                //   $scope = array('Mail.idUserSent' => $this->Session->read('idSS'),'Mail.date' => 'sd');      
                $this->set('mails', $this->paginate($whitelist));
            }else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        public function updateStatus($id = null) {
            $data = array('Mail' => array('idMail' => $id, 'status' => 1));
            return $this->Mail->save($data);
        }

        public function newMessage() {
            Router::parseExtensions('json');
            $this->layout = null ; 
            $data = '';    
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                $options = array('fields' => array('idMail','subject','content','date','status','UsersSent.name'),
                'conditions' => array('Mail.idUserReceipt' => $this->Session->read('idSS'),'Mail.status' => 0));
                $data = $this->Mail->find('all', $options);
            }
            return new CakeResponse(array('body' => json_encode($data),'type' => 'json'));
        }

        // end create
        //        public function edit($id = null) {
        //            $this->Mail->id = $id;
        //            if (!$this->Mail->exists($id)) {
        //                throw new NotFoundException(__('Invalid mail'));
        //            }
        //            if ($this->request->is('post') || $this->request->is('put')) {
        //                if ($this->Mail->save($this->request->data)) {
        //                    $this->Session->setFlash(__('The mail has been saved'), 'flash/success');
        //                    $this->redirect(array('action' => 'index'));
        //                } else {
        //                    $this->Session->setFlash(__('The mail could not be saved. Please, try again.'), 'flash/error');
        //                }
        //            } else {
        //                $options = array('conditions' => array('Mail.' . $this->Mail->primaryKey => $id));
        //                $this->request->data = $this->Mail->find('first', $options);
        //            }
        //            $idUserRceipts = $this->Mail->IdUserRceipt->find('list');
        //            $this->set(compact('idUserRceipts'));
        //        }



        /**
        * delete method
        *
        * @throws NotFoundException
        * @throws MethodNotAllowedException
        * @param string $id
        * @return void
        */
        //   public function delete($id = null) {
        //            if (!$this->request->is('post')) {
        //                throw new MethodNotAllowedException();
        //            }
        //            $this->Mail->id = $id;
        //            if (!$this->Mail->exists()) {
        //                throw new NotFoundException(__('Invalid mail'));
        //            }
        //            if ($this->Mail->delete()) {
        //                $this->Session->setFlash(__('Mail deleted'), 'flash/success');
        //                $this->redirect(array('action' => 'index'));
        //            }
        //            $this->Session->setFlash(__('Mail was not deleted'), 'flash/error');
        //            $this->redirect(array('action' => 'index'));
        //    }
    }
