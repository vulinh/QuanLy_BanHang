<?php
/**
* 
*/
class StocksController extends AppController
{
	var $name ='Stocks';
 	public $theme = 'Cakestrap';

 	function index(){
 		$this->set('dataStock',$this->Stock->find('all'));
 	}

 	function add()
  	{
	    if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	  		if (!empty($this->request->data))
	             {
	                 if ($this->Stock->save($this->request->data))
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

$this->loadModel('User');
		$dataUser = $this->User->find('list',array('fields' =>array('User.name'))); 
		$this->set('dataUser',$dataUser);

$this->loadModel('Typestock');
		$dataTypestock = $this->Typestock->find('list',array('fields' =>array('Typestock.nameTypeStock'))); 
		$this->set('dataTypestock',$dataTypestock);

		}
	function edit($id = null) 
	{
	        // $this->layout = 'admin_layout';
	        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	        $this->Stock->id = $id;
	      
	        if ($this->request->is('post') || $this->request->is('put')) {
	            if ($this->Stock->save($this->request->data)) {
	                $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
	            }
	        } else {
	            $this->request->data = $this->Stock->read(null, $id);
	        }
	      }
	      else{
	        $this->redirect(array('controller'=>'users','action'=>'login'));
	      }
	    }
	    function delete($id=null)	
	    {
	      if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	      $this->Stock->id = $id;
	      if($id!=null)
	      {

	        $this->Stock->delete($id);
	        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thành Công</h4></div>'));
	        $this->redirect(array('controller'=>'typestocks','action'=>'index'));
	      }

	      else{
	        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thất Bại</h4></div>'));
	        $this->redirect(array('controller'=>'stock','action'=>'index'));
	        }
	      }else{
	        $this->redirect(array('controller'=>'users','action'=>'login'));
	      }
	    }
}
?>