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
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                $this->_positionSS();
            $this->Categoryproduct->recursive = -1;
            $categoryproducts = $this->paginate();
                 
            for($i=0; $i< count($categoryproducts); $i++){
                    $parentCategory = $this->Categoryproduct->loadParentCategory($categoryproducts[$i]['Categoryproduct']['idParent']);
                    $categoryproducts[$i]['parentCategory'] = $parentCategory;
            }
                
            $this->set('categoryproducts',$categoryproducts);
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
            $this->Categoryproduct->recursive = -1;
            if (!$this->Categoryproduct->exists($id)) {
                throw new NotFoundException(__('Invalid categoryproduct'));
            }
            $options = array('conditions' => array('Categoryproduct.' . $this->Categoryproduct->primaryKey => $id));
            $categoryproduct = $this->Categoryproduct->find('first', $options);
                
                $parentCategory = $this->Categoryproduct->loadParentCategory($categoryproduct['Categoryproduct']['idParent']);
                $this->set(compact('categoryproduct','parentCategory'));
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
            if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
                $this->_positionSS();
            //$this->loadModel('Manufacturer');
           // $Manufacturer = $this->Manufacturer->find('list', array('fields' => array('Manufacturer.nameManufacturer')));
            //$this->set('dataManufacturer', $Manufacturer);

            if ($this->request->is('post')) {
                $this->Categoryproduct->create();
                if ($this->Categoryproduct->save($this->request->data)) {
                    $this->Session->setFlash(__('Lưu Thành Công'), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Không thêm được dữ liệu, vui lòng thử lại'), 'flash/error');
                }
            }
            $options = array('conditions' => array('Categoryproduct.enable ' => 1));
            $categorys = $this->Categoryproduct->find('all', $options);

            $this->set(compact('categorys'));
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
            $this->Categoryproduct->recursive = -1;
            $options = array('conditions' => array('Categoryproduct.enable ' => 1));
            $categorys = $this->Categoryproduct->find('all', $options);
            $this->set(compact('categorys'));
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
            $this->Categoryproduct->recursive = -1;
            if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
            }
            $this->Categoryproduct->id = $id;
            if (!$this->Categoryproduct->exists()) {
                throw new NotFoundException(__('Invalid categoryproduct'));
            }
            $options = array('conditions' => array('Categoryproduct.' . $this->Categoryproduct->primaryKey => $id));
            $data =  $this->request->data = $this->Categoryproduct->find('first', $options);
            if ($this->Categoryproduct->delete()) {
                $this->Session->setFlash(__('Đã xóa loại sản phẩm '), 'flash/success');
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Không xóa được loại sản phẩm '), 'flash/error');
            $this->redirect(array('action' => 'index'));
        }
         else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }
    }
    
     public function loadAllCategory() {
        $options = array('conditions' => array('Categoryproduct.enable ' => 1));
        $categorys = $this->Categoryproduct->find('all', $options);
        return $categorys;
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
?>