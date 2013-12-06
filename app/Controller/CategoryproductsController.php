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
                if ($this->request->is('post')) {

                    $this->Categoryproduct->create();
                    if ($this->Categoryproduct->save($this->request->data)) {
                        $this->Session->setFlash(__('Đã thêm loại sản phẩm '.$this->request->data['Categoryproduct']['nameCategoryProduct']), 'flash/success');
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
                $this->Categoryproduct->recursive = -1;
                $this->Categoryproduct->id = $id;
                if (!$this->Categoryproduct->exists($id)) {
                    throw new NotFoundException(__('Invalid categoryproduct'));
                }
                $options = array('conditions' => array('Categoryproduct.enable ' => 1));
                $categorys = $this->Categoryproduct->find('all', $options);
                $this->set(compact('categorys'));
                
               // echo '<pre>';
//                print_r($this->request->data);
//                echo '</pre>';exit;
                if ($this->request->is('post') || $this->request->is('put')) {
                    if($this->request->data['Categoryproduct']['idParent'] == $id){
                        $this->Session->setFlash(__('Cấp cha phải khác loại loại sản phẩm'), 'flash/error'); 
                    }else{
                        if ($this->Categoryproduct->save($this->request->data)) {
                            $this->Session->setFlash(__('Cập nhật dữ liệu thành công'), 'flash/success');
                            $this->redirect(array('action' => 'index'));
                        } else {
                            $this->Session->setFlash(__('Không thể cập nhật thông tin, vui lòng thử lại.'), 'flash/error');
                        }
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
                    $this->Session->setFlash(__('Đã xóa loại sản phẩm '.$data['Categoryproduct']['nameCategoryproduct']), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Không xóa được loại sản phẩm '.$data['Categoryproduct']['nameCategoryproduct']), 'flash/error');
                $this->redirect(array('action' => 'index'));
            }
            else{
                $this->redirect(array('controller'=>'users','action'=>'login'));
            }
        }

        function printCategory($categorys,$id, $kitu)
        {
            foreach($categorys as $category)
            {
                if($category['idParent']==$id)
                {
                    echo "<option value='".$category['id']."'>".$kitu.$category['nameCategoryProduct']."</option>";
                    $this->printCategory($categorys,$category['id'],$kitu.$kitu);
                }
            }
        }

    }
?>
