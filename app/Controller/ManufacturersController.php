<?php
    /**
    * 
    */
    class ManufacturersController extends AppController
    {
        var $name ='Manufacturers';
        public $theme = 'Cakestrap';

        /**
        * Components
        *
        * @var array
        */
        public $components = array('Paginator');

        /**
        * index method
        *
        * @return void
        */
        public function index() {
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            $this->Manufacturer->recursive = 0;
            $this->set('manufacturers', $this->paginate());
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
            if (!$this->Manufacturer->exists($id)) {
                throw new NotFoundException(__('Invalid manufacturer'));
            }
            $options = array('conditions' => array('Manufacturer.' . $this->Manufacturer->primaryKey => $id));
            $this->set('manufacturer', $this->Manufacturer->find('first', $options));
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
            if ($this->request->is('post')) {
                $this->Manufacturer->create();
                if ($this->Manufacturer->save($this->request->data)) {
                    $this->Session->setFlash(__('Đã thêm nhà sản xuất '.$this->request->data['nameManufacturer']), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                    //    $this->flash(__('Nhà cung cấp đã được thêm.'), array('action' => 'index'));
                } else {
                    //    $this->flash(__('Không thêm được nhà cung cấp.'), array('action' => 'index'));
                    $this->Session->setFlash(__('Không thêm được dữ liệu, vui lòng thử lại'), 'flash/error');
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
            $this->Manufacturer->id = $id;
            if (!$this->Manufacturer->exists($id)) {
                throw new NotFoundException(__('Invalid manufacturer'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->Manufacturer->save($this->request->data)) {
                    //    $this->flash(__('The manufacturer has been saved.'), array('action' => 'index'),0.2);
                    $this->Session->setFlash(__('Cập nhật dữ liệu thành công'), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Không thể cập nhật thông tin, vui lòng thử lại.'), 'flash/error');
                }
            } else {
                $options = array('conditions' => array('Manufacturer.' . $this->Manufacturer->primaryKey => $id));
                $this->request->data = $this->Manufacturer->find('first', $options);
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
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->Manufacturer->id = $id;
            if (!$this->Manufacturer->exists()) {
                throw new NotFoundException(__('Invalid manufacturer'));
            }
            $options = array('conditions' => array('Manufacturer.' . $this->Manufacturer->primaryKey => $id));
            $data =  $this->request->data = $this->Manufacturer->find('first', $options);
            if ($this->Manufacturer->delete()) {
                $this->Session->setFlash(__('Đã xóa nhà sản xuất '.$data['Manufacturer']['nameManufacturer']), 'flash/success');
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Không xóa được nhà sản xuất '.$data['Manufacturer']['nameManufacturer']), 'flash/error');
            $this->redirect(array('action' => 'index'));

        }
            else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }
    }
    }
?>