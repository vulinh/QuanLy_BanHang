<?php
/**
* 
*/
class TypestocksController extends AppController
{
	var $name ='Typestocks';
 	public $theme = 'Cakestrap';

 	function index(){
 		$this->set('dataTypestock',$this->Typestock->find('all'));
 	}

 	function add()
  	{
	    if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	  		if (!empty($this->request->data))
	             {
	                 if ($this->Typestock->save($this->request->data))
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
		}
	function edit($id = null) 
	{
	        // $this->layout = 'admin_layout';
	        if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	        $this->Typestock->id = $id;
	      
	        if ($this->request->is('post') || $this->request->is('put')) {
	            if ($this->Typestock->save($this->request->data)) {
	                $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thành Công</h4></div>'));
	                $this->redirect(array('action' => 'index'));
	            } else {
	                $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Lưu Thất Bại</h4></div>'));
	            }
	        } else {
	            $this->request->data = $this->Typestock->read(null, $id);
	        }
	      }
	      else{
	        $this->redirect(array('controller'=>'users','action'=>'login'));
	      }
	    }
	    function delete($id=null)	
	    {
	      if ($this->Session->check('userSS') && $this->Session->check('passSS')) {
	      $this->Typestock->id = $id;
	      if($id!=null)
	      {

	        $this->Typestock->delete($id);
	        $this->Session->setFlash(__('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thành Công</h4></div>'));
	        $this->redirect(array('controller'=>'typestocks','action'=>'index'));
	      }

	      else{
	        $this->Session->setFlash(__('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><h4>Xóa Thất Bại</h4></div>'));
	        $this->redirect(array('controller'=>'typestocks','action'=>'add'));
	        }
	      }else{
	        $this->redirect(array('controller'=>'users','action'=>'login'));
	      }
	    }
}
?>