<?php
/**
* 
*/
class ProductsController extends AppController
{
	var $name ='Products';
  public $theme = 'Cakestrap';
	function admin(){
    if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
		  $data = $this->Product->find('all');
		  $this->set('data',$data);
    }
    else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }
	}
	function add()
  {
    if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
  		if (!empty($this->request->data))
             {
                // $name=$data[Product][id_categories];
                //   $data[Product][id_categories]=$this->_getIDByName($name);
                 if ($this->Product->save($this->request->data))
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
      $this->redirect(array('controller'=>'admins','action'=>'login'));
    }
    $this->loadModel('CategoryProduct');
		$data = $this->CategoryProduct->find('list',array('fields' =>array('CategoryProduct.nameCategoryProduct'))); 
		$this->set('data',$data);
	}
	 function edit($id = null) 
   {
        // $this->layout = 'admin_layout';
        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
        $this->Product->id = $id;
      
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
            }
        } else {
            $this->request->data = $this->Product->read(null, $id);
        }
        // $datd = $this->Product->find('list');
        // $this->set('data', $datd);
      }
      else{
        $this->redirect(array('controller'=>'users','action'=>'login'));
      }
  //   $this->loadModel('Category');
		// $data = $this->Category->find('list',array('fields' =>array('Category.id'))); 
		// $this->set('data',$data);
    }
    function delete($id=null)	
    {
      if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
      $this->Product->id = $id;
      if($id!=null)
      {

        $this->Product->delete($id);
        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thành Công</h4></div>'));
        $this->redirect(array('controller'=>'products','action'=>'admin'));
      }

      else{
        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thất Bại</h4></div>'));
        $this->redirect(array('controller'=>'products','action'=>'admin'));
        }
      }else{
        $this->redirect(array('controller'=>'users','action'=>'login'));
      }
    }

    function index(){
      // $this->layout = 'client';

      $products = $this->Product->find('all');
      $this->set('list',$products);
    }
	
	
}
?>