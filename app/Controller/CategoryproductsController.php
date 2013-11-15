<?php
/**
* 
*/
class CategoryproductsController extends AppController
{
  var $name ='Categoryproducts';
  public $theme = 'Cakestrap';
  function add()
  {
    if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
  		if (!empty($this->request->data))
             {
                 if ($this->CategoryProduct->save($this->request->data))
                 {

                 	$this->Session->setFlash(__('Lưu thành công',false));
                 }
                 else
                 {
                 		$this->flash('Lưu thất bại');
                 }
             }
    }
    else{
      $this->redirect(array('controller'=>'users','action'=>'login'));
    }
    $this->loadModel('Manufacturer');
		$data = $this->Manufacturer->find('list',array('fields' =>array('Manufacturer.nameManufacturer'))); 
		$this->set('data',$data);
	}
}
