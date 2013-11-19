<?php
    /**
    * 
    */
    class CategoryproductsController extends AppController
    {
        var $name ='Categoryproducts';
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
            $this->Categoryproduct->recursive = 0;
            $this->set('categoryproducts', $this->paginate());
        }

        /**
        * view method
        *
        * @throws NotFoundException
        * @param string $id
        * @return void
        */
        public function view($id = null) {
            if (!$this->Categoryproduct->exists($id)) {
                throw new NotFoundException(__('Invalid categoryproduct'));
            }
            $options = array('conditions' => array('Categoryproduct.' . $this->Categoryproduct->primaryKey => $id));
            $this->set('categoryproduct', $this->Categoryproduct->find('first', $options));
        }

        /**
        * add method
        *
        * @return void
        */
        public function add() {
            //if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
//                if (!empty($this->request->data))
//                {
//                    if ($this->CategoryProduct->save($this->request->data))
//                    {
//
//                        $this->Session->setFlash(__('Lưu thành công',false));
//                    }
//                    else
//                    {
//                        $this->flash('Lưu thất bại');
//                    }
//                }
//            }
//            else{
//                $this->redirect(array('controller'=>'users','action'=>'login'));
//            }
            $this->loadModel('Manufacturer');
            $Manufacturer = $this->Manufacturer->find('list', array('fields' => array('Manufacturer.nameManufacturer')));
            $this->set('dataManufacturer', $Manufacturer);

            if ($this->request->is('post')) {
                $this->Categoryproduct->create();
                if ($this->Categoryproduct->save($this->request->data)) {
                    $this->Session->setFlash(__('Đã thêm loại sản phẩm '.$this->request->data['Categoryproduct']['nameCategoryProduct']), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Không thêm được dữ liệu, vui lòng thử lại'), 'flash/error');
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
            $this->loadModel('Manufacturer');
            $Manufacturer = $this->Manufacturer->find('list', array('fields' => array('Manufacturer.nameManufacturer')));
            $this->set('dataManufacturer', $Manufacturer);
            $this->Categoryproduct->id = $id;
            if (!$this->Categoryproduct->exists($id)) {
                throw new NotFoundException(__('Invalid categoryproduct'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->Categoryproduct->save($this->request->data)) {
                    $this->Session->setFlash(__('Cập nhật dữ liệu thành công'), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Không thể cập nhật thông tin, vui lòng thử lại.'), 'flash/error');
                }
            } else {
                $options = array('conditions' => array('Categoryproduct.' . $this->Categoryproduct->primaryKey => $id));
                $this->request->data = $this->Categoryproduct->find('first', $options);
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
            $this->Categoryproduct->id = $id;
            if (!$this->Categoryproduct->exists()) {
                throw new NotFoundException(__('Invalid categoryproduct'));
            }
            $options = array('conditions' => array('Categoryproduct.' . $this->Categoryproduct->primaryKey => $id));
            $data = $this->Categoryproduct->find('first', $options);
            if ($this->Categoryproduct->delete()) {
                $this->Session->setFlash(__('Đã xóa loại sản phẩm '.$data['Categoryproduct']['nameCategoryProduct']), 'flash/success');
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Không xóa được loại sản phẩm '.$data['Categoryproduct']['nameCategoryProduct']), 'flash/error');
            $this->redirect(array('action' => 'index'));
        }

    }
?>
