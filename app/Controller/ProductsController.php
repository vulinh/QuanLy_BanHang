<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

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
         $this->paginate = array(
        'limit' => 50,
        'order' => array(
            'Product.import_time' => 'desc',

        ));
            $this->Product->recursive = 0;
            $products = $this->paginate();
            $this->loadModel('Categoryproduct');
            for($i=0; $i< count($products); $i++){
                $parentCategory = $this->Categoryproduct->loadParentCategory($products[$i]['Product']['idCategoryProduct']);
                $products[$i]['parentCategory'] = $parentCategory;
            }
            $this->set('products', $products);
        }
        else{
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }
    }

    public function index2() {
        //1 -> tren, 0 -> duoi
        $this->layout = "client_index";
       $this->loadModel("Slide");
       $this->set('dataSlide6',$this->Slide->find('all',
        array("conditions"=>
            array("AND"=> 
                array("Slide.enable"=>1),
                array("Slide.position"=>1)))));
       $this->set('dataSlide7',$this->Slide->find('all',
        array("conditions"=>
            array("AND"=> 
                array("Slide.enable"=>1),
                array("Slide.position"=>0)))));
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
            if (!$this->Product->exists($id)) {
                throw new NotFoundException(__('Invalid product'));
            }
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $product = $this->Product->find('first', $options);
            $this->loadModel('Categoryproduct');
            $parentCategory = $this->Categoryproduct->loadParentCategory($product['Product']['idCategoryProduct']);
            $this->set(compact('product','parentCategory'));
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
                $this->Product->create();
		

                if ($this->Product->save($this->request->data)) {

		              $this->loadModel('Detailcat');
                    $this->Detailcat->add($this->request->data['Product']['idCategoryProduct'], $this->request->data['Product']['idManufacturer']);

                    $this->Product->updateAll(
                        array('Product.idSite' =>"'".'SP_'.$this->Product->getLastInsertID()."'"), 
                       array('Product.id' => $this->Product->getLastInsertID())
                    );

                    $this->Product->updateAll(array('Product.import_time' =>"'".date('Y-m-d H:i:s')."'"), array('Product.id' => $this->Product->getLastInsertID()));

                   $this->Session->setFlash(__('Lưu Thành Công ' ), 'flash/success');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Không thêm được dữ liệu. Vui lòng thử lại.'), 'flash/error');
                }
           }
                    $this->loadModel('Categoryproduct');
                   $this->loadModel('Supplier');
                    $this->loadModel('Unit');
                   $this->loadModel('Exchangerate');
                    $this->loadModel('Manufacturer');
           $categoryproducts = $this->Categoryproduct->find('all', array('conditions' => array('Categoryproduct.enable ' => 1)));
           $suppliers = $this->Supplier->find('list',array('fields' => array('nameSupplier')));
            $units = $this->Unit->find('list', array('fields' => array('nameUnit')));
            $exchangerates = $this->Exchangerate->find('list', array('fields' => array('nameExchangeRate')));
            $manufacturers = $this->Manufacturer->find('list', array('fields' => array('nameManufacturer')));

            $this->set(compact('categoryproducts', 'suppliers', 'units', 'exchangerates', 'manufacturers'));
        
        }
        else{
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }
    }
    
    function upLoadToFlickr()
    {
        require_once(APP . 'Vendor' . DS.'phpFlickr.php');
        
     
        
        
    $apiKey = "6c7a1f9d92974509f3f053d8cfe0759d";
    $apiSecret = "11e1bafece47370d";
    $permissions  = "write";
   // $token        = "72157626228984291-4635fa88a6fed8f5";
    $token        = "72157635249812197-6e6dc8683a967222";
     //////////////////////////////////////////////////////////////////////////////////////
    if( $this->request->is('ajax') ) 
    {

        if(empty($_POST['name_pic']) || !isset($_FILES["file_pic"]))
        {
            $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Vui lòng nhập tên hoặc hình ảnh </h4></div>'));
            // $this->set('result','<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Vui lòng nhập tên hoặc hình ảnh </h4></div>');
        }
        
        else
        {
                if ($_FILES["file_pic"]["error"] > 0)
                {
                    $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lỗi, xin vui lòng upload lại hình </h4></div>'));
                    // $this->set('result','<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lỗi, xin vui lòng upload lại hình </h4></div>');
                }
                else
                {
                    if($_FILES["file_pic"]["type"] != "image/jpg" && $_FILES["file_pic"]["type"] != "image/jpeg" && $_FILES["file_pic"]["type"] != "image/png" && $_FILES["file_pic"]["type"] != "image/gif")
                    {
                        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lỗi,sai định dạng hình (chỉ chấp nhận .jpg,.jpeg,.png,.gif) </h4></div>'));
                        // $this->set('result','<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lỗi,sai định dạng hình (chỉ chấp nhận .jpg,.jpeg,.png,.gif) </h4></div>');
                    }
                    else
                    {
                            $dir= dirname($_FILES["file_pic"]["tmp_name"]);
                            $newpath=$dir."/".$_FILES["file_pic"]["name"];
                            rename($_FILES["file_pic"]["tmp_name"],$newpath);
                         /* Call uploadPhoto on success to upload photo to flickr */
                        $f = new phpFlickr($apiKey, $apiSecret, true);
                        $f->setToken($token);
                        $status =  $f->async_upload($newpath,$_POST["name_pic"]);
                        if(!$status) 
                        {
                            $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Không Thể Upload Được Hình </h4></div>'));
                             // $this->set('result','<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Không Thể Upload Được Hình </h4></div>');
                            
                        }
                    }
                }
            }
        }
         $this->autoRender = false;
         //return;   
        
/////////////////////////////////////////////////////////////////////////////////////
        
    
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    function edit($id = null) {
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            	$this->_positionSS();
        	$this->Product->id = $id;
        	if (!$this->Product->exists($id)) {
            		throw new NotFoundException(__('Invalid product'));
       		 }
        
       		 $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        	$data = $this->Product->find('first', $options);
        
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Product->save($this->request->data)) {
            
            	$this->loadModel('Detailcat');
                $this->Detailcat->edit($data['Product']['idCategoryProduct'], $data['Product']['idManufacturer'],false);
                $this->Detailcat->add($this->request->data['Product']['idCategoryProduct'], $this->request->data['Product']['idManufacturer']);
                
                $this->Session->setFlash(__('Cập nhật dữ liệu thành công'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Không thể cập nhật thông tin, vui lòng thử lại.'), 'flash/error');
            }
        } else {
            $this->request->data = $data;
        }
        $this->loadModel('Categoryproduct');
        $this->loadModel('Supplier');
        $this->loadModel('Unit');
        $this->loadModel('Exchangerate');
        $this->loadModel('Manufacturer');
        $categoryproducts = $this->Categoryproduct->find('all', array('conditions' => array('Categoryproduct.enable ' => 1)));
        $suppliers = $this->Supplier->find('list',array('fields' => array('nameSupplier')));
        $units = $this->Unit->find('list', array('fields' => array('nameUnit')));
        $exchangerates = $this->Exchangerate->find('list', array('fields' => array('nameExchangeRate')));
        $manufacturers = $this->Manufacturer->find('list', array('fields' => array('nameManufacturer')));
        $this->set(compact('categoryproducts', 'suppliers', 'units', 'exchangerates', 'manufacturers'));
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
    function delete($id = null) {
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
            $this->_positionSS();
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $data =  $this->request->data = $this->Product->find('first', $options);
        
        if ($this->Product->delete()) {
            $this->loadModel('Detailcat');
            $this->Detailcat->edit($data['Product']['idCategoryProduct'], $data['Product']['idManufacturer'],false);
            $this->Session->setFlash(__('Đã xóa sản phẩm'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Không xóa được sản phẩm'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }
     else{
            $this->redirect(array('controller'=>'users','action'=>'login'));
        }
}
	function _upLoadToFlickr($path, $title){
		require_once(APP . 'Vendor' . DS.'phpFlickr.php');
    $apiKey = "6c7a1f9d92974509f3f053d8cfe0759d";
    $apiSecret = "11e1bafece47370d";
    $permissions  = "write";
   // $token        = "72157626228984291-4635fa88a6fed8f5";
    $token        = "72157635249812197-6e6dc8683a967222";

    $f = new phpFlickr($apiKey, $apiSecret, true);
    $f->setToken($token);
    return $f->async_upload($path, $title);
	}
function _positionSS(){
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